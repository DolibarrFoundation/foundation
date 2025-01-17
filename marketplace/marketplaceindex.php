<?php
/* Copyright (C) 2001-2005 Rodolphe Quiedeville <rodolphe@quiedeville.org>
 * Copyright (C) 2004-2015 Laurent Destailleur  <eldy@users.sourceforge.net>
 * Copyright (C) 2005-2012 Regis Houssin        <regis.houssin@inodbox.com>
 * Copyright (C) 2015      Jean-François Ferry	<jfefe@aternatik.fr>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

/**
 *	\file       marketplace/marketplaceindex.php
 *	\ingroup    marketplace
 *	\brief      Home page of marketplace top menu
 */

// Load Dolibarr environment
$res = 0;
// Try main.inc.php into web root known defined into CONTEXT_DOCUMENT_ROOT (not always defined)
if (!$res && !empty($_SERVER["CONTEXT_DOCUMENT_ROOT"])) {
	$res = @include $_SERVER["CONTEXT_DOCUMENT_ROOT"]."/main.inc.php";
}
// Try main.inc.php into web root detected using web root calculated from SCRIPT_FILENAME
$tmp = empty($_SERVER['SCRIPT_FILENAME']) ? '' : $_SERVER['SCRIPT_FILENAME']; $tmp2 = realpath(__FILE__); $i = strlen($tmp) - 1; $j = strlen($tmp2) - 1;
while ($i > 0 && $j > 0 && isset($tmp[$i]) && isset($tmp2[$j]) && $tmp[$i] == $tmp2[$j]) {
	$i--;
	$j--;
}
if (!$res && $i > 0 && file_exists(substr($tmp, 0, ($i + 1))."/main.inc.php")) {
	$res = @include substr($tmp, 0, ($i + 1))."/main.inc.php";
}
if (!$res && $i > 0 && file_exists(dirname(substr($tmp, 0, ($i + 1)))."/main.inc.php")) {
	$res = @include dirname(substr($tmp, 0, ($i + 1)))."/main.inc.php";
}
// Try main.inc.php using relative path
if (!$res && file_exists("../main.inc.php")) {
	$res = @include "../main.inc.php";
}
if (!$res && file_exists("../../main.inc.php")) {
	$res = @include "../../main.inc.php";
}
if (!$res && file_exists("../../../main.inc.php")) {
	$res = @include "../../../main.inc.php";
}
if (!$res) {
	die("Include of main fails");
}

require_once DOL_DOCUMENT_ROOT.'/core/class/dolgraph.class.php';
require_once DOL_DOCUMENT_ROOT.'/core/class/html.formcompany.class.php';
require_once DOL_DOCUMENT_ROOT.'/core/class/html.formother.class.php';
require_once DOL_DOCUMENT_ROOT.'/categories/class/categorie.class.php';
require_once DOL_DOCUMENT_ROOT.'/compta/facture/class/facturestats.class.php';
if (isModEnabled('category')) {
	require_once DOL_DOCUMENT_ROOT.'/categories/class/categorie.class.php';
}
require_once DOL_DOCUMENT_ROOT.'/core/class/html.formfile.class.php';


$WIDTH = DolGraph::getDefaultGraphSizeForStats('width');
$HEIGHT = DolGraph::getDefaultGraphSizeForStats('height');

// Load translation files required by the page
$langs->loadLangs(array('bills', 'companies', 'other','marketplace@marketplace'));

$mode = GETPOST("mode") ? GETPOST("mode") : 'customer';
$mode = 'customer';

$hookmanager->initHooks(array('invoicestats', 'globalcard'));

if ($mode == 'customer' && !$user->hasRight('facture', 'lire')) {
	accessforbidden();
}
if ($mode == 'supplier' && !$user->hasRight('fournisseur', 'facture', 'lire')) {
	accessforbidden();
}

$object_status = GETPOST('object_status', 'intcomma');
$object_status = 2;

$typent_id = GETPOSTINT('typent_id');
$categ_id = GETPOSTINT('categ_id');

$userid = GETPOSTINT('userid');
$socid = GETPOSTINT('socid');

//$select_categ_categ_id = GETPOST('select_categ_categ_id', 'array');
$select_categ_categ_id = array(getDolGlobalInt("MARKETPLACE_PROSPECTCUSTOMER_ID"));
// Security check
if ($user->socid > 0) {
	$action = '';
	$socid = $user->socid;
}

$parameters = array();
$reshook = $hookmanager->executeHooks('doActions', $parameters, $object, $action); // Note that $action and $object may have been modified by some hooks
if ($reshook < 0) {
	setEventMessages($hookmanager->error, $hookmanager->errors, 'errors');
}

$nowyear = dol_print_date(dol_now('gmt'), "%Y", 'gmt');
$year = GETPOST('year') > 0 ? GETPOSTINT('year') : $nowyear;
$startyear = $year - (!getDolGlobalString('MAIN_STATS_GRAPHS_SHOW_N_YEARS') ? 2 : max(1, min(10, getDolGlobalString('MAIN_STATS_GRAPHS_SHOW_N_YEARS'))));
$endyear = $year;


/*
 * View
 */
if (isModEnabled('category')) {
	$langs->load('categories');
}


$form = new Form($db);
$formcompany = new FormCompany($db);
$formother = new FormOther($db);

llxHeader("", $langs->trans("MarketplaceArea"), '', '', 0, 0, '', '', '', 'mod-marketplace page-index');

print load_fiche_titre($langs->trans("MarketplaceArea"), '', 'fa-store');

$dir = $conf->facture->dir_temp;

if ($mode == 'supplier') {
	$dir = $conf->fournisseur->facture->dir_temp;
}

dol_mkdir($dir);

$stats = new FactureStats($db, $socid, $mode, ($userid > 0 ? $userid : 0), ($typent_id > 0 ? $typent_id : 0), ($categ_id > 0 ? $categ_id : 0));
if ($mode == 'customer') {
	if ($object_status != '' && $object_status >= 0) {
		$stats->where .= ' AND f.fk_statut IN ('.$db->sanitize($object_status).') AND f.module_source = "marketplace"';
	}
	if (is_array($select_categ_categ_id) && !empty($select_categ_categ_id)) {
		$stats->from .= ' LEFT JOIN '.MAIN_DB_PREFIX.'categorie_societe as cat ON (f.fk_soc = cat.fk_soc)';
		$stats->where .= ' AND cat.fk_categorie IN ('.$db->sanitize(implode(',', $select_categ_categ_id)).')';
	}
}
if ($mode == 'supplier') {
	if ($object_status != '' && $object_status >= 0) {
		$stats->where .= ' AND f.fk_statut IN ('.$db->sanitize($object_status).')';
	}
	if (is_array($select_categ_categ_id) && !empty($select_categ_categ_id)) {
		$stats->from .= ' LEFT JOIN '.MAIN_DB_PREFIX.'categorie_fournisseur as cat ON (f.fk_soc = cat.fk_soc)';
		$stats->where .= ' AND cat.fk_categorie IN ('.$db->sanitize(implode(',', $select_categ_categ_id)).')';
	}
}

// Build graphic number of object
// $data = array(array('Lib',val1,val2,val3),...)
$data = $stats->getNbByMonthWithPrevYear($endyear, $startyear);
//var_dump($data);

$filenamenb = $dir."/invoicesnbinyear-".$year.".png";
if ($mode == 'customer') {
	$fileurlnb = DOL_URL_ROOT.'/viewimage.php?modulepart=billstats&file=invoicesnbinyear-'.$year.'.png';
}
if ($mode == 'supplier') {
	$fileurlnb = DOL_URL_ROOT.'/viewimage.php?modulepart=billstatssupplier&file=invoicesnbinyear-'.$year.'.png';
}

$px1 = new DolGraph();
$mesg = $px1->isGraphKo();
if (!$mesg) {
	$px1->SetData($data);
	$i = $startyear;
	$legend = array();
	while ($i <= $endyear) {
		$legend[] = $i;
		$i++;
	}
	$px1->SetLegend($legend);
	$px1->SetMaxValue($px1->GetCeilMaxValue());
	$px1->SetWidth($WIDTH);
	$px1->SetHeight($HEIGHT);
	$px1->SetYLabel($langs->trans("NumberOfBills"));
	$px1->SetShading(3);
	$px1->SetHorizTickIncrement(1);
	$px1->mode = 'depth';
	$px1->SetTitle($langs->trans("NumberOfBillsByMonth"));

	$px1->draw($filenamenb, $fileurlnb);
}

// Build graphic amount of object
$data = $stats->getAmountByMonthWithPrevYear($endyear, $startyear);
//var_dump($data);
// $data = array(array('Lib',val1,val2,val3),...)

$filenameamount = $dir."/invoicesamountinyear-".$year.".png";
if ($mode == 'customer') {
	$fileurlamount = DOL_URL_ROOT.'/viewimage.php?modulepart=billstats&amp;file=invoicesamountinyear-'.$year.'.png';
}
if ($mode == 'supplier') {
	$fileurlamount = DOL_URL_ROOT.'/viewimage.php?modulepart=billstatssupplier&amp;file=invoicesamountinyear-'.$year.'.png';
}

$px2 = new DolGraph();
$mesg = $px2->isGraphKo();
if (!$mesg) {
	$px2->SetData($data);
	$i = $startyear;
	$legend = array();
	while ($i <= $endyear) {
		$legend[] = $i;
		$i++;
	}
	$px2->SetLegend($legend);
	$px2->SetMaxValue($px2->GetCeilMaxValue());
	$px2->SetMinValue(min(0, $px2->GetFloorMinValue()));
	$px2->SetWidth($WIDTH);
	$px2->SetHeight($HEIGHT);
	$px2->SetYLabel($langs->trans("AmountOfBills"));
	$px2->SetShading(3);
	$px2->SetHorizTickIncrement(1);
	$px2->mode = 'depth';
	$px2->SetTitle($langs->trans("AmountOfBillsByMonthHT"));

	$px2->draw($filenameamount, $fileurlamount);
}


$data = $stats->getAverageByMonthWithPrevYear($endyear, $startyear);

if (!$user->hasRight('societe', 'client', 'voir')) {
	$filename_avg = $dir.'/ordersaverage-'.$user->id.'-'.$year.'.png';
	if ($mode == 'customer') {
		$fileurl_avg = DOL_URL_ROOT.'/viewimage.php?modulepart=orderstats&file=ordersaverage-'.$user->id.'-'.$year.'.png';
	}
	if ($mode == 'supplier') {
		$fileurl_avg = DOL_URL_ROOT.'/viewimage.php?modulepart=orderstatssupplier&file=ordersaverage-'.$user->id.'-'.$year.'.png';
	}
} else {
	$filename_avg = $dir.'/ordersaverage-'.$year.'.png';
	if ($mode == 'customer') {
		$fileurl_avg = DOL_URL_ROOT.'/viewimage.php?modulepart=orderstats&file=ordersaverage-'.$year.'.png';
	}
	if ($mode == 'supplier') {
		$fileurl_avg = DOL_URL_ROOT.'/viewimage.php?modulepart=orderstatssupplier&file=ordersaverage-'.$year.'.png';
	}
}

$px3 = new DolGraph();
$mesg = $px3->isGraphKo();
if (!$mesg) {
	$px3->SetData($data);
	$i = $startyear;
	$legend = array();
	while ($i <= $endyear) {
		$legend[] = $i;
		$i++;
	}
	$px3->SetLegend($legend);
	$px3->SetYLabel($langs->trans("AmountAverage"));
	$px3->SetMaxValue($px3->GetCeilMaxValue());
	$px3->SetMinValue($px3->GetFloorMinValue());
	$px3->SetWidth($WIDTH);
	$px3->SetHeight($HEIGHT);
	$px3->SetShading(3);
	$px3->SetHorizTickIncrement(1);
	$px3->mode = 'depth';
	$px3->SetTitle($langs->trans("AmountAverage"));

	$px3->draw($filename_avg, $fileurl_avg);
}


// Show array
$data = $stats->getAllByYear();
$arrayyears = array();
foreach ($data as $val) {
	$arrayyears[$val['year']] = $val['year'];
}
if (!count($arrayyears)) {
	$arrayyears[$nowyear] = $nowyear;
}


$h = 0;
$head = array();

$head[$h][0] = DOL_URL_ROOT.'/custom/marketplace/marketplaceindex.php';
$head[$h][1] = $langs->trans("invoicesStatsMarketplace");
$head[$h][2] = 'invoicesStatsMarketplace';
$h++;

$head[$h][0] = DOL_URL_ROOT.'/custom/marketplace/customerstats.php';
$head[$h][1] = $langs->trans("customersStatsMarketplace");
$head[$h][2] = 'customersStatsMarketplace';
$h++;

$head[$h][0] = DOL_URL_ROOT.'/custom/marketplace/productstats.php';
$head[$h][1] = $langs->trans("productsStatsMarketplace");
$head[$h][2] = 'productsStatsMarketplace';
$h++;

$head[$h][0] = DOL_URL_ROOT.'/custom/marketplace/salesstats.php';
$head[$h][1] = $langs->trans("ListOfSalesMarketplace");
$head[$h][2] = 'ListOfSalesMarketplace';
$h++;


if ($mode == 'customer') {
	$type = 'invoice_stats';
}
if ($mode == 'supplier') {
	$type = 'supplier_invoice_stats';
}

complete_head_from_modules($conf, $langs, null, $head, $h, $type);

print dol_get_fiche_head($head, 'invoicesStatsMarketplace', '', -1);

print '<div class="fichecenter"><div class="fichethirdleft">';


// Show filter box
print '<form name="stats" method="POST" action="'.$_SERVER["PHP_SELF"].'">';
print '<input type="hidden" name="token" value="'.newToken().'">';
print '<input type="hidden" name="mode" value="'.$mode.'">';


print '<div class="div-table-responsive-no-min">';
print '<table class="noborder centpercent">';
print '<tr class="liste_titre"><td class="liste_titre" colspan="2">'.$langs->trans("Filter").'</td></tr>';
// Company
print '<tr><td>'.$langs->trans("ThirdParty").'</td><td>';
$filter = '';
if ($mode == 'customer') {
	$filter = '(s.client:IN:1,2,3)';
}
if ($mode == 'supplier') {
	$filter = '(s.fournisseur:=:1)';
}
print img_picto('', 'company', 'class="pictofixedwidth"');
print $form->select_company($socid, 'socid', $filter, 1, 0, 0, array(), 0, 'widthcentpercentminusx maxwidth300');
print '</td></tr>';

// Year
print '<tr><td>'.$langs->trans("Year").'</td><td>';
if (!in_array($year, $arrayyears)) {
	$arrayyears[$year] = $year;
}
if (!in_array($nowyear, $arrayyears)) {
	$arrayyears[$nowyear] = $nowyear;
}
arsort($arrayyears);
print $form->selectarray('year', $arrayyears, $year, 0, 0, 0, '', 0, 0, 0, '', 'width75');
print '</td></tr>';
print '<tr><td class="center" colspan="2"><input type="submit" name="submit" class="button small" value="'.$langs->trans("Refresh").'"></td></tr>';
print '</table>';
print '</div>';

print '</form>';
print '<br><br>';

print '<div class="div-table-responsive-no-min">';
print '<table class="noborder centpercent">';
print '<tr class="liste_titre" height="24">';
print '<td class="center">'.$langs->trans("Year").'</td>';
print '<td class="right">'.$langs->trans("NumberOfBills").'</td>';
print '<td class="right">%</td>';
print '<td class="right">'.$langs->trans("AmountTotal").'</td>';
print '<td class="right">%</td>';
print '<td class="right">'.$langs->trans("AmountAverage").'</td>';
print '<td class="right">%</td>';
print '</tr>';

$oldyear = 0;
foreach ($data as $val) {
	$year = (int) $val['year'];
	while ($year && $oldyear > $year + 1) {	// If we have empty year
		$oldyear--;

		print '<tr class="oddeven" height="24">';
		print '<td align="center"><a href="'.$_SERVER["PHP_SELF"].'?year='.$oldyear.'&amp;mode='.$mode.($socid > 0 ? '&socid='.$socid : '').($userid > 0 ? '&userid='.$userid : '').'">'.$oldyear.'</a></td>';
		print '<td class="right">0</td>';
		print '<td class="right"></td>';
		print '<td class="right amount">0</td>';
		print '<td class="right"></td>';
		print '<td class="right amount">0</td>';
		print '<td class="right"></td>';
		print '</tr>';
	}

	if ($mode == 'supplier') {
		$greennb = (empty($val['nb_diff']) || $val['nb_diff'] <= 0);
		$greentotal = (empty($val['total_diff']) || $val['total_diff'] <= 0);
		$greenavg = (empty($val['avg_diff']) || $val['avg_diff'] <= 0);
	} else {
		$greennb = (empty($val['nb_diff']) || $val['nb_diff'] >= 0);
		$greentotal = (empty($val['total_diff']) || $val['total_diff'] >= 0);
		$greenavg = (empty($val['avg_diff']) || $val['avg_diff'] >= 0);
	}

	print '<tr class="oddeven" height="24">';
	print '<td align="center"><a href="'.$_SERVER["PHP_SELF"].'?year='.$year.'&amp;mode='.$mode.($socid > 0 ? '&socid='.$socid : '').($userid > 0 ? '&userid='.$userid : '').'">'.$year.'</a></td>';
	print '<td class="right">'.$val['nb'].'</td>';
	print '<td class="right opacitylow" style="'.($greennb ? 'color: green;' : 'color: red;').'">'.(!empty($val['nb_diff']) && $val['nb_diff'] < 0 ? '' : '+').round(!empty($val['nb_diff']) ? $val['nb_diff'] : 0).'%</td>';
	print '<td class="right"><span class="amount">'.price(price2num($val['total'], 'MT'), 1).'</span></td>';
	print '<td class="right opacitylow" style="'.($greentotal ? 'color: green;' : 'color: red;').'">'.(!empty($val['total_diff']) && $val['total_diff'] < 0 ? '' : '+').round(!empty($val['total_diff']) ? $val['total_diff'] : 0).'%</td>';
	print '<td class="right"><span class="amount">'.price(price2num($val['avg'], 'MT'), 1).'</span></td>';
	print '<td class="right opacitylow" style="'.($greenavg ? 'color: green;' : 'color: red;').'">'.(!empty($val['avg_diff']) && $val['avg_diff'] < 0 ? '' : '+').round(!empty($val['avg_diff']) ? $val['avg_diff'] : 0).'%</td>';
	print '</tr>';
	$oldyear = $year;
}

print '</table>';
print '</div>';

print '</div><div class="fichetwothirdright">';


// Show graphs
print '<div class="div-table-responsive-no-min">';
print '<table class="border centpercent"><tr class="pair nohover"><td align="center">';
if ($mesg) {
	print $mesg;
} else {
	print $px1->show();
	print "<br>\n";
	print $px2->show();
	print "<br>\n";
	print $px3->show();
}
print '</td></tr></table>';
print '</div>';

print '</div></div>';
print '<div class="clearboth"></div>';

print dol_get_fiche_end();

// End of page
llxFooter();
$db->close();
