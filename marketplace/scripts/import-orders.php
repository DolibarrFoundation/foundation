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
$warning_messages = array();


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

require_once DOL_DOCUMENT_ROOT . '/categories/class/categorie.class.php';
require_once DOL_DOCUMENT_ROOT . '/core/lib/categories.lib.php';
include_once DOL_DOCUMENT_ROOT . '/societe/class/societeaccount.class.php';
require_once DOL_DOCUMENT_ROOT . "/commande/class/commande.class.php";
require_once DOL_DOCUMENT_ROOT . '/core/class/discount.class.php';


$new = dol_now();


/*
 * Main
 */

print "***** " . $script_file . " (" . $version . ") pid=" . dol_getmypid() . " *****\n";
if (!isset($argv[1]) || !isset($argv[2]) || !isset($argv[3]) || !isset($argv[4]) || !isset($argv[5])) {	// Check parameters
	print "Usage: " . $script_file . " db_host db_name db_user db_password db_port [clean_all_before_import]\n";
	exit(-1);
}

$db_host = $argv[1];
$db_name = $argv[2];
$db_user = $argv[3];
$db_password = $argv[4];
$db_port = $argv[5];
$clean_all_before_import = $argv[6];

// Start of transaction
$db->begin();


$message = "The orders will be imported into Dolibarr.\n";

// Ask confirmation
print $message . "\n";
print "Hit Enter to continue or CTRL+C to stop...\n";
$input = trim(fgets(STDIN));


$conn = getDoliDBInstance('mysqli', $db_host, $db_user, $db_password, $db_name, $db_port);
if (!$conn->connected) {
	die("Connection failed: " . $conn->connect_error);
}
print "Connected successfully to remote database on " . $db_host . "...\n";

$now = dol_now();


// Clean all orders before import
$delete_orders_query = "
SELECT
	p.id_order
FROM ps_orders as p
";
print "Clean all orders already imported (with ref_ext = remote id) - May take a long time...\n";
if ($result_all_orders = $conn->query($delete_orders_query)) {
	print "Found " . $conn->num_rows($result_all_orders) . " orders in remote database\n";

	$list_of_imported_orders = new Commande($db);
	while ($obji = $result_all_orders->fetch_object()) {
		$is_imported_before = $list_of_imported_orders->fetch('', '', $obji->id_order);
		if ($is_imported_before > 0) {
			$resulti_delete = $list_of_imported_orders->delete($user);
			if ($resulti_delete < 0) {
				print " - Error in deleting order ref_ext = " . $obji->id_order . " - " . $list_of_imported_orders->errorsToString();
			} else {
				print " - Order ref_ext = " . $obji->id_order . " deleted.";
			}
			print "\n";
		}
	}
}

// Load Dolibarr payment methods
$dolibarrPaymentMethods = array();
$sql = "SELECT id, code FROM " . $db->prefix() . "c_paiement WHERE entity IN (" . getEntity('c_paiement') . ")";
$resql = $db->query($sql);
if ($resql && $db->num_rows($resql) > 0) {
    while ($obj = $db->fetch_object($resql)) {
        $dolibarrPaymentMethods[$obj->code] = $obj->id;
    }
}

$orders_querry = "
	SELECT
		o.id_order,
		o.date_add,
		o.total_paid_tax_incl,
		o.total_paid_tax_excl,
		o.total_discounts,
		o.total_discounts_tax_excl,
		o.total_discounts_tax_incl,
		CASE
			WHEN COALESCE(ROUND(((o.total_discounts_tax_incl - o.total_discounts_tax_excl) / o.total_discounts_tax_excl) * 100, 1), 0) BETWEEN 19.4 AND 19.8 THEN 19.6
			WHEN COALESCE(ROUND(((o.total_discounts_tax_incl - o.total_discounts_tax_excl) / o.total_discounts_tax_excl) * 100, 1), 0) BETWEEN 19.8 AND 20.2 THEN 20
			ELSE 0
		END AS remise_tva_rate,
		CASE
			WHEN o.module = 'bankwire' THEN 'VIR'
			WHEN o.module = 'cheque' THEN 'CHQ'
			WHEN o.module = 'paypal' THEN 'PAY'
			WHEN o.module = 'stripe_official' THEN 'CB'
			WHEN o.module = 'systempay' THEN 'CB'
			WHEN o.module = 'vads' THEN 'CB'
			WHEN o.module = 'paypalapi' THEN 'PAY'
			ELSE ''
		END AS payment_module,
		o.date_add,
		c.id_customer,
		c.firstname,
		c.lastname,
		c.email,
		a.address1,
		a.postcode,
		a.city,
		cl.name AS 'Country',
		osl.name AS 'Status'
	FROM
		ps_orders o
	LEFT JOIN
		ps_customer c ON o.id_customer = c.id_customer
	LEFT JOIN
		ps_address a ON o.id_address_delivery = a.id_address
	LEFT JOIN
		ps_country_lang cl ON a.id_country = cl.id_country AND cl.id_lang = 1
	LEFT JOIN
		ps_order_state_lang osl ON o.current_state = osl.id_order_state AND osl.id_lang = 1
	WHERE 
		(osl.name IN ('Payment accepted', 'Delivered', 'Stripe partial refund') OR osl.name IS NULL) and o.id_order != 0 
	ORDER BY
		o.id_order DESC;
";

if ($result_orders = $conn->query($orders_querry)) {
	$i = 0;
	while ($obj = $result_orders->fetch_object()) {
		$i++;

		// TODO : remove this two lines
		$obj->id_customer = ($obj->id_customer == "26511") ? "26512" : $obj->id_customer;
		$obj->id_customer = ($obj->id_customer == "11564") ? "11565" : $obj->id_customer;

		if ($obj->id_customer == "29816" || $obj->id_customer == "29815") {
			continue;
		}
		// Get buyer
		$thirdparty_buyer = new Societe($db);
		$result = $thirdparty_buyer->fetch('', '', $obj->id_customer);
		if (!$result > 0) {
			print ' - Customer with ref ext : ' . $obj->id_customer . ' not found, import third parties before orders.' . "\n";;
			$error++;
			$db->rollback();
			$db->close();
			exit;
		}

		$com = new Commande($db);

		$com->ref_ext        = $obj->id_order;
		$com->socid          = $thirdparty_buyer->id;
		$com->date           = $obj->date_add;
		$com->note_private   = 'Order imported from old Dolistore old_id : ' . $obj->id_order;
		$com->module_source  = 'Marketplace';
		// Add payment module
		if (isset($obj->payment_module) && array_key_exists($obj->payment_module, $dolibarrPaymentMethods)) {
			$com->mode_reglement_id = $dolibarrPaymentMethods[$obj->payment_module];
		}
		
		$com->import_key = dol_print_date($now, 'dayhourlog');

		$result = $com->create($user);

		if ($result < 0) {
			print " - Order ref : " . $com->ref . " => error " . $result . " - " . $com->errorsToString();
			$error++;
			$db->rollback();
			$db->close();
			exit;
		} else {
			print " - #" . $i . " Order id=" . $com->id . ", Id ext = " . $com->ref_ext . " created successfully";

			$orderLinesQuerry = "
			SELECT 
				od.id_order_detail,
				od.id_order, 
				od.product_id,
				od.product_name, 
				od.product_quantity_refunded,
				od.product_price,
				od.unit_price_tax_incl,
				od.unit_price_tax_excl,
				od.product_quantity,
				COALESCE(ROUND(((od.unit_price_tax_incl - od.unit_price_tax_excl) / od.unit_price_tax_excl) * 100, 1), 0) AS tva_rate,
				od.reduction_amount,
				od.reduction_amount_tax_excl,
				od.reduction_amount_tax_incl,
				od.reduction_percent,
				p.reference
			FROM ps_order_detail od
			JOIN ps_product p ON od.product_id = p.id_product
			WHERE 
				od.product_quantity_refunded = 0 AND
				od.id_order = " . $obj->id_order . " 
			";

			if ($result_order_lines = $conn->query($orderLinesQuerry)) {
				while ($line = $result_order_lines->fetch_object()) {

					// Get  product
					$product = new Product($db);
					$result = $product->fetch('', '', $line->product_id);
					if (!$result > 0) {
						print ' - Product with ref ext : ' . $line->product_id . ' not found, import products before orders.' . "\n";;
						$error++;
						$db->rollback();
						$db->close();
						exit;
					}

					// Get seller
					$sql_get_seller_id = "select lpfp.fk_soc 
					from " . MAIN_DB_PREFIX . "product_fournisseur_price lpfp 
					where lpfp.fk_product =" . $product->id . " LIMIT 1";
					$resql = $db->query($sql_get_seller_id);
					$objsql = $db->fetch_object($resql);

					if (!empty($objsql->fk_soc)) {
						$thirdparty_seller = new Societe($db);
						$result_seller = $thirdparty_seller->fetch($objsql->fk_soc);

						if (!$result_seller < 0) {
							print ' - Customer with id : ' . $objsql->fk_soc . ' not found, import third parties before orders.' . "\n";;
							$error++;
							$db->rollback();
							$db->close();
							exit;
						}
					} else {
						// No seller found, error message 
						print ' - No seller found for product with ID : ' . $product->id  . "\n";;
						$error++;
						$db->rollback();
						$db->close();
						exit;
					}

					// tva
					$tva_tx = $line->tva_rate;

					$result = $com->addline($product->label, $line->product_price, $line->product_quantity, $tva_tx, 0, 0, $product->id, $line->reduction_percent, 0, 0, 'HT', $line->unit_price_tax_incl, '', '', $product->type);
					if ($result <= 0) {
						print ' - Order line with id : ' . $line->id_order_detail . ' can\'t be add  => error ' . $result . ' - ' . $com->errorsToString() . "\n";;
						$error++;
						$db->rollback();
						$db->close();
						exit;
					} else {
						print ' - Order line with ext id : ' . $line->id_order_detail . ' added';
					}

					// Add remise amount
					if ($line->reduction_amount > 0) {
						// define a discount on third party buyer
						$desc = "Remise of product : " . $product->label;
						$discountid = $thirdparty_buyer->set_remise_except($line->reduction_amount_tax_excl, $user, $desc, $tva_tx, 0, 'HT');

						if ($discountid > 0) {
							// insert discount line
							$com->insert_discount($discountid);
							print ' - Remise except for order line with id : ' . $line->id_order_detail . ' added';
						} else {
							print ' - Remise except can\'t be added for order line with id : ' . $line->id_order_detail . ' => error ' . $result . ' - ' . $thirdparty_buyer->errorsToString() . "\n";
							$error++;
							$db->rollback();
							$db->close();
							exit;
						}
					}
				}
			}

			// Add global discount line
			if ($obj->total_discounts > 0) {
				// define a discount on third party buyer
				$desc = "Remise";
				$discountid = $thirdparty_buyer->set_remise_except($obj->total_discounts_tax_excl, $user, $desc, $obj->remise_tva_rate, 0, 'HT');

				if ($discountid > 0) {
					// insert discount line
					$com->insert_discount($discountid);
					print ' - Remise except global for order with id : ' . $obj->id_order . ' added';
				} else {
					$message = ' - Remise except global can\'t be added for the order with id : ' . $obj->id_order . ' - ' . $thirdparty_buyer->errorsToString();
					print $message . "\n";
					$warning_messages[] = $message;
				}
			}

			$result = $com->valid($user);
			if ($result > 0) {
				print " - ok \n";
			} else {
				print " - Commande with ID : " . $obj->id_order . " => error " . $result . " - " . $com->errorsToString() . "\n";
				$error++;
				$db->rollback();
				$db->close();
				exit;
			}
		}

		print "\n";
	}
}


// -------------------- END OF YOUR CODE --------------------

if (!$error) {
	$db->commit();
	if (!empty($warning_messages)) {
		foreach ($warning_messages as $warning_message) {
			print $warning_message . "\n";
		}
	}
	print '--- end ok' . "\n";
} else {
	print '--- end error nb=' . $error . "\n";
	$db->rollback();
}

$db->close(); // Close $db database opened handler

exit($error ? 1 : 0);
