#!/usr/bin/env php
<?php
/* Copyright (C) 2007-2023 Laurent Destailleur  <eldy@users.sourceforge.net>
 * Copyright (C) ---Put here your own copyright and developer email---
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
 *      \file       htdocs/marketplace/scripts/import-third-parties.php
 *		\ingroup    marketplace
 *      \brief      Script to import customers and sellers from prestashop
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
require_once DOL_DOCUMENT_ROOT . '/core/lib/company.lib.php';
include_once DOL_DOCUMENT_ROOT.'/societe/class/societeaccount.class.php';
include_once DOL_DOCUMENT_ROOT.'/website/class/website.class.php';

$now = dol_now();


/*
 * Main
 */

print "***** " . $script_file . " (" . $version . ") pid=" . dol_getmypid() . " *****\n";
if (!isset($argv[1]) || !isset($argv[2]) || !isset($argv[3]) || !isset($argv[4]) || !isset($argv[5])) {	// Check parameters
	print "Usage: " . $script_file . " db_host db_name db_user db_password db_port limit ref_website [clean_all_before_import]\n";
	print "NB: Limit is max number of record to import (0 = All) \n";
	print "NB: id_website is required to import logins and passwords \n";
	print "NB: clean_all_before_import will delete all third parties coming from the remote source before \n";
	exit(-1);
}


$db_host = $argv[1];
$db_name = $argv[2];
$db_user = $argv[3];
$db_password = $argv[4];
$db_port = $argv[5];

$limit = $argv[6] == 0 ? 0 : $argv[6];
$codeorid_website = $argv[7];
$clean_all_before_import = isset($argv[8]) ? $argv[8] : "false";

// ID of the preferred customers group/category (customers that are in this category will be imported as preferred customers in dolibarr)
$preferredCustomerGroupId = 2;


$importkey = dol_print_date(dol_now(), 'dayhourlog');
$marketplace_third_parties_category = getDolGlobalInt("MARKETPLACE_PROSPECTCUSTOMER_ID");
$marketplace_third_parties_category_vendor = getDolGlobalInt("MARKETPLACE_VENDOR_ID");
$marketplace_preferred_third_parties_category = getDolGlobalInt("MARKETPLACE_PROSPECTCUSTOMER_PREFERRED_ID");

// Check id_website if exist
$id_website = 0;
$result_website = 0;
if (!empty($codeorid_website)){
	$website = new Website($db);
	if (is_numeric($codeorid_website)) {
		$result_website = $website->fetch($codeorid_website);
	} else {
		$result_website = $website->fetch(0, $codeorid_website);
	}
	if ($result_website <= 0) {
		print "NO WEBSITE FOUND WITH THIS ID OR REF  ...\n";
		exit;
	} else {
		$id_website = $website->id;
	}
} else {
	print "WEBSITE ID or REF not provided  ...\n";
	exit;
}

// Check MARKETPLACE_PROSPECTCUSTOMER_ID Categorie
$categorie = new Categorie($db);
$result = $categorie->fetch($marketplace_third_parties_category);
if ($result <= 0) {
	print "MARKETPLACE_PROSPECTCUSTOMER_ID  not correctly defined...\n";
	exit;
}

// Check MARKETPLACE_VENDOR_ID Categorie
$categorie = new Categorie($db);
$result = $categorie->fetch($marketplace_third_parties_category_vendor);
if ($result <= 0) {
	print "MARKETPLACE_VENDOR_ID  not correctly defined...\n";
	exit;
}

// Check Preferred Customers Categorie
$categorie = new Categorie($db);
$result = $categorie->fetch($marketplace_preferred_third_parties_category);
if ($result <= 0) {
	print "MARKETPLACE_PROSPECTCUSTOMER_PREFERRED_ID not correctly defined...\n";
	exit;
}

$message = "\n NB: If you would like to stop the script immediately upon encountering an error for one record, simply uncomment the lines ( //error++; //exit(); ) in this script... \n";

// Ask confirmation
print $message . "\n";
print "Hit Enter to continue or CTRL+C to stop...\n";
$input = trim(fgets(STDIN));

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


$delete_customers_query = "
SELECT
	c.id_customer
FROM ps_customer c
";


$sql_request_for_customers = "SELECT
	pc.id_customer,
	pc.firstname,
	pc.lastname,
	pc.id_gender,
	pc.email,
	pc.passwd,
	pc.date_add,
	pc.company,
	pc.website,
	pc.siret,
	pc.ape,
	pc.optin,
	pc.id_default_group,
	CASE pl.language_code
		WHEN 'en-us' THEN 'en_US'
		WHEN 'fr-fr' THEN 'fr_FR'
		WHEN 'es-es' THEN 'es_ES'
		WHEN 'it-it' THEN 'it_IT'
		WHEN 'de-de' THEN 'de_DE'
		ELSE ''
	END AS dol_lang_code
	FROM
	ps_customer pc
	LEFT JOIN
	ps_lang pl ON pc.id_lang = pl.id_lang
	INNER JOIN (
	SELECT
		MAX(id_customer) AS id_customer,
		email
	FROM
		ps_customer
	GROUP BY
		email
	) AS max_ids ON pc.id_customer = max_ids.id_customer 
	ORDER BY
	pc.date_add ASC ";

if ($limit != 0) {
	$sql_request_for_customers .= " limit " . $limit;
}

$conn = getDoliDBInstance('mysqli', $db_host, $db_user, $db_password, $db_name, $db_port);
if (! $conn->connected) {
	die("Connection failed: " . $conn->connect_error);
}
print "Connected successfully...\n";

if (!empty($clean_all_before_import) && $clean_all_before_import !== "false") {
	print "Clean all thirdparties already imported (with ref_ext = remote id) - May take a long time...\n";
	if ($result_all_customers = $conn->query($delete_customers_query)) {
		print "Found ".$conn->num_rows($result_all_customers)." third parties in remote database\n";

		$list_of_imported_customers = new Societe($db);
		while ($objc = $result_all_customers->fetch_object()) {
			//print ".";
			$is_imported_before = $list_of_imported_customers->fetch('', '', $objc->id_customer);

			if ($is_imported_before > 0) {
				$resulti_delete = $list_of_imported_customers->delete($list_of_imported_customers->id, $user);
				if ($resulti_delete < 0) {
					print " - Error in deleting third party ref_ext = " . $objc->id_customer . " - " . $list_of_imported_customers->errorsToString();
				} else {
					print " - Third-party ref_ext = " . $objc->id_customer . " deleted.";
				}
				print "\n";
			}
		}
	}
}
$error_messages= array();

print "Import remote third parties (limit=".$limit.") - May take a long time...\n";

// Start of transaction
$db->begin();
if ($result_customers = $conn->query($sql_request_for_customers)) {
	$i=0;
	while ($obj = $result_customers->fetch_object()) {
		$i++;

		$customer = new Societe($db);

		if (!empty($obj->company)) {
			$customer->name = $obj->company;
			$customer->name_alias = dolGetFirstLastname($obj->firstname, $obj->lastname);
		} else {
			$customer->name = dolGetFirstLastname($obj->firstname, $obj->lastname);
		}

		// Get customer address
		$customer_address_query = "
		select
			pa.id_address ,
			pa.id_customer,
			pa.address1,
			pa.address2,
			pa.phone,
			pa.postcode,
			pa.date_add,
			pa.city,
			pc.iso_code
		FROM
			ps_address pa,
			ps_country pc
		WHERE
			pa.id_country = pc.id_country AND
			pa.id_customer = " . $obj->id_customer . " 
		order by pa.date_add desc
		limit 1
		";

		if ($result_customer_address = $conn->query($customer_address_query)) {
			while ($objaddr = $result_customer_address->fetch_object()) {
				$get_country_id = getCountry($objaddr->iso_code, '3');
				if ($get_country_id != "NotDefined"){
					$customer->country_id = $get_country_id;
				}
				$customer->address = $objaddr->address1 . "\n" . $objaddr->address2;
				$customer->town = $objaddr->city;
				$customer->zip = $objaddr->postcode;
				$customer->phone_pro = $objaddr->phone;
			}
		}

		$customer->url = $obj->website;
		$customer->idprof2 = $obj->siret;
		$customer->idprof3 = $obj->ape;
		$customer->ref_ext = $obj->id_customer;
		$customer->email = $obj->email;
		$customer->no_email = ($obj->optin ? 0 : 1);

		// Check if customer
		$request_to_check_if_customer = "
			select
				po.id_order
			FROM
				ps_orders po
			WHERE
				po.id_customer = '" . $obj->id_customer . "'
		";
		$is_customer = mysqli_num_rows($conn->query($request_to_check_if_customer));
		$customer->client = ($is_customer > 0) ? '1' : '2';
		$customer->code_client = 'auto';

		// Check if vendor
		$request_to_check_if_vendor = "
		select
			pp.id_product
		FROM
			ps_product pp
		WHERE
			pp.reference like 'c" . $obj->id_customer . "d%'
		";
		$is_vendor = mysqli_num_rows($conn->query($request_to_check_if_vendor));
		$customer->fournisseur = ($is_vendor > 0) ? '1' : '0';
		$customer->code_fournisseur = 'auto';

		$customer->default_lang = $obj->dol_lang_code;

		// Check if this customer was imported before
		$sql = "SELECT rowid FROM " . MAIN_DB_PREFIX . "societe";
		$sql .= " WHERE ref_ext = '" . $obj->id_customer . "' LIMIT 1";

		$resql = $db->query($sql);
		$objsql = $db->fetch_object($resql);


		if (!empty($objsql->rowid)) {
			$action = 're-imported';
			$result = $customer->update($objsql->rowid, $user);
			$rowid_soc = $objsql->rowid;
		} else {
			// Organise search criteria to check if this customer exist in dolibarr
			$publisher = trim($obj->firstname.' '.$obj->lastname);
			$company = trim($obj->company);
			if (empty($company)) {
				// Get company from address
				$request_to_get_company = "
					SELECT DISTINCT c.company
					FROM ps_customer as c
					LEFT JOIN ps_address as a ON a.id_customer = c.id_customer AND a.deleted = 0
					WHERE c.id_customer = ".$obj->id_customer."
					LIMIT 1
				";
				$fetch_company = mysqli_fetch_row($conn->query($request_to_get_company));
				if(!empty($fetch_company['company'])){
					$company = trim($fetch_company['company']);
				}
			}
			$publisher = $db->escape($publisher);
			$company = $db->escape($company);
			$sqlfilters = "t.nom LIKE '".$publisher."%' or t.name_alias LIKE '".$publisher."%'";
			if ($company) {
				$sqlfilters .= " or t.nom LIKE '".$company."%' or t.name_alias LIKE '".$company."%'";
			}
			$sqlr = "SELECT rowid FROM " . MAIN_DB_PREFIX . "societe as t";
			$sqlr .= " WHERE (" . $sqlfilters . ") AND t.import_key IS NULL LIMIT 1";

			// Check if this customer exist
			$resqlr = $db->query($sqlr);
			$objsqlr = $db->fetch_object($resqlr);
			if (!empty($objsqlr->rowid)) {
				$existing_dol_customer = new Societe($db);
				$existing_dol_customer->fetch($objsqlr->rowid);

				// Complete existing customer information by adding imported information
				/*$customer->url = (!empty($existing_dol_customer->url)) ? $existing_dol_customer->url : $customer->url ;
				$customer->name_alias = (!empty($existing_dol_customer->name_alias)) ? $existing_dol_customer->name_alias : $customer->name_alias ;
				$customer->idprof2 = (!empty($existing_dol_customer->idprof2)) ? $existing_dol_customer->idprof2 : $customer->idprof2 ;
				$customer->idprof3 = (!empty($existing_dol_customer->idprof3)) ? $existing_dol_customer->idprof3 : $customer->idprof3 ;
				$customer->ref_ext = (!empty($existing_dol_customer->ref_ext)) ? $existing_dol_customer->ref_ext : $customer->ref_ext ;
				$customer->default_lang = (!empty($existing_dol_customer->default_lang)) ? $existing_dol_customer->default_lang : $customer->default_lang ;*/

				// Complete existing customer information by adding imported information
				$existing_dol_customer->url = (empty($existing_dol_customer->url)) ? $customer->url : $existing_dol_customer->url ;
				$existing_dol_customer->name_alias = (empty($existing_dol_customer->name_alias)) ? $customer->name_alias : $existing_dol_customer->name_alias ;
				$existing_dol_customer->idprof2 = (empty($existing_dol_customer->idprof2)) ? $customer->idprof2 : $existing_dol_customer->idprof2 ;
				$existing_dol_customer->idprof3 = (empty($existing_dol_customer->idprof3)) ? $customer->idprof3 : $existing_dol_customer->idprof3 ;
				$existing_dol_customer->ref_ext = (empty($existing_dol_customer->ref_ext)) ? $customer->ref_ext : $existing_dol_customer->ref_ext ;
				$existing_dol_customer->default_lang = (empty($existing_dol_customer->default_lang)) ? $customer->default_lang : $existing_dol_customer->default_lang ;

				$existing_dol_customer->address = (empty($existing_dol_customer->address)) ? $customer->address : $existing_dol_customer->address ;
				$existing_dol_customer->town = (empty($existing_dol_customer->town)) ? $customer->town : $existing_dol_customer->town ;
				$existing_dol_customer->zip = (empty($existing_dol_customer->zip)) ? $customer->zip : $existing_dol_customer->zip ;
				$existing_dol_customer->phone_pro = (empty($existing_dol_customer->phone_pro)) ? $customer->phone_pro : $existing_dol_customer->phone_pro ;
				$existing_dol_customer->email = (empty($existing_dol_customer->email)) ? $customer->email : $existing_dol_customer->email ;

				$existing_dol_customer->client = (empty($existing_dol_customer->client)) ? $customer->client : $existing_dol_customer->client ;
				$existing_dol_customer->code_client = (empty($existing_dol_customer->code_client)) ? $customer->code_client : $existing_dol_customer->code_client ;
				$existing_dol_customer->fournisseur = (empty($existing_dol_customer->fournisseur)) ? $customer->fournisseur : $existing_dol_customer->fournisseur ;
				$existing_dol_customer->code_fournisseur = (empty($existing_dol_customer->code_fournisseur)) ? $customer->code_fournisseur : $existing_dol_customer->code_fournisseur ;

				$customer = $existing_dol_customer;
				// Note: The import_key is updated after
				$action = 'updated';
				$result = $customer->update($objsqlr->rowid, $user);
				$rowid_soc = $objsqlr->rowid;
			} else {
				// Note: The import_key is set after
				$action = 'imported';
				$result = $customer->create($user);
				$rowid_soc = $result;
			}

			if ($action == "updated"){
				$sql = 'UPDATE ' . MAIN_DB_PREFIX . "societe SET import_key = '" . $db->escape($importkey) . "' WHERE rowid = " . ((int) $objsqlr->rowid);
			}

			if ($action == "imported"){
				$sql = 'UPDATE ' . MAIN_DB_PREFIX . "societe SET import_key = '" . $db->escape($importkey) . "', datec = '" . $obj->date_add . "' WHERE rowid = " . ((int) $result);
			}

			$db->query($sql);
		}


		if ($result < 0) {
			$error_message = " - Create Error => " . $result . " - " . $customer->errorsToString();
			print $error_message;
			$error_messages[] = $obj->id_customer . ' : ' . $error_message;
			//$error++;
		} else {
			print " - #".$i." Third party id=".$customer->id.", ref_ext = " . $customer->ref_ext . ", customer = ".$customer->client.", supplier = ".$customer->fournisseur.", " . $action . " successfully";
		}

		if (!$error && 1) {
			// Add tag/category customer
			if ($customer->client > 0) {
				$customer_tags = array();
				$customer_tags[] = $marketplace_third_parties_category;

				// if action is updated keep the old tags
				$old_customer_tags = $categorie->containing($customer->id, 'customer', 'id');
				if (!empty($old_customer_tags)) {
					$customer_tags = array_merge($customer_tags , $old_customer_tags); // Add $old_customer_tags;
				}

				// Add preferred Customer category
				if ($obj->id_default_group == $preferredCustomerGroupId) {
					$customer_tags[] = $marketplace_preferred_third_parties_category;
				}

				$ret_cat = $customer->setCategories($customer_tags, 'customer');
				if ($ret_cat < 0) {
					$error_message = " - Error in setCategories customer result code = " . $ret_cat . " - " . $customer->errorsToString();
					print $error_message;
					$error_messages[] = $obj->id_customer . ' : ' . $error_message;
					//$error++;
					//exit();
				} else {
					print " - set tag customer OK";
				}
			}

			// Add tag/category supplier
			if ($customer->fournisseur > 0) {
				$supplier_tags = array();
				$supplier_tags[] = $marketplace_third_parties_category_vendor;
				
				// if action is updated keep the old tags
				$old_supplier_tags = $categorie->containing($customer->id, 'supplier', 'id');
				if (!empty($old_supplier_tags)) {
					$supplier_tags = array_merge($old_supplier_tags, $supplier_tags); // add $old_supplier_tags;
				}


				$ret_cat = $customer->setCategories($supplier_tags, 'supplier');
				if ($ret_cat < 0) {
					$error_message = " - Error in setCategories supplier result code = " . $ret_cat . " - " . $customer->errorsToString();
					print $error_message;
					$error_messages[] = $obj->id_customer . ' : ' . $error_message;
					//$error++;
					//exit();
				} else {
					print " - set tag supplier OK";
				}
			}


			// Add the recent contact/address (only one)
			$customer->name_bis = $obj->lastname;
			$customer->firstname = $obj->firstname;
			switch ($obj->id_gender) {
				case 1:
					$civility = 'MR';
					break;
				case 2:
					$civility = 'MME';
					break;
				case 3:
					$civility = 'MLE';
					break;
				default:
					$civility = '';
					break;
			};
			$customer->civility_id = $civility;
			$customer->email = $obj->email;

			$ret_setindividual = $customer->create_individual($user);
			if ($ret_setindividual < 0) {
				$error_message = " - Error in set individual result code = " . $ret_setindividual . " - " . $customer->errorsToString();
				print $error_message;
				$error_messages[] = $obj->id_customer . ' : ' . $error_message;
				//$error++;
				//exit();
			} else {
				$currentContactId = $ret_setindividual;
				print " - set individual OK";
			}


			// Add default contact
			/*
			$customer->name_bis = $obj->lastname;
			$customer->email = $obj->email;
			$customer->firstname = $obj->firstname;
			switch ($obj->id_gender) {
				case 1:
					$civility = 'MR';
					break;
				case 2:
					$civility = 'MME';
					break;
				case 3:
					$civility = 'MLE';
					break;
				default:
					$civility = '';
					break;
			};
			$customer->civility_id = $civility;

			$ret_contact = $customer->create_individual($user);
			if ($ret_contact < 0) {
				$error_message = " - Error in setIndividual result code = " . $ret_contact . " - " . $customer->errorsToString();
				print $error_message;
				$error_messages[] = $obj->id_customer . ' : ' . $error_message;
				//$error++;
				//exit();
			} else {
				print " - set default contact OK";
			}
			*/

			// Add address
			/*
			$customer_addresses_query = "
			select
				pa.id_address ,
				pa.id_customer,
				pa.lastname,
				pa.firstname,
				pa.address1,
				pa.address2,
				pa.alias,
				pa.phone,
				pa.postcode,
				pa.phone_mobile,
				pa.date_add,
				pa.city,
				pc.iso_code
			FROM
				ps_address pa,
				ps_country pc
			WHERE
				pa.id_country = pc.id_country AND
				pa.id_customer = " . $obj->id_customer . "
			";
			if ($result_customer_addresses = $conn->query($customer_addresses_query)) {
				while ($objaddr = $result_customer_addresses->fetch_object()) {
					$get_country_id = getCountry($objaddr->iso_code, '3');
					if ($get_country_id == "NotDefined"){
						continue;
					}
					$objectcontact = new Contact($db);
					$objectcontact->socid = $rowid_soc;
					$objectcontact->ref_ext = $objaddr->id_customer;
					$objectcontact->alias_name = $objaddr->alias;
					$objectcontact->lastname = $objaddr->lastname;
					$objectcontact->firstname = $objaddr->firstname;
					$objectcontact->address = $objaddr->address1 . "\n" . $objaddr->address2;
					$objectcontact->town = $objaddr->city;
					$objectcontact->zip = $objaddr->postcode;
					$objectcontact->phone_pro = $objaddr->phone;
					$objectcontact->phone_mobile = $objaddr->phone_mobile;
					$objectcontact->country_id = $get_country_id;

					$ret_addresse = $objectcontact->create($user);
					if ($ret_addresse < 0) {
						$error_message = " - Error in set adresse result code = " . $ret_addresse . " - " . $customer->errorsToString();
						print $error_message;
						$error_messages[] = $obj->id_customer . ' : ' . $error_message;
						//$error++;
						//exit();
					} else {
						print " - set adresse OK";
					}
				}
			}
			*/


			// Add 1 connection credentials for a specific website
			if ($id_website > 0) {
				// Check if this account exist
				$sqlaccount = "SELECT rowid FROM " . MAIN_DB_PREFIX . "societe_account ";
				$sqlaccount .= " WHERE login = '" . $obj->email . "'";
				$sqlaccount .= " AND site = 'dolibarr_website' AND fk_website = ".((int) $id_website);
				$sqlaccount .= " LIMIT 1";
				$resqlaccount = $db->query($sqlaccount);
				$objsqlaccount = $db->fetch_object($resqlaccount);
				if (!empty($objsqlaccount->rowid)) {
					print " - This third party email already exists as a login account";
					// Link contact to customer account for update
					$sql = 'UPDATE ' . MAIN_DB_PREFIX . "socpeople  SET ref_ext = '" . $objsqlaccount->rowid . "', note_private = 'Marketplace contact for account ID : " . $objsqlaccount->rowid . "' WHERE rowid = " . ((int) $currentContactId);
					$db->query($sql);
				} else {
					$societeaccount = new SocieteAccount($db);
					$societeaccount->login = $obj->email;
					$societeaccount->pass_crypted =$obj->passwd;
					$societeaccount->fk_soc = $rowid_soc;
					$societeaccount->fk_website = ((int) $id_website);
					$societeaccount->site = "dolibarr_website";
					$societeaccount->pass_encoding = "dolistore";
					$societeaccount->status = "1";
					$societeaccount->import_key = dol_print_date($now, 'dayhourlog');

					$ret_account = $societeaccount->create($user);
					if ($ret_account < 0) {
						$error_message = " - Error in creating account result code = " . $ret_account . " - " . $customer->errorsToString();
						print $error_message;
						$error_messages[] = $obj->id_customer . ' : ' . $error_message;
						//$error++;
						//exit();
					} else {
						print " - Create account OK";
						// Link contact to customer account
						$sql = 'UPDATE ' . MAIN_DB_PREFIX . "socpeople  SET ref_ext = '" . $ret_account . "', note_private = 'Marketplace contact for account ID : " . $ret_account . "' WHERE rowid = " . ((int) $currentContactId);
						$db->query($sql);
					}
				}
			}


		}
		print "\n";
	}
}


// -------------------- END OF YOUR CODE --------------------

if (!$error) {
	$db->commit();
	print '--- end ok' . "\n";
	foreach ($error_messages as $error_message) {
		print "\n". $error_message;
	}
} else {
	print '--- end error code=' . $error . "\n";

	// Repeat all error messages at end
	foreach ($error_messages as $error_message) {
		print "\n". $error_message;
	}
	$db->rollback();
}

$db->close(); // Close $db database opened handler

exit($error);
