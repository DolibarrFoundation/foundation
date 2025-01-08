#!/usr/bin/env php
<?php
/* Copyright (C) 2007-2023 Laurent Destailleur  <eldy@users.sourceforge.net>
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
 *      \file       htdocs/modulebuilder/template/scripts/mymodule.php
 *		\ingroup    mymodule
 *      \brief      This file is a command line script for module MyModule. You can execute it with:
 *      			php mymodule/scripts/mymodule.php
 */

//if (! defined('NOREQUIREDB'))              define('NOREQUIREDB', '1');				// Do not create database handler $db
//if (! defined('NOREQUIREUSER'))            define('NOREQUIREUSER', '1');				// Do not load object $user
//if (! defined('NOREQUIRESOC'))             define('NOREQUIRESOC', '1');				// Do not load object $mysoc
//if (! defined('NOREQUIRETRAN'))            define('NOREQUIRETRAN', '1');				// Do not load object $langs
//if (! defined('NOSCANGETFORINJECTION'))    define('NOSCANGETFORINJECTION', '1');		// Do not check injection attack on GET parameters
//if (! defined('NOSCANPOSTFORINJECTION'))   define('NOSCANPOSTFORINJECTION', '1');		// Do not check injection attack on POST parameters
//if (! defined('NOTOKENRENEWAL'))           define('NOTOKENRENEWAL', '1');				// Do not roll the Anti CSRF token (used if MAIN_SECURITY_CSRF_WITH_TOKEN is on)
//if (! defined('NOSTYLECHECK'))             define('NOSTYLECHECK', '1');				// Do not check style html tag into posted data
//if (! defined('NOREQUIREMENU'))            define('NOREQUIREMENU', '1');				// If there is no need to load and show top and left menu
//if (! defined('NOREQUIREHTML'))            define('NOREQUIREHTML', '1');				// If we don't need to load the html.form.class.php
//if (! defined('NOREQUIREAJAX'))            define('NOREQUIREAJAX', '1');       	  	// Do not load ajax.lib.php library
//if (! defined("NOLOGIN"))                  define("NOLOGIN", '1');					// If this page is public (can be called outside logged session). This include the NOIPCHECK too.
//if (! defined('NOIPCHECK'))                define('NOIPCHECK', '1');					// Do not check IP defined into conf $dolibarr_main_restrict_ip
//if (! defined("MAIN_LANG_DEFAULT"))        define('MAIN_LANG_DEFAULT', 'auto');					// Force lang to a particular value
//if (! defined("MAIN_AUTHENTICATION_MODE")) define('MAIN_AUTHENTICATION_MODE', 'aloginmodule');	// Force authentication handler
//if (! defined('CSRFCHECK_WITH_TOKEN'))     define('CSRFCHECK_WITH_TOKEN', '1');		// Force use of CSRF protection with tokens even for GET
//if (! defined('NOBROWSERNOTIF'))     		 define('NOBROWSERNOTIF', '1');				// Disable browser notification
if (!defined('NOSESSION')) {
	define('NOSESSION', '1');
}	// On CLI mode, no need to use web sessions


$sapi_type = php_sapi_name();
$script_file = basename(__FILE__);
$path = __DIR__ . '/';

// Test if batch mode
if (substr($sapi_type, 0, 3) == 'cgi') {
	echo "Error: You are using PHP for CGI. To execute " . $script_file . " from command line, you must use PHP for CLI mode.\n";
	exit(-1);
}

// Global variables
$version = '1.0';
$error = 0;


// -------------------- START OF YOUR CODE HERE --------------------
@set_time_limit(0); // No timeout for this script
define('EVEN_IF_ONLY_LOGIN_ALLOWED', 1); // Set this define to 0 if you want to lock your script when dolibarr setup is "locked to admin user only".

// Load Dolibarr environment
$res = 0;
// Try master.inc.php into web root detected using web root calculated from SCRIPT_FILENAME
$tmp = empty($_SERVER['SCRIPT_FILENAME']) ? '' : $_SERVER['SCRIPT_FILENAME'];
$tmp2 = realpath(__FILE__);
$i = strlen($tmp) - 1;
$j = strlen($tmp2) - 1;
while ($i > 0 && $j > 0 && isset($tmp[$i]) && isset($tmp2[$j]) && $tmp[$i] == $tmp2[$j]) {
	$i--;
	$j--;
}
if (!$res && $i > 0 && file_exists(substr($tmp, 0, ($i + 1)) . "/master.inc.php")) {
	$res = @include substr($tmp, 0, ($i + 1)) . "/master.inc.php";
}
if (!$res && $i > 0 && file_exists(dirname(substr($tmp, 0, ($i + 1))) . "/master.inc.php")) {
	$res = @include dirname(substr($tmp, 0, ($i + 1))) . "/master.inc.php";
}
// Try master.inc.php using relative path
if (!$res && file_exists("../master.inc.php")) {
	$res = @include "../master.inc.php";
}
if (!$res && file_exists("../../master.inc.php")) {
	$res = @include "../../master.inc.php";
}
if (!$res && file_exists("../../../master.inc.php")) {
	$res = @include "../../../master.inc.php";
}
if (!$res && file_exists("../../../../master.inc.php")) {
	$res = @include "../../../../master.inc.php";
}
if (!$res) {
	print "Include of master fails. Try to call script with full path.";
	exit(-1);
}
// After this $db, $mysoc, $langs, $conf and $hookmanager are defined (Opened $db handler to database will be closed at end of file).
// $user is created but empty.

//$langs->setDefaultLang('en_US'); 	// To change default language of $langs
$langs->load("main"); // To load language file for default language

// Load user and its permissions
$result = $user->fetch('', 'admin'); // Load user for login 'admin'. Comment line to run as anonymous user.
if (!($result > 0)) {
	dol_print_error(null, $user->error);
	exit;
}
$user->getrights();

include_once DOL_DOCUMENT_ROOT . '/categories/class/categorie.class.php';

$now = dol_now();


/*
 * Main
 */

print "***** " . $script_file . " (" . $version . ") pid=" . dol_getmypid() . " *****\n";
if (!isset($argv[1]) || !isset($argv[2]) || !isset($argv[3]) || !isset($argv[4]) || !isset($argv[5])) {	// Check parameters
	print "Usage: " . $script_file . " db_host db_name db_user db_password db_port [clean_all_before_import]\n";
	exit(-1);
}
if (!empty($argv[7])) {
	print "Too many parameters\n";
	exit(-1);
}

$db_host = $argv[1];
$db_name = $argv[2];
$db_user = $argv[3];
$db_password = $argv[4];
$db_port = $argv[5];
$clean_all_before_import = $argv[6];

// Select from prestashop
$current_lang = $langs->getDefaultLang();
switch ($langs->getDefaultLang()) {
	case 'en_US':
		$current_lang = 'en-us';
		break;

	case 'fr_FR':
		$current_lang = 'fr-fr';
		break;

	default:
		$current_lang = "";
		break;
};

$root_category = getDolGlobalInt("MARKETPLACE_ROOT_CATEGORY_ID");
$root_version = getDolGlobalInt("MARKETPLACE_VERSIONS_CATEGORY_ID");

// Start of transaction
$db->begin();

// Check MARKETPLACE_ROOT_CATEGORY_ID Categorie
$categorie = new Categorie($db);
$result = $categorie->fetch($root_category);
if ($result <= 0) {
	print "No MARKETPLACE_ROOT_CATEGORY_ID defined...\n";
	exit;
}

// Empty MARKETPLACE_ROOT_CATEGORY_ID and MARKETPLACE_VERSIONS_CATEGORY_ID Categorie
$categories_to_clean_query ="
WITH RECURSIVE top_down_cte AS
(
    SELECT `rowid`,`label`,`fk_parent` FROM llx_categorie WHERE rowid = " . ((int) $root_category) . "
    UNION
    SELECT m.rowid,m.label,m.fk_parent FROM top_down_cte
    INNER JOIN " . MAIN_DB_PREFIX . "categorie AS m
    ON top_down_cte.rowid = m.fk_parent
)SELECT * FROM top_down_cte;
";

$versions_to_clean_query ="
WITH RECURSIVE top_down_cte AS
(
    SELECT `rowid`,`label`,`fk_parent` FROM llx_categorie WHERE rowid = " . ((int) $root_version) . "
    UNION
    SELECT m.rowid,m.label,m.fk_parent FROM top_down_cte
    INNER JOIN " . MAIN_DB_PREFIX . "categorie AS m
    ON top_down_cte.rowid = m.fk_parent
)SELECT * FROM top_down_cte;
";

$message = "The MARKETPLACE_ROOT_CATEGORY and MARKETPLACE_VERSIONS_CATEGORY will be populated with imported categories and versions.\nNote: Link between the products and the categories will be imported later during the import of products.\n";

// Ask confirmation
print $message . "\n";
print "Hit Enter to continue or CTRL+C to stop...\n";
$input = trim(fgets(STDIN));


if (!empty($clean_all_before_import)) {
	print "Clean existing subcategories of MARKETPLACE_ROOT_CATEGORY";

	if ($resultc_to_clean = $db->query($categories_to_clean_query)) {

		while ($objc_to_clean = $resultc_to_clean->fetch_object()) {
			if ($objc_to_clean->rowid == $root_category) {
				continue;
			}

			print ".";

			$catobject = new Categorie($db);
			$catobject->fetch($objc_to_clean->rowid);

			$resultc_delete = $catobject->delete($user);

			if ($resultc_delete < 0) {
				setEventMessages($object->error, $object->errors, 'errors');
				$error++;
				exit;
			}
		}
	}

	print "\n";

	print "Clean existing subcategories of MARKETPLACE_VERSIONS_CATEGORY";

	if ($resultv_to_clean = $db->query($versions_to_clean_query)) {

		while ($objv_to_clean = $resultv_to_clean->fetch_object()) {
			if ($objv_to_clean->rowid == $root_version) {
				continue;
			}

			print ".";

			$catvobject = new Categorie($db);
			$catvobject->fetch($objv_to_clean->rowid);

			$resultv_delete = $catvobject->delete($user);

			if ($resultv_delete < 0) {
				setEventMessages($object->error, $object->errors, 'errors');
				$error++;
				exit;
			}
		}
	}

	print "\n";
}



$conn = getDoliDBInstance('mysqli', $db_host, $db_user, $db_password, $db_name, $db_port);
if (! $conn->connected) {
	die("Connection failed: " . $conn->connect_error);
}
print "Connected successfully to remote database on ".$db_host."...\n";

$categories_query = "
select
	pc.id_category ,
	pcl.name ,
	pc.id_parent ,
	pc.position ,
	pcl.description ,
	pl.language_code
FROM
	ps_category pc,
	ps_category_lang pcl,
	ps_lang pl
where
	pc.id_category = pcl.id_category AND
	pcl.id_lang = pl.id_lang AND
	pl.language_code = '" . $conn->escape($current_lang) . "' and
	pc.active = 1
";

if ($result_cats = $conn->query($categories_query)) {
	while ($obj = $result_cats->fetch_object()) {
		if ($obj->id_category == 1 || $obj->id_category == 39) {
			continue;
		}

		// Create subcategories
		$categorie = new Categorie($db);

		$categorie->label = $obj->name;
		$categorie->description = $obj->description;
		$categorie->position = $obj->position;
		$categorie->fk_parent = $root_category;
		$categorie->ref_ext = $obj->id_category;
		$categorie->type = Categorie::TYPE_PRODUCT;
		$categorie->import_key = dol_print_date($now, 'dayhourlog');

		$result = $categorie->create($user);

		if ($result < 0) {
			print " - Category : " . $categorie->label." => error " . $result . " - " . $categorie->errorsToString();
			$error++;
		} else {
			print " - Category : " . $categorie->label . " added successfully with id = ".$categorie->id." and fk_parent = ".$categorie->fk_parent;
		}

		// Add alternative languages
		if (!$error && 1) {
			$categories_lang_query = "
			SELECT
				pc.id_category,
				pl.language_code,
				pcl.name,
				pcl.description,
				CASE
					pl.language_code
					WHEN 'en-us' THEN 'en_US'
					WHEN 'fr-fr' THEN 'fr_FR'
					WHEN 'es-es' THEN 'es_ES'
					WHEN 'it-it' THEN 'it_IT'
					WHEN 'de-de' THEN 'de_DE'
					ELSE ''
				END dol_lang_code
			FROM
				ps_category pc,
				ps_category_lang pcl,
				ps_lang pl
			WHERE
				pc.id_category = pcl.id_category AND
				pcl.id_lang = pl.id_lang AND
				pc.id_category = " . $obj->id_category . "
			";

			if ($result_cats_lang = $conn->query($categories_lang_query)) {

				while ($objlang = $result_cats_lang->fetch_object()) {
					$categorie->multilangs[$objlang->dol_lang_code] = array(
						'label' => $objlang->name,
						'description' => $objlang->description
					);
				}
			}

			$ret = $categorie->setMultiLangs($user);
			if ($ret < 0) {
				print " - Error in setMultiLangs result code = " . $ret . " - " . $product->errorsToString();
				$error++;
			} else {
				print " - setMultiLangs OK";
			}
		}

		print "\n";
	}
}


// Set parent ids
if ($result_parents = $conn->query($categories_query)) {
	while ($objpid = $result_parents->fetch_object()) {
		if ($objpid->id_category == 1 || $objpid->id_category == 39 || $objpid->id_parent == 1) {
			continue;
		}

		// Current category object from remote id
		$current_categorie = new Categorie($db);
		$current_categorie->fetch('', '', Categorie::TYPE_PRODUCT, $objpid->id_category);

		if ($current_categorie->id > 0) {
			// Parent category object
			$parent_categorie = new Categorie($db);
			$parent_categorie->fetch('', '', Categorie::TYPE_PRODUCT, $objpid->id_parent);

			$current_categorie->fk_parent = $parent_categorie->id;

			$result = $current_categorie->update($user);

			if ($result < 0) {
				print " - Set Category parent Error => " . $result . " - " . $categorie->errorsToString() . "\n";
				$error++;
			} else {
				print " - Category parent : " . $current_categorie->label . " added successfully.\n";
			}
		}
	}
}


// Add versions tags
$versions_query = "
select
	t.name
FROM
	ps_product_tag pt,
	ps_tag t
where
	pt.id_tag = t.id_tag and
	t.name REGEXP 'v[0-9]'and
	LENGTH (t.name) < 4 and
    t.name NOT LIKE 'vv%'
GROUP BY t.name
ORDER BY t.name  ASC
";
if ($result_versions = $conn->query($versions_query)) {
	while ($objv = $result_versions->fetch_object()) {

		$version_category = new Categorie($db);

		$version_category->label = strtoupper($objv->name);
		$version_category->description = '';

		$version_category->fk_parent = $root_version;
		$version_category->type = Categorie::TYPE_PRODUCT;
		$version_category->import_key = dol_print_date($now, 'dayhourlog');

		$result = $version_category->create($user);

		if ($result < 0) {
			print " - Category Version : " . $version_category->label." => error " . $result . " - " . $version_category->errorsToString();
			$error++;
		} else {
			print " - Category Version : " . $version_category->label . " added successfully";
		}

		$langs_list = array('en_US', 'fr_FR', 'es_ES', 'it_IT', 'de_DE');
		foreach ($langs_list as $value_lang) {
			$version_category->multilangs[$value_lang] = array(
				'label' => $version_category->label,
				'description' => ''
			);
		}


		if (!$error) {
			$ret = $version_category->setMultiLangs($user);
			if ($ret < 0) {
				print " - Error in setMultiLangs result code = " . $ret . " - " . $product->errorsToString();
				$error++;
			} else {
				print " - setMultiLangs OK";
			}
			print "\n";
		}
	}
}


// -------------------- END OF YOUR CODE --------------------

if (!$error) {
	$db->commit();
	print '--- end ok' . "\n";
} else {
	print '--- end error nb=' . $error . "\n";
	$db->rollback();
}

$db->close(); // Close $db database opened handler

exit($error ? 1 : 0);
