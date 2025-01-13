<?php
/* Copyright (C) 2008-2011  Laurent Destailleur     <eldy@users.sourceforge.net>
 * Copyright (C) 2005-2016  Regis Houssin           <regis.houssin@inodbox.com>
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
 * or see https://www.gnu.org/
 */

session_start(); // start session
require "../../../../../../../master.inc.php";
include_once DOL_DOCUMENT_ROOT . '/product/class/product.class.php';
include_once DOL_DOCUMENT_ROOT.'/website/class/website.class.php';
include_once DOL_DOCUMENT_ROOT . '/core/lib/website.lib.php';

$website_id = getDolGlobalInt("MARKETPLACE_WEBSITE_ID");

$langs->setDefaultLang($_SESSION['lang']['code']);
$langs->loadLangs(array("website"));

$website_object = new Website($db);
$this_website = $website_object->fetch($website_id);
$order_page_url = "index.php?website=".$website_object->ref."&pageref=order";

$product_id = GETPOST('product_id', 'int');
$product_thumb = GETPOST('product_thumb');
$product_qty = GETPOST('product_quantity', 'int');

if($product_id && $product_qty) {

    /*foreach($_POST as $key => $value){
        $new_product[$key] = $value;
    }*/

	$object = new Product($db);
	$get_product = $object->fetch($product_id);

    $new_product['product_id'] = $object->id;
    $new_product['product_thumb'] = $product_thumb;
    $new_product['product_name'] = $object->label;
    $new_product['product_ref'] = $object->ref;
    $new_product['product_price'] = $object->price_ttc;
    $new_product['product_qty'] = $product_qty;

        if(isset($_SESSION['products'])){  //if session var already exist

            if(isset($_SESSION['products'][$new_product['product_id']])) //check item exist in products array
            {
                unset($_SESSION['products'][$new_product['product_id']]); //unset old item
            }
        }

        $_SESSION['products'][$new_product['product_id']] = $new_product;	//update products with new item array

    $total_items = count($_SESSION['products']); //count total items

    $popup_product_html = '
        <span class="cross" title="'.$langs->trans("closeWindow").'"></span>
        <h2>
            <i class="icon-ok"></i> '.$langs->trans("productAddedToCart").'
        </h2>
        <div class="product-image-container layer_cart_img">
            <img class="layer_cart_img img-responsive" src="'.$product_thumb.'" alt="Subtotal V3" title="'.$object->label.'">
        </div>
        <div id="layer_cart_product_info">
            <span id="layer_cart_product_title" class="product-name">'.$object->label.'</span>
            <span id="layer_cart_product_attributes"></span>
            <div>
            <strong class="dark">'.$langs->trans("quantity").'</strong>
            <span id="layer_cart_product_quantity">'.$product_qty.'</span>
            </div>
            <div>
            <strong class="dark">'.$langs->trans("total").'</strong>
            <span id="layer_cart_product_price">('.($product_qty * $object->price_ttc).' €)</span>
            </div>
        </div>';

    die(json_encode(array('items'=>$total_items,'popup_product_html'=>$popup_product_html))); //output json

}

if(isset($_POST['load_cart']) && $_POST['load_cart'] == 1)
{
    if(isset($_SESSION['products']) && count($_SESSION['products'])>0){ //if we have session variable
        $cart_box = '';
        $total = 0;
        foreach($_SESSION['products'] as $cart_product){ //loop though items and prepare html content

            $cart_box .= "<dl class=\"products\">
                <dt class=\"item\" data-id=\"cart_block_product_" . $cart_product['product_id'] . "\" style=\"display: block;\">
                    <a class=\"cart-images\" href=\"product.php?id=" . $cart_product['product_id'] . "\" title=\"" . $cart_product['product_name'] . "\"><img src=\"" . $cart_product['product_thumb'] . "\" alt=\"" . $cart_product['product_name'] . "\"></a>
                    <div class=\"cart-info\">
                        <div class=\"product-name\"><span class=\"quantity-formated\"><span class=\"quantity\">" . $cart_product['product_qty'] . "</span>&nbsp;x&nbsp;</span><a href=\"product.php?id=" . $cart_product['product_id'] . "\" title=\"" . $cart_product['product_name'] . "\" class=\"cart_block_product_name truncate3\">" . $cart_product['product_name'] . "</a></div>
                        <span class=\"price\">" . price($cart_product['product_price']) . " €</span>
                    </div>
                    <span class=\"remove_link\"><a rel=\"nofollow\" class=\"ajax_cart_block_remove_link\" href=\"\" data-code=\"" . $cart_product['product_id'] . "\"> </a></span>
                </dt>
            </dl>";

            $subtotal = ($cart_product['product_price'] * $cart_product['product_qty']);
            $total = ($total + $subtotal);
        }
        $cart_box .= '
        <div class="cart-prices">
            <div class="cart-prices-line first-line">
                <span class="price cart_block_shipping_cost ajax_cart_shipping_cost"> '.$langs->trans("FreeShipping").' </span>
                <span> '.$langs->trans("Shipping").' </span>
            </div>
            <div class="cart-prices-line last-line">
                <span class="price cart_block_total ajax_block_cart_total">' . $total . ' €</span>
                <span>'.$langs->trans("Total").'</span>
            </div>
            <p> '.$langs->trans("pricesMayVaryDependingOnYourCountry").' </p>
        </div>
        <p class="cart-buttons">
            <a id="button_order_cart" class="btn btn-default button button-small" href="' . $order_page_url . '" title="'.$langs->trans("checkOut").'" rel="nofollow">
                <span> '.$langs->trans("checkOut").' <i class="icon-chevron-right right"></i>
                </span>
            </a>
        </p>';
        die($cart_box); //exit and output content
    }else{
        die("<p class='cart_block_no_products'> ".$langs->trans("noProducts")." </p>"); //we have empty cart
    }
}

if(isset($_POST['load_popup_products_html']) && $_POST['load_popup_products_html'] == 1)
{
    if(isset($_SESSION['products']) && count($_SESSION['products'])>0){ //if we have session variable
        $total = 0;
        foreach($_SESSION['products'] as $cart_product){ //loop though items and prepare html content
            $subtotal = ($cart_product['product_price'] * $cart_product['product_qty']);
            $total = ($total + $subtotal);
        }
        if(count($_SESSION['products']) == 1){
            $title = '<span class="ajax_cart_product_txt"> '.$langs->trans("thereIsItemInYourCart").' </span>';
        }else{
            $title = '<span class="ajax_cart_product_txt_s"> '.$langs->trans("nbrItemsInCartAjax", count($_SESSION['products'])).' </span>';
        }
        $popup_products_html = '
        <h2>'.$title.'</h2>
        <div class="layer_cart_row">
            <strong class="dark"> '.$langs->trans("totalProductsTaxIncl").' </strong>
            <span class="ajax_block_products_total">'.$total.' €</span>
        </div>
        <div class="layer_cart_row">
            <strong class="dark"> '.$langs->trans("totalShippingTaxIncl").' </strong>
            <span class="ajax_cart_shipping_cost"> '.$langs->trans("freeShipping").' </span>
        </div>
        <div class="layer_cart_row">
            <strong class="dark"> '.$langs->trans("totalTaxIncl").' </strong>
            <span class="ajax_block_cart_total">'.$total.' €</span>
        </div>
        <div class="button-container">
            <span class="continue btn btn-default button exclusive-medium" title="'.$langs->trans("continueShopping").'">
            <span>
                <i class="icon-chevron-left left"></i>'.$langs->trans("continueShopping").' </span>
            </span>
            <a class="btn btn-default button button-medium" href="' . $order_page_url . '" title="'.$langs->trans("proceedToCheckout").'" rel="nofollow">
            <span> '.$langs->trans("proceedToCheckout").' <i class="icon-chevron-right right"></i>
            </span>
            </a>
        </div>';

        die($popup_products_html); //exit and output content
    }
}


//Remove item from shopping cart
if(isset($_GET['remove_code']) && isset($_SESSION['products']))
{
    $product_code   = $_GET['remove_code']; //get the product code to remove

    if(isset($_SESSION['products'][$product_code]))
    {
        unset($_SESSION['products'][$product_code]);
    }

    $total_items = count($_SESSION['products']);
    die(json_encode(array('items'=>$total_items)));
}
