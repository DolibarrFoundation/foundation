<?php // BEGIN PHP
$websitekey=basename(__DIR__);
if (! defined('USEDOLIBARRSERVER') && ! defined('USEDOLIBARREDITOR')) { require_once __DIR__.'/master.inc.php'; } // Load env if not already loaded
require_once DOL_DOCUMENT_ROOT.'/core/lib/website.lib.php';
require_once DOL_DOCUMENT_ROOT.'/core/website.inc.php';
ob_start();
if (! headers_sent()) {	/* because file is included inline when in edit mode and we don't want warning */ 
header('Cache-Control: max-age=3600, public, must-revalidate');
header('Content-type: text/css');
}
// END PHP ?>
@charset "UTF-8";
.bodywebsite button,
button,
select {
  text-transform: none
}
.bodywebsite button,
button {
  -webkit-appearance: button
}
.bodywebsite [class^=icon-],
[class^=icon-] {
  text-decoration: inherit;
  -webkit-font-smoothing: antialiased
}
.truncate3,
div.selector span {
  text-overflow: ellipsis
}
.bodywebsite table,
table {
  background-color: transparent
}
.bodywebsite .nowraponall,
.bodywebsite .price,
.tag_version,
.truncate3,
div.selector span {
  white-space: nowrap
}
body.bodywebsite {
  margin: 0;
  font-family: 'Open Sans',sans-serif
}
.bodywebsite h1 {
  padding: 10px
}
.bodywebsite a,
.bodywebsite b,
.bodywebsite body,
.bodywebsite footer,
.bodywebsite form,
.bodywebsite h2,
.bodywebsite h3,
.bodywebsite h4,
.bodywebsite h5,
.bodywebsite header,
.bodywebsite html,
.bodywebsite i,
.bodywebsite img,
.bodywebsite li,
.bodywebsite nav,
.bodywebsite p,
.bodywebsite section,
.bodywebsite strong,
.bodywebsite ul {
  margin: 0;
  padding: 0;
  border: 0;
  font-style: normal;
  font-variant: normal;
  font-weight: 400;
  font-family: inherit;
  font-size: 100%;
  vertical-align: baseline
}
#product-creation-form,
#product-creation-form label,
.bodywebsite h2,
.bodywebsite h3,
.bodywebsite h4,
.bodywebsite h5 {
  font-family: 'Open Sans',sans-serif!important
}
body {
  margin: 0;
  color: #111;
  background-color: #fff;
  font: 13px/1.42857 Arial,Helvetica,sans-serif
}
.bodywebsite section#welcome_section {
  font-size: 1.1em
}
.bodywebsite img.image-preview {
  max-height: 100px;
  max-width: 200px
}
.bodywebsite .opacitymedium {
  opacity: .5
}
.bodywebsite .divhomepage .rte {
  margin-top: 20px
}
.bodywebsite .wordbreak {
  word-break: break-word;
  word-wrap: break-word
}
.bodywebsite .valignmiddle,
.table tbody > tr > td,
.table tfoot > tr > td,
div.checker,
div.radio,
div.selector {
  vertical-align: middle
}
#cart_summary tfoot td.price,
.bodywebsite .right,
.cart_discount_price {
  text-align: right
}
div#content.marketplacelightbox2 {
  width: calc(100% - 200px);
  height: calc(100% - 100px);
  margin-left: 100px
}
div#content.marketplacelightbox2 img {
  width: 100%;
  height: 100%;
  padding: 5px;
  max-width: 100%;
  object-fit: contain
}
div#lightbox p {
  height: 40px
}
#cart_summary tbody td.cart_avail,
#cart_summary tbody td.cart_product,
.bodywebsite td.download_icon,
.bodywebsite ul.product_list .product-image-container,
.cart_discount_delete,
.text-center {
  text-align: center
}
.bodywebsite #index ul.product_list.tab-pane > li .availability,
.bodywebsite #search_block_top .btn.button-search span,
.bodywebsite .content_sortPagiBar .sortPagiBar.instant_search #productsSortForm,
.bodywebsite .pb-center-column #short_description_block .buttons_bottom_block,
.bodywebsite .unvisible,
.bodywebsite ul.product_list .product-image-container .quick-view-wrapper-mobile,
.bodywebsite ul.product_list .product-image-container .quick-view-wrapper-mobile .quick-view-mobile,
.bodywebsite ul.product_list.grid > li .product-container .product-desc,
.bodywebsite ul.product_list.grid > li .product-container .product-flags,
.std .tab-pane,
a#cke_56 {
  display: none
}
.bodywebsite .cke_dialog_body {
  border: 1px solid #ddd;
  box-shadow: 2px 2px 20px #ddd
}
.bodywebsite a.cke_dialog_ui_button_ok {
  border-color: #a45931;
  background-color: #a45931
}
.bodywebsite a.button,
.bodywebsite span.button,
input.button_large,
input.button_large_disabled {
  display: inline-block;
  position: relative;
  padding: 5px 7px;
  border: 1px solid #c90;
  text-align: left;
  font-weight: 700;
  white-space: normal;
  color: #000;
  cursor: pointer
}
.bodywebsite a.button:hover {
  text-decoration: none;
  background-position: left -50px
}
.bodywebsite a.button:active {
  background-position: left -100px
}
.bodywebsite .button.button-small {
  padding: 0;
  border: none;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  text-shadow: 1px 1px #0003d;
  font: bold 13px/17px Arial,Helvetica,sans-serif;
  color: #fff;
  background: #111
}
.bodywebsite .ajax_add_to_cart_button,
.bodywebsite .button.lnk_view {
  padding: 0;
  border: 1px solid;
  font: 700 17px/21px Arial,Helvetica,sans-serif
}
.bodywebsite .ajax_add_to_cart_button {
  margin-bottom: 10px!important;
  text-shadow: 1px 1px #0003;
  color: #fff
}
.bodywebsite .ajax_add_to_cart_button span {
  display: block;
  padding: 10px 14px;
  border: 1px solid #06b2e6;
  color: #fff
}
.bodywebsite .button.lnk_view {
  border-color: #cacaca #b7b7b7 #9a9a9a;
  text-shadow: 1px 1px #fff;
  color: #333
}
.bodywebsite .button.lnk_view span {
  display: block;
  padding: 10px 14px;
  border: 1px solid #fff;
  background: #f7f7f7;
  background: -moz-linear-gradient(top,#f7f7f7 0,#ededed 100%);
  background: -webkit-gradient(linear,left top,left bottom,color-stop(0,#f7f7f7),color-stop(100%,#ededed));
  background: -webkit-linear-gradient(top,#f7f7f7 0,#ededed 100%);
  background: -o-linear-gradient(top,#f7f7f7 0,#ededed 100%);
  background: -ms-linear-gradient(top,#f7f7f7 0,#ededed 100%);
  background: linear-gradient(to bottom,#f7f7f7 0,#ededed 100%)
}
.bodywebsite .button.lnk_view:hover {
  border-color: #9e9e9e #9e9e9e #c8c8c8
}
.bodywebsite .button.lnk_view:hover span {
  background: #e7e7e7;
  filter: none
}
.bodywebsite .product-name {
  margin-bottom: 0;
  font-size: 15px;
  line-height: 21px;
  color: #3a3939
}
.bodywebsite .page-product-box iframe {
  width: 100%;
  height: 450px
}
.bodywebsite .price.product-price {
  font: 600 21px/26px "Open Sans",sans-serif
}
.bodywebsite .rte ul {
  padding-left: 15px;
  list-style-type: disc
}
.bodywebsite .editorial_block .img-responsive {
  display: unset;
  width: 250px;
  height: 69px;
}
.bodywebsite .editorial_block {
  margin-bottom: 4em!important;
  text-align: center
}
.bodywebsite .editorial_block .rte {
  text-align: justify;
  background: 0 0
}
.bodywebsite .product-image-container .img-responsive {
  width: auto;
  height: auto;
  max-height: 180px
}
.bodywebsite #categories_block_left li span.grower {
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  background: #f6f6f6;
  cursor: pointer;
  font: 14px FontAwesome
}
.bodywebsite #categories_block_left li span.grower.CLOSE:before,
.bodywebsite #categories_block_left li span.grower.OPEN:before {
  content: "\f068";
  display: block;
  width: 30px;
  height: 30px;
  text-align: center;
  line-height: 30px;
  vertical-align: middle;
  color: #333
}
.bodywebsite #categories_block_left li span.grower.CLOSE:before,
.iconAddImage::before {
  content: "\f067";
  color: silver
}
.bodywebsite #categories_block_left li a.selected,
.bodywebsite #categories_block_left li a:hover,
.bodywebsite #categories_block_left li span.grower:hover + a,
.bodywebsite .bottom-pagination-content ul.pagination li > a:hover span,
.bodywebsite .bottom-pagination-content ul.pagination li.active > span span,
.bodywebsite .top-pagination-content ul.pagination li > a:hover span,
.bodywebsite .top-pagination-content ul.pagination li.active > span span {
  background: #f6f6f6
}
.bodywebsite #editorial_block_center p,
.checkbox,
.radio-inline {
  padding-left: 0
}
.bodywebsite #editorial_block_center .rte p,
.bodywebsite .pb-center-column #short_description_block {
  color: #555
}
.bodywebsite .new-box {
  z-index: 1;
  position: absolute;
  top: 0;
  left: 0;
  width: 85px;
  height: 85px;
  overflow: hidden;
  text-align: center;
  color: #fff
}
.bodywebsite .new-label {
  display: block;
  z-index: 1;
  position: absolute;
  top: 16px;
  left: -35px;
  width: 130px;
  padding: 9px 0 7px;
  text-align: center;
  text-shadow: 1px 1px rgba(0,0,0,.24);
  text-transform: uppercase;
  font: 600 12px/12px Arial,Helvetica,sans-serif;
  color: #fff;
  opacity: .8;
  background: #a45931;
  -webkit-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg)
}
[class^=icon-],
ul.step li em {
  font-style: normal
}
.bodywebsite .version-box {
  z-index: 0;
  position: absolute;
  top: -17px;
  left: 70px;
  width: 54px;
  height: 16px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  overflow: hidden;
  text-align: center
}
.bodywebsite .version-label {
  display: block;
  z-index: 1;
  position: absolute;
  width: 54px;
  height: 16px;
  padding-top: 1px;
  padding-left: 2px;
  text-align: center;
  text-transform: uppercase;
  font-size: .8em;
  color: #999;
  background: #eee
}
.bodywebsite ul.product_list .product-name {
  display: inline-block;
  width: 100%;
  overflow: hidden
}
.bodywebsite ul.product_list .availability span {
  display: inline-block;
  margin-bottom: 20px;
  padding: 3px 8px 4px;
  font-weight: 700;
  color: #fff
}
.bodywebsite ul.product_list .availability span.available-now {
  border: 1px solid #36943e;
  background: #55c65e
}
.bodywebsite ul.product_list .availability span.available-dif,
.bodywebsite ul.product_list .availability span.out-of-stock {
  border: 1px solid #e4752b;
  background: #fe9126
}
.bodywebsite ul.product_list .color-list-container,
.bodywebsite ul.product_list.list > li .center-block .comments_note {
  margin-bottom: 12px
}
.bodywebsite ul.product_list .color-list-container ul li {
  display: inline-block;
  width: 26px;
  height: 26px;
  border: 1px solid #d6d4d4
}
.bodywebsite ul.product_list .color-list-container ul li a {
  display: block;
  width: 22px;
  height: 22px;
  margin: 1px
}
.bodywebsite ul.product_list .color-list-container ul li a img {
  display: block;
  width: 22px;
  height: 22px
}
.bodywebsite ul.product_list .product-image-container img {
  margin: 0 auto
}
.bodywebsite .breadcrumb a:after,
.bodywebsite .sale-label {
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg)
}
.bodywebsite ul.product_list .product-image-container .quick-view {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 107px;
  height: 43px;
  margin: -21px 0 0 -53px;
  padding: 13px 0 0;
  text-align: center;
  font: 700 13px/16px Arial,Helvetica,sans-serif;
  color: #777676;
  background: rgba(255,255,255,.82);
  -webkit-box-shadow: rgba(0,0,0,.16) 0 2px 8px;
  -moz-box-shadow: rgba(0,0,0,.16) 0 2px 8px;
  box-shadow: rgba(0,0,0,.16) 0 2px 8px
}
.bodywebsite ul.product_list .comments_note {
  overflow: hidden;
  text-align: left
}
#uniform-selectProductSort,
.bodywebsite #view_scroll_right,
.bodywebsite .col-xs-1,
.bodywebsite .col-xs-10,
.bodywebsite .col-xs-11,
.bodywebsite .col-xs-2,
.bodywebsite .col-xs-3,
.bodywebsite .col-xs-4,
.bodywebsite .col-xs-5,
.bodywebsite .col-xs-6,
.bodywebsite .col-xs-7,
.bodywebsite .col-xs-8,
.bodywebsite .col-xs-9,
.bodywebsite .content_sortPagiBar .sortPagiBar #productsSortForm .selector,
.bodywebsite .content_sortPagiBar .sortPagiBar .nbrItemPage,
.bodywebsite .content_sortPagiBar .sortPagiBar .nbrItemPage #uniform-nb_item,
.bodywebsite .content_sortPagiBar .sortPagiBar label,
.bodywebsite .content_sortPagiBar .sortPagiBar select,
.bodywebsite ul.product_list .comments_note .star_content,
.checkbox .checker,
.checkbox input[type=checkbox],
.radio input[type=radio],
.radio-inline .checker,
.radio-inline input[type=radio],
ul.footer_links li {
  float: left
}
.bodywebsite ul.product_list .comments_note .nb-comments {
  overflow: hidden;
  font-style: italic
}
.bodywebsite ul.product_list.grid > li .product-container .functional-buttons,
.tbody-image-cover td {
  padding: 0!important
}
.bodywebsite ul.product_list .functional-buttons div a,
.bodywebsite ul.product_list .functional-buttons div label {
  font-weight: 700;
  color: #777676;
  cursor: pointer
}
.bodywebsite ul.product_list .functional-buttons div a:hover,
.bodywebsite ul.product_list .functional-buttons div label:hover {
  color: #000
}
.bodywebsite ul.product_list .functional-buttons div.wishlist {
  border-right: 1px solid #d6d4d4
}
.bodywebsite ul.product_list .functional-buttons div.wishlist a:before {
  content: "\f08a";
  display: inline-block;
  margin-right: 3px;
  padding: 0 3px;
  font-family: fontawesome
}
.bodywebsite ul.product_list .functional-buttons div.wishlist a.checked:before {
  content: "\f004"
}
.bodywebsite ul.product_list .functional-buttons div.compare a:before {
  content: "\f067";
  display: inline-block;
  margin-right: 3px;
  font-family: fontawesome
}
.bodywebsite .icon-minus:before,
.bodywebsite ul.product_list .functional-buttons div.compare a.checked:before {
  content: "\f068"
}
.bodywebsite ul.product_list.grid > li {
  padding-bottom: 20px;
  text-align: center
}
.bodywebsite ul.product_list.grid > li .product-container {
  position: relative;
  padding: 0;
  background: 0 0
}
.bodywebsite ul.product_list.grid > li .product-container .product-image-container {
  position: relative;
  margin-bottom: 13px;
  padding: 9px;
  border: 1px solid #d6d4d4;
  background: #fff
}
.bodywebsite ul.product_list.grid > li .product-container .product-image-container .content_price {
  display: none;
  position: absolute;
  bottom: -1px;
  left: 0;
  width: 100%;
  padding: 9px 0;
  background: #000
}
.bodywebsite #header #languages-block-top div.current,
.bodywebsite #header #languages-block-top div.current:after,
.bodywebsite #header .cart_block .price,
.bodywebsite #header .cart_block a,
.bodywebsite .content_scene_cat a,
.bodywebsite .footer-container #footer a:hover,
.bodywebsite .footer-container #footer h4 a,
.bodywebsite ul.product_list.grid > li .product-container .product-image-container .content_price span {
  color: #fff
}
.bodywebsite ul.product_list.grid > li .product-container .product-image-container .content_price span.old-price {
  color: #b1b0b0
}
.bodywebsite ul.product_list.grid > li .product-container h5 {
  padding: 0 15px 7px;
  min-height: 50px
}
.bodywebsite ul.product_list.grid > li .product-container .comments_note .star_content {
  margin: 0 3px 12px 59px
}
.bodywebsite ul.product_list.grid > li .product-container .content_price {
  padding-bottom: 9px;
  line-height: 21px
}
#cart_summary tbody td.cart_unit .price span,
.bodywebsite ul.product_list.grid>li .product-container .old-price,
.bodywebsite ul.product_list.grid>li .product-container .price,
.bodywebsite ul.product_list.grid>li .product-container .price-percent-reduction,
.btn-filter,
.checkbox div.radio,
.e404 a,
.info-inline,
.radio-inline div.radio {
  display: inline-block
}
.bodywebsite #layer_cart .layer_cart_cart .button-container span.exclusive-medium,
.bodywebsite ul.product_list.grid > li .product-container .old-price {
  margin-right: 5px
}
.bodywebsite .block .products-block .product-description,
.bodywebsite ul.product_list.grid > li .product-container .button-container {
  margin-bottom: 14px
}
.bodywebsite ul.product_list.grid > li .product-container .button-container .ajax_add_to_cart_button,
.bodywebsite ul.product_list.grid > li .product-container .button-container .lnk_view,
.bodywebsite ul.product_list.grid > li .product-container .button-container span.button {
  margin: 0 6px 4px
}
.bodywebsite ul.product_list.grid > li .product-container .functional-buttons div {
  float: left;
  width: 50%;
  padding: 3px 0 4px
}
@media (min-width:480px) and (max-width:991px) {
  .bodywebsite ul.product_list.grid > li.first-item-of-tablet-line {
    clear: left
  }
}
.bodywebsite ul.product_list.grid li.hovered h5 {
  min-height: 30px
}
.bodywebsite ul.product_list.list > li .product-container {
  padding: 30px 0;
  border-top: 1px solid #d6d4d4
}
.bodywebsite ul.product_list.list > li .product-image-container {
  position: relative;
  padding: 9px;
  border: 1px solid #d6d4d4
}
.bodywebsite .shopping_cart .ajax_cart_total,
.bodywebsite ul.product_list.list > li .product-image-container .content_price,
.shopping_cart .ajax_cart_total {
  display: none!important
}
.bodywebsite ul.product_list.list > li .product-flags {
  margin: -5px 0 10px;
  color: #333
}
.bodywebsite .special-price,
.bodywebsite ul.product_list.list > li .product-flags .discount,
table.discount i.icon-remove {
  color: #f13340
}
.bodywebsite .footer-container #footer ul li,
.bodywebsite ul.product_list.list > li h5 {
  padding-bottom: 8px
}
.bodywebsite ul.product_list.list > li .product-desc {
  margin-bottom: 15px;
  text-align: justify
}
.bodywebsite #search_info_section,
.bodywebsite .page-product-box,
.bodywebsite ul.product_list.list > li .right-block .right-block-content .content_price {
  padding-bottom: 10px
}
.bodywebsite ul.product_list.list > li .right-block .right-block-content .content_price span {
  display: inline-block;
  margin-top: -4px;
  margin-bottom: 14px
}
.bodywebsite #cms #center_column .testimonials .inner span.before,
.bodywebsite ul.product_list.list > li .right-block .right-block-content .content_price span.old-price {
  margin-right: 8px
}
.bodywebsite ul.product_list.list > li .right-block .right-block-content .button-container {
  padding-bottom: 20px;
  overflow: hidden
}
#addImageBtn,
#addImageBtn2,
.bodywebsite #layer_cart .layer_cart_cart .button-container .btn,
.bodywebsite .pb-center-column p,
.bodywebsite ul.product_list.list > li .right-block .right-block-content .button-container .btn {
  margin-bottom: 10px
}
@media (min-width:992px) {
  .bodywebsite .container {
    max-width: 970px
  }
  .bodywebsite .col-md-3,
  .bodywebsite .col-md-6 {
    float: left
  }
  .bodywebsite .col-md-3 {
    width: 25%
  }
  .bodywebsite .col-md-6 {
    width: 50%
  }
  .bodywebsite ul.product_list.grid > li.first-in-line {
    clear: left
  }
  .bodywebsite ul.product_list.list > li .right-block .right-block-content {
    margin: 0;
    padding-bottom: 16px;
    padding-left: 15px;
    border-left: 1px solid #d6d4d4
  }
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .button-container .btn {
    float: left;
    clear: both
  }
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons {
    overflow: hidden
  }
}
.bodywebsite #layer_cart .continue,
.bodywebsite button,
.bodywebsite ul.product_list.list>li .right-block .right-block-content .functional-buttons a,
button {
  cursor: pointer
}
.bodywebsite #cms #center_column .list-1 li:first-child,
.bodywebsite #header .cart_block .cart-prices,
.bodywebsite .breadcrumb a.home:before,
.bodywebsite .cart_block .cart-prices .cart-prices-line.last-line,
.bodywebsite a img,
.bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons .wishlist,
.cart_block .cart-prices .cart-prices-line.last-line {
  border: none
}
.bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons .compare {
  padding-top: 10px
}
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous,
.bodywebsite .top-pagination-content ul.pagination li.pagination_previous,
.bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons .compare a:before {
  margin-right: 10px
}
@media (min-width:1200px) {
  .bodywebsite ul.product_list .product-image-container .quick-view,
  .bodywebsite ul.product_list.grid > li .product-container .button-container,
  .bodywebsite ul.product_list.grid > li .product-container .comments_note,
  .bodywebsite ul.product_list.grid > li .product-container .functional-buttons,
  .bodywebsite ul.product_list.grid > li.hovered .product-container .content_price {
    display: none
  }
  .bodywebsite ul.product_list.grid > li.hovered .product-container {
    z-index: 10;
    position: relative;
    -webkit-box-shadow: rgba(0,0,0,.17) 0 0 13px;
    -moz-box-shadow: rgba(0,0,0,.17) 0 0 13px;
    box-shadow: rgba(0,0,0,.17) 0 0 13px
  }
  .bodywebsite ul.product_list.grid > li.hovered .product-container .button-container,
  .bodywebsite ul.product_list.grid > li.hovered .product-container .comments_note,
  .bodywebsite ul.product_list.grid > li.hovered .product-container .functional-buttons,
  .bodywebsite ul.product_list.grid > li.hovered .product-container .product-image-container .content_price,
  .bodywebsite ul.product_list.grid > li.hovered .product-container .product-image-container .quick-view,
  .bodywebsite ul.product_list.list > li:hover .product-image-container .quick-view {
    display: block
  }
  .bodywebsite #blockpack ul > li.last-line,
  .bodywebsite #index ul.product_list.tab-pane > li.last-line {
    margin-bottom: 0;
    padding-bottom: 0;
    border: none
  }
  .bodywebsite #index ul.product_list.tab-pane > li {
    margin-bottom: 0;
    padding-bottom: 85px
  }
}
.bodywebsite #index ul.product_list.tab-pane > li {
  margin-bottom: 10px;
  padding-bottom: 10px
}
.bodywebsite #index ul.product_list.tab-pane > li.last-line {
  margin-bottom: 0;
  padding-bottom: 0;
  border: none
}
@media (min-width:480px) and (max-width:767px) {
  .bodywebsite ul.product_list .functional-buttons div.wishlist {
    border-right: 0
  }
  .bodywebsite ul.product_list .functional-buttons div.compare a:before,
  .bodywebsite ul.product_list .functional-buttons div.wishlist a:before {
    display: none
  }
  .bodywebsite ul.product_list.grid > li {
    float: left;
    width: 50%
  }
  .bodywebsite #blockpack ul > li.first-item-of-tablet-line,
  .bodywebsite #index ul.product_list.tab-pane > li.first-item-of-tablet-line {
    clear: none
  }
  .bodywebsite #blockpack ul > li.first-item-of-mobile-line,
  .bodywebsite #index ul.product_list.tab-pane > li.first-item-of-mobile-line {
    clear: left
  }
}
.bodywebsite #view_scroll_right:before {
  content: "\f138"
}
.bodywebsite #search_block_top .btn.button-search:before {
  content: "\f002";
  display: block;
  width: 100%;
  text-align: center;
  font: 17px fontawesome
}
.bodywebsite .ajax_add_to_cart_button {
  border-color: #a45931
}
.bodywebsite .ajax_add_to_cart_button span,
.bodywebsite .price-percent-reduction {
  border-color: #a45931;
  background: #a45931
}
.bodywebsite .ajax_add_to_cart_button:hover {
  border-color: #333
}
.bodywebsite .ajax_add_to_cart_button:hover span {
  border-color: #333;
  background: #333;
  filter: none
}
.bodywebsite .price,
.bodywebsite .price.product-price {
  color: #a45931
}
.bodywebsite .old-price,
.bodywebsite .original-price {
  color: #b1b0b0!important
}
.bodywebsite ul.product_list.grid > li .product-container:hover {
  background: #fff;
  -webkit-box-shadow: 0 5px 13px #0002b;
  -moz-box-shadow: 0 5px 13px #0002b;
  box-shadow: 0 5px 13px #0002b
}
.bodywebsite ul.product_list.grid > li .product-container .product-image-container .product_img_link {
  display: flex;
  flex-direction: column;
  justify-content: center;
  height: 100%;
  vertical-align: middle
}
.bodywebsite #languages-block-top {
  float: right;
  position: relative;
  border-left: 1px solid #515151
}
.bodywebsite #languages-block-top div.current:after {
  content: "\f0d7"
}
.bodywebsite #header .shopping_cart > a:first-child:after {
  content: "\f0d7";
  display: inline-block;
  float: right;
  padding: 0;
  color: #ddd;
  font: 17px FontAwesome
}
.bodywebsite #header .shopping_cart > a:first-child:hover:after {
  content: "\f0d8";
  padding: 0
}
.bodywebsite .shopping_cart > a:first-child {
  display: block;
  padding: 8px 10px 10px 16px;
  border-radius: 4px;
  overflow: hidden;
  text-shadow: 1px 1px #0003;
  font-weight: 700;
  color: #eee;
  background: #a45931
}
.bodywebsite .cart_block .cart-prices .cart-prices-line,
.cart_block .cart-prices .cart-prices-line {
  padding: 7px 0;
  border-bottom: 1px solid #515151;
  overflow: hidden
}
.bodywebsite .cart_block .cart-buttons {
  margin: 0;
  padding: 20px 20px 10px;
  overflow: hidden;
  background: #eaeaea
}
.bodywebsite .cart_block .cart-buttons a,
.cart_block .cart-buttons a {
  float: left;
  width: 100%;
  margin-right: 10px;
  margin-bottom: 10px;
  text-align: center
}
.bodywebsite .cart_block .cart-buttons a#button_order_cart,
.cart_block .cart-buttons a#button_order_cart {
  margin-right: 0;
  border: none
}
.bodywebsite .cart_block .cart-buttons a#button_order_cart span {
  padding: 7px 0;
  border: 1px solid #845931;
  font-size: 1.1em;
  background: #a45931
}
.bodywebsite .cart_block .cart-buttons a#button_order_cart:hover span {
  border: 1px solid #845931;
  color: #fff;
  background: #845931
}
@media (max-width:1200px) {
  .bodywebsite .shopping_cart {
    float: none;
    width: 100%;
    margin: 0 auto
  }
}
.bodywebsite #layer_cart .layer_cart_product {
  position: static;
  padding: 30px!important;
  overflow: hidden
}
.bodywebsite #layer_cart .layer_cart_product h2 {
  margin-bottom: 22px;
  padding-right: 100px;
  font: 400 23px/29px Arial,Helvetica,sans-serif;
  color: #a45931
}
@media (max-width:767px) {
  .bodywebsite header .row #header_logo {
    padding-top: 15px
  }
  .bodywebsite header .row #header_logo img {
    margin: 0 auto
  }
  .bodywebsite .content_sortPagiBar .sortPagiBar {
    padding-bottom: 8px
  }
  .bodywebsite .block .title_block,
  .bodywebsite .block h4 {
    position: relative
  }
  .bodywebsite .block .title_block:after,
  .bodywebsite .block h4:after {
    content: "\f055";
    display: block;
    position: absolute;
    top: 15px;
    right: 0;
    width: 36px;
    height: 36px;
    font: 400 26px FontAwesome
  }
  .bodywebsite .footer-container #footer h4 {
    position: relative;
    margin-bottom: 0;
    padding-bottom: 13px
  }
  .bodywebsite .footer-container #footer h4:after {
    content: "\f055";
    display: block;
    position: absolute;
    top: 1px;
    right: 0;
    font-family: FontAwesome
  }
  .bodywebsite ul.product_list .product-image-container .quick-view {
    display: none
  }
  .bodywebsite ul.product_list.grid > li .product-container {
    padding-top: 20px;
    padding-bottom: 10px
  }
  .bodywebsite ul.product_list.grid > li .product-container .product-image-container {
    margin-right: auto;
    margin-left: auto;
    max-width: 290px
  }
}
.bodywebsite .width98 {
  width: 98px!important
}
.bodywebsite .truncate2 {
  display: -webkit-box;
  overflow: hidden;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical
}
.bodywebsite a.product-name.truncate2 {
  max-height: 45px
}
.bodywebsite html {
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -webkit-tap-highlight-color: transparent;
  font: 62.5%/1 sans-serif
}
.bodywebsite ul {
  margin-top: 0;
  margin-bottom: 9px;
  list-style: none
}
.bodywebsite table {
  max-width: 100%;
  border-collapse: collapse;
  border-spacing: 0
}
.bodywebsite td {
  text-align: left;
  font-weight: 400;
  vertical-align: middle
}
.bodywebsite #reduction_amount span,
.bodywebsite #reduction_percent span,
.bodywebsite footer,
.bodywebsite header,
.bodywebsite nav,
.bodywebsite section,
.std .tab-pane.active {
  display: block
}
.bodywebsite body {
  margin: 0;
  font-family: Arial,Helvetica,sans-serif
}
.bodywebsite #cms #center_column p.bottom-indent,
.bodywebsite hr {
  margin-bottom: 18px
}
.bodywebsite .alert .alert-link,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_next > a span b,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_next > span span b,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous > a span b,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous > span span b,
.bodywebsite .top-pagination-content ul.pagination li.pagination_next > a span b,
.bodywebsite .top-pagination-content ul.pagination li.pagination_next > span span b,
.bodywebsite .top-pagination-content ul.pagination li.pagination_previous > a span b,
.bodywebsite .top-pagination-content ul.pagination li.pagination_previous > span span b,
.bodywebsite b,
.bodywebsite strong,
ul.step li.step_current_end {
  font-weight: 700
}
.bodywebsite hr {
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 0;
  margin-top: 18px;
  border: 0;
  border-top: 1px solid #eee
}
.bodywebsite img {
  border: 0;
  vertical-align: middle
}
.bodywebsite button,
.bodywebsite input {
  font-family: inherit;
  line-height: inherit
}
.bodywebsite button::-moz-focus-inner,
.bodywebsite input::-moz-focus-inner {
  padding: 0;
  border: 0
}
.bodywebsite *,
.bodywebsite:after,
.bodywebsite:before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box
}
.bodywebsite .img-responsive {
  display: block;
  height: auto;
  max-width: 100%
}
.bodywebsite h1,
.bodywebsite h2,
.bodywebsite h3,
.bodywebsite h4,
.bodywebsite h5 {
  font-family: open sans,sans-serif!important;
  font-weight: 500;
  line-height: 1.1
}
.bodywebsite button,
.bodywebsite input,
button,
input,
select {
  font-family: inherit
}
.bodywebsite h1,
.bodywebsite h2,
.bodywebsite h3 {
  margin-top: 2px;
  margin-bottom: 9px
}
.bodywebsite h4,
.bodywebsite h5 {
  margin-top: 9px;
  margin-bottom: 9px
}
.bodywebsite h2 {
  font-size: 27px
}
.bodywebsite h4 {
  font-size: 17px
}
.bodywebsite .price,
.bodywebsite h5,
.table-body,
.tbody-image-cover {
  font-size: 13px
}
.bodywebsite #header .block_content,
.bodywebsite .alert > p,
.bodywebsite .alert > ul,
.bodywebsite .box p,
.bodywebsite .content_scene_cat p,
.bodywebsite ul ul,
.box p {
  margin-bottom: 0
}
.bodywebsite .container {
  margin-right: auto;
  margin-left: auto;
  padding-right: 15px;
  padding-left: 15px
}
.bodywebsite .row,
.row {
  margin-right: -15px;
  margin-left: -15px
}
.bodywebsite .clearfix:after,
.bodywebsite .clearfix:before,
.bodywebsite .container:after,
.bodywebsite .container:before,
.bodywebsite .nav:after,
.bodywebsite .nav:before,
.bodywebsite .row:after,
.bodywebsite .row:before,
.row:after,
.row:before {
  content: " ";
  display: table
}
.bodywebsite .clearfix:after,
.bodywebsite .container:after,
.bodywebsite .nav:after,
.bodywebsite .row:after,
.clearfix:after,
.row:after {
  clear: both
}
@media (min-width:768px) {
  .bodywebsite .container {
    max-width: 750px
  }
  .bodywebsite .col-sm-2,
  .bodywebsite .col-sm-3,
  .bodywebsite .col-sm-4,
  .bodywebsite .col-sm-9,
  .bodywebsite header .row #header_logo {
    float: left
  }
  .bodywebsite .col-sm-2 {
    width: 33%
  }
  .bodywebsite .col-sm-9 {
    width: 75%
  }
  .bodywebsite .col-sm-12 {
    width: 100%
  }
  .bodywebsite .col-sm-3,
  .bodywebsite .col-sm-4,
  .bodywebsite header .row #header_logo {
    width: 25%
  }
}
@media (min-width:992px) {
  .bodywebsite .container {
    max-width: 970px
  }
  .bodywebsite .col-md-3,
  .bodywebsite .col-md-5,
  .bodywebsite .col-md-6 {
    float: left
  }
  .bodywebsite .col-md-3 {
    width: 25%
  }
  .bodywebsite .col-md-5 {
    width: 41.66667%
  }
  .bodywebsite .col-md-6 {
    width: 50%
  }
}
.bodywebsite .form-control {
  -webkit-box-shadow: inset 0 1px 1px #00013;
  box-shadow: inset 0 1px 1px #00013
}
.bodywebsite .form-control:focus {
  -webkit-box-shadow: inset 0 1px 1px #00013 0 8px #66afe999;
  box-shadow: inset 0 1px 1px #00013 0 8px #66afe999
}
.bodywebsite .btn:active {
  -webkit-box-shadow: inset 0 3px 5px #00020;
  box-shadow: inset 0 3px 5px #00020
}
.bodywebsite .nav {
  margin-bottom: 0;
  padding-left: 0;
  list-style: none
}
.bodywebsite .breadcrumb {
  list-style: none;
  background-color: #f6f6f6
}
.bodywebsite .form-control:-moz-placeholder,
.bodywebsite .form-control:-ms-input-placeholder,
.bodywebsite .form-control::-moz-placeholder,
.bodywebsite .form-control::-webkit-input-placeholder {
  color: #999
}
.bodywebsite .hidden {
  display: none!important;
  visibility: hidden!important
}
.bodywebsite [class^=icon-] {
  display: inline;
  width: auto;
  height: auto;
  margin-top: 0;
  font-family: FontAwesome;
  font-style: normal;
  font-weight: 400;
  line-height: normal;
  vertical-align: baseline;
  background-image: none;
  background-position: 0 0;
  background-repeat: repeat
}
.bodywebsite [class^=icon-]:before,
[class^=icon-]:before {
  display: inline-block;
  text-decoration: inherit;
  speak: none
}
.bodywebsite a [class^=icon-] {
  display: inline
}
.bodywebsite .icon-ok:before {
  content: "\f00c"
}
.bodywebsite .icon-home:before {
  content: "\f015"
}
.bodywebsite .icon-repeat:before {
  content: "\f01e"
}
.bodywebsite .icon-check:before {
  content: "\f046"
}
.bodywebsite .icon-chevron-left:before {
  content: "\f053"
}
.bodywebsite .icon-chevron-right:before,
.icon-chevron-right:before {
  content: "\f054"
}
.bodywebsite .icon-plus:before {
  content: "\f067"
}
.bodywebsite .icon-warning-sign:before {
  content: "\f071"
}
.bodywebsite .icon-calendar:before {
  content: "\f073"
}
.bodywebsite .icon-save:before {
  content: "\f0c7"
}
.bodywebsite .icon-caret-right:before {
  content: "\f0da"
}
.bodywebsite .icon-puzzle-piece:before {
  content: "\f12e"
}
@media only screen and (min-width:1200px) {
  .bodywebsite .container {
    padding-right: 0;
    padding-left: 0
  }
}
.bodywebsite body {
  height: 100%;
  min-width: 320px;
  font-size: 13px;
  line-height: 18px;
  color: #111
}
.bodywebsite #header {
  z-index: 1001
}
.bodywebsite .columns-container,
.bodywebsite .header-container {
  background: #fff
}
.bodywebsite #columns {
  position: relative;
  padding-top: 15px;
  padding-bottom: 50px
}
.bodywebsite header {
  z-index: 1;
  position: relative;
  padding-bottom: 15px;
  background: #fff
}
.bodywebsite header .banner {
  max-height: 100%;
  background: #000
}
.bodywebsite header .nav,
.btn.btn-default.btn-lg.btn-add-to-cart-product:hover {
  background: #111
}
.bodywebsite .col-xs-12,
.bodywebsite header .nav nav {
  width: 100%
}
.bodywebsite #categories_block_left li,
.bodywebsite .footer-container #footer .row,
.bodywebsite form#searchbox,
.bodywebsite header .row,
.cart_block dd {
  position: relative
}
.bodywebsite header .row #header_logo {
  padding-top: 22px
}
.bodywebsite #cms #center_column #admin-action-cms p,
.bodywebsite header .banner .row,
.bodywebsite header .nav .row {
  margin: 0
}
@media (max-width:992px) {
  .bodywebsite header .row #header_logo {
    padding-top: 40px
  }
}
@media (min-width:767px) {
  .bodywebsite header .row #header_logo + .col-sm-4 + .col-sm-4 {
    float: right
  }
}
.bodywebsite .button.button-small span {
  display: block;
  padding: 3px 8px;
  border: 1px solid
}
.bodywebsite .button.button-small span i {
  margin-right: 5px;
  vertical-align: 0
}
.bodywebsite .button.button-small span i.right {
  margin-right: 0;
  margin-left: 5px
}
.bodywebsite .button.button-small span:hover {
  border-color: #303030 #303030 #666 #444;
  color: #fff;
  background: #575757
}
.bodywebsite .button.button-medium {
  -webkit-border-radius: 0
}
.bodywebsite #view_scroll_left:hover:before,
.bodywebsite #view_scroll_right:hover:before,
.bodywebsite .block .title_block a:hover,
.bodywebsite .block h4 a:hover,
.bodywebsite .btn.button-minus:hover,
.bodywebsite .btn.button-plus:hover,
.bodywebsite .content_sortPagiBar .display li.selected i,
.bodywebsite .content_sortPagiBar .display_m li.selected i,
.bodywebsite .dark,
.bodywebsite .pb-left-column #image-block #view_full_size .span_link:hover:after,
.bodywebsite label {
  color: #333
}
.bodywebsite .button.button-medium span i.right,
.button.button-medium span i.right {
  margin-right: 0;
  margin-left: 9px
}
.bodywebsite .btn.button-minus,
.bodywebsite .btn.button-plus {
  padding: 0;
  border: 1px solid;
  border-color: #dedcdc #c1bfbf #b5b4b4 #dad8d8;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  text-shadow: 1px -1px #0000d;
  font-size: 14px;
  line-height: 14px;
  color: silver
}
.bodywebsite .btn.button-minus span,
.bodywebsite .btn.button-plus span {
  display: block;
  width: 100%;
  height: 25px;
  padding: 4px 0 0;
  border: 1px solid #fff;
  text-align: center;
  vertical-align: middle;
  background: #fff;
  background: -moz-linear-gradient(top,#fff 0,#fbfbfb 100%);
  background: -webkit-gradient(linear,left top,left bottom,color-stop(0,#fff),color-stop(100%,#fbfbfb));
  background: -webkit-linear-gradient(top,#fff 0,#fbfbfb 100%);
  background: -o-linear-gradient(top,#fff 0,#fbfbfb 100%);
  background: -ms-linear-gradient(top,#fff 0,#fbfbfb 100%);
  background: linear-gradient(to bottom,#fff 0,#fbfbfb 100%)
}
.bodywebsite .btn.button-minus-order span,
.bodywebsite .btn.button-plus-order span {
  width: 25px
}
.bodywebsite .btn.button-minus:hover span,
.bodywebsite .btn.button-plus:hover span {
  background: #f6f6f6;
  filter: none
}
.bodywebsite .button.exclusive-medium {
  padding: 0;
  border: 1px solid;
  border-color: #cacaca #b7b7b7 #9a9a9a;
  text-shadow: 1px 1px #fff;
  font-size: 17px;
  font-weight: 700;
  line-height: 21px;
  color: #333
}
.bodywebsite .sale-label:after,
.bodywebsite .sale-label:before {
  content: ".";
  position: absolute;
  bottom: -3px;
  width: 0;
  height: 0;
  border: 4px solid #ad2b34;
  text-indent: -5000px
}
.bodywebsite .button.exclusive-medium span {
  display: block;
  padding: 9px 10px 11px;
  border: 1px solid #fff;
  background: #f7f7f7;
  background: -moz-linear-gradient(top,#f7f7f7 0,#ededed 100%);
  background: -webkit-gradient(linear,left top,left bottom,color-stop(0,#f7f7f7),color-stop(100%,#ededed));
  background: -webkit-linear-gradient(top,#f7f7f7 0,#ededed 100%);
  background: -o-linear-gradient(top,#f7f7f7 0,#ededed 100%);
  background: -ms-linear-gradient(top,#f7f7f7 0,#ededed 100%);
  background: linear-gradient(to bottom,#f7f7f7 0,#ededed 100%)
}
.bodywebsite .button.exclusive-medium span:hover {
  border-color: #9e9e9e #c2c2c2 #c8c8c8
}
.bodywebsite .form-control.grey,
.table tfoot tr {
  background: #fbfbfb
}
.bodywebsite .price-percent-reduction {
  display: inline-block;
  padding: 0 5px 0 3px;
  border: 1px solid #d02a2c;
  font: 600 21px/24px "Open Sans",sans-serif;
  color: #fff
}
.bodywebsite .sale-box {
  z-index: 0;
  position: absolute;
  top: -4px;
  right: -5px;
  width: 85px;
  height: 85px;
  overflow: hidden;
  text-align: center
}
.bodywebsite .sale-label {
  display: block;
  z-index: 1;
  position: absolute;
  top: 16px;
  right: -33px;
  width: 130px;
  padding: 9px 0 7px;
  text-align: center;
  text-shadow: 1px 1px #0003d;
  text-transform: uppercase;
  font: 700 14px/12px Arial,Helvetica,sans-serif;
  color: #fff;
  transform: rotate(45deg)
}
.bodywebsite .sale-label:before {
  right: 4px;
  -webkit-transform: rotate(225deg);
  -ms-transform: rotate(225deg);
  transform: rotate(225deg)
}
.bodywebsite .sale-label:after {
  left: 5px;
  -webkit-transform: rotate(135deg);
  -ms-transform: rotate(135deg);
  transform: rotate(135deg)
}
#my-account .addresses-lists,
.bodywebsite .block,
.bodywebsite .pb-center-column {
  margin-bottom: 30px
}
.bodywebsite .block .title_block,
.bodywebsite .block h4 {
  margin-bottom: 20px;
  padding: 14px 5px 17px 20px;
  border-top: 5px solid #333;
  text-transform: uppercase;
  font: 600 18px/22px "Open Sans",sans-serif;
  color: #555454;
  background: #f6f6f6
}
.bodywebsite .block .title_block a,
.bodywebsite .block h4 a {
  color: #555454
}
.bodywebsite .block .products-block li {
  margin-bottom: 20px;
  padding: 0 0 20px;
  border-bottom: 1px solid #d6d4d4
}
.bodywebsite .block .products-block li .products-block-image {
  float: left;
  margin-right: 19px;
  border: 1px solid #d6d4d4
}
.bodywebsite .block .products-block li .product-content,
.bodywebsite .tags_block .block_content,
.truncate3 {
  overflow: hidden
}
.bodywebsite .block .products-block li .product-content h5 {
  margin: -3px 0 0
}
.bodywebsite .block .products-block .product-name {
  font-size: 15px;
  line-height: 18px
}
.bodywebsite .block .products-block .price-percent-reduction {
  padding: 1px 6px;
  font: 700 14px/17px Arial,Helvetica,sans-serif
}
.bodywebsite h3.page-product-heading {
  position: relative;
  margin: 0 0 20px;
  padding: 14px 20px 17px;
  border: 1px solid #d6d4d4;
  text-transform: uppercase;
  color: #555454;
  background: #fbfbfb;
  font: 600 18px/20px "open sans",sans-serif
}
.bodywebsite #page .rte {
  padding: 0!important;
  background: 0 0;
  word-wrap: break-word
}
.bodywebsite #page .rte.fulldescription {
    overflow-x: auto;   
}
.bodywebsite .breadcrumb {
  display: inline-block;
  z-index: 1;
  position: relative;
  margin-bottom: 16px;
  padding: 0 11px;
  min-height: 6px;
  border: 1px solid #d6d4d4;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  overflow: hidden;
  font-size: 12px;
  font-weight: 700;
  line-height: 24px
}
.bodywebsite .breadcrumb .navigation-pipe {
  display: inline-block;
  width: 18px;
  text-indent: -5000px
}
.bodywebsite .breadcrumb a {
  display: inline-block;
  z-index: 2;
  position: relative;
  margin-left: -26px;
  padding: 0 15px 0 22px;
  color: #333;
  background: #fff
}
.bodywebsite .breadcrumb a.home {
  display: inline-block;
  z-index: 99;
  width: 38px;
  height: 24px;
  margin: 0 1px 0 -11px;
  padding: 0;
  -webkit-border-top-left-radius: 3px;
  -webkit-border-bottom-left-radius: 3px;
  -moz-border-radius-topleft: 3px;
  -moz-border-radius-bottomleft: 3px;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
  text-align: center;
  font-size: 20px;
  line-height: 20px;
  color: #777
}
.bodywebsite .breadcrumb a:after,
.bodywebsite .breadcrumb a:before {
  content: ".";
  display: inline-block;
  z-index: -1;
  position: absolute;
  top: 3px;
  width: 18px;
  height: 18px;
  border-top: 1px solid #d6d4d4;
  border-right: 1px solid #d6d4d4;
  border-radius: 2px;
  text-indent: -5000px
}
.bodywebsite .breadcrumb a.home i {
  vertical-align: -1px
}
.bodywebsite .breadcrumb a:after {
  right: -10px;
  background: #fff;
  transform: rotate(45deg)
}
.bodywebsite .breadcrumb a:before {
  left: -10px;
  background: 0 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg)
}
.bodywebsite .breadcrumb a:hover,
.bodywebsite .content_scene_cat .content_scene,
.bodywebsite .content_scene_cat .content_scene .cat_desc a,
.bodywebsite .footer-container #footer,
.bodywebsite .footer-container #footer a {
  color: #777
}
.bodywebsite .footer-container {
  background-color: #111
}
.bodywebsite #cms #center_column .block-cms,
.bodywebsite .footer-container .container {
  padding-bottom: 20px
}
.bodywebsite .footer-container #footer .footer-block {
  margin-top: 45px
}
.bodywebsite .footer-container #footer h4 {
  margin: 0 0 13px;
  font: 600 18px/22px "Open Sans",sans-serif;
  color: #fff;
  cursor: pointer
}
.bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive:before,
.bodywebsite .box-info-product .exclusive:before {
  content: "\f07a";
  z-index: 2;
  top: 0;
  bottom: 0;
  left: 0;
  width: 51px;
  text-align: center;
  text-shadow: 0 1px #015883;
  font: 25px/47px fontawesome
}
.bodywebsite .footer-container #footer ul li a {
  text-shadow: 1px 1px 0 #0006;
  font-weight: 700
}
.bodywebsite .page-product-box > div > table {
  width: 100%!important;
  font-size: 13px!important
}
.bodywebsite .page-product-box img,
.bodywebsite .primary_block .pb-left-column img {
  height: auto;
  max-width: 100%
}
.bodywebsite div.primary_block div#views_block {
  float: right;
  width: 56%
}
.bodywebsite #thumbs_list li a.shown,
.bodywebsite #thumbs_list li a:hover {
  border-color: transparent!important
}
.bodywebsite .product-image-container {
  height: 200px
}
@media only screen and (-webkit-min-device-pixel-ratio:2),
only screen and (min-device-pixel-ratio:2) {
  .bodywebsite .replace-2x {
    font-size: 1px
  }
}
.bodywebsite .primary_block {
  margin-bottom: 40px
}
.bodywebsite .top-hr {
  height: 5px;
  margin: 2px 15px 31px;
  background: #000
}
.bodywebsite .pb-left-column #image-block {
  display: block;
  display: grid;
  position: relative;
  justify-content: center;
  padding: 5px;
  min-height: 371px;
  min-width: 100%;
  border: 1px solid #dbdbdb;
  background: #fff;
  cursor: pointer
}
.bodywebsite .pb-left-column #image-block img {
  width: 100%;
  background: #fbfbfb
}
.bodywebsite .pb-left-column #image-block #view_full_size .span_link {
  display: block;
  position: absolute;
  bottom: 20px;
  left: 50%;
  width: 136px;
  margin-left: -68px;
  padding: 10px 0;
  text-align: center;
  font-weight: 700;
  line-height: 22px;
  color: #777676;
  -webkit-box-shadow: 0 2px 8px #00029;
  -moz-box-shadow: 0 2px 8px #00029;
  box-shadow: 0 2px 8px #00029
}
.bodywebsite .pb-left-column #image-block #view_full_size .span_link:after {
  content: "\f00e";
  margin: 0 0 0 4px;
  color: silver;
  font: 400 20px/22px fontawesome
}
.bodywebsite .pb-left-column #image-block .sale-box {
  z-index: 1000
}
.bodywebsite #thumbs_list {
  float: left;
  width: 392px;
  overflow: hidden
}
@media (min-width:992px) and (max-width:1199px) {
  .bodywebsite ul.product_list .functional-buttons div.wishlist {
    border-right: 0
  }
  .bodywebsite ul.product_list .functional-buttons div.compare a:before,
  .bodywebsite ul.product_list .functional-buttons div.wishlist a:before {
    display: none
  }
  .bodywebsite #thumbs_list {
    width: 294px
  }
}
.bodywebsite #thumbs_list ul#thumbs_list_frame {
  display: grid;
  grid-template-columns: auto auto auto auto auto auto auto auto auto auto auto auto auto auto;
  grid-gap: 1px;
  flex: none;
  width: 100%;
  height: 90px;
  padding-left: 0;
  overflow: hidden;
  list-style-type: none
}
.bodywebsite #thumbs_list li {
  float: left;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  width: 90px;
  height: 90px;
  margin-right: 8px;
  border: 1px solid #dbdbdb;
  line-height: 0;
  cursor: pointer
}
.bodywebsite #thumbs_list li:first-child {
  margin: 0 8px 0 0
}
.bodywebsite #thumbs_list li.last,
.table tbody > tr > td.cart_quantity .cart_quantity_button a + a {
  margin-right: 0
}
.bodywebsite #thumbs_list li a {
  display: block;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  height: 100%;
  border: 3px solid #fff;
  background: #fff;
  -webkit-transition: .3s;
  -moz-transition: .3s;
  -o-transition: .3s;
  transition: .3s
}
.bodywebsite #thumbs_list li img {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  width: 100%;
  height: auto;
  border: 1px solid #fff
}
.bodywebsite span.view_scroll_spacer {
  float: left;
  width: 39px;
  padding-left: 12px
}
.bodywebsite #view_scroll_left,
.bodywebsite #view_scroll_right {
  width: 20px;
  height: 20px;
  margin-top: 38px;
  overflow: hidden;
  font-size: 0;
  line-height: 0
}
@media (min-width:768px) and (max-width:991px) {
  .bodywebsite .block .title_block,
  .bodywebsite .block h4 {
    font-size: 14px
  }
  .bodywebsite .block .products-block li .products-block-image {
    display: inline-block;
    float: none;
    margin: 0 auto 10px;
    text-align: center
  }
  .bodywebsite #thumbs_list {
    width: 196px
  }
  .bodywebsite #thumbs_list li {
    width: 90px;
    height: 90px
  }
  .bodywebsite #thumbs_list li img {
    width: 84px;
    height: auto
  }
  .bodywebsite span.view_scroll_spacer {
    width: 28px;
    padding-left: 6px
  }
  .bodywebsite #view_scroll_left,
  .bodywebsite #view_scroll_right {
    margin-top: 28px
  }
}
.bodywebsite #view_scroll_left:before,
.bodywebsite #view_scroll_right:before {
  padding-left: 2px;
  color: silver;
  font: 20px/22px fontawesome
}
.bodywebsite #view_scroll_left {
  margin-top: 0
}
.bodywebsite #view_scroll_left:before {
  content: "\f137";
  padding-right: 2px
}
.bodywebsite .resetimg {
  padding: 10px 0 0
}
.bodywebsite .view_scroll_spacer {
  margin-top: 38px
}
.bodywebsite .pb-center-column h1 {
  padding-top: 0;
  padding-left: 0;
  font-size: 20px;
  color: #3a3939
}
.bodywebsite .pb-center-column #product_reference {
  margin-bottom: 6px
}
#cart_summary tbody tfoot td.cart_total,
#cart_summary tbody tfoot td.cart_unit,
#cart_summary tfoot tbody td.cart_total,
#cart_summary tfoot tbody td.cart_unit,
#cart_summary tfoot td.text-right,
.bodywebsite .pb-center-column #product_reference span {
  font-weight: 700;
  color: #333
}
.bodywebsite .pb-center-column #short_description_block #short_description_content {
  padding: 0 0 15px;
  word-wrap: break-word
}
.bodywebsite #cms #center_column p,
.bodywebsite .pb-center-column #short_description_block #short_description_content p {
  line-height: 18px
}
.bodywebsite #page .rte p {
  margin-bottom: 1em;
  min-height: 1px
}
.bodywebsite .box-cart-bottom,
.bodywebsite .product_attributes {
  padding: 19px 19px 17px;
  text-align: center;
  -webkit-box-shadow: inset 0 6px 6px #0000d;
  -moz-box-shadow: inset 0 6px 6px #0000d;
  box-shadow: inset 0 6px 6px #0000d
}
.bodywebsite .box-cart-bottom {
  padding: 0
}
.bodywebsite .page-product-box a {
  text-decoration: underline;
  color: #333
}
.bodywebsite #login_form .form-group.lost_password a:hover,
.bodywebsite .page-product-box a.btn,
.table td a.color-myaccount:hover {
  text-decoration: none
}
.bodywebsite .box-info-product {
  margin-bottom: 30px;
  border: 1px solid #d2d0d0;
  border-top: 1px solid #b0afaf;
  border-bottom: 1px solid #b0afaf;
  background: #f6f6f6
}
.bodywebsite .box-info-product p {
  margin-bottom: 7px
}
.bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive,
.bodywebsite .box-info-product .exclusive {
  display: block;
  position: relative;
  padding: 0;
  border-top: 1px solid #0079b6;
  border-right: 1px solid #006fa8;
  border-bottom: 1px solid #012740;
  border-left: 1px solid #006fa8;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  background-image: -webkit-gradient(linear,50% 0,50% 100%,color-stop(0,#009ad0),color-stop(100%,#007ab7));
  background-image: -webkit-linear-gradient(#009ad0,#007ab7);
  background-image: -moz-linear-gradient(#009ad0,#007ab7);
  background-image: -o-linear-gradient(#009ad0,#007ab7);
  background-image: linear-gradient(#009ad0,#007ab7);
  -ms-border-radius: 5px;
  -o-border-radius: 5px
}
.bodywebsite .box-info-product .exclusive:before {
  position: absolute;
  border: 1px solid #06b2e6;
  -webkit-border-radius: 5px 0 0 5px;
  -moz-border-radius: 5px 0 0 5px;
  border-radius: 5px 0 0 5px;
  color: #fff;
  -ms-border-radius: 5px 0 0 5px;
  -o-border-radius: 5px 0 0 5px
}
.bodywebsite .box-info-product .exclusive:after {
  content: "";
  z-index: 2;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 51px;
  width: 1px;
  background: url(/themes/dolibarr-bootstrap/img/border-1.gif) repeat-y
}
.bodywebsite .box-info-product .exclusive span {
  display: block!important;
  padding: 12px 36px 14px 60px;
  border-top: 1px solid #06b2e6;
  border-right: 1px solid #06b2e6;
  border-bottom: 1px solid #06b2e6;
  border-left: 1px solid #06b2e6;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  text-shadow: 0 1px #015883;
  font-size: 20px;
  font-weight: 700;
  line-height: 22px;
  color: #fff;
  -webkit-transition: .3s;
  -moz-transition: .3s;
  -o-transition: .3s;
  transition: .3s;
  -ms-border-radius: 5px;
  -o-border-radius: 5px
}
.bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive:hover,
.bodywebsite .box-info-product .exclusive:hover {
  background-image: -webkit-gradient(linear,50% 0,50% 100%,color-stop(0,#007ab7),color-stop(100%,#009ad0));
  background-image: -webkit-linear-gradient(#007ab7,#009ad0);
  background-image: -moz-linear-gradient(#007ab7,#009ad0);
  background-image: -o-linear-gradient(#007ab7,#009ad0);
  background-image: linear-gradient(#007ab7,#009ad0);
  background-position: 0 0
}
.bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product {
  border: 1px solid #d2d0d0;
  border-top: 1px solid #b0afaf;
  border-bottom: 1px solid #b0afaf;
  background: #f6f6f6
}
.bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product p {
  margin-bottom: 7px;
  padding: 15px 10px 0
}
.bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive:before {
  position: relative;
  border: none;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  color: #fff;
  -ms-border-radius: 0;
  -o-border-radius: 0
}
.bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive:after {
  content: "";
  z-index: 2;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 51px;
  width: 1px;
  background: 0 0
}
.bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive span {
  display: block!important;
  padding: 12px 16px 14px;
  border: none;
  border-top: 1px solid #006fa8;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  text-shadow: 0 1px #015883;
  font-size: 18px;
  font-weight: 500;
  line-height: 22px;
  color: #fff;
  -webkit-transition: .3s;
  -moz-transition: .3s;
  -o-transition: .3s;
  transition: .3s;
  -ms-border-radius: 0;
  -o-border-radius: 0
}
.bodywebsite #quantity_wanted_p input {
  float: left;
  width: 100%;
  height: 26px;
  margin-top: 3px;
  padding: 0 6px;
  border: 1px solid #d6d4d4;
  text-align: center;
  line-height: 27px
}
.bodywebsite .icon-cart-plus::before {
  content: "\f07a"
}
.bodywebsite #quantity_wanted_p .btn {
  float: left;
  width: 50%;
  margin-top: 3px;
  margin-left: 0;
  text-align: center
}
.bodywebsite #quantity_wanted_p label {
  display: block;
  margin-bottom: 7px
}
.bodywebsite #availability_date_label {
  display: inline-block;
  width: 125px;
  text-align: right;
  font-size: 12px;
  font-weight: 700
}
.bodywebsite .content_prices {
  padding: 10px 0!important;
  text-align: center
}
.bodywebsite .our_price_display {
  color: #333;
  font: 600 18px/22px "open sans",sans-serif
}
.bodywebsite #old_price {
  display: inline-block;
  padding-bottom: 15px;
  text-decoration: line-through;
  font: 17px/23px "open sans",sans-serif
}
.bodywebsite #reduction_amount,
.bodywebsite #reduction_percent {
  display: inline-block;
  margin-right: 10px;
  padding: 1px 2px;
  border: 1px solid #d02a2c;
  color: #fff;
  background: #f13340;
  font: 600 21px/23px "open sans",sans-serif
}
.bodywebsite .buttons_bottom_block {
  clear: both;
  padding: 13px 0 0
}
.bodywebsite #categories_block_left .block_content > ul,
.bodywebsite .bottom-pagination-content {
  border-top: 1px solid #d6d4d4
}
.bodywebsite #categories_block_left li a {
  display: block;
  padding: 0 30px 0 19px;
  border-bottom: 1px solid #d6d4d4;
  font-size: 13px;
  font-weight: 700;
  line-height: 30px;
  color: #333
}
#account-creation_form .gender-line .radio-inline label,
#address .gender-line .radio-inline label,
#authentication .gender-line .radio-inline label,
#identity .gender-line .radio-inline label,
#new_account_form .gender-line .radio-inline label,
#opc_account_form .gender-line .radio-inline label,
.bodywebsite #categories_block_left li li a {
  font-weight: 400;
  color: #777
}
.bodywebsite #categories_block_left li li a:before {
  content: "\f105";
  padding-right: 8px;
  font-family: fontawesome;
  line-height: 29px
}
.bodywebsite #search_block_top {
  padding-top: 30px
}
.bodywebsite #search_block_top #searchbox {
  float: left;
  width: 100%
}
.bodywebsite #search_block_top .btn.button-search {
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  width: 50px;
  height: 45px;
  border: none;
  text-align: center;
  color: #fff;
  background: #333
}
.bodywebsite #search_block_top .btn.button-search:hover {
  color: #6f6f6f
}
.bodywebsite #search_block_top #search_query_top {
  display: inline;
  height: 45px;
  margin-right: 1px;
  padding: 0 13px;
  line-height: 45px;
  background: #fbfbfb
}
.bodywebsite .tags_block .block_content a {
  display: inline-block;
  float: left;
  margin: 0 3px 3px 0;
  padding: 4px 9px 5px;
  border: 1px solid #d6d4d4;
  font-size: 13px;
  font-weight: 700;
  line-height: 16px
}
.bodywebsite .tags_block .block_content a:hover {
  color: #333;
  background: #f6f6f6
}
.bodywebsite #viewed-products_block_left li.last_item {
  margin-bottom: 0;
  padding-bottom: 0;
  border-bottom: none
}
.bodywebsite body {
  background: #282828
}
.bodywebsite #header #languages-block-top {
  border-color: #515151
}
.bodywebsite #header #languages-block-top div.current:hover {
  color: #fff;
  background: #2b2b2b
}
.bodywebsite #header #search_block_top .btn.button-search {
  text-shadow: 0 1px #b57b00;
  background: #a45931
}
.bodywebsite #header #search_block_top .btn.button-search:hover {
  text-shadow: 0 1px #333;
  color: #fff;
  background: #333
}
.bodywebsite #header #search_block_top #search_query_top {
  border-color: #e2dec8;
  color: #686666;
  background: #f8f8f8a1
}
.bodywebsite .sale-label:after,
.bodywebsite .sale-label:before {
  border-color: #a45931 transparent transparent
}
.bodywebsite .old-price {
  text-decoration: line-through;
  color: #b1b0b0
}
.bodywebsite #header #languages-block-top ul li.selected,
.bodywebsite #header #languages-block-top ul li:hover a,
.bodywebsite .sale-label {
  background: #a45931
}
.bodywebsite .header_user_info {
  float: right;
  border-right: 1px solid #515151;
  border-left: 1px solid #515151
}
.bodywebsite .header_user_info a {
  display: block;
  padding: 8px 9px 11px 8px;
  font-weight: 700;
  line-height: 18px;
  color: #fff;
  cursor: pointer
}
.bodywebsite .header_user_info a:hover {
  background: #2b2b2b
}
.bodywebsite #languages-block-top div.current {
  padding: 8px 10px 10px;
  text-shadow: 1px 1px #0003;
  font-weight: 700;
  line-height: 18px;
  color: #fff;
  cursor: pointer
}
.bodywebsite #languages-block-top div.current:after {
  content: "\f0d7";
  padding-left: 12px;
  vertical-align: -2px;
  color: #686666;
  font: 18px/18px fontawesome
}
.bodywebsite #languages-block-top ul {
  display: none;
  z-index: 2;
  position: absolute;
  top: 37px;
  left: 0;
  width: 157px;
  background: #333
}
.bodywebsite #languages-block-top ul li {
  font-size: 13px;
  line-height: 35px;
  color: #fff
}
.bodywebsite #languages-block-top ul li > span,
.bodywebsite #languages-block-top ul li a {
  display: block;
  padding: 0 10px 0 12px;
  color: #fff
}
.bodywebsite #languages-block-top ul li.selected,
.bodywebsite #languages-block-top ul li:hover a {
  background: #484848
}
.bodywebsite #header .shopping_cart {
  float: right;
  position: relative;
  padding-top: 30px
}
.bodywebsite .shopping_cart {
  width: 270px
}
.bodywebsite .shopping_cart > a:first-child b,
.shopping_cart > a:first-child b {
  padding-right: 5px;
  font-size: 1.35em;
  color: #fff
}
.bodywebsite .shopping_cart>a:first-child:before,
.shopping_cart>a:first-child:before {
  content: "\f07a";
  display: inline-block;
  padding-right: 15px;
  color: #fff;
  font: 23px/23px fontawesome
}
.bodywebsite .cart_block .cart_block_no_products,
.cart_block .cart_block_no_products {
  margin: 0;
  padding: 10px 20px
}
.bodywebsite .cart_block .cart-prices,
.cart_block .cart-prices {
  padding: 10px 20px 22px;
  border-top: 1px solid #d6d4d4;
  font-weight: 700
}
#header .cart_block,
.bodywebsite #header .cart_block {
  display: none;
  z-index: 100;
  position: absolute;
  top: 95px;
  right: 0;
  width: 270px;
  height: auto;
  color: #fff;
  background: #484848
}
@media (max-width:1200px) {
  .bodywebsite #header .cart_block {
    width: 100%
  }
}
.bodywebsite #header .cart_block a:hover {
  color: #9c9b9b
}
.bodywebsite .bottom-pagination-content .compare-form,
.bodywebsite .cart_block .cart_block_shipping_cost,
.bodywebsite .cart_block .cart_block_tax_cost,
.bodywebsite .cart_block .cart_block_total,
.bodywebsite .top-pagination-content .compare-form {
  float: right
}
.bodywebsite .layer_cart_overlay {
  display: none;
  z-index: 98;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: .2;
  background-color: #000
}
.bodywebsite #layer_cart {
  display: none;
  z-index: 99;
  position: absolute;
  width: 84%;
  margin-right: 8%;
  margin-left: 8%;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  background-color: #fff;
  -ms-border-radius: 4px;
  -o-border-radius: 4px
}
.bodywebsite #layer_cart .layer_cart_product h2 i {
  float: left;
  padding-right: 8px;
  font-size: 30px;
  line-height: 30px
}
.bodywebsite #layer_cart .layer_cart_product .product-image-container {
  float: left;
  margin-right: 30px;
  padding: 5px;
  max-width: 178px;
  border: 1px solid #d6d4d4
}
.bodywebsite #layer_cart .layer_cart_product .layer_cart_product_info {
  padding: 38px 0 0
}
.bodywebsite #layer_cart .layer_cart_product .layer_cart_product_info #layer_cart_product_title {
  display: block;
  padding-bottom: 8px
}
.bodywebsite #layer_cart .layer_cart_product .layer_cart_product_info > div {
  padding-bottom: 7px
}
.bodywebsite #layer_cart .layer_cart_product .layer_cart_product_info > div strong {
  padding-right: 3px
}
.bodywebsite #layer_cart .layer_cart_cart {
  position: relative;
  padding: 21px 30px 170px;
  border-left: 1px solid #d6d4d4;
  -webkit-border-radius: 0 4px 4px 0;
  -moz-border-radius: 0 4px 4px 0;
  border-radius: 0 4px 4px 0;
  background: #fafafa;
  -ms-border-radius: 0 4px 4px 0;
  -o-border-radius: 0 4px 4px 0
}
@media (min-width:1200px) {
  .bodywebsite .container {
    max-width: 1170px
  }
  .bodywebsite #layer_cart .layer_cart_cart {
    min-height: 318px
  }
}
.bodywebsite #layer_cart .layer_cart_cart h2 {
  margin-bottom: 17px;
  padding-bottom: 13px;
  border-bottom: 1px solid #d6d4d4;
  font: 400 23px/29px Arial,Helvetica,sans-serif;
  color: #333
}
.bodywebsite #layer_cart .layer_cart_cart .layer_cart_row {
  padding: 0 0 7px
}
.bodywebsite #layer_cart .layer_cart_cart .button-container {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 0 30px 20px
}
.bodywebsite #layer_cart .layer_cart_cart .button-container span.exclusive-medium i {
  padding-right: 5px;
  color: #777
}
.bodywebsite #layer_cart .cross {
  z-index: 2;
  position: absolute;
  top: 15px;
  right: 7px;
  width: 25px;
  height: 25px;
  color: #333;
  cursor: pointer
}
.bodywebsite #layer_cart .cross:before {
  content: "\f057";
  display: block;
  font: 25px/25px fontawesome
}
.bodywebsite #layer_cart .cross:hover,
.bodywebsite .content_scene_cat .content_scene .cat_desc a:hover,
.cart_block .cart_block_list .ajax_cart_block_remove_link:hover,
.cart_block .cart_block_list .remove_link a:hover,
.cart_voucher #display_cart_vouchers span:hover {
  color: #515151
}
.bodywebsite .info-table-box {
  margin: 0 0 20px;
  padding: 14px 20px 17px!important;
  border: 1px solid #d6d4d4;
  background: #fbfbfb
}
.bodywebsite .info-list-box li b::before {
  content: "\f14a";
  padding-right: 8px;
  color: #888;
  font: lighter 12px/24px fontawesome
}
.bodywebsite .info-list-box {
  padding-left: 15px
}
.bodywebsite .info-list-box li {
  margin-bottom: 3px!important
}
.bodywebsite .info-table-box tbody tr td {
  padding: 5px 0 0!important;
  vertical-align: top!important
}
.bodywebsite .content_scene_cat {
  margin: 0 0 26px;
  border-top: 5px solid #333;
  line-height: 19px;
  color: #d7d7d7
}
.bodywebsite .content_scene_cat .content_scene_cat_bg {
  padding: 18px 10px 10px 42px;
  background-color: #a45931!important
}
.bodywebsite .content_scene_cat span.category-name {
  margin-bottom: 12px;
  font: 600 42px/51px "Open Sans",sans-serif;
  color: #fff
}
@media (max-width:1199px) {
  .bodywebsite ul.product_list .product-image-container .quick-view-wrapper-mobile .quick-view-mobile {
    display: block;
    position: relative;
    top: 80px;
    right: -162px;
    zoom: 1;
    width: 85px;
    height: 130px;
    background-color: rgba(208,208,211,.57);
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
    pointer-events: all
  }
  .bodywebsite ul.product_list .product-image-container .quick-view-wrapper-mobile .quick-view-mobile i {
    position: relative;
    top: 48px;
    left: -20px;
    font-size: x-large;
    color: #000
  }
  .bodywebsite ul.product_list .product-image-container .quick-view-wrapper-mobile .quick-view-mobile i:before {
    -webkit-transform: rotate(315deg);
    -moz-transform: rotate(315deg);
    -ms-transform: rotate(315deg);
    -o-transform: rotate(315deg);
    transform: rotate(315deg)
  }
  .bodywebsite ul.product_list .product-image-container .quick-view-wrapper-mobile .quick-view-mobile:hover {
    background-color: rgba(167,167,167,.57)
  }
  .bodywebsite ul.product_list .product-image-container .quick-view-wrapper-mobile {
    display: block;
    position: absolute;
    right: 0;
    bottom: 0;
    width: 215px;
    height: 155px;
    overflow: hidden;
    background-color: transparent;
    pointer-events: none
  }
  .bodywebsite ul.product_list .product-image-container .quick-view {
    display: none
  }
  .bodywebsite .box-info-product .exclusive span {
    padding: 12px 22px 14px 55px;
    font-size: 14px
  }
  .bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive span {
    font-size: 16px
  }
  .bodywebsite .content_scene_cat .content_scene_cat_bg {
    padding: 10px 10px 10px 15px
  }
  .bodywebsite .content_scene_cat span.category-name {
    font-size: 25px;
    line-height: 30px
  }
}
.bodywebsite #login_form .form-group.lost_password a,
.bodywebsite .content_scene_cat a:hover {
  text-decoration: underline
}
.bodywebsite .content_scene_cat .content_scene .cat_desc {
  padding-top: 20px
}
.bodywebsite .page-heading span.heading-counter {
  float: right;
  margin-bottom: 10px;
  text-transform: none;
  font: bold 13px/22px Arial,Helvetica,sans-serif;
  color: #333
}
.bodywebsite .page-heading span.lighter {
  color: #9c9c9c
}
.bodywebsite .page-heading.bottom-indent {
  margin-bottom: 16px
}
.bodywebsite .page-heading.product-listing {
  margin-bottom: 0;
  padding: 0;
  border-bottom: none
}
.bodywebsite .content_sortPagiBar .sortPagiBar {
  clear: both;
  border-bottom: 1px solid #d6d4d4
}
.bodywebsite .content_sortPagiBar .sortPagiBar #productsSortForm {
  float: left;
  margin-right: 20px;
  margin-bottom: 10px
}
.bodywebsite .content_sortPagiBar .sortPagiBar #productsSortForm select {
  float: left;
  max-width: 220px
}
.bodywebsite .content_sortPagiBar .sortPagiBar .nbrItemPage select {
  float: left;
  max-width: 59px
}
.bodywebsite .content_sortPagiBar .sortPagiBar .nbrItemPage .clearfix > span {
  display: inline-block;
  float: left;
  padding: 3px 0 0 12px
}
.bodywebsite .content_sortPagiBar .sortPagiBar label {
  padding: 3px 6px 0 0
}
.bodywebsite .content_sortPagiBar .display,
.bodywebsite .content_sortPagiBar .display_m {
  float: right;
  margin-top: -4px
}
.bodywebsite .content_sortPagiBar .display li,
.bodywebsite .content_sortPagiBar .display_m li {
  float: left;
  padding-left: 12px;
  text-align: center
}
.bodywebsite .content_sortPagiBar .display li a,
.bodywebsite .content_sortPagiBar .display_m li a {
  font-size: 11px;
  line-height: 14px;
  color: gray;
  cursor: pointer
}
.bodywebsite .content_sortPagiBar .display li a i,
.bodywebsite .content_sortPagiBar .display_m li a i {
  display: block;
  height: 24px;
  margin-bottom: -3px;
  font-size: 24px;
  line-height: 24px;
  color: #e1e0e0
}
.bodywebsite .content_sortPagiBar .display li a:hover i,
.bodywebsite .content_sortPagiBar .display_m li a:hover i {
  color: gray
}
.bodywebsite .content_sortPagiBar .display li.selected a,
.bodywebsite .content_sortPagiBar .display_m li.selected a,
.radio-inline,
button[disabled],
html input[disabled] {
  cursor: default
}
.bodywebsite .content_sortPagiBar .display li.display-title,
.bodywebsite .content_sortPagiBar .display_m li.display-title {
  padding: 7px 6px 0 0;
  font-weight: 700;
  color: #333
}
.bodywebsite .bottom-pagination-content,
.bodywebsite .top-pagination-content {
  position: relative;
  padding: 12px 0;
  text-align: center
}
.bodywebsite .top-pagination-content {
  padding-bottom: 50px
}
.bodywebsite .bottom-pagination-content div.pagination,
.bodywebsite .top-pagination-content div.pagination {
  float: right;
  width: 530px;
  margin: 0;
  text-align: center
}
.bodywebsite .bottom-pagination-content div.pagination .showall,
.bodywebsite .top-pagination-content div.pagination .showall {
  float: right;
  margin: 8px 0 8px 14px
}
@media (min-width:992px) and (max-width:1199px) {
  .bodywebsite #layer_cart .layer_cart_cart {
    min-height: 360px
  }
  .bodywebsite .bottom-pagination-content div.pagination,
  .bodywebsite .top-pagination-content div.pagination {
    width: 380px
  }
  .bodywebsite .bottom-pagination-content div.pagination .showall,
  .bodywebsite .top-pagination-content div.pagination .showall {
    margin-right: 11px
  }
}
.bodywebsite .bottom-pagination-content div.pagination .showall .btn span,
.bodywebsite .top-pagination-content div.pagination .showall .btn span {
  padding: 3px 5px 4px;
  font-size: 13px;
  line-height: normal
}
.bodywebsite .bottom-pagination-content ul.pagination,
.bodywebsite .top-pagination-content ul.pagination {
  margin: 8px 0
}
.bodywebsite .bottom-pagination-content ul.pagination li,
.bodywebsite .top-pagination-content ul.pagination li {
  display: inline-block;
  float: left
}
.bodywebsite .bottom-pagination-content ul.pagination li > a,
.bodywebsite .bottom-pagination-content ul.pagination li > span,
.bodywebsite .top-pagination-content ul.pagination li > a,
.bodywebsite .top-pagination-content ul.pagination li > span {
  display: block;
  margin: 0 1px 0 0;
  padding: 0;
  border: 1px solid;
  border-color: #dfdede #d2d0d0 #b0afaf;
  font-weight: 700
}
.bodywebsite .bottom-pagination-content ul.pagination li > a span,
.bodywebsite .bottom-pagination-content ul.pagination li > span span,
.bodywebsite .top-pagination-content ul.pagination li > a span,
.bodywebsite .top-pagination-content ul.pagination li > span span {
  display: block;
  padding: 2px 8px;
  border: 1px solid #fff
}
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_next,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous,
.bodywebsite .top-pagination-content ul.pagination li.pagination_next,
.bodywebsite .top-pagination-content ul.pagination li.pagination_previous {
  font-weight: 700;
  color: #777676
}
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_next > a,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_next > span,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous > a,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous > span,
.bodywebsite .top-pagination-content ul.pagination li.pagination_next > a,
.bodywebsite .top-pagination-content ul.pagination li.pagination_next > span,
.bodywebsite .top-pagination-content ul.pagination li.pagination_previous > a,
.bodywebsite .top-pagination-content ul.pagination li.pagination_previous > span {
  display: block;
  padding: 4px 0;
  border: none;
  background: 0 0
}
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_next > a span,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_next > span span,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous > a span,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous > span span,
.bodywebsite .top-pagination-content ul.pagination li.pagination_next > a span,
.bodywebsite .top-pagination-content ul.pagination li.pagination_next > span span,
.bodywebsite .top-pagination-content ul.pagination li.pagination_previous > a span,
.bodywebsite .top-pagination-content ul.pagination li.pagination_previous > span span {
  padding: 0;
  border: none;
  background: 0 0
}
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_next,
.bodywebsite .top-pagination-content ul.pagination li.pagination_next,
ul.footer_links li + li {
  margin-left: 10px
}
.bodywebsite .bottom-pagination-content ul.pagination li.active > span,
.bodywebsite .top-pagination-content ul.pagination li.active > span {
  border-color: #dfdede #d2d0d0 #b0afaf;
  color: #333
}
.bodywebsite .bottom-pagination-content .product-count,
.bodywebsite .top-pagination-content .product-count {
  float: left;
  padding: 11px 0 0
}
.bodywebsite .icon-th-large:before {
  content: "\f009"
}
.bodywebsite .icon-th-list::before {
  content: "\f00b"
}
.bodywebsite .col-lg-1,
.bodywebsite .col-lg-10,
.bodywebsite .col-lg-11,
.bodywebsite .col-lg-12,
.bodywebsite .col-lg-2,
.bodywebsite .col-lg-3,
.bodywebsite .col-lg-4,
.bodywebsite .col-lg-5,
.bodywebsite .col-lg-6,
.bodywebsite .col-lg-7,
.bodywebsite .col-lg-8,
.bodywebsite .col-lg-9,
.bodywebsite .col-md-1,
.bodywebsite .col-md-10,
.bodywebsite .col-md-11,
.bodywebsite .col-md-12,
.bodywebsite .col-md-2,
.bodywebsite .col-md-3,
.bodywebsite .col-md-4,
.bodywebsite .col-md-5,
.bodywebsite .col-md-6,
.bodywebsite .col-md-7,
.bodywebsite .col-md-8,
.bodywebsite .col-md-9,
.bodywebsite .col-sm-1,
.bodywebsite .col-sm-10,
.bodywebsite .col-sm-11,
.bodywebsite .col-sm-12,
.bodywebsite .col-sm-2,
.bodywebsite .col-sm-3,
.bodywebsite .col-sm-4,
.bodywebsite .col-sm-5,
.bodywebsite .col-sm-6,
.bodywebsite .col-sm-7,
.bodywebsite .col-sm-8,
.bodywebsite .col-sm-9,
.bodywebsite .col-xs-1,
.bodywebsite .col-xs-10,
.bodywebsite .col-xs-11,
.bodywebsite .col-xs-12,
.bodywebsite .col-xs-2,
.bodywebsite .col-xs-3,
.bodywebsite .col-xs-4,
.bodywebsite .col-xs-5,
.bodywebsite .col-xs-6,
.bodywebsite .col-xs-7,
.bodywebsite .col-xs-8,
.bodywebsite .col-xs-9,
.bodywebsite header .row #header_logo {
  position: relative;
  padding-right: 15px;
  padding-left: 15px;
  min-height: 1px
}
.bodywebsite .col-xs-1 {
  width: 8.33333%
}
.bodywebsite .col-xs-2 {
  width: 16.66667%
}
.bodywebsite .col-xs-3 {
  width: 25%
}
.bodywebsite .col-xs-4 {
  width: 33.33333%
}
.bodywebsite .col-xs-5 {
  width: 41.66667%
}
.bodywebsite .col-xs-6 {
  width: 50%
}
.bodywebsite .col-xs-7 {
  width: 58.33333%
}
.bodywebsite .col-xs-8 {
  width: 66.66667%
}
.bodywebsite .col-xs-9 {
  width: 75%
}
.bodywebsite .col-xs-10 {
  width: 83.33333%
}
.bodywebsite .col-xs-11 {
  width: 91.66667%
}
@media (min-width:768px) {
  .bodywebsite .footer-container {
    background: #111!important
  }
  .bodywebsite .container {
    max-width: 750px
  }
  .bodywebsite .col-sm-1,
  .bodywebsite .col-sm-10,
  .bodywebsite .col-sm-11,
  .bodywebsite .col-sm-2,
  .bodywebsite .col-sm-3,
  .bodywebsite .col-sm-4,
  .bodywebsite .col-sm-5,
  .bodywebsite .col-sm-6,
  .bodywebsite .col-sm-7,
  .bodywebsite .col-sm-8,
  .bodywebsite .col-sm-9,
  .bodywebsite header .row #header_logo {
    float: left
  }
  .bodywebsite .col-sm-1 {
    width: 8.33333%
  }
  .bodywebsite .col-sm-2 {
    width: 16.66667%
  }
  .bodywebsite .col-sm-3 {
    width: 25%
  }
  .bodywebsite .col-sm-4,
  .bodywebsite header .row #header_logo {
    width: 33.33333%
  }
  .bodywebsite .col-sm-5 {
    width: 41.66667%
  }
  .bodywebsite .col-sm-6 {
    width: 50%
  }
  .bodywebsite .col-sm-7 {
    width: 58.33333%
  }
  .bodywebsite .col-sm-8 {
    width: 66.66667%
  }
  .bodywebsite .col-sm-9 {
    width: 75%
  }
  .bodywebsite .col-sm-10 {
    width: 83.33333%
  }
  .bodywebsite .col-sm-11 {
    width: 91.66667%
  }
  .bodywebsite .col-sm-12 {
    width: 100%
  }
  .bodywebsite .col-sm-push-1 {
    left: 8.33333%
  }
  .bodywebsite .col-sm-push-2 {
    left: 16.66667%
  }
  .bodywebsite .col-sm-push-3 {
    left: 25%
  }
  .bodywebsite .col-sm-push-4 {
    left: 33.33333%
  }
  .bodywebsite .col-sm-push-5 {
    left: 41.66667%
  }
  .bodywebsite .col-sm-push-6 {
    left: 50%
  }
  .bodywebsite .col-sm-push-7 {
    left: 58.33333%
  }
  .bodywebsite .col-sm-push-8 {
    left: 66.66667%
  }
  .bodywebsite .col-sm-push-9 {
    left: 75%
  }
  .bodywebsite .col-sm-push-10 {
    left: 83.33333%
  }
  .bodywebsite .col-sm-push-11 {
    left: 91.66667%
  }
  .bodywebsite .col-sm-pull-1 {
    right: 8.33333%
  }
  .bodywebsite .col-sm-pull-2 {
    right: 16.66667%
  }
  .bodywebsite .col-sm-pull-3 {
    right: 25%
  }
  .bodywebsite .col-sm-pull-4 {
    right: 33.33333%
  }
  .bodywebsite .col-sm-pull-5 {
    right: 41.66667%
  }
  .bodywebsite .col-sm-pull-6 {
    right: 50%
  }
  .bodywebsite .col-sm-pull-7 {
    right: 58.33333%
  }
  .bodywebsite .col-sm-pull-8 {
    right: 66.66667%
  }
  .bodywebsite .col-sm-pull-9 {
    right: 75%
  }
  .bodywebsite .col-sm-pull-10 {
    right: 83.33333%
  }
  .bodywebsite .col-sm-pull-11 {
    right: 91.66667%
  }
  .bodywebsite .col-sm-offset-1 {
    margin-left: 8.33333%
  }
  .bodywebsite .col-sm-offset-2 {
    margin-left: 16.66667%
  }
  .bodywebsite .col-sm-offset-3 {
    margin-left: 25%
  }
  .bodywebsite .col-sm-offset-4 {
    margin-left: 33.33333%
  }
  .bodywebsite .col-sm-offset-5 {
    margin-left: 41.66667%
  }
  .bodywebsite .col-sm-offset-6 {
    margin-left: 50%
  }
  .bodywebsite .col-sm-offset-7 {
    margin-left: 58.33333%
  }
  .bodywebsite .col-sm-offset-8 {
    margin-left: 66.66667%
  }
  .bodywebsite .col-sm-offset-9 {
    margin-left: 75%
  }
  .bodywebsite .col-sm-offset-10 {
    margin-left: 83.33333%
  }
  .bodywebsite .col-sm-offset-11 {
    margin-left: 91.66667%
  }
  ul.step {
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px
  }
  ul.step li.first,
  ul.step li.first a,
  ul.step li.first span {
    -webkit-border-top-left-radius: 4px;
    -webkit-border-bottom-left-radius: 4px;
    -moz-border-radius-topleft: 4px;
    -moz-border-radius-bottomleft: 4px;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px
  }
  ul.step li.last,
  ul.step li.last span {
    -webkit-border-top-right-radius: 4px;
    -webkit-border-bottom-right-radius: 4px;
    -moz-border-radius-topright: 4px;
    -moz-border-radius-bottomright: 4px;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px
  }
  header .row #header_logo {
    width: 25%!important
  }
}
@media (min-width:992px) {
  .bodywebsite .container {
    max-width: 970px
  }
  .bodywebsite .col-md-1,
  .bodywebsite .col-md-10,
  .bodywebsite .col-md-11,
  .bodywebsite .col-md-2,
  .bodywebsite .col-md-3,
  .bodywebsite .col-md-4,
  .bodywebsite .col-md-5,
  .bodywebsite .col-md-6,
  .bodywebsite .col-md-7,
  .bodywebsite .col-md-8,
  .bodywebsite .col-md-9 {
    float: left
  }
  .bodywebsite .col-md-1 {
    width: 8.33333%
  }
  .bodywebsite .col-md-2 {
    width: 16.66667%
  }
  .bodywebsite .col-md-3 {
    width: 25%
  }
  .bodywebsite .col-md-4 {
    width: 33.33333%
  }
  .bodywebsite .col-md-5 {
    width: 41.66667%
  }
  .bodywebsite .col-md-6 {
    width: 50%
  }
  .bodywebsite #HOOK_PAYMENT .row .col-md-6,
  .bodywebsite .col-md-12 {
    width: 100%
  }
  .bodywebsite .col-md-7 {
    width: 58.33333%
  }
  .bodywebsite .col-md-8 {
    width: 66.66667%
  }
  .bodywebsite .col-md-9 {
    width: 75%
  }
  .bodywebsite .col-md-10 {
    width: 83.33333%
  }
  .bodywebsite .col-md-11 {
    width: 91.66667%
  }
  .bodywebsite .col-md-push-0 {
    left: auto
  }
  .bodywebsite .col-md-push-1 {
    left: 8.33333%
  }
  .bodywebsite .col-md-push-2 {
    left: 16.66667%
  }
  .bodywebsite .col-md-push-3 {
    left: 25%
  }
  .bodywebsite .col-md-push-4 {
    left: 33.33333%
  }
  .bodywebsite .col-md-push-5 {
    left: 41.66667%
  }
  .bodywebsite .col-md-push-6 {
    left: 50%
  }
  .bodywebsite .col-md-push-7 {
    left: 58.33333%
  }
  .bodywebsite .col-md-push-8 {
    left: 66.66667%
  }
  .bodywebsite .col-md-push-9 {
    left: 75%
  }
  .bodywebsite .col-md-push-10 {
    left: 83.33333%
  }
  .bodywebsite .col-md-push-11 {
    left: 91.66667%
  }
  .bodywebsite .col-md-pull-0 {
    right: auto
  }
  .bodywebsite .col-md-pull-1 {
    right: 8.33333%
  }
  .bodywebsite .col-md-pull-2 {
    right: 16.66667%
  }
  .bodywebsite .col-md-pull-3 {
    right: 25%
  }
  .bodywebsite .col-md-pull-4 {
    right: 33.33333%
  }
  .bodywebsite .col-md-pull-5 {
    right: 41.66667%
  }
  .bodywebsite .col-md-pull-6 {
    right: 50%
  }
  .bodywebsite .col-md-pull-7 {
    right: 58.33333%
  }
  .bodywebsite .col-md-pull-8 {
    right: 66.66667%
  }
  .bodywebsite .col-md-pull-9 {
    right: 75%
  }
  .bodywebsite .col-md-pull-10 {
    right: 83.33333%
  }
  .bodywebsite .col-md-pull-11 {
    right: 91.66667%
  }
  .bodywebsite .col-md-offset-0 {
    margin-left: 0
  }
  .bodywebsite .col-md-offset-1 {
    margin-left: 8.33333%
  }
  .bodywebsite .col-md-offset-2 {
    margin-left: 16.66667%
  }
  .bodywebsite .col-md-offset-3 {
    margin-left: 25%
  }
  .bodywebsite .col-md-offset-4 {
    margin-left: 33.33333%
  }
  .bodywebsite .col-md-offset-5 {
    margin-left: 41.66667%
  }
  .bodywebsite .col-md-offset-6 {
    margin-left: 50%
  }
  .bodywebsite .col-md-offset-7 {
    margin-left: 58.33333%
  }
  .bodywebsite .col-md-offset-8 {
    margin-left: 66.66667%
  }
  .bodywebsite .col-md-offset-9 {
    margin-left: 75%
  }
  .bodywebsite .col-md-offset-10 {
    margin-left: 83.33333%
  }
  .bodywebsite .col-md-offset-11 {
    margin-left: 91.66667%
  }
  ul.step li a:after,
  ul.step li span:after,
  ul.step li.step_current span:after,
  ul.step li.step_current_end span:after {
    content: ".";
    display: block;
    z-index: 0;
    position: absolute;
    top: 0;
    right: -31px;
    width: 31px;
    height: 52px;
    margin-top: -2px;
    text-indent: -5000px
  }
}
@media (min-width:1200px) {
  .bodywebsite .container {
    max-width: 1170px
  }
  .bodywebsite .col-lg-1,
  .bodywebsite .col-lg-10,
  .bodywebsite .col-lg-11,
  .bodywebsite .col-lg-2,
  .bodywebsite .col-lg-3,
  .bodywebsite .col-lg-4,
  .bodywebsite .col-lg-5,
  .bodywebsite .col-lg-6,
  .bodywebsite .col-lg-7,
  .bodywebsite .col-lg-8,
  .bodywebsite .col-lg-9 {
    float: left
  }
  .bodywebsite .col-lg-1 {
    width: 8.33333%
  }
  .bodywebsite .col-lg-2 {
    width: 16.66667%
  }
  .bodywebsite .col-lg-3 {
    width: 25%
  }
  .bodywebsite .col-lg-4 {
    width: 36%
  }
  .bodywebsite .col-lg-5 {
    width: 41.66667%
  }
  .bodywebsite .col-lg-6 {
    width: 50%
  }
  .bodywebsite .col-lg-7 {
    width: 58.33333%
  }
  .bodywebsite .col-lg-8 {
    width: 66.66667%
  }
  .bodywebsite .col-lg-9 {
    width: 75%
  }
  .bodywebsite .col-lg-10 {
    width: 83.33333%
  }
  .bodywebsite .col-lg-11 {
    width: 91.66667%
  }
  .bodywebsite .col-lg-12 {
    width: 100%
  }
  .bodywebsite .col-lg-push-0 {
    left: auto
  }
  .bodywebsite .col-lg-push-1 {
    left: 8.33333%
  }
  .bodywebsite .col-lg-push-2 {
    left: 16.66667%
  }
  .bodywebsite .col-lg-push-3 {
    left: 25%
  }
  .bodywebsite .col-lg-push-4 {
    left: 33.33333%
  }
  .bodywebsite .col-lg-push-5 {
    left: 41.66667%
  }
  .bodywebsite .col-lg-push-6 {
    left: 50%
  }
  .bodywebsite .col-lg-push-7 {
    left: 58.33333%
  }
  .bodywebsite .col-lg-push-8 {
    left: 66.66667%
  }
  .bodywebsite .col-lg-push-9 {
    left: 75%
  }
  .bodywebsite .col-lg-push-10 {
    left: 83.33333%
  }
  .bodywebsite .col-lg-push-11 {
    left: 91.66667%
  }
  .bodywebsite .col-lg-pull-0 {
    right: auto
  }
  .bodywebsite .col-lg-pull-1 {
    right: 8.33333%
  }
  .bodywebsite .col-lg-pull-2 {
    right: 16.66667%
  }
  .bodywebsite .col-lg-pull-3 {
    right: 25%
  }
  .bodywebsite .col-lg-pull-4 {
    right: 33.33333%
  }
  .bodywebsite .col-lg-pull-5 {
    right: 41.66667%
  }
  .bodywebsite .col-lg-pull-6 {
    right: 50%
  }
  .bodywebsite .col-lg-pull-7 {
    right: 58.33333%
  }
  .bodywebsite .col-lg-pull-8 {
    right: 66.66667%
  }
  .bodywebsite .col-lg-pull-9 {
    right: 75%
  }
  .bodywebsite .col-lg-pull-10 {
    right: 83.33333%
  }
  .bodywebsite .col-lg-pull-11 {
    right: 91.66667%
  }
  .bodywebsite .col-lg-offset-0 {
    margin-left: 0
  }
  .bodywebsite .col-lg-offset-1 {
    margin-left: 8.33333%
  }
  .bodywebsite .col-lg-offset-2 {
    margin-left: 16.66667%
  }
  .bodywebsite .col-lg-offset-3 {
    margin-left: 25%
  }
  .bodywebsite .col-lg-offset-4 {
    margin-left: 33.33333%
  }
  .bodywebsite .col-lg-offset-5 {
    margin-left: 41.66667%
  }
  .bodywebsite .col-lg-offset-6 {
    margin-left: 50%
  }
  .bodywebsite .col-lg-offset-7 {
    margin-left: 58.33333%
  }
  .bodywebsite .col-lg-offset-8 {
    margin-left: 66.66667%
  }
  .bodywebsite .col-lg-offset-9 {
    margin-left: 75%
  }
  .bodywebsite .col-lg-offset-10 {
    margin-left: 83.33333%
  }
  .bodywebsite .col-lg-offset-11 {
    margin-left: 91.66667%
  }
  .bodywebsite ul.grid.tab-pane > li {
    margin-bottom: 0;
    padding-bottom: 85px
  }
}
.bodywebsite .alert h4 {
  margin-top: 0;
  color: inherit
}
.bodywebsite .alert > p + p {
  margin-top: 5px
}
.bodywebsite .alert-dismissable {
  padding-right: 35px
}
.bodywebsite .alert-dismissable .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit
}
.bodywebsite .alert-success {
  border-color: #48b151;
  color: #fff;
  background-color: #55c65e
}
.bodywebsite .alert-success hr {
  border-top-color: #419f49
}
.bodywebsite .alert-danger .alert-link,
.bodywebsite .alert-info .alert-link,
.bodywebsite .alert-success .alert-link,
.bodywebsite .alert-warning .alert-link {
  color: #e6e6e6
}
.bodywebsite .alert-info {
  border-color: #4b80c3;
  color: #fff;
  background-color: #5192f3
}
.bodywebsite .alert-info hr {
  border-top-color: #3d73b7
}
.bodywebsite .alert-warning {
  border-color: #a45931;
  color: #fff;
  background-color: #a45931
}
.bodywebsite .alert-warning hr {
  border-top-color: #da681c
}
.bodywebsite .alert-danger hr {
  border-top-color: #c32933
}
.bodywebsite #lightbox {
  z-index: 10000;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  text-align: center;
  background-color: rgba(0,0,0,.7)
}
.bodywebsite #lightbox p {
  padding-top: 8px;
  text-align: center;
  font-size: 1.5em;
  color: #fff
}
.bodywebsite #lightbox img {
  max-width: 700px;
  background-color: #fff;
  box-shadow: 0 0 25px #111
}
@media (max-width:991px) {
  .bodywebsite ul.product_list.list > li .right-block .right-block-content {
    padding-top: 20px
  }
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .content_price {
    padding-top: 13px;
    padding-bottom: 0
  }
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons {
    clear: both
  }
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons > div {
    float: left;
    padding-top: 0!important;
    padding-right: 20px
  }
  .bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive:after,
  .bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive:before,
  .bodywebsite .box-info-product .exclusive:after,
  .bodywebsite .box-info-product .exclusive:before {
    display: none
  }
  .bodywebsite .box-info-product .exclusive span {
    padding: 8px 12px 10px;
    text-align: left
  }
  .bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive span {
    padding: 8px 12px 10px;
    text-align: center
  }
  .bodywebsite .our_price_display {
    font-size: 18px;
    line-height: 22px
  }
  .bodywebsite #layer_cart .layer_cart_cart {
    border-top: 1px solid #d6d4d4;
    border-left: none
  }
  .bodywebsite .content_sortPagiBar .sortPagiBar #productsSortForm select {
    max-width: 160px
  }
  .bodywebsite .bottom-pagination-content div.pagination,
  .bodywebsite .top-pagination-content div.pagination {
    float: left;
    width: auto
  }
  .bodywebsite .bottom-pagination-content div.pagination .showall,
  .bodywebsite .top-pagination-content div.pagination .showall {
    margin-right: 0
  }
  .bodywebsite .bottom-pagination-content ul.pagination,
  .bodywebsite .top-pagination-content ul.pagination {
    float: left
  }
  .bodywebsite .bottom-pagination-content .product-count,
  .bodywebsite .top-pagination-content .product-count {
    clear: left
  }
}
@media (max-width:767px) {
  .bodywebsite header .row #header_logo {
    padding-top: 15px
  }
  .bodywebsite header .row #header_logo img {
    margin: 0 auto
  }
  .bodywebsite .bottom-pagination-content ul.pagination li.pagination_next > a b,
  .bodywebsite .bottom-pagination-content ul.pagination li.pagination_next > span b,
  .bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous > a b,
  .bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous > span b,
  .bodywebsite .top-pagination-content ul.pagination li.pagination_next > a b,
  .bodywebsite .top-pagination-content ul.pagination li.pagination_next > span b,
  .bodywebsite .top-pagination-content ul.pagination li.pagination_previous > a b,
  .bodywebsite .top-pagination-content ul.pagination li.pagination_previous > span b,
  .hideonsmartphone {
    display: none
  }
  .bodywebsite .block {
    margin-bottom: 0
  }
  .bodywebsite .block .block_content {
    margin-bottom: 20px
  }
  .bodywebsite .footer-container #footer .footer-block {
    margin-top: 20px
  }
  .bodywebsite .footer-container #footer h4 {
    position: relative;
    margin-bottom: 0;
    padding-bottom: 13px
  }
  .bodywebsite .footer-container #footer h4:after {
    content: "\f055";
    display: block;
    position: absolute;
    top: 1px;
    right: 0;
    font-family: fontawesome
  }
  .bodywebsite div.primary_block div#views_block {
    float: unset;
    width: unset;
    margin-top: 25px;
    margin-left: 15px
  }
  .bodywebsite .pb-left-column #image-block {
    width: 280px;
    margin: 0 auto
  }
  .bodywebsite #thumbs_list {
    width: 196px
  }
  .bodywebsite #layer_cart .layer_cart_product h2 {
    padding-right: 0;
    font-size: 18px;
    line-height: normal
  }
  .bodywebsite #layer_cart .layer_cart_product h2 i {
    font-size: 22px;
    line-height: 22px
  }
  .bodywebsite #layer_cart .layer_cart_cart h2 {
    font-size: 18px
  }
  #order-detail-content #cart_summary table,
  #order-detail-content #cart_summary tbody,
  #order-detail-content #cart_summary td,
  #order-detail-content #cart_summary th,
  #order-detail-content #cart_summary thead,
  #order-detail-content #cart_summary tr {
    display: block
  }
  #order-detail-content #cart_summary thead tr {
    position: absolute;
    top: -9999px;
    left: -9999px
  }
  #order-detail-content #cart_summary tr {
    border-bottom: 1px solid #ccc;
    overflow: hidden
  }
  #order-detail-content #cart_summary td {
    float: left;
    position: relative;
    border: none;
    white-space: normal
  }
  #order-detail-content #cart_summary td.cart_avail {
    clear: both
  }
  #order-detail-content #cart_summary td.cart_quantity {
    clear: both;
    padding: 9px 8px 11px 18px
  }
  #order-detail-content #cart_summary td.cart_delete {
    clear: both;
    width: 100%;
    padding-right: 30px;
    text-align: right
  }
  #order-detail-content #cart_summary td.cart_delete:before {
    display: inline-block;
    position: relative;
    top: -3px;
    padding-right: .5em
  }
  #order-detail-content #cart_summary td div,
  #order-detail-content #cart_summary tfoot td:before {
    display: inline
  }
  #order-detail-content #cart_summary td:before {
    content: attr(data-title);
    display: block
  }
  #order-detail-content #cart_summary tfoot td {
    float: none;
    width: 100%
  }
  #order-detail-content #cart_summary tbody tfoot tr td.cart_total,
  #order-detail-content #cart_summary tbody tfoot tr td.cart_unit,
  #order-detail-content #cart_summary tfoot tr .price,
  #order-detail-content #cart_summary tfoot tr .text-right,
  #order-detail-content #cart_summary tfoot tr tbody td.cart_total,
  #order-detail-content #cart_summary tfoot tr tbody td.cart_unit {
    display: block;
    float: left;
    width: 50%
  }
}
@media (max-width:479px) {
  .bodywebsite ul.product_list.list > li .center-block,
  .bodywebsite ul.product_list.list > li .left-block,
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .button-container {
    width: 100%
  }
  .bodywebsite ul.product_list.list > li .product-image-container {
    margin: 0 auto;
    max-width: 290px
  }
  .bodywebsite ul.product_list.list > li .right-block .right-block-content {
    padding-top: 5px
  }
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .content_price {
    width: 100%;
    padding-top: 0
  }
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons {
    display: inline-block;
    float: none
  }
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons a i,
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons a:before,
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons label i,
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons label:before {
    display: none!important
  }
  .bodywebsite ul.product_list.list > li {
    text-align: center
  }
  .bodywebsite #languages-block-top {
    width: 55%
  }
  .bodywebsite .header_user_info a {
    font-size: 11px
  }
  .bodywebsite #languages-block-top div.current {
    padding: 9px 5px 10px;
    text-align: center;
    font-size: 11px
  }
  .bodywebsite #languages-block-top div.current:after {
    padding-left: 2px;
    font-size: 13px;
    line-height: 13px;
    vertical-align: 0
  }
  .bodywebsite .bottom-pagination-content .compare-form,
  .bodywebsite .top-pagination-content .compare-form {
    float: left;
    clear: both;
    width: 100%;
    padding-bottom: 10px;
    text-align: left
  }
}
.bodywebsite #cms #center_column h1 {
  margin-bottom: 25px
}
.bodywebsite #cms #center_column h3 {
  margin: 0;
  padding: 0 0 17px;
  border-bottom: none;
  font-size: 16px
}
.bodywebsite #cms #center_column .list-1 li {
  padding: 4px 0 6px;
  border-top: 1px solid #d6d4d4;
  font-weight: 700;
  color: #46a74e
}
.bodywebsite #cms #center_column .list-1 li em {
  padding-right: 15px;
  font-size: 20px;
  line-height: 20px;
  vertical-align: -2px
}
.bodywebsite #cms #center_column img {
  height: auto;
  margin: 4px 0 17px;
  max-width: 100%
}
.bodywebsite #cms #center_column .testimonials {
  position: relative;
  margin: 4px 0 13px;
  border: 1px solid;
  border-color: #dfdede #d2d0d0 #b0afaf
}
.bodywebsite #cms #center_column .testimonials .inner {
  padding: 19px 18px 11px;
  border: 1px solid #fff;
  background: #fbfbfb;
  background: -moz-linear-gradient(top,#fbfbfb 0,#fefefe 100%);
  background: -webkit-gradient(linear,left top,left bottom,color-stop(0,#fbfbfb),color-stop(100%,#fefefe));
  background: -webkit-linear-gradient(top,#fbfbfb 0,#fefefe 100%);
  background: -o-linear-gradient(top,#fbfbfb 0,#fefefe 100%);
  background: -ms-linear-gradient(top,#fbfbfb 0,#fefefe 100%);
  background: linear-gradient(to bottom,#fbfbfb 0,#fefefe 100%)
}
.bodywebsite #cms #center_column .testimonials .inner span {
  display: inline-block;
  width: 20px;
  height: 15px;
  text-indent: -5000px
}
.bodywebsite #cms #center_column .testimonials .inner span.after {
  margin-left: 8px
}
.bodywebsite #cms #center_column .testimonials:after {
  content: ".";
  display: block;
  position: absolute;
  bottom: -16px;
  left: 21px;
  width: 15px;
  height: 16px;
  text-indent: -5000px
}
.bodywebsite #cms #center_column .testimonials + p {
  margin-bottom: 18px;
  padding-left: 45px
}
.bodywebsite #cms #center_column #admin-action-cms {
  padding: 10px;
  border: 1px solid #d2d0d0;
  background: #f6f6f6
}
.bodywebsite #cms #center_column #admin-action-cms p span {
  display: block;
  padding-bottom: 10px;
  font-size: 14px;
  font-weight: 700;
  color: #333
}
.bodywebsite #cms #center_column #admin-action-cms p .button {
  display: inline-block;
  padding: 10px 14px;
  border: 1px solid;
  font: 700 17px/21px Arial,Helvetica,sans-serif
}
.bodywebsite #cms #center_column #admin-action-cms p .button.publish_button {
  border-color: #0079b6 #006fa8 #012740;
  text-shadow: 1px 1px rgba(0,0,0,.2);
  color: #fff;
  background: #009ad0;
  background: -moz-linear-gradient(top,#009ad0 0,#007ab7 100%);
  background: -webkit-gradient(linear,left top,left bottom,color-stop(0,#009ad0),color-stop(100%,#007ab7));
  background: -webkit-linear-gradient(top,#009ad0 0,#007ab7 100%);
  background: -o-linear-gradient(top,#009ad0 0,#007ab7 100%);
  background: -ms-linear-gradient(top,#009ad0 0,#007ab7 100%);
  background: linear-gradient(to bottom,#009ad0 0,#007ab7 100%)
}
.bodywebsite #cms #center_column #admin-action-cms p .button.publish_button:hover {
  border-color: #01314e #004b74 #0079b6;
  background: #0084bf;
  filter: none
}
.bodywebsite #cms #center_column #admin-action-cms p .button.lnk_view {
  border-color: #cacaca #b7b7b7 #9a9a9a;
  text-shadow: 1px 1px #fff;
  color: #333;
  background: #f7f7f7;
  background: -moz-linear-gradient(top,#f7f7f7 0,#ededed 100%);
  background: -webkit-gradient(linear,left top,left bottom,color-stop(0,#f7f7f7),color-stop(100%,#ededed));
  background: -webkit-linear-gradient(top,#f7f7f7 0,#ededed 100%);
  background: -o-linear-gradient(top,#f7f7f7 0,#ededed 100%);
  background: -ms-linear-gradient(top,#f7f7f7 0,#ededed 100%);
  background: linear-gradient(to bottom,#f7f7f7 0,#ededed 100%)
}
.bodywebsite #cms #center_column #admin-action-cms p .button.lnk_view:hover {
  border-color: #9e9e9e #9e9e9e #c8c8c8;
  background: #e7e7e7;
  filter: none
}
.bodywebsite a:active,
.bodywebsite a:hover,
div.checker:focus,
div.radio:focus,
div.selector:focus {
  outline: 0
}
.bodywebsite h1 {
  margin: .67em 0
}
.bodywebsite button,
.bodywebsite input {
  margin: 0;
  font-size: 100%;
  font-size: inherit;
  line-height: normal;
  line-height: inherit;
  background-image: none
}
.bodywebsite a {
  text-decoration: none!important;
  color: #a45931
}
.bodywebsite a:focus,
.bodywebsite a:hover {
  text-decoration: underline;
  color: #515151
}
.bodywebsite .btn:focus,
.bodywebsite a:focus,
.btn:focus,
input[type=checkbox]:focus,
input[type=radio]:focus {
  outline: #333 dotted thin;
  outline: -webkit-focus-ring-color auto 5px;
  outline-offset: -2px
}
.bodywebsite p,
p {
  margin: 0 0 9px
}
.bodywebsite h1,
.bodywebsite h3 {
  margin-top: 2px;
  margin-bottom: 9px;
  font-family: "Open Sans",sans-serif!important;
  font-weight: 500;
  line-height: 1.1
}
.bodywebsite h1 {
  font-size: 33px
}
.bodywebsite h3 {
  font-size: 23px
}
.bodywebsite label,
label {
  margin-bottom: 5px;
  font-weight: 700;
  color: #333
}
.bodywebsite .form-control,
.form-control {
  display: block;
  width: 100%;
  border: 1px solid #d6d4d4;
  border-radius: 0;
  font-size: 13px;
  line-height: 1.42857;
  vertical-align: middle;
  color: #555;
  background-color: #fff;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
  -webkit-transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
  transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out
}
.bodywebsite .form-control:focus,
.form-control:focus,
.hasDatepicker:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)
}
.bodywebsite .form-group,
.form-group {
  margin-bottom: 15px
}
.bodywebsite .btn,
.btn {
  display: inline-block;
  margin-bottom: 0;
  padding: 6px 12px;
  border: 1px solid transparent;
  border-radius: 0;
  text-align: center;
  font-size: 13px;
  font-weight: 400;
  line-height: 1.42857;
  white-space: nowrap;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  -ms-user-select: none;
  -o-user-select: none
}
.bodywebsite .btn:focus,
.bodywebsite .btn:hover,
.btn:focus,
.btn:hover {
  text-decoration: none;
  color: #333
}
.bodywebsite .btn:active,
.btn:active {
  outline: 0;
  background-image: none;
  -webkit-box-shadow: inset 0 3px 5px rgba(0,0,0,.125);
  box-shadow: inset 0 3px 5px rgba(0,0,0,.125)
}
.bodywebsite .btn-default,
.btn-default {
  border-color: #ccc;
  color: #333;
  background-color: #fff
}
.bodywebsite .btn-default:active,
.bodywebsite .btn-default:focus,
.bodywebsite .btn-default:hover,
.btn-default:active,
.btn-default:focus,
.btn-default:hover {
  border-color: #adadad;
  color: #333;
  background-color: #ebebeb
}
.bodywebsite .btn-default:active,
.btn-default:active {
  background-image: none
}
.bodywebsite .alert {
  margin-bottom: 18px;
  padding: 5px;
  border: 1px solid transparent;
  border-radius: 0;
  font-weight: 700
}
.bodywebsite .alert-danger {
  border-color: #d4323d;
  color: #fff;
  background-color: #f3515c
}
.bodywebsite .alert.alert-danger {
  text-shadow: 1px 1px rgba(0,0,0,.1)
}
.bodywebsite .alert.alert-danger:before {
  content: "\f057";
  float: left;
  padding-right: 7px;
  vertical-align: -2px;
  font: 20px FontAwesome
}
.bodywebsite .button.button-medium {
  padding: 0;
  border: 1px solid #845931;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  font-size: 17px;
  font-weight: 700;
  line-height: 21px;
  color: #fff;
  background: #a45931
}
.bodywebsite .button.button-medium span {
  display: block;
  padding: 10px 10px 10px 14px;
  border: 1px solid
}
.bodywebsite .button.button-medium span i.left {
  display: inline-block;
  margin: -4px 10px 0 0;
  font-size: 24px;
  vertical-align: -2px
}
.bodywebsite .button.button-medium:hover {
  background: #845931
}
.bodywebsite .button.button-medium.exclusive {
  border-color: #db8600 #d98305 #c86d26;
  background-image: -webkit-gradient(linear,50% 0,50% 100%,color-stop(0,#fdaa02),color-stop(100%,#fe9702));
  background-image: -webkit-linear-gradient(top,#fdaa02,#fe9702);
  background-image: -moz-linear-gradient(top,#fdaa02,#fe9702);
  background-image: -o-linear-gradient(top,#fdaa02,#fe9702);
  background-image: linear-gradient(top,#fdaa02,#fe9702)
}
.bodywebsite .button.button-medium.exclusive span {
  border-color: #fec133 #febc33 #feb233
}
.bodywebsite .button.button-medium.exclusive:hover {
  border-color: #a6550c #ba6708 #db8600;
  background: #f89609
}
.bodywebsite .button.button-medium.exclusive:hover span {
  border-color: #fec133
}
.bodywebsite .form-control,
.form-control {
  height: 27px;
  padding: 3px 5px;
  -webkit-box-shadow: none;
  box-shadow: none
}
.bodywebsite .box,
.box {
  margin: 0 0 30px;
  padding: 14px 18px 13px;
  border: 1px solid #d6d4d4;
  line-height: 23px;
  background: #fbfbfb
}
.bodywebsite .page-heading {
  margin-bottom: 30px;
  padding: 0 0 17px;
  border-bottom: 1px solid #d6d4d4;
  overflow: hidden;
  text-transform: uppercase;
  font: 600 18px/22px "Open Sans",sans-serif;
  color: #555454
}
.bodywebsite .page-subheading,
.page-subheading {
  margin-bottom: 12px;
  padding: 0 0 15px;
  border-bottom: 1px solid #d6d4d4;
  text-transform: uppercase;
  color: #555454;
  font: 600 18px "Open Sans",sans-serif
}
#authentication .box,
.bodywebsite #authentication .box {
  padding-bottom: 20px;
  line-height: 20px
}
#account-creation_form .form-group,
#authentication .form-group,
.bodywebsite #authentication .form-group {
  margin-bottom: 4px
}
#account-creation_form .form-group .form-control,
#authentication .form-group .form-control,
.bodywebsite #authentication .form-group .form-control,
.bodywebsite #create-account_form .form-control,
.bodywebsite #login_form .form-control {
  max-width: 271px
}
.bodywebsite #create-account_form,
.bodywebsite #login_form {
  min-height: 297px
}
.bodywebsite #create-account_form p {
  margin-bottom: 8px
}
.bodywebsite #create-account_form .form-group,
.cart_navigation {
  margin: 0 0 20px
}
.bodywebsite #login_form .form-group {
  margin: 0 0 3px
}
.bodywebsite #login_form .form-group.lost_password {
  margin: 14px 0 15px
}
.checkbox input[type=checkbox],
.checkbox-inline input[type=checkbox],
.radio input[type=radio],
.radio-inline input[type=radio] {
  float: left;
  margin: 0!important
}
.checkbox-inline,
.radio-inline {
  display: inline-block;
  margin-bottom: 0;
  padding-left: 20px;
  font-weight: 400;
  vertical-align: middle;
  cursor: default
}
.checkbox-inline + .checkbox-inline,
.radio-inline + .radio-inline {
  margin-top: 0;
  margin-left: 10px
}
.checkbox-inline[disabled],
.checkbox[disabled],
.radio-inline[disabled],
.radio[disabled],
fieldset[disabled] .checkbox,
fieldset[disabled] .checkbox-inline,
fieldset[disabled] .radio,
fieldset[disabled] .radio-inline,
fieldset[disabled] input[type=checkbox],
fieldset[disabled] input[type=radio],
input[type=checkbox][disabled],
input[type=radio][disabled] {
  cursor: not-allowed
}
.form-horizontal .checkbox,
.form-horizontal .checkbox-inline,
.form-horizontal .control-label,
.form-horizontal .radio,
.form-horizontal .radio-inline {
  margin-top: 0;
  margin-bottom: 0;
  padding-top: 7px
}
.checkbox .checker span,
.radio-inline .checker span {
  top: 0
}
.checkbox div.radio span,
.radio-inline div.radio span {
  float: left;
  top: 0
}
sup {
  position: relative;
  top: -.5em;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline
}
button,
input {
  line-height: normal;
  background-image: none
}
input[type=checkbox],
input[type=radio] {
  box-sizing: border-box;
  margin: 4px 0 0;
  padding: 0;
  line-height: normal
}
div.selector,
div.selector span {
  height: 27px;
  overflow: hidden;
  line-height: 27px
}
*,
:after,
:before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box
}
button,
input,
select {
  margin: 0;
  font-size: 100%;
  font-size: inherit;
  line-height: inherit
}
h3 {
  margin-top: 2px;
  margin-bottom: 9px;
  font: 500 23px/1.1 "Open Sans",sans-serif!important
}
.col-xs-4 {
  float: left;
  position: relative;
  width: 33.33333%;
  padding-right: 15px;
  padding-left: 15px;
  min-height: 1px
}
.checkbox,
.radio {
  display: block;
  margin-top: 10px;
  margin-bottom: 10px;
  padding-left: 20px;
  min-height: 18px;
  vertical-align: middle
}
.checkbox label,
.radio-inline {
  margin-bottom: 0;
  font-weight: 400
}
.checkbox label {
  display: inline;
  color: #777;
  cursor: pointer
}
.checkbox + .checkbox {
  margin-top: -5px
}
.radio-inline {
  display: inline-block;
  vertical-align: middle
}
.pull-right {
  float: right!important
}
[class^=icon-] {
  display: inline;
  width: auto;
  height: auto;
  margin-top: 0;
  font-family: FontAwesome;
  font-weight: 400;
  line-height: normal;
  vertical-align: baseline;
  background-image: none;
  background-position: 0 0;
  background-repeat: repeat
}
.checkbox {
  line-height: 16px
}
.button.button-medium {
  padding: 0;
  border: 1px solid;
  border-color: #399a49 #247f32 #1a6d27 #399a49;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  font-size: 17px;
  font-weight: 700;
  line-height: 21px;
  color: #fff;
  background: #43b754;
  background: -moz-linear-gradient(top,#43b754 0,#41b757 2%,#41b854 4%,#43b756 6%,#41b354 38%,#44b355 40%,#45af55 66%,#41ae53 74%,#42ac52 91%,#41ae55 94%,#43ab54 96%,#42ac52 100%);
  background: -webkit-gradient(linear,left top,left bottom,color-stop(0,#43b754),color-stop(2%,#41b757),color-stop(4%,#41b854),color-stop(6%,#43b756),color-stop(38%,#41b354),color-stop(40%,#44b355),color-stop(66%,#45af55),color-stop(74%,#41ae53),color-stop(91%,#42ac52),color-stop(94%,#41ae55),color-stop(96%,#43ab54),color-stop(100%,#42ac52));
  background: -webkit-linear-gradient(top,#43b754 0,#41b757 2%,#41b854 4%,#43b756 6%,#41b354 38%,#44b355 40%,#45af55 66%,#41ae53 74%,#42ac52 91%,#41ae55 94%,#43ab54 96%,#42ac52 100%);
  background: -o-linear-gradient(top,#43b754 0,#41b757 2%,#41b854 4%,#43b756 6%,#41b354 38%,#44b355 40%,#45af55 66%,#41ae53 74%,#42ac52 91%,#41ae55 94%,#43ab54 96%,#42ac52 100%);
  background: -ms-linear-gradient(top,#43b754 0,#41b757 2%,#41b854 4%,#43b756 6%,#41b354 38%,#44b355 40%,#45af55 66%,#41ae53 74%,#42ac52 91%,#41ae55 94%,#43ab54 96%,#42ac52 100%);
  background: linear-gradient(to bottom,#43b754 0,#41b757 2%,#41b854 4%,#43b756 6%,#41b354 38%,#44b355 40%,#45af55 66%,#41ae53 74%,#42ac52 91%,#41ae55 94%,#43ab54 96%,#42ac52 100%)
}
.button.button-medium span {
  display: block;
  padding: 10px 10px 10px 14px;
  border: 1px solid #74d578
}
.button.button-medium:hover {
  border-color: #196f28 #399a49 #399a49 #258033;
  background: #3aa04c;
  background: -moz-linear-gradient(top,#3aa04c 0,#3aa04a 100%);
  background: -webkit-gradient(linear,left top,left bottom,color-stop(0,#3aa04c),color-stop(100%,#3aa04a));
  background: -webkit-linear-gradient(top,#3aa04c 0,#3aa04a 100%);
  background: -o-linear-gradient(top,#3aa04c 0,#3aa04a 100%);
  background: -ms-linear-gradient(top,#3aa04c 0,#3aa04a 100%);
  background: linear-gradient(to bottom,#3aa04c 0,#3aa04a 100%)
}
#account-creation_form p.required,
#authentication p.required {
  margin: 9px 0 16px;
  color: #f13340
}
#authentication #center_column form.std .row {
  margin-right: -5px;
  margin-left: -5px
}
#authentication #center_column form.std .row .col-xs-4 .form-control {
  max-width: 84px
}
div.checker span,
div.radio span,
div.selector,
div.selector span {
  background-image: url(https://www.dolistore.com/themes/dolibarr-bootstrap/img/jquery/uniform/sprite.png);
  background-repeat: no-repeat;
  -webkit-font-smoothing: antialiased
}
div.checker,
div.checker *,
div.radio,
div.radio *,
div.selector,
div.selector * {
  margin: 0;
  padding: 0
}
div.selector {
  position: relative;
  padding: 0 0 0 10px;
  font-size: 12px;
  background-position: 0 -54px
}
div.selector span {
  display: block;
  width: 100%;
  padding-right: 30px;
  text-shadow: 0 1px 0 #fff;
  color: #666;
  background-position: right 0;
  cursor: pointer
}
div.selector select {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 27px;
  border: none;
  opacity: 0;
  background: 0 0;
  -moz-opacity: 0;
  font: 12px "Helvetica Neue",Arial,Helvetica,sans-serif
}
div.checker span,
div.radio span {
  position: relative;
  top: -2px;
  zoom: 1;
  text-align: center
}
div.checker,
div.checker input,
div.checker span {
  width: 15px;
  height: 15px
}
div.checker span {
  display: inline-block;
  background-position: 0 -257px
}
div.checker input {
  display: inline-block;
  zoom: 1;
  -webkit-appearance: none;
  -moz-appearance: none;
  border: none;
  opacity: 0;
  background: 0 0;
  -moz-opacity: 0
}
div.radio {
  display: inline;
  position: relative
}
div.radio,
div.radio input,
div.radio span {
  width: 13px;
  height: 13px
}
div.radio span {
  display: inline-block;
  background-position: 0 -243px
}
div.radio input {
  display: inline-block;
  zoom: 1;
  border: none;
  text-align: center;
  opacity: 0;
  background: 0 0;
  -moz-opacity: 0
}
.checkbox input[type=checkbox],
.checker span input,
.radio input[type=radio],
.radio-inline input[type=radio] {
  margin: 0!important
}
div.checker {
  display: inline-block;
  position: relative;
  margin-right: 5px;
  cursor: pointer
}
div.radio {
  margin-right: 3px
}
#authentication #center_column form.std .row .col-xs-4,
#identity #center_column form.std .row .col-xs-4,
#order-opc #center_column form.std .row .col-xs-4 {
  padding-right: 5px;
  padding-left: 5px;
  max-width: 94px
}
.page-subheading-login {
  margin-top: 25px!important;
  font-size: 14px!important;
  font-weight: lighter!important;
  line-height: 0!important
}
#my-account ul.myaccount-link-list li {
  padding-bottom: 10px;
  overflow: hidden
}
#my-account ul.myaccount-link-list li a {
  display: block;
  position: relative;
  border: 1px solid;
  border-color: #cacaca #b7b7b7 #9a9a9a;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  overflow: hidden;
  text-decoration: none;
  text-shadow: 0 1px #fff;
  text-transform: uppercase;
  font: 600 16px/20px "Open Sans",sans-serif;
  color: #555454;
  -ms-border-radius: 4px;
  -o-border-radius: 4px
}
#my-account ul.myaccount-link-list li a i {
  position: absolute;
  top: 0;
  left: 0;
  width: 52px;
  height: 100%;
  padding: 10px 0 0;
  border: 1px solid #fff;
  -webkit-border-top-left-radius: 4px;
  -webkit-border-bottom-left-radius: 4px;
  -moz-border-radius-topleft: 4px;
  -moz-border-radius-bottomleft: 4px;
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
  text-align: center;
  font-size: 25px;
  color: #fd7e01
}
#my-account ul.myaccount-link-list li a span {
  display: block;
  margin-left: 52px;
  padding: 13px 15px 15px 17px;
  border: 1px solid;
  border-color: #fff #fff #fff #c8c8c8;
  -webkit-border-top-right-radius: 5px;
  -webkit-border-bottom-right-radius: 5px;
  -moz-border-radius-topright: 5px;
  -moz-border-radius-bottomright: 5px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  overflow: hidden
}
#my-account ul.myaccount-link-list li a:hover {
  border-color: #9e9e9e #c2c2c2 #c8c8c8;
  background: #e7e7e7;
  filter: none
}
.icon-list-ol:before {
  content: "\f0cb"
}
.icon-refresh:before {
  content: "\f021"
}
.icon-ban-circle:before {
  content: "\f05e"
}
.icon-building:before {
  content: "\f0f7"
}
.icon-user:before {
  content: "\f007"
}
.icon-barcode:before {
  content: "\f02a"
}
.icon-shopping-cart:before {
  content: "\f080"
}
.shopping_cart .block_cart_collapse:after,
.shopping_cart .block_cart_expand:after {
  content: "\f0d7";
  display: inline-block;
  float: right;
  padding: 6px 0 0;
  color: #686666;
  font: 18px fontawesome
}
.shopping_cart .block_cart_collapse:after {
  content: "\f0d8";
  padding: 4px 0 2px
}
.cart_block .cart_block_list .ajax_cart_block_remove_link,
.cart_block .cart_block_list .remove_link a {
  display: block;
  width: 100%;
  height: 100%;
  color: #777
}
.cart_block .cart_block_list .ajax_cart_block_remove_link:before,
.cart_block .cart_block_list .remove_link a:before {
  content: "\f057";
  display: inline-block;
  font: 18px/18px fontawesome
}
.cart_block .cart-images {
  float: left;
  margin-right: 20px
}
.cart_block .cart-info {
  position: relative;
  padding-right: 20px;
  overflow: hidden
}
.cart_block .cart-info .product-name {
  margin-top: -4px;
  padding-bottom: 5px
}
.cart_block .cart-info .quantity-formated .quantity,
.download_icon i {
  font-size: 15px
}
.cart_block dt {
  position: relative;
  padding: 20px 10px 16px 20px;
  overflow: hidden;
  font-weight: 400
}
.cart_block dd .cart_block_customizations {
  border-top: 1px dashed #333
}
.cart_block dd .cart_block_customizations li {
  padding: 10px 20px
}
.cart_block dd .cart_block_customizations li .deleteCustomizableProduct {
  position: absolute;
  right: 10px
}
.cart_block .cart-buttons {
  margin: 0;
  padding: 20px 20px 10px;
  overflow: hidden;
  background: #f6f6f6
}
.cart_block .cart-buttons a#button_order_cart span {
  padding: 7px 0;
  border: 1px solid #63c473;
  font-size: 1.1em;
  background: #43b155
}
.cart_block .cart-buttons a#button_order_cart:hover span {
  border: 1px solid #358c43;
  color: #fff;
  background: #2e7a3a
}
.cart_block_list img {
  width: 80px;
  height: auto
}
.cart_block .cart-info .quantity-formated {
  display: inline-block;
  padding-right: 5px;
  text-transform: uppercase;
  font-size: 10px;
  color: #9c9b9b
}
.cart_block .cart-info .product-name a {
  display: block;
  font-size: 13px;
  line-height: 18px
}
.cart_block .cart_block_list .remove_link {
  position: absolute;
  top: 19px;
  right: 10px
}
.lightbox3 {
  z-index: 10000;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,.7)!important
}
.countdown-container,
.lightbox3 #content3,
.table .table {
  background-color: #fff
}
.lightbox3 p {
  text-align: center;
  font-size: 12px;
  color: #fff
}
.lightbox3 img {
  max-width: 700px
}
#cart_summary,
.lightbox3 #content3 {
  border: 1px solid #dbdbdb
}
.cart_gift_quantity .cart_quantity_input,
.cart_quantity .cart_quantity_input {
  width: 57px;
  height: 27px;
  padding: 0;
  text-align: center;
  line-height: 27px
}
.table tbody > tr > td.cart_quantity {
  width: 88px;
  padding: 41px 14px 25px;
  text-align: center
}
.cart_delete a.cart_quantity_delete,
a.price_discount_delete {
  font-size: 23px;
  color: #333
}
#cart_summary tfoot td.total_price_container span,
.cart_voucher h4 {
  text-transform: uppercase;
  font: 600 18px/22px "Open Sans",sans-serif;
  color: #555454
}
.cart_delete a.cart_quantity_delete:hover,
a.price_discount_delete:hover {
  color: silver
}
#cart_summary tbody td {
  padding: 7px 8px 9px 18px
}
#cart_summary tbody td.cart_unit .price span.price-percent-reduction {
  display: inline-block;
  margin: 5px auto
}
#cart_summary tbody td.cart_unit .price span.old-price {
  text-decoration: line-through
}
#cart_summary tfoot td#total_price_container {
  font: 600 21px/25px "Open Sans",sans-serif;
  color: #333;
  background: #fff
}
.cart_voucher,
.order-history tbody > tr > td {
  vertical-align: top!important
}
.cart_voucher h4 {
  padding: 7px 0 10px
}
.cart_voucher .title-offers {
  margin-bottom: 6px;
  font-weight: 700;
  color: #333
}
.cart_voucher fieldset {
  margin-bottom: 10px;
  border: none
}
.cart_voucher fieldset #discount_name {
  float: left;
  width: 219px;
  margin-right: 11px
}
.cart_voucher #display_cart_vouchers span {
  font-weight: 700;
  color: #777;
  cursor: pointer
}
table#cart_summary .gift-icon {
  padding: 2px 5px;
  border-radius: 5px;
  line-height: 20px;
  color: #fff;
  background: #08c
}
table {
  max-width: 100%
}
.table {
  width: 100%;
  margin-bottom: 30px
}
.table tbody > tr > td,
.table tbody > tr > th,
.table tfoot > tr > td,
.table tfoot > tr > th,
.table thead > tr > td,
.table thead > tr > th {
  padding: 9px 8px 11px 18px;
  border-top: 1px solid #d6d4d4;
  line-height: 1.42857;
  vertical-align: top
}
.table thead > tr > th {
  border-bottom: 2px solid #d6d4d4;
  vertical-align: bottom
}
.table caption + thead tr:first-child td,
.table caption + thead tr:first-child th,
.table colgroup + thead tr:first-child td,
.table colgroup + thead tr:first-child th,
.table thead:first-child tr:first-child td,
.table thead:first-child tr:first-child th {
  border-top: 0
}
.table tbody + tbody {
  border-top: 2px solid #d6d4d4
}
.table tbody > tr > td.cart_delete,
.table tbody > tr > td.price_discount_del,
.table-condensed tbody > tr > td,
.table-condensed tbody > tr > th,
.table-condensed tfoot > tr > td,
.table-condensed tfoot > tr > th,
.table-condensed thead > tr > td,
.table-condensed thead > tr > th {
  padding: 5px
}
.table-striped > tbody > tr:nth-child(odd) > td,
.table-striped > tbody > tr:nth-child(odd) > th {
  background-color: #f9f9f9
}
.table > tbody > tr > td.active,
.table > tbody > tr > th.active,
.table > tbody > tr.active > td,
.table > tbody > tr.active > th,
.table > tfoot > tr > td.active,
.table > tfoot > tr > th.active,
.table > tfoot > tr.active > td,
.table > tfoot > tr.active > th,
.table > thead > tr > td.active,
.table > thead > tr > th.active,
.table > thead > tr.active > td,
.table > thead > tr.active > th,
.table-hover > tbody > tr:hover > td,
.table-hover > tbody > tr:hover > th {
  background-color: #f5f5f5
}
table col[class*=col-] {
  display: table-column;
  float: none
}
table td[class*=col-],
table th[class*=col-] {
  display: table-cell;
  float: none
}
.table > tbody > tr > td.success,
.table > tbody > tr > th.success,
.table > tbody > tr.success > td,
.table > tbody > tr.success > th,
.table > tfoot > tr > td.success,
.table > tfoot > tr > th.success,
.table > tfoot > tr.success > td,
.table > tfoot > tr.success > th,
.table > thead > tr > td.success,
.table > thead > tr > th.success,
.table > thead > tr.success > td,
.table > thead > tr.success > th {
  border-color: #48b151;
  background-color: #55c65e
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td {
  border-color: #419f49;
  background-color: #42c04c
}
.table > tbody > tr > td.danger,
.table > tbody > tr > th.danger,
.table > tbody > tr.danger > td,
.table > tbody > tr.danger > th,
.table > tfoot > tr > td.danger,
.table > tfoot > tr > th.danger,
.table > tfoot > tr.danger > td,
.table > tfoot > tr.danger > th,
.table > thead > tr > td.danger,
.table > thead > tr > th.danger,
.table > thead > tr.danger > td,
.table > thead > tr.danger > th {
  border-color: #d4323d;
  background-color: #f3515c
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td {
  border-color: #c32933;
  background-color: #f13946
}
.table > tbody > tr > td.warning,
.table > tbody > tr > th.warning,
.table > tbody > tr.warning > td,
.table > tbody > tr.warning > th,
.table > tfoot > tr > td.warning,
.table > tfoot > tr > th.warning,
.table > tfoot > tr.warning > td,
.table > tfoot > tr.warning > th,
.table > thead > tr > td.warning,
.table > thead > tr > th.warning,
.table > thead > tr.warning > td,
.table > thead > tr.warning > th {
  border-color: #e4752b;
  background-color: #fe9126
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td {
  border-color: #da681c;
  background-color: #fe840d
}
table.std,
table.table_block {
  width: 100%;
  margin-bottom: 20px;
  border: 1px solid #999;
  border-collapse: inherit;
  border-bottom: none;
  background: #fff
}
table.std th,
table.table_block th {
  padding: 14px 12px;
  text-shadow: 0 1px 0 #000;
  text-transform: uppercase;
  font-size: 12px;
  font-weight: 700;
  color: #fff;
  background: #999
}
table.std tr.alternate_item,
table.table_block tr.alternate_item {
  background-color: #f3f3f3
}
table.std td,
table.table_block td {
  padding: 12px;
  border-right: 1px solid #e9e9e9;
  border-bottom: 1px solid #e9e9e9;
  font-size: 12px;
  vertical-align: top
}
.table > thead > tr > th {
  border-bottom-width: 1px;
  vertical-align: middle;
  color: #333;
  background: #fbfbfb
}
.table td a.color-myaccount {
  text-decoration: underline;
  color: #777
}
.table tbody > tr > td.cart_quantity .cart_quantity_button {
  margin-top: 3px
}
.table tbody > tr > td.cart_quantity .cart_quantity_button a {
  float: left;
  margin-right: 3px
}
table.discount i {
  font-size: 20px;
  line-height: 20px;
  vertical-align: -2px
}
table.discount i.icon-ok {
  color: #46a74e
}
@media only screen and (max-width:767px) {
  table.responsive {
    margin-bottom: 0
  }
  .pinned {
    position: absolute;
    top: 0;
    left: 0;
    width: 35%;
    border-right: 1px solid #ccc;
    border-left: 1px solid #ccc;
    overflow: hidden;
    overflow-x: scroll;
    background: #fff
  }
  .pinned table {
    width: 100%;
    border-right: none;
    border-left: none
  }
  .pinned table td,
  .pinned table th {
    white-space: nowrap
  }
  .pinned td:last-child {
    border-bottom: 0
  }
  div.table-wrapper {
    position: relative;
    margin-bottom: 20px;
    border-right: 1px solid #ccc;
    overflow: hidden
  }
  div.table-wrapper div.scrollable {
    margin-left: 35%;
    overflow: scroll;
    overflow-y: hidden
  }
  table.responsive td,
  table.responsive th {
    position: relative;
    overflow: hidden;
    white-space: nowrap
  }
  table.responsive td:first-child,
  table.responsive th:first-child,
  table.responsive.pinned td {
    display: none
  }
}
#cart_summary tbody td.cart_product img,
.table-bordered,
.table-bordered > tbody > tr > td,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > td,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > thead > tr > th {
  border: 1px solid #d6d4d4
}
.table-bordered > thead > tr > td,
.table-bordered > thead > tr > th {
  border-bottom-width: 1px
}
#cart_summary tbody td.cart_product {
  width: 137px;
  padding: 7px
}
ul.step {
  margin-bottom: 30px;
  overflow: hidden
}
ul.step li {
  float: left;
  width: 20%;
  border: 1px solid;
  border-top-color: #cacaca;
  border-right-color: #b7b7b7;
  border-bottom-color: #9a9a9a;
  border-left-width: 0;
  text-align: left
}
@media (max-width:767px) {
  ul.step li {
    width: 100%;
    border-left-width: 1px
  }
}
ul.step li a,
ul.step li span,
ul.step li.step_current span,
ul.step li.step_current_end span {
  display: block;
  position: relative;
  padding: 13px 10px 14px 13px;
  text-shadow: 1px 1px #fff;
  font-size: 17px;
  font-weight: 700;
  line-height: 21px;
  color: #333
}
ul.step li a:focus,
ul.step li span:focus,
ul.step li.step_current span:focus,
ul.step li.step_current_end span:focus {
  text-decoration: none;
  outline: 0
}
ul.step li.first {
  border-left-color: #b7b7b7;
  border-left-width: 1px
}
ul.step li.first a,
ul.step li.first span {
  z-index: 5;
  padding-left: 13px!important
}
ul.step li.second a,
ul.step li.second span {
  z-index: 4
}
ul.step li.third a,
ul.step li.third span {
  z-index: 3
}
ul.step li.four a,
ul.step li.four span {
  z-index: 2
}
ul.step li.last span {
  z-index: 1
}
ul.step li.step_current {
  border-color: #399b49 #51ae5c #208931 #369946;
  font-weight: 700;
  background: #42b856;
  background: -moz-linear-gradient(top,#42b856 0,#43ab54 100%);
  background: -webkit-gradient(linear,left top,left bottom,color-stop(0,#42b856),color-stop(100%,#43ab54));
  background: -webkit-linear-gradient(top,#42b856 0,#43ab54 100%);
  background: -o-linear-gradient(top,#42b856 0,#43ab54 100%);
  background: -ms-linear-gradient(top,#42b856 0,#43ab54 100%);
  background: linear-gradient(to bottom,#42b856 0,#43ab54 100%)
}
ul.step li.step_current span {
  position: relative;
  border: 1px solid;
  border-color: #73ca77 #74c776 #74c175;
  text-shadow: 1px 1px #208931;
  color: #fff
}
ul.step li.step_todo {
  background: #f7f7f7;
  background: -moz-linear-gradient(top,#f7f7f7 0,#ededed 100%);
  background: -webkit-gradient(linear,left top,left bottom,color-stop(0,#f7f7f7),color-stop(100%,#ededed));
  background: -webkit-linear-gradient(top,#f7f7f7 0,#ededed 100%);
  background: -o-linear-gradient(top,#f7f7f7 0,#ededed 100%);
  background: -ms-linear-gradient(top,#f7f7f7 0,#ededed 100%);
  background: linear-gradient(to bottom,#f7f7f7 0,#ededed 100%)
}
ul.step li.step_todo span {
  display: block;
  position: relative;
  border: 1px solid #fff;
  color: #333
}
ul.step li.step_done {
  border-color: #666 #5f5f5f #292929;
  background: #727171;
  background: -moz-linear-gradient(top,#727171 0,#666 100%);
  background: -webkit-gradient(linear,left top,left bottom,color-stop(0,#727171),color-stop(100%,#666));
  background: -webkit-linear-gradient(top,#727171 0,#666 100%);
  background: -o-linear-gradient(top,#727171 0,#666 100%);
  background: -ms-linear-gradient(top,#727171 0,#666 100%);
  background: linear-gradient(to bottom,#727171 0,#666 100%)
}
ul.step li.step_done a {
  border: 1px solid #8b8a8a;
  text-shadow: 1px 1px rgba(0,0,0,.3);
  color: #fff
}
@media (min-width:992px) {
  ul.step li.step_current span,
  ul.step li.step_done a,
  ul.step li.step_todo span {
    padding-left: 38px
  }
  ul.step li#step_end span:after {
    display: none
  }
}
@media (min-width:768px) and (max-width:991px) {
  .bodywebsite .view_scroll_spacer {
    margin-top: 28px
  }
  .bodywebsite .shopping_cart > a:first-child span.ajax_cart_product_txt,
  .bodywebsite .shopping_cart > a:first-child span.ajax_cart_product_txt_s {
    display: none!important
  }
  ul.step li em {
    display: none
  }
}
#cart_summary tbody td.cart_description small {
  display: block;
  padding: 5px 0 0
}
#cart_summary .stock-management-on tbody td.cart_description {
  width: 480px
}
.icon-delete:before,
.icon-trash:before {
  content: "\f014"
}
.cart_navigation .button-medium {
  float: right;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  font-size: 20px;
  line-height: 24px
}
.cart_navigation .button-medium span {
  padding: 11px 15px 10px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px
}
@media (max-width:992px) {
  ul.step li a,
  ul.step li span,
  ul.step li.step_current span,
  ul.step li.step_current_end span {
    font-size: 15px
  }
  .cart_navigation .button-medium span {
    font-size: 16px
  }
}
.cart_navigation .button-medium i.right {
  margin-left: 6px;
  font-size: 25px;
  line-height: 25px;
  vertical-align: -4px
}
@media (max-width:480px) {
  .bodywebsite .button.button-medium span i.right,
  .button.button-medium span i.right {
    margin-left: 5px
  }
  .bodywebsite .button.button-medium span,
  .bodywebsite .button.exclusive-medium span,
  .button.button-medium span {
    padding-right: 7px;
    padding-left: 7px;
    font-size: 15px
  }
  .bodywebsite .shopping_cart {
    padding-top: 20px
  }
  .bodywebsite #header .cart_block {
    width: 100%
  }
  .bodywebsite #layer_cart .layer_cart_product .product-image-container {
    float: none;
    margin-right: 0;
    margin-bottom: 10px
  }
  .bodywebsite .page-heading span.heading-counter {
    display: block;
    float: none;
    padding-top: 5px
  }
  .bodywebsite .button.button-medium span i.left {
    margin-right: 5px
  }
  .cart_navigation > span {
    display: block;
    width: 100%;
    padding-bottom: 15px
  }
}
#order-detail-content {
  margin-bottom: 35px
}
.cart_navigation .button-exclusive {
  margin: 9px 0 0;
  padding: 0;
  border: none;
  font-size: 17px;
  font-weight: 700;
  color: #333;
  background: 0 0!important
}
.cart_navigation .button-exclusive i {
  margin-right: 8px;
  color: #777
}
.cart_navigation .button-exclusive:active,
.cart_navigation .button-exclusive:focus,
.cart_navigation .button-exclusive:hover {
  color: #515151;
  -webkit-box-shadow: none;
  box-shadow: none
}
.cart_total_payment {
  text-align: right!important
}
#HOOK_PAYMENT {
  height: 750px;
  border: 1px solid #dbdbdb;
  text-align: center;
  background: #fbfbfb
}
.clearfix.payment_accepted {
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 5px;
  text-align: center;
  background-color: #f5f5f5;
  box-shadow: 0 2px 4px rgba(0,0,0,.1)
}
.clearfix.payment_accepted h1 {
  margin-bottom: 25px;
  font-size: 24px;
  color: #333
}
.clearfix.payment_accepted p {
  margin-bottom: 10px;
  font-size: 15px;
  line-height: 14px;
  color: #666
}
.countdown-container {
  width: 45px;
  margin: 0 auto!important;
  padding: 10px;
  border-radius: 5px
}
#countdown {
  font-size: 20px;
  font-weight: 700;
  color: #a45931
}
#Legal_notice_section,
#Terms_section,
#about_payement_section,
#contact_us_section {
  text-align: justify
}
.icon-file-text::before {
  content: "\f15c"
}
.info-order i {
  font-size: 20px
}
.info-order.box {
  font-size: 1.2em!important
}
.table-bordered-block-order-detail {
  border: 1px solid #d6d4d4!important
}
.detail_step_by_step {
  margin-bottom: 30px!important
}
ul.footer_links {
  height: 65px;
  padding: 20px 0 0;
  border-top: 1px solid #d6d4d4
}
.download_invoice {
  margin-top: 25px!important
}
.table-bordered-block-order-detail .product-name {
  font-size: 15px!important
}
.icon-cloud-download:before {
  content: "\f0ed"
}
.icon-external-link:before {
  content: "\f08e"
}
.invoice-pdf-link {
  display: block ruby
}
.order-history-products-list {
  margin-left: 10px!important;
  min-width: 230px!important;
  font-size: 13px!important;
  list-style: initial!important
}
.checkbox_label,
.price-currency {
  margin-left: 5px
}
.order-history-products-list li {
  padding-bottom: 10px!important
}
.btn-table .button.button-small span {
  display: inline-flex
}
.tag_version {
  width: 40px;
  text-align: center
}
.nav-link {
  padding: 5px 20px;
  border: none;
  outline: 0;
  background: 0 0;
  cursor: pointer
}
.nav-link.active {
  border-bottom: 3px solid #333;
  font-weight: 700;
  background-color: #dbdbdb
}
.tab-content {
  margin-top: -2px!important;
  margin-bottom: 20px;
  padding: 20px;
  border-top: 2px solid #999!important;
  background-color: fbfbfb
}
.add-product-page {
  padding: 0 15px 10px!important;
  border: 1px solid #dbdbdb!important
}
.nav-tabs .nav-link {
  margin-bottom: -1px;
  border: 1px solid;
  background: rgba(0,0,0,0)
}
.add-product-page h5 {
  margin-bottom: 60px;
  text-align: center
}
#authentication .form-group .form-control,
.how-to-contact,
.module-keywords,
.module-version,
.tab-content .tab-pane .form-group .form-control {
  max-width: none!important
}
.box-form {
  margin-top: 20px;
  padding: 0 20px 20px
}
.textarea-short-description {
  height: 80px!important
}
.info p {
  margin-bottom: 15px!important;
  text-align: justify
}
div.info {
  margin: 1em 0;
  padding: 8px 4px 8px 10px;
  border-left: 5px solid #87cfd2;
  color: #558;
  background: #eff8fc
}
.price-field {
  max-width: 53%!important
}
.version-field {
  float: left;
  width: 120px!important;
  margin-right: 8px!important
}
.price-free {
  font-size: 11px;
  font-style: italic
}
.cat-check-table td {
  padding: 2px!important;
  font-size: 13px
}
div.uploader {
  position: relative;
  width: 100%;
  height: 27px;
  overflow: hidden;
  background: 0 0;
  cursor: pointer
}
.lang_span {
  text-transform: uppercase;
  font-size: 10px;
  font-style: italic
}
.field-info,
.tooltip .tooltiptext {
  text-align: justify;
  font: 12px sans-serif
}
#product-creation-form label,
.checkbox_label {
  font-weight: 400!important
}
.tooltip {
  display: inline-block;
  position: relative;
  cursor: pointer
}
.tooltip .tooltiptext {
  visibility: hidden;
  z-index: 1;
  position: absolute;
  bottom: 125%;
  left: 50%;
  width: 350px;
  margin-left: -100px;
  padding: 15px!important;
  border-radius: 6px;
  font-weight: 400;
  line-height: 16px;
  color: #fff;
  opacity: 0;
  background-color: #555;
  transition: opacity .3s;
  text-justify: inter-word
}
.tooltip .tooltiptext::after {
  content: '';
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border: 5px solid #555
}
.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1
}
.checkbox_label {
  cursor: pointer
}
.field-info {
  margin-top: 6px;
  padding-left: 12px;
  border-left: 1px solid #dbdbdb;
  font-weight: lighter;
  color: #555
}
.dolibarr_core_include {
  margin-top: 15px!important
}
.subcat-checkbox-td {
  padding: 0 10px 5px 30px!important;
  font-size: 13px
}
.cat-checkbox-td {
  padding: 4px 10px 5px!important;
  font-size: 13px
}
#product-creation-form hr {
  margin: 10px 0!important
}
.sortable-placeholder {
  height: 100px;
  border: 1px dashed #ccc;
  background-color: #f0f0f0
}
.icon-move::before {
  content: "\f047"
}
#addImageBtn span.iconAddImage,
#addImageBtn2 span.iconAddImage {
  margin-left: 5px;
  cursor: pointer;
  font: 14px FontAwesome
}
.table-body {
  border-left: 4px solid #dbdbdb
}
.table-body tr {
  border-bottom: 1px solid #dbdbdb
}
.td-deleteBtn {
  padding-right: 0!important;
  text-align: right!important
}
.icon-delete {
  padding: 0!important;
  font-size: 17px!important;
  line-height: 15px;
  cursor: pointer
}
.table-body td {
  padding: 4px 0 4px 15px!important
}
.image-input,
.input-image-cover {
  max-width: 350px
}
.dragging {
  opacity: .7;
  background-color: #f0f0f0
}
.form-subheading {
  margin-bottom: 20px!important;
  padding: 0!important;
  border-bottom: 1px solid #dbdbdb!important;
  text-transform: uppercase;
  color: #555454;
  font: 600 15px "Open Sans",sans-serif!important
}
.image-cover-preview,
.image-preview {
  border: 1px solid #dbdbdb;
  box-shadow: 1px 1px 3px -1px #333
}
.image-cover-preview {
  margin-left: 15px!important
}
.fade-in {
  animation: .6s fadeIn
}
@keyframes fadeIn {
  from {
    opacity: 0
  }
  to {
    opacity: 1
  }
}
.form-check {
  float: left;
  width: 90px
}
.notification {
  display: none;
  position: fixed;
  top: 20px;
  right: 20px;
  padding: 10px;
  border-radius: 5px;
  color: #fff;
  background-color: #4caf50
}
.icon-add:before {
  content: "\f055"
}
.icon-manage:before {
  content: "\f0ae"
}
.product-table-icons {
  margin-right: 0!important;
  margin-left: 0!important;
  font-size: 15px!important
}
.icon-edit:before {
  content: "\f044"
}
.order-history tbody {
  font-size: 14px!important
}
.icon-euro:before {
  content: "\f153"
}
.hasDatepicker {
  display: inline;
  height: 25px;
  margin-right: 3px!important;
  padding: 6px 12px;
  border: 1px solid #d6d4d4;
  border-radius: 0;
  font-size: 13px;
  line-height: 1.42857;
  vertical-align: middle;
  color: #9c9b9b;
  background-color: #fff;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
  -webkit-transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
  transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out
}
.inline-date-filter span {
  float: left;
  margin-right: 25px
}
.btn-filter {
  position: relative;
  padding: 0 8px;
  border: 1px solid #c90;
  text-align: left;
  text-shadow: 0 1px #b57b00;
  font-weight: 700;
  white-space: normal;
  color: #fff;
  background: #a45931;
  cursor: pointer
}
.btn-filter:after {
  content: "\f002";
  margin-left: 7px;
  font-family: fontawesome
}
.table-no-border td,
.table-no-border th {
  padding-right: 60px;
  padding-bottom: 4px;
  border: 0!important;
  font-size: 14px
}
.span-blue {
  padding: 0 7px;
  border-color: rgba(238,162,0,.5);
  background-color: rgba(238,162,0,.2)
}
.table-payment-recap td,
th {
  padding: 7px 8px!important;
  text-align: center!important
}
#generate-csv {
  position: absolute;
  top: 0;
  right: 15px
}
.p_with_margin {
  margin: 45px!important;
  text-align: center
}
.e404 {
  margin: auto;
  padding: 50px;
  max-width: 610px;
  text-align: center!important;
  color: #333
}
.e404 h1 {
  margin: 0;
  font-size: 100px;
  font-weight: 700;
  color: #ff6f61
}
.e404 h2 {
  margin: 20px 0;
  font-size: 24px
}
.e404 p {
  margin: 10px 0 30px;
  font-size: 18px
}
.e404 a {
  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;
  font-size: 18px;
  color: #fff;
  background-color: #ff6f61;
  transition: background-color .3s
}
.e404 a:hover {
  background-color: #ff4a39
}
.e404 .container {
  margin: 0 auto;
  max-width: 600px
}
.list-grid-product-title {
  padding: 2px!important
}
#add_to_cart .icon-cart-plus {
  font-size: 19px
}
#add_to_cart .btn-add-to-cart-product {
  width: 88%;
  margin-bottom: 5px;
  padding: 3px 10px;
  min-width: 85px
}
#add_to_cart .btn-add-to-cart-product p {
  margin-bottom: 1px!important;
  white-space: normal;
  word-wrap: break-word;
  overflow-wrap: break-word
}
.box-info-product {
  border-bottom-width: 3px!important
}
@media (max-width:768px) {
  div#content.marketplacelightbox2 {
    width: calc(100% - 8px);
    height: calc(100% - 40px);
    margin-left: 4px
  }
  div#content.marketplacelightbox2 img {
    width: 100%;
    height: 50%;
    padding: 5px;
    object-fit: contain
  }
  .pb-center-column.col-xs-12.col-sm-5.col-md-5.productlabel {
    padding-top: 20px
  }
  #order-detail-content #cart_summary tbody td .price {
    text-align: center
  }
  #order-detail-content #cart_summary tbody td.cart_description {
    width: 300px
  }
  .table-responsive {
    width: 100%;
    margin-bottom: 15px;
    border: 1px solid #d6d4d4;
    overflow-x: scroll;
    overflow-y: hidden
  }
  .table-responsive > .table {
    margin-bottom: 0;
    background-color: #fff
  }
  .table-responsive > .table > tbody > tr > td,
  .table-responsive > .table > tbody > tr > th,
  .table-responsive > .table > tfoot > tr > td,
  .table-responsive > .table > tfoot > tr > th,
  .table-responsive > .table > thead > tr > td,
  .table-responsive > .table > thead > tr > th {
    white-space: nowrap
  }
  .table-responsive > .table-bordered {
    border: 0
  }
  .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .table-responsive > .table-bordered > tfoot > tr > td:first-child,
  .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .table-responsive > .table-bordered > thead > tr > td:first-child,
  .table-responsive > .table-bordered > thead > tr > th:first-child {
    border-left: 0
  }
  .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .table-responsive > .table-bordered > tfoot > tr > td:last-child,
  .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .table-responsive > .table-bordered > thead > tr > td:last-child,
  .table-responsive > .table-bordered > thead > tr > th:last-child {
    border-right: 0
  }
  .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .table-responsive > .table-bordered > tfoot > tr:last-child > td,
  .table-responsive > .table-bordered > tfoot > tr:last-child > th,
  .table-responsive > .table-bordered > thead > tr:last-child > td,
  .table-responsive > .table-bordered > thead > tr:last-child > th {
    border-bottom: 0
  }
  .bodywebsite .info-table-box tbody tr td {
    display: block;
    box-sizing: border-box;
    width: 100%
  }
}
.pb-right-column {
  margin: auto;
  max-width: 340px
}
.infos-module {
  margin-left: 10px;
  padding: 0 5px;
  border-radius: 5px;
  font-size: 12px;
  opacity: .9;
  background-color: #dbdbdb
}
.price.product-price.original-price {
  padding-right: 6px;
  border-right: 1px solid #dbdbdb;
  text-decoration: line-through;
  font-size: 15px;
  vertical-align: top;
  opacity: .6
}
.price.product-price.original-price-product-view {
  display: block;
  text-decoration: line-through;
  font-size: 15px;
  color: #555;
  opacity: .6
}
#languages-block-top {
  max-width: 33.33%!important
}
.block-sells-notification {
  margin: auto auto 30px;
  padding: 15px;
  max-width: 500px;
  border: 1px solid #e74c3c;
  text-align: center;
  text-transform: uppercase;
  color: #e74c3c;
  background-color: #fdecea
}
.shop-container {
  border-top: none;
  overflow: hidden;
  text-align: center;
  background-color: #fff;
  box-shadow: 0 8px 20px rgba(0,0,0,.1);
  transition: transform .3s;
  transform: scale(1)
}
.shop-image {
  position: relative;
  overflow: hidden
}
.shop-image img {
  display: block;
  width: 100%
}
.shop-button {
  position: absolute;
  top: 20%;
  left: 50%;
  padding: 10px 20px;
  border: none;
  border-radius: 8px;
  text-transform: uppercase;
  font-size: 16px;
  color: #fff;
  background-color: #ff5f57;
  box-shadow: 0 5px 15px rgba(255,95,87,.3);
  transition: background-color .3s,transform .3s;
  transform: translate(-50%,-50%);
  cursor: pointer
}
.shop-overlay:hover .shop-button {
  background-color: #e54b45;
  transform: translate(-50%,-50%) scale(1.1)
}
.shop-overlay {
  display: flex;
  position: absolute;
  top: 0;
  left: 0;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,.2)
}
.bodywebsite .btn.btn-default.btn-lg.btn-add-to-cart-product {
  padding: 5px 0!important;
  border-top: 1px solid #fff;
  border-right: 1px solid #fff;
  border-bottom: 1px solid #fff;
  border-left: 1px solid #fff;
  border-radius: 5px;
  color: #fff;
  background: #a45931
}
.bodywebsite .btn.btn-default.btn-lg.btn-add-to-cart-product p {
  margin-top: 5px;
  padding-top: 5px
}
.bodywebsite .refundLine {
  background-color: #dbdbdb
}
@media print {
  .bodywebsite #add_to_cart,
  .bodywebsite #footer,
  .bodywebsite #left_column,
  .bodywebsite #quantity_wanted_p,
  .bodywebsite #search_block_top,
  .bodywebsite .nav,
  .bodywebsite .shopping_cart {
    display: none
  }
}

/*#lightbox {
    position: relative;
    width: 80%; 
    height: 80%;
    margin: auto;
    background: rgba(0, 0, 0, 0.8); 
    color: #fff;
    display: flex;
    align-items: center; 
    justify-content: center;
}*/

#lightbox-prev, #lightbox-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 24px; /* Adjust size as needed */
    background: rgba(0, 0, 0, 0.5); /* Button background */
    color: #fff;
    border: none;
    padding: 10px;
    cursor: pointer;
    transition: background 0.3s;
}

#lightbox-prev {
    left: 10px; /* Position to the left */
}

#lightbox-next {
    right: 10px; /* Position to the right */
}

#lightbox-prev:hover, #lightbox-next:hover {
    background: rgba(0, 0, 0, 0.7); /* Hover effect */
}

#content {
    max-width: 100%;
    max-height: 100%;
    text-align: center;
    padding: 20px;
}

#content img {
    width: 100%; /* Ensure the image takes up the full width of the container */
    height: 100%; /* Ensure the image takes up the full height of the container */
    object-fit: contain; /* Ensure the image scales to fit while maintaining its aspect ratio */
}
<?php // BEGIN PHP
$tmp = ob_get_contents(); ob_end_clean(); dolWebsiteOutput($tmp, "css");
// END PHP
