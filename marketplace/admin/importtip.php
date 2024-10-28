<?php
/* Copyright (C) 2004-2017 Laurent Destailleur  <eldy@users.sourceforge.net>
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
 * \file    marketplace/admin/importtip.php
 * \ingroup marketplace
 * \brief   Page with tips to import data from another ecommerce.
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

// Libraries
require_once DOL_DOCUMENT_ROOT.'/core/lib/admin.lib.php';
require_once DOL_DOCUMENT_ROOT.'/core/lib/functions2.lib.php';
include_once DOL_DOCUMENT_ROOT . '/categories/class/categorie.class.php';
require_once '../lib/marketplace.lib.php';

// Translations
$langs->loadLangs(array("errors", "admin", "marketplace@marketplace"));

// Access control
if (!$user->admin) {
	accessforbidden();
}

// Parameters
$action = GETPOST('action', 'aZ09');
$backtopage = GETPOST('backtopage', 'alpha');


/*
 * Actions
 */
if ($action == 'generaterewritefile') {

	$root_cat_object = new Categorie($db);
	$result = $root_cat_object->fetch(getDolGlobalInt("MARKETPLACE_ROOT_CATEGORY_ID"));

	$products_list = $root_cat_object->getObjectsInCateg(Categorie::TYPE_PRODUCT, 0, 0, 0,'datec','ASC');
	$nb_products = count($products_list);
	if ($nb_products == 0) {
		setEventMessages($langs->trans("rewriteFileErrorNoProducts"), null, 'errors');
	} else {
		$redirects = [];

		foreach ($products_list as $product) {
			// If the product is not imported, ignore it
			if (!$product->ref_ext || $product->ref_ext === 'Marketplace') continue;

			// Associate the old ID with the new ID
			$redirects[$product->ref_ext] = $product->id;
		}

		// Create a temporary file with the rewrite rules for the httpd.conf
		$tempDir = sys_get_temp_dir();
		$tempFile = tempnam($tempDir, 'httpd_rewrites_');

		if ($tempFile && $file = fopen($tempFile, 'w')) {
			// Add the rewrite rules for each redirection
			foreach ($redirects as $oldId => $newId) {
				// Generate the RewriteCond with the old ID in the URL
				fwrite($file, "RewriteCond %{REQUEST_URI} ^/([a-z]{2})/([a-z\\-]+)/$oldId-([a-z0-9\\-]+)\\.html$ [NC]\n");

				// The new URL redirects to product.php with the new ID
				fwrite($file, "RewriteRule ^ /product.php?id=$newId [L,R=301]\n");
			}

			// Close the file
			fclose($file);

			// Send the file for download
			header('Content-Type: text/plain');
			header('Content-Disposition: attachment; filename="httpd_rewrites.txt"');
			header('Content-Length: ' . filesize($tempFile));
			readfile($tempFile);

			// Delete the temporary file
			unlink($tempFile);
		} else {
			setEventMessages($langs->trans("rewriteFileErrorUnableToCreateFile"), null, 'errors');
		}
	}
}


/*
 * View
 */

$form = new Form($db);

$help_url = '';
$page_name = "MarketplaceSetup";

llxHeader('', $langs->trans($page_name), $help_url, '', 0, 0, '', '', '', 'mod-marketplace page-admin_about');

// Subheader
$linkback = '<a href="'.($backtopage ? $backtopage : DOL_URL_ROOT.'/admin/modules.php?restore_lastsearch_values=1').'">'.$langs->trans("BackToModuleList").'</a>';

print load_fiche_titre($langs->trans($page_name), $linkback, 'title_setup');

// Configuration header
$head = marketplaceAdminPrepareHead();
print dol_get_fiche_head($head, 'importtip', $langs->trans($page_name), -1, 'fa-store');

print '<span class="opacitymedium">This is some tips on how to import existing data from a Prestashop 1.6 store...</span>';

print '<br>';
print '<br>';

$command = 'custom/marketplace/scripts/import-cats.php  db_host  db_name  db_user  db_password  db_port  clean_all_before_import(0|1)';
print 'To import (create or update) categories...<br>';
print '<div class="urllink">';
print '<input type="text" class="quatrevingtpercentminusx" value="'.$command.'">';
print '</div>';

print '<br>';

$command = 'custom/marketplace/scripts/import-third-parties.php  db_host  db_user  db_password  db_port  limit  ref_website  clean_all_before_import(0|1)';
print 'To import (create or update) thirdparties (customers or sellers)...<br>';
print '<div class="urllink">';
print '<input type="text" class="quatrevingtpercentminusx" value="'.$command.'">';
print '</div>';

print '<br>';

$command = 'custom/marketplace/scripts/import-products.php  db_host  db_user  db_password  db_port  limit  clean_all_before_import(0|1)';
print 'To import (create or update) products...<br>';
print '<div class="urllink">';
print '<input type="text" class="quatrevingtpercentminusx" value="'.$command.'">';
print '</div>';

print '<br>';

$command = 'custom/marketplace/scripts/import-attached-files.php  db_host  db_user  db_password  db_port  source_dir';
print 'To import products attached files...<br>';
print '<div class="urllink">';
print '<input type="text" class="quatrevingtpercentminusx" value="'.$command.'">';
print '</div>';

print '<br>';

$command = 'custom/marketplace/scripts/import-orders.php  db_host  db_user  db_password  db_port  limit  clean_all_before_import(0|1)';
print 'To import (create or update) orders...<br>';
print '<div class="urllink">';
print '<input type="text" class="quatrevingtpercentminusx" value="'.$command.'">';
print '</div>';

print '<hr>';

$command = '
RewriteEngine On

# Products rewrite rules
RewriteCond %{REQUEST_URI} ^/([a-z]{2})/([a-z\-]+)/([0-9]+)-([a-z0-9\-]+)\.html$ [NC]
RewriteRule ^ /product.php?extid=%3 [L,R=301]

RewriteCond %{REQUEST_URI} ^/([0-9]+)-([a-z0-9\-]+)\.html$ [NC]
RewriteRule ^ /product.php?extid=%1 [L,R=301]

# Categories rewrite rules
RewriteCond %{REQUEST_URI} ^/([a-z]{2})/([0-9]{1,2})-([a-z\-]+)$ [NC]
RewriteRule ^ /index.php?extcat=%2 [L,R=301]
';
print $langs->trans("marketplaceRewriteRules");;
print '<div class="urllink">';
print '<textarea class="flat" cols="80" rows="10">'.$command.'</textarea>';
print '</div>';
print $langs->trans("marketplaceGenerateRewriteFile");
print ' <a href="'.$_SERVER["PHP_SELF"].'?action=generaterewritefile">'.img_object($langs->trans("Download"), 'download').'</a>';
print '<hr>';


// Page end
print dol_get_fiche_end();
llxFooter();
$db->close();
