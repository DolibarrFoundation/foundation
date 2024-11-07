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
 *	\file       marketplace/customerstats.php
 *	\ingroup    marketplace
 *	\brief      Customers stats page of marketplace top menu
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


require_once DOL_DOCUMENT_ROOT.'/core/class/html.formfile.class.php';

// Load translation files required by the page
$langs->loadLangs(array("marketplace@marketplace"));

$action = GETPOST('action', 'aZ09');

//$max = getDolGlobalInt('MAIN_SIZE_SHORTLIST_LIMIT', 5);
$max = 5;
$now = dol_now();

// Security check - Protection if external user
$socid = GETPOST('socid', 'int');
if (isset($user->socid) && $user->socid > 0) {
	$action = '';
	$socid = $user->socid;
}

$thirdparty_static = new Societe($db);


/*
 * Actions
 */

// None


/*
 * View
 */

$form = new Form($db);
$formfile = new FormFile($db);

llxHeader("", $langs->trans("MarketplaceArea"), '', '', 0, 0, '', '', '', 'mod-marketplace page-index');

print load_fiche_titre($langs->trans("MarketplaceArea"), '', 'fa-store');



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


print dol_get_fiche_head($head, 'customersStatsMarketplace', '', -1);



// Statistics area

$third = array(
	'customer' => 0,
	'prospect' => 0,
	'supplier' => 0,
	'other' =>0
);
$total = 0;

$sql = "SELECT s.rowid, s.client, s.fournisseur";
$sql .= " FROM ".MAIN_DB_PREFIX."societe as s";
$sql .= ", ".MAIN_DB_PREFIX."categorie_societe as cs";
if (!$user->hasRight('societe', 'client', 'voir')) {
$sql .= ", ".MAIN_DB_PREFIX."societe_commerciaux as sc";
}
$sql .= ' WHERE s.entity IN ('.getEntity('societe').') AND cs.fk_soc = s.rowid AND cs.fk_categorie = '.((int) getDolGlobalString('MARKETPLACE_PROSPECTCUSTOMER_ID'));
if (!$user->hasRight('societe', 'client', 'voir')) {
$sql .= " AND s.rowid = sc.fk_soc AND sc.fk_user = ".((int) $user->id);
}
if (!$user->hasRight('fournisseur', 'lire')) {
$sql .= " AND (s.fournisseur <> 1 OR s.client <> 0)"; // client=0, fournisseur=0 must be visible
}
// Add where from hooks
$parameters = array('socid' => $socid);
$reshook = $hookmanager->executeHooks('printFieldListWhere', $parameters, $thirdparty_static); // Note that $action and $object may have been modified by hook
if (empty($reshook)) {
if ($socid > 0) {
	$sql .= " AND s.rowid = ".((int) $socid);
}
}
$sql .= $hookmanager->resPrint;
//print $sql;
$result = $db->query($sql);
if ($result) {
while ($objp = $db->fetch_object($result)) {
	$found = 0;
	if (isModEnabled('societe') && $user->hasRight('societe', 'lire') && !getDolGlobalString('SOCIETE_DISABLE_PROSPECTS') && !getDolGlobalString('SOCIETE_DISABLE_PROSPECTS_STATS') && ($objp->client == 2 || $objp->client == 3)) {
		$found = 1;
		$third['prospect']++;
	}
	if (isModEnabled('societe') && $user->hasRight('societe', 'lire') && !getDolGlobalString('SOCIETE_DISABLE_CUSTOMERS') && !getDolGlobalString('SOCIETE_DISABLE_CUSTOMERS_STATS') && ($objp->client == 1 || $objp->client == 3)) {
		$found = 1;
		$third['customer']++;
	}
	if (((isModEnabled('fournisseur') && $user->hasRight('fournisseur', 'lire') && !getDolGlobalString('MAIN_USE_NEW_SUPPLIERMOD')) || (isModEnabled('supplier_order') && $user->hasRight('supplier_order', 'lire')) || (isModEnabled('supplier_invoice') && $user->hasRight('supplier_invoice', 'lire'))) && !getDolGlobalString('SOCIETE_DISABLE_SUPPLIERS_STATS') && $objp->fournisseur) {
		$found = 1;
		$third['supplier']++;
	}
	if (isModEnabled('societe') && $objp->client == 0 && $objp->fournisseur == 0) {
		$found = 1;
		$third['other']++;
	}
	if ($found) {
		$total++;
	}
}
} else {
dol_print_error($db);
}

$thirdpartygraph = '<div class="div-table-responsive-no-min">';
$thirdpartygraph .= '<table class="noborder nohover centpercent">'."\n";
$thirdpartygraph .= '<tr class="liste_titre"><th colspan="2">'.$langs->trans("Statistics").'</th></tr>';
if (!empty($conf->use_javascript_ajax) && ((round($third['prospect']) ? 1 : 0) + (round($third['customer']) ? 1 : 0) + (round($third['supplier']) ? 1 : 0) + (round($third['other']) ? 1 : 0) >= 2)) {
$thirdpartygraph .= '<tr><td class="center" colspan="2">';
$dataseries = array();
if (isModEnabled('societe') && $user->hasRight('societe', 'lire') && !getDolGlobalString('SOCIETE_DISABLE_PROSPECTS') && !getDolGlobalString('SOCIETE_DISABLE_PROSPECTS_STATS')) {
	$dataseries[] = array($langs->transnoentitiesnoconv("Prospects"), round($third['prospect']));
}
if (isModEnabled('societe') && $user->hasRight('societe', 'lire') && !getDolGlobalString('SOCIETE_DISABLE_CUSTOMERS') && !getDolGlobalString('SOCIETE_DISABLE_CUSTOMERS_STATS')) {
	$dataseries[] = array($langs->transnoentitiesnoconv("Customers"), round($third['customer']));
}
if (((isModEnabled('fournisseur') && $user->hasRight('fournisseur', 'lire') && !getDolGlobalString('MAIN_USE_NEW_SUPPLIERMOD')) || (isModEnabled('supplier_order') && $user->hasRight('supplier_order', 'lire')) || (isModEnabled('supplier_invoice') && $user->hasRight('supplier_invoice', 'lire'))) && !getDolGlobalString('SOCIETE_DISABLE_SUPPLIERS_STATS')) {
	$dataseries[] = array($langs->transnoentitiesnoconv("Suppliers"), round($third['supplier']));
}
if (isModEnabled('societe')) {
	$dataseries[] = array($langs->transnoentitiesnoconv("Others"), round($third['other']));
}
include_once DOL_DOCUMENT_ROOT.'/core/class/dolgraph.class.php';
$dolgraph = new DolGraph();
$dolgraph->SetData($dataseries);
$dolgraph->setShowLegend(2);
$dolgraph->setShowPercent(1);
$dolgraph->SetType(array('pie'));
$dolgraph->setHeight('200');
$dolgraph->draw('idgraphthirdparties');
$thirdpartygraph .= $dolgraph->show();
$thirdpartygraph .= '</td></tr>'."\n";
} else {
$statstring = '';
if (isModEnabled('societe') && $user->hasRight('societe', 'lire') && !getDolGlobalString('SOCIETE_DISABLE_PROSPECTS') && !getDolGlobalString('SOCIETE_DISABLE_PROSPECTS_STATS')) {
	$statstring .= "<tr>";
	$statstring .= '<td><a href="'.DOL_URL_ROOT.'/societe/list.php?type=p">'.$langs->trans("Prospects").'</a></td><td class="right">'.round($third['prospect']).'</td>';
	$statstring .= "</tr>";
}
if (isModEnabled('societe') && $user->hasRight('societe', 'lire') && !getDolGlobalString('SOCIETE_DISABLE_CUSTOMERS') && !getDolGlobalString('SOCIETE_DISABLE_CUSTOMERS_STATS')) {
	$statstring .= "<tr>";
	$statstring .= '<td><a href="'.DOL_URL_ROOT.'/societe/list.php?type=c">'.$langs->trans("Customers").'</a></td><td class="right">'.round($third['customer']).'</td>';
	$statstring .= "</tr>";
}
$statstring2 = '';
if (((isModEnabled('fournisseur') && $user->hasRight('fournisseur', 'lire') && !getDolGlobalString('MAIN_USE_NEW_SUPPLIERMOD')) || (isModEnabled('supplier_order') && $user->hasRight('supplier_order', 'lire')) || (isModEnabled('supplier_invoice') && $user->hasRight('supplier_invoice', 'lire'))) && !getDolGlobalString('SOCIETE_DISABLE_SUPPLIERS_STATS')) {
	$statstring2 .= "<tr>";
	$statstring2 .= '<td><a href="'.DOL_URL_ROOT.'/societe/list.php?type=f">'.$langs->trans("Suppliers").'</a></td><td class="right">'.round($third['supplier']).'</td>';
	$statstring2 .= "</tr>";
}
$thirdpartygraph .= $statstring;
$thirdpartygraph .= $statstring2;
}
$thirdpartygraph .= '<tr class="liste_total"><td>'.$langs->trans("UniqueThirdParties").'</td><td class="right">';
$thirdpartygraph .= $total;
$thirdpartygraph .= '</td></tr>';
$thirdpartygraph .= '</table>';
$thirdpartygraph .= '</div>';


/*
 * Latest third parties
 */

$sql = "SELECT s.rowid, s.nom as name, s.email, s.client, s.fournisseur";
$sql .= ", s.code_client";
$sql .= ", s.code_fournisseur";
if (getDolGlobalString('MAIN_COMPANY_PERENTITY_SHARED')) {
	$sql .= ", spe.accountancy_code_supplier as code_compta_fournisseur";
	$sql .= ", spe.accountancy_code_customer as code_compta";
} else {
	$sql .= ", s.code_compta_fournisseur";
	$sql .= ", s.code_compta";
}
$sql .= ", s.logo";
$sql .= ", s.entity";
$sql .= ", s.datec";
$sql .= ", s.canvas, s.tms as date_modification, s.status as status";
$sql .= " FROM ".MAIN_DB_PREFIX."societe as s";
$sql .= ", ".MAIN_DB_PREFIX."categorie_societe as cs";
if (getDolGlobalString('MAIN_COMPANY_PERENTITY_SHARED')) {
	$sql .= " LEFT JOIN " . MAIN_DB_PREFIX . "societe_perentity as spe ON spe.fk_soc = s.rowid AND spe.entity = " . ((int) $conf->entity);
}
// TODO Replace this
if (!$user->hasRight('societe', 'client', 'voir')) {
	$sql .= ", ".MAIN_DB_PREFIX."societe_commerciaux as sc";
}
$sql .= ' WHERE s.entity IN ('.getEntity('societe').') AND cs.fk_soc = s.rowid AND cs.fk_categorie = '.((int) getDolGlobalString('MARKETPLACE_PROSPECTCUSTOMER_ID'));
if (!$user->hasRight('societe', 'client', 'voir')) {
	$sql .= " AND s.rowid = sc.fk_soc AND sc.fk_user = ".((int) $user->id);
}
if (!$user->hasRight('fournisseur', 'lire')) {
	$sql .= " AND (s.fournisseur != 1 OR s.client != 0)";
}
// Add where from hooks
$parameters = array('socid' => $socid);
$reshook = $hookmanager->executeHooks('printFieldListWhere', $parameters, $thirdparty_static); // Note that $action and $object may have been modified by hook
if (empty($reshook)) {
	if ($socid > 0) {
		$sql .= " AND s.rowid = ".((int) $socid);
	}
}
$sql .= $hookmanager->resPrint;
$sql .= $db->order("s.datec", "DESC");
$sql .= $db->plimit($max, 0);

//print $sql;
$lastmodified="";
$result = $db->query($sql);
if ($result) {
	$num = $db->num_rows($result);

	$i = 0;

	if ($num > 0) {
		$transRecordedType = $langs->trans("LastThirdPartiesOnMarketplace", $max);

		$lastmodified = "\n<!-- last thirdparties modified -->\n";
		$lastmodified .= '<div class="div-table-responsive-no-min">';
		$lastmodified .= '<table class="noborder centpercent">';

		$lastmodified .= '<tr class="liste_titre"><th colspan="2">';
		//$lastmodified .= img_picto('', 'company', 'class="pictofixedwidth"');
		$lastmodified .= '<span class="valignmiddle">'.$transRecordedType.'</span>';
		$lastmodified .= '<a class="marginleftonlyshort" href="'.DOL_URL_ROOT.'/societe/list.php?sortfield=s.tms&sortorder=DESC&search_category_customer_list[]='.getDolGlobalString("MARKETPLACE_PROSPECTCUSTOMER_ID").'" title="'.$langs->trans("FullList").'">';
		$lastmodified .= '<span class="badge marginleftonlyshort">...</span>';
		$lastmodified .= '</a>';
		$lastmodified .= '</th>';
		$lastmodified .= '<th>&nbsp;</th>';
		$lastmodified .= '<th class="right">';
		$lastmodified .= '</th>';
		$lastmodified .= '</tr>'."\n";

		while ($i < $num) {
			$objp = $db->fetch_object($result);

			$thirdparty_static->id = $objp->rowid;
			$thirdparty_static->name = $objp->name;
			$thirdparty_static->client = $objp->client;
			$thirdparty_static->fournisseur = $objp->fournisseur;
			$thirdparty_static->logo = $objp->logo;
			$thirdparty_static->date_modification = $db->jdate($objp->date_modification);
			$thirdparty_static->status = $objp->status;
			$thirdparty_static->code_client = $objp->code_client;
			$thirdparty_static->code_fournisseur = $objp->code_fournisseur;
			$thirdparty_static->canvas = $objp->canvas;
			$thirdparty_static->email = $objp->email;
			$thirdparty_static->entity = $objp->entity;
			$thirdparty_static->code_compta_fournisseur = $objp->code_compta_fournisseur;
			$thirdparty_static->code_compta_client = $objp->code_compta;

			$lastmodified .= '<tr class="oddeven">';
			// Name
			$lastmodified .= '<td class="nowrap tdoverflowmax200">';
			$lastmodified .= $thirdparty_static->getNomUrl(1);
			$lastmodified .= "</td>\n";
			// Type
			$lastmodified .= '<td class="center">';
			$lastmodified .= $thirdparty_static->getTypeUrl();
			$lastmodified .= '</td>';
			// Last modified date
			$lastmodified .= '<td class="right tddate" title="'.dol_escape_htmltag($langs->trans("DateModification").' '.dol_print_date($thirdparty_static->date_modification, 'dayhour', 'tzuserrel')).'">';
			$lastmodified .= dol_print_date($thirdparty_static->date_modification, 'day', 'tzuserrel');
			$lastmodified .= "</td>";
			$lastmodified .= '<td class="right nowrap">';
			$lastmodified .= $thirdparty_static->getLibStatut(3);
			$lastmodified .= "</td>";
			$lastmodified .= "</tr>\n";
			$i++;
		}

		$db->free($result);

		$lastmodified .= "</table>\n";
		$lastmodified .= '</div>';
		$lastmodified .= "<!-- End last thirdparties modified -->\n";
	}
} else {
	dol_print_error($db);
}


/*
 * Latest preferred customers
 */

$sql = "SELECT s.rowid, s.nom as name, s.email, s.client, s.fournisseur";
$sql .= ", s.code_client";
$sql .= ", s.code_fournisseur";
if (getDolGlobalString('MAIN_COMPANY_PERENTITY_SHARED')) {
	$sql .= ", spe.accountancy_code_supplier as code_compta_fournisseur";
	$sql .= ", spe.accountancy_code_customer as code_compta";
} else {
	$sql .= ", s.code_compta_fournisseur";
	$sql .= ", s.code_compta";
}
$sql .= ", s.logo";
$sql .= ", s.datec";
$sql .= ", s.entity";
$sql .= ", s.canvas, s.tms as date_modification, s.status as status";
$sql .= " FROM ".MAIN_DB_PREFIX."societe as s";
$sql .= ", ".MAIN_DB_PREFIX."categorie_societe as cs";
if (getDolGlobalString('MAIN_COMPANY_PERENTITY_SHARED')) {
	$sql .= " LEFT JOIN " . MAIN_DB_PREFIX . "societe_perentity as spe ON spe.fk_soc = s.rowid AND spe.entity = " . ((int) $conf->entity);
}
// TODO Replace this
if (!$user->hasRight('societe', 'client', 'voir')) {
	$sql .= ", ".MAIN_DB_PREFIX."societe_commerciaux as sc";
}
$sql .= ' WHERE s.entity IN ('.getEntity('societe').') AND cs.fk_soc = s.rowid AND cs.fk_categorie = '.((int) getDolGlobalString('MARKETPLACE_PROSPECTCUSTOMER_PREFERRED_ID'));
if (!$user->hasRight('societe', 'client', 'voir')) {
	$sql .= " AND s.rowid = sc.fk_soc AND sc.fk_user = ".((int) $user->id);
}
if (!$user->hasRight('fournisseur', 'lire')) {
	$sql .= " AND (s.fournisseur != 1 OR s.client != 0)";
}
// Add where from hooks
$parameters = array('socid' => $socid);
$reshook = $hookmanager->executeHooks('printFieldListWhere', $parameters, $thirdparty_static); // Note that $action and $object may have been modified by hook
if (empty($reshook)) {
	if ($socid > 0) {
		$sql .= " AND s.rowid = ".((int) $socid);
	}
}
$sql .= $hookmanager->resPrint;
$sql .= $db->order("s.datec", "DESC");
$sql .= $db->plimit($max, 0);

//print $sql;
$lastmodifiedpreferred="";
$result = $db->query($sql);
if ($result) {
	$num = $db->num_rows($result);

	$i = 0;

	if ($num > 0) {
		$transRecordedType = $langs->trans("LastpreferredThirdPartiesOnMarketplace", $max);

		$lastmodifiedpreferred = "\n<!-- last thirdparties modified -->\n";
		$lastmodifiedpreferred .= '<div class="div-table-responsive-no-min">';
		$lastmodifiedpreferred .= '<table class="noborder centpercent">';

		$lastmodifiedpreferred .= '<tr class="liste_titre"><th colspan="2">';
		//$lastmodified .= img_picto('', 'company', 'class="pictofixedwidth"');
		$lastmodifiedpreferred .= '<span class="valignmiddle">'.$transRecordedType.'</span>';
		$lastmodifiedpreferred .= '<a class="marginleftonlyshort" href="'.DOL_URL_ROOT.'/societe/list.php?sortfield=s.tms&sortorder=DESC&search_category_customer_list[]='.getDolGlobalString("MARKETPLACE_PROSPECTCUSTOMER_PREFERRED_ID").'" title="'.$langs->trans("FullList").'">';
		$lastmodifiedpreferred .= '<span class="badge marginleftonlyshort">...</span>';
		$lastmodifiedpreferred .= '</a>';
		$lastmodifiedpreferred .= '</th>';
		$lastmodifiedpreferred .= '<th>&nbsp;</th>';
		$lastmodifiedpreferred .= '<th class="right">';
		$lastmodifiedpreferred .= '</th>';
		$lastmodifiedpreferred .= '</tr>'."\n";

		while ($i < $num) {
			$objp = $db->fetch_object($result);

			$thirdparty_static->id = $objp->rowid;
			$thirdparty_static->name = $objp->name;
			$thirdparty_static->client = $objp->client;
			$thirdparty_static->fournisseur = $objp->fournisseur;
			$thirdparty_static->logo = $objp->logo;
			$thirdparty_static->date_modification = $db->jdate($objp->date_modification);
			$thirdparty_static->status = $objp->status;
			$thirdparty_static->code_client = $objp->code_client;
			$thirdparty_static->code_fournisseur = $objp->code_fournisseur;
			$thirdparty_static->canvas = $objp->canvas;
			$thirdparty_static->email = $objp->email;
			$thirdparty_static->entity = $objp->entity;
			$thirdparty_static->code_compta_fournisseur = $objp->code_compta_fournisseur;
			$thirdparty_static->code_compta_client = $objp->code_compta;

			$lastmodifiedpreferred .= '<tr class="oddeven">';
			// Name
			$lastmodifiedpreferred .= '<td class="nowrap tdoverflowmax200">';
			$lastmodifiedpreferred .= $thirdparty_static->getNomUrl(1);
			$lastmodifiedpreferred .= "</td>\n";
			// Type
			$lastmodifiedpreferred .= '<td class="center">';
			$lastmodifiedpreferred .= $thirdparty_static->getTypeUrl();
			$lastmodifiedpreferred .= '</td>';
			// Last modified date
			$lastmodifiedpreferred .= '<td class="right tddate" title="'.dol_escape_htmltag($langs->trans("DateModification").' '.dol_print_date($thirdparty_static->date_modification, 'dayhour', 'tzuserrel')).'">';
			$lastmodifiedpreferred .= dol_print_date($thirdparty_static->date_modification, 'day', 'tzuserrel');
			$lastmodifiedpreferred .= "</td>";
			$lastmodifiedpreferred .= '<td class="right nowrap">';
			$lastmodifiedpreferred .= $thirdparty_static->getLibStatut(3);
			$lastmodifiedpreferred .= "</td>";
			$lastmodifiedpreferred .= "</tr>\n";
			$i++;
		}

		$db->free($result);

		$lastmodifiedpreferred .= "</table>\n";
		$lastmodifiedpreferred .= '</div>';
		$lastmodifiedpreferred .= "<!-- End last thirdparties modified -->\n";
	}
} else {
	dol_print_error($db);
}


// boxes
print '<div class="clearboth"></div>';
print '<div class="fichecenter fichecenterbis">';

$boxlist = '<div class="twocolumns">';

$boxlist .= '<div class="firstcolumn fichehalfleft boxhalfleft" id="boxhalfleft">';
$boxlist .= $thirdpartygraph;
$boxlist .= '<br>';
$boxlist .= $thirdpartycateggraph;
$boxlist .= '<br>';
$boxlist .= $resultboxes['boxlista'];
$boxlist .= '</div>'."\n";

$boxlist .= '<div class="secondcolumn fichehalfright boxhalfright" id="boxhalfright">';
$boxlist .= $lastmodified;
$boxlist .= '<br>';
$boxlist .= $lastmodifiedpreferred;
$boxlist .= '<br>';
$boxlist .= $resultboxes['boxlistb'];
$boxlist .= '</div>'."\n";

$boxlist .= '</div>';

print $boxlist;

print '</div>';

$parameters = array('user' => $user);
$reshook = $hookmanager->executeHooks('dashboardThirdparties', $parameters, $thirdparty_static); // Note that $action and $object may have been modified by hook

print dol_get_fiche_end();

// End of page
llxFooter();
$db->close();
