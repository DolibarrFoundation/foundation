<?php
/* Copyright (C) 2024 Laurent Destailleur  <eldy@users.sourceforge.net>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

/**
 * \file    marketplace/admin/setuppayment.php
 * \ingroup marketplace
 * \brief   Marketplace setup page for payment.
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
if (!$res && file_exists("../../main.inc.php")) {
	$res = @include "../../main.inc.php";
}
if (!$res && file_exists("../../../main.inc.php")) {
	$res = @include "../../../main.inc.php";
}
if (!$res) {
	die("Include of main fails");
}

global $langs, $user;

// Libraries
require_once DOL_DOCUMENT_ROOT."/core/lib/admin.lib.php";
require_once '../lib/marketplace.lib.php';
require_once DOL_DOCUMENT_ROOT.'/website/class/website.class.php';
//require_once "../class/myclass.class.php";

// Translations
$langs->loadLangs(array("admin", "marketplace@marketplace"));

// Initialize technical object to manage hooks of page. Note that conf->hooks_modules contains array of hook context
$hookmanager->initHooks(array('marketplacesetup', 'globalsetup'));

// Access control
if (!$user->admin) {
	accessforbidden();
}

// Parameters
$action = GETPOST('action', 'aZ09');
$backtopage = GETPOST('backtopage', 'alpha');
$modulepart = GETPOST('modulepart', 'aZ09');	// Used by actions_setmoduleoptions.inc.php

$value = GETPOST('value', 'alpha');
$label = GETPOST('label', 'alpha');
$scandir = GETPOST('scan_dir', 'alpha');
$type = 'myobject';


$error = 0;
$setupnotempty = 0;

// Set this to 1 to use the factory to manage constants. Warning, the generated module will be compatible with version v15+ only
$useFormSetup = 1;

if (!class_exists('FormSetup')) {
	require_once DOL_DOCUMENT_ROOT.'/core/class/html.formsetup.class.php';
}
$formSetup = new FormSetup($db);


// Enter here all parameters in your setup page

/*
// Setup conf for selection of an URL
$item = $formSetup->newItem('MARKETPLACE_MYPARAM1');
$item->fieldOverride = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'];
$item->cssClass = 'minwidth500';

// Setup conf for selection of a simple string input
$item = $formSetup->newItem('MARKETPLACE_MYPARAM2');
$item->defaultFieldValue = 'default value';

// Setup conf for selection of a simple textarea input but we replace the text of field title
$item = $formSetup->newItem('MARKETPLACE_MYPARAM3');
$item->nameText = $item->getNameText().' more html text ';

// Setup conf for a selection of a thirdparty
$item = $formSetup->newItem('MARKETPLACE_MYPARAM4');
$item->setAsThirdpartyType();

// Setup conf for a selection of a boolean
$formSetup->newItem('MARKETPLACE_MYPARAM5')->setAsYesNo();

// Setup conf for a selection of an email template of type thirdparty
$formSetup->newItem('MARKETPLACE_MYPARAM6')->setAsEmailTemplate('thirdparty');

// Setup conf for a selection of a secured key
//$formSetup->newItem('MARKETPLACE_MYPARAM7')->setAsSecureKey();

// Setup conf for a selection of a product
$formSetup->newItem('MARKETPLACE_MYPARAM8')->setAsProduct();

// Add a title for a new section
$formSetup->newItem('NewSection')->setAsTitle();

$TField = array(
	'test01' => $langs->trans('test01'),
	'test02' => $langs->trans('test02'),
	'test03' => $langs->trans('test03'),
	'test04' => $langs->trans('test04'),
	'test05' => $langs->trans('test05'),
	'test06' => $langs->trans('test06'),
);

// Setup conf for a simple combo list
$formSetup->newItem('MARKETPLACE_MYPARAM9')->setAsSelect($TField);

// Setup conf for a multiselect combo list
$item = $formSetup->newItem('MARKETPLACE_MYPARAM10');
$item->setAsMultiSelect($TField);
$item->helpText = $langs->transnoentities('MARKETPLACE_MYPARAM10');
*/



/*
// Setup conf MARKETPLACE_MYPARAM10
$item = $formSetup->newItem('MARKETPLACE_MYPARAM10');
$item->setAsColor();
$item->defaultFieldValue = '#FF0000';
$item->nameText = $item->getNameText().' more html text ';
$item->fieldInputOverride = '';
$item->helpText = $langs->transnoentities('AnHelpMessage');
//$item->fieldValue = '';
//$item->fieldAttr = array() ; // fields attribute only for compatible fields like input text
//$item->fieldOverride = false; // set this var to override field output will override $fieldInputOverride and $fieldOutputOverride too
//$item->fieldInputOverride = false; // set this var to override field input
//$item->fieldOutputOverride = false; // set this var to override field output
*/

$setupnotempty += count($formSetup->items);


$dirmodels = array_merge(array('/'), (array) $conf->modules_parts['models']);


/*
 * Actions
 */

// For retrocompatibility Dolibarr < 15.0
if (versioncompare(explode('.', DOL_VERSION), array(15)) < 0 && $action == 'update' && !empty($user->admin)) {
	$formSetup->saveConfFromPost();
}

$reg = array();
if (preg_match('/setMARKETPLACE_PAYMENT_IN_FRAME/i', $action, $reg)) {
	if (dolibarr_set_const($db, 'MARKETPLACE_PAYMENT_IN_FRAME', 1, 'chaine', 0, '', $conf->entity) > 0) {
		header("Location: ".$_SERVER["PHP_SELF"]);
		exit;
	} else {
		dol_print_error($db);
	}
} elseif (preg_match('/delMARKETPLACE_PAYMENT_IN_FRAME/i', $action, $reg)) {
	if (dolibarr_del_const($db, 'MARKETPLACE_PAYMENT_IN_FRAME', $conf->entity) > 0) {
		header("Location: ".$_SERVER["PHP_SELF"]);
		exit;
	} else {
		dol_print_error($db);
	}
}

include DOL_DOCUMENT_ROOT.'/core/actions_setmoduleoptions.inc.php';



/*
 * View
 */

$form = new Form($db);

$help_url = '';
$page_name = "MarketplaceSetup";

llxHeader('', $langs->trans($page_name), $help_url, '', 0, 0, '', '', '', 'mod-marketplace page-admin');

// Subheader
$linkback = '<a href="'.($backtopage ? $backtopage : DOL_URL_ROOT.'/admin/modules.php?restore_lastsearch_values=1').'">'.$langs->trans("BackToModuleList").'</a>';

print load_fiche_titre($langs->trans($page_name), $linkback, 'title_setup');

// Configuration header
$head = marketplaceAdminPrepareHead();
print dol_get_fiche_head($head, 'setuppayment', $langs->trans($page_name), -1, "fa-store");

// Setup page goes here
//echo '<span class="opacitymedium">'.$langs->trans("MarketplaceSetupPage").'</span><br><br>';


global $dolibarr_main_url_root;
$param = '';

// Define $urlwithroot
$urlwithouturlroot = preg_replace('/'.preg_quote(DOL_URL_ROOT, '/').'$/i', '', trim($dolibarr_main_url_root));
$urlwithroot = $urlwithouturlroot.DOL_URL_ROOT; // This is to use external domain name found into config file
//$urlwithroot=DOL_MAIN_URL_ROOT;					// This is to use same domain name than current

$enabledisablehtml = $langs->trans("UseFrameDesc").' ';
if (!getDolGlobalString('MARKETPLACE_PAYMENT_IN_FRAME')) {
	// Button off, click to enable
	$enabledisablehtml .= '<a class="reposition valignmiddle" href="'.$_SERVER["PHP_SELF"].'?action=setMARKETPLACE_PAYMENT_IN_FRAME&token='.newToken().$param.'">';
	$enabledisablehtml .= img_picto($langs->trans("Disabled"), 'switch_off');
	$enabledisablehtml .= '</a>';
} else {
	// Button on, click to disable
	$enabledisablehtml .= '<a class="reposition valignmiddle" href="'.$_SERVER["PHP_SELF"].'?action=delMARKETPLACE_PAYMENT_IN_FRAME&token='.newToken().$param.'">';
	$enabledisablehtml .= img_picto($langs->trans("Activated"), 'switch_on');
	$enabledisablehtml .= '</a>';
}
print $enabledisablehtml;
print '<input type="hidden" id="MEMBER_ENABLE_PUBLIC" name="MEMBER_ENABLE_PUBLIC" value="'.(!getDolGlobalString('MARKETPLACE_PAYMENT_IN_FRAME') ? 0 : 1).'">';

print '<br><br>';
print "<br>\n";

if (!getDolGlobalString('MARKETPLACE_PAYMENT_IN_FRAME')) {
	print "If you use the payment outside of a frame, no particular setup is required for this module.\n";
	print "<br>\n";
	print "This mode is not yet supported. Use the frame mode !!!!!!!!<br>\n";
}

if (getDolGlobalString('MARKETPLACE_PAYMENT_IN_FRAME')) {
	print "If you use the payment inside a frame, you must modify the virtual host of you market place web server to include a proxy
	of some URL to the URL of your Dolibarr backend server.<br>\n";
	print "For example:<br>\n";
	print '<textarea class="quatrevingtpercent" rows=20>';
	print "# If you need include the payment page into a frame of the website,\n";
	print "# you need to make a proxy redirection of URLs required for the payment to your backoffice pages\n";
	print "#SSLProxyEngine On\n";
	print "#SSLProxyVerify none\n";
	print "#SSLProxyCheckPeerCN off\n";
	print "#SSLProxyCheckPeerName off\n";
	print "#ProxyPreserveHost Off\n";
	print '#ProxyPass "/public/payment/" "'.$urlwithroot.'/public/payment/'."\n";
	print '#ProxyPassReverse "/public/payment/" "'.$urlwithroot.'/public/payment/'."\n";
	print '#ProxyPass "/includes/" "'.$urlwithroot.'/includes/'."\n";
	print '#ProxyPassReverse "/includes/" "'.$urlwithroot.'/includes/'."\n";
	print '#ProxyPass "/theme/" "'.$urlwithroot.'/theme/'."\n";
	print '#ProxyPassReverse "/theme/" "'.$urlwithroot.'/theme/'."\n";
	print '#ProxyPass "/core/js/" "'.$urlwithroot.'/core/js/'."\n";
	print '#ProxyPassReverse "/core/js/" "'.$urlwithroot.'/core/js/'."\n";
	print "</textarea><br>\n";
}

print "<br>\n";

// Page end
print dol_get_fiche_end();

llxFooter();
$db->close();
