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
/* CSS content (all pages) */
body.bodywebsite { margin: 0; font-family: 'Open Sans', sans-serif; }
.bodywebsite h1 { margin-top: 0; margin-bottom: 0; padding: 10px;}
@charset "UTF-8";
@import "//fonts.googleapis.com/css?family=Open+Sans";

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
  font: inherit;
  font-size: 100%;
  vertical-align: baseline;
}
.bodywebsite html {
  line-height: 1;
  font-family: sans-serif;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  font-size: 62.5%;
  -webkit-tap-highlight-color: transparent;
}
.bodywebsite ul {
  list-style: none;
  margin-top: 0;
  margin-bottom: 9px;
}
.bodywebsite a img {
  border: none;
}
.bodywebsite footer,
.bodywebsite header,
.bodywebsite nav,
.bodywebsite section {
  display: block;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 13px;
  line-height: 1.42857;
  color: #111;
  background-color: #fff;
}
.bodywebsite a:focus {
  outline: thin dotted;
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.bodywebsite a:active,
.bodywebsite a:hover {
  outline: 0;
}
.bodywebsite b,
.bodywebsite strong {
  font-weight: 700;
}
.bodywebsite img {
  border: 0;
  vertical-align: middle;
}
.bodywebsite button,
.bodywebsite input {
  font-size: 100%;
  margin: 0;
  line-height: normal;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
  background-image: none;
}
.bodywebsite button {
  text-transform: none;
  -webkit-appearance: button;
  cursor: pointer;
}
.bodywebsite button::-moz-focus-inner,
.bodywebsite input::-moz-focus-inner {
  border: 0;
  padding: 0;
}
.bodywebsite a {
  color: #dc7306;
  text-decoration: none;
}
.bodywebsite a:focus,
.bodywebsite a:hover {
  color: #515151;
  text-decoration: underline;
}
.bodywebsite .img-responsive {
  display: block;
  max-width: 100%;
  height: auto;
}
.bodywebsite p {
  margin: 0 0 9px;
}
.bodywebsite h2,
.bodywebsite h3,
.bodywebsite h4,
.bodywebsite h5 {
  font-family: Arial, Helvetica, sans-serif;
  font-weight: 500;
  line-height: 1.1;
}
.bodywebsite h2,
.bodywebsite h3 {
  margin-top: 2px;
  margin-bottom: 9px;
}
.bodywebsite h4,
.bodywebsite h5 {
  margin-top: 9px;
  margin-bottom: 9px;
}
.bodywebsite h2 {
  font-size: 27px;
}
.bodywebsite h3 {
  font-size: 23px;
}
.bodywebsite h4 {
  font-size: 17px;
}
.bodywebsite h5 {
  font-size: 13px;
}
.bodywebsite ul ul {
  margin-bottom: 0;
}
.bodywebsite .container {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
}
.bodywebsite .row {
  margin-left: -15px;
  margin-right: -15px;
}
.bodywebsite .col-md-3,
.bodywebsite .col-md-6,
.bodywebsite .col-sm-12,
.bodywebsite .col-sm-2,
.bodywebsite .col-sm-3,
.bodywebsite .col-sm-4,
.bodywebsite .col-sm-9,
.bodywebsite .col-xs-12,
.bodywebsite header .row #header_logo {
  position: relative;
  min-height: 1px;
  padding-left: 15px;
  padding-right: 15px;
}
.bodywebsite .col-xs-12 {
  width: 100%;
}
.bodywebsite .container:after,
.bodywebsite .container:before,
.bodywebsite .row:after,
.bodywebsite .row:before {
  content: " ";
  display: table;
}
.bodywebsite .container:after,
.bodywebsite .row:after {
  clear: both;
}
@media (min-width: 768px) {
  .bodywebsite .container {
    max-width: 750px;
  }
  .bodywebsite .col-sm-2,
  .bodywebsite .col-sm-3,
  .bodywebsite .col-sm-4,
  .bodywebsite .col-sm-9,
  .bodywebsite header .row #header_logo {
    float: left;
  }
  .bodywebsite .col-sm-2 {
    width: 33%;
  }
  .bodywebsite .col-sm-9 {
    width: 75%;
  }
  .bodywebsite .col-sm-12 {
    width: 100%;
  }
  .bodywebsite .col-sm-3,
  .bodywebsite .col-sm-4,
  .bodywebsite header .row #header_logo {
    width: 25%;
  }
}
@media (min-width: 992px) {
  .bodywebsite .container {
    max-width: 970px;
  }
  .bodywebsite .col-md-3,
  .bodywebsite .col-md-6 {
    float: left;
  }
  .bodywebsite .col-md-3 {
    width: 25%;
  }
  .bodywebsite .col-md-6 {
    width: 50%;
  }
}
@media (min-width: 1200px) {
  .bodywebsite .container {
    max-width: 1170px;
  }
}
.bodywebsite .form-control {
  display: block;
  width: 100%;
  height: 32px;
  padding: 6px 12px;
  font-size: 13px;
  line-height: 1.42857;
  color: #9c9b9b;
  vertical-align: middle;
  background-color: #fff;
  border: 1px solid #d6d4d4;
  border-radius: 0;
  -webkit-box-shadow: inset 0 1px 1px #00000013;
  box-shadow: inset 0 1px 1px #00000013;
  -webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
}
.bodywebsite .form-control:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px #00000013 0 8px #66afe999;
  box-shadow: inset 0 1px 1px #00000013 0 8px #66afe999;
}
.bodywebsite .form-group {
  margin-bottom: 15px;
}
.bodywebsite .btn {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 13px;
  font-weight: 400;
  line-height: 1.42857;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  border: 1px solid transparent;
  border-radius: 0;
  white-space: nowrap;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}
.bodywebsite .btn:focus {
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.bodywebsite .btn:focus,
.bodywebsite .btn:hover {
  color: #333;
  text-decoration: none;
}
.bodywebsite .btn:active {
  outline: 0;
  background-image: none;
  -webkit-box-shadow: inset 0 3px 5px #00000020;
  box-shadow: inset 0 3px 5px #00000020;
}
.bodywebsite .btn-default {
  color: #333;
  background-color: #fff;
  border-color: #ccc;
}
.bodywebsite .btn-default:active,
.bodywebsite .btn-default:focus,
.bodywebsite .btn-default:hover {
  color: #333;
  background-color: #ebebeb;
  border-color: #adadad;
}
.bodywebsite .btn-default:active {
  background-image: none;
}
.bodywebsite .nav {
  margin-bottom: 0;
  padding-left: 0;
  list-style: none;
}
.bodywebsite .form-control:-moz-placeholder,
.bodywebsite .form-control::-moz-placeholder,
.bodywebsite .form-control:-ms-input-placeholder,
.bodywebsite .form-control::-webkit-input-placeholder {
  color: #999;
}
.bodywebsite .nav:after,
.bodywebsite .nav:before,
.bodywebsite .clearfix:after,
.bodywebsite .clearfix:before {
  content: " ";
  display: table;
}
.bodywebsite .nav:after,
.bodywebsite .clearfix:after {
  clear: both;
}
@font-face {
  font-family: FontAwesome;
  src: url(https://www.dolistore.com/themes/dolibarr-bootstrap/font/fontawesome-webfont.eot?v=3.2.1);
  src: url(https://www.dolistore.com/themes/dolibarr-bootstrap/font/fontawesome-webfont.eot?#iefix&v=3.2.1) format("embedded-opentype"), url(https://www.dolistore.com/themes/dolibarr-bootstrap/font/fontawesome-webfont.woff?v=3.2.1) format("woff"), url(https://www.dolistore.com/themes/dolibarr-bootstrap/font/fontawesome-webfont.ttf?v=3.2.1) format("truetype"), url(https://www.dolistore.com/themes/dolibarr-bootstrap/font/fontawesome-webfont.svg#fontawesomeregular?v=3.2.1) format("svg");
  font-weight: 400;
  font-style: normal;
}
.bodywebsite [class^=icon-] {
  font-family: FontAwesome;
  font-weight: 400;
  font-style: normal;
  text-decoration: inherit;
  -webkit-font-smoothing: antialiased;
  display: inline;
  width: auto;
  height: auto;
  line-height: normal;
  vertical-align: baseline;
  background-image: none;
  background-position: 0 0;
  background-repeat: repeat;
  margin-top: 0;
}
.bodywebsite [class^=icon-]:before {
  text-decoration: inherit;
  display: inline-block;
  speak: none;
}
.bodywebsite a [class^=icon-] {
  display: inline;
}
.bodywebsite .icon-ok:before {
  content: "\f00c";
}
.bodywebsite .icon-chevron-left:before {
  content: "\f053";
}
.bodywebsite .icon-chevron-right:before {
  content: "\f054";
}
.bodywebsite a:hover {
  text-decoration: none;
}
@media only screen and (min-width: 1200px) {
  .bodywebsite .container {
    padding-left: 0;
    padding-right: 0;
  }
}
.bodywebsite body {
  min-width: 320px;
  height: 100%;
  line-height: 18px;
  font-size: 13px;
  color: #111;
}
.bodywebsite #header {
  z-index: 1;
}
.bodywebsite .columns-container {
  background: #fff;
}
.bodywebsite #columns {
  position: relative;
  padding-bottom: 50px;
  padding-top: 15px;
}
.bodywebsite header {
  z-index: 1;
  position: relative;
  background: #fff;
  padding-bottom: 15px;
}
.bodywebsite header .banner {
  background: #000;
  max-height: 100%;
}
.bodywebsite header .nav {
  background: #333;
}
.bodywebsite header .nav nav {
  width: 100%;
}
.bodywebsite header .row {
  position: relative;
}
.bodywebsite header .row #header_logo {
  padding-top: 15px;
}
.bodywebsite header .banner .row,
.bodywebsite header .nav .row {
  margin: 0;
}
@media (max-width: 992px) {
  .bodywebsite header .row #header_logo {
    padding-top: 40px;
  }
}
@media (max-width: 767px) {
  .bodywebsite header .row #header_logo {
    padding-top: 15px;
  }
  .bodywebsite header .row #header_logo img {
    margin: 0 auto;
  }
}
@media (min-width: 767px) {
  .bodywebsite header .row #header_logo + .col-sm-4 + .col-sm-4 {
    float: right;
  }
}
.bodywebsite .dark {
  color: #333;
}
.bodywebsite .unvisible {
  display: none;
}
.bodywebsite a.button,
.bodywebsite span.button {
  position: relative;
  display: inline-block;
  padding: 5px 7px;
  border: 1px solid #c90;
  font-weight: 700;
  color: #000;
  background: url(/dolibarr18/dolibarr/htdocs/viewimage.php?modulepart=medias&file=image/dolistore3/themes/dolibarr-bootstrap/img/bg_bt.gif) repeat-x 0 0 #f4b61b;
  cursor: pointer;
  white-space: normal;
  text-align: left;
}
.bodywebsite a.button:hover {
  text-decoration: none;
  background-position: left -50px;
}
.bodywebsite a.button:active {
  background-position: left -100px;
}
.bodywebsite .button.button-small {
  font: bold 13px/17px Arial, Helvetica, sans-serif;
  color: #fff;
  background: #6f6f6f;
  border: 1px solid;
  border-color: #666 #5f5f5f #292929;
  padding: 0;
  text-shadow: 1px 1px #0000003d;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.bodywebsite .button.button-small span {
  display: block;
  padding: 3px 8px;
  border: 1px solid;
  border-color: #8b8a8a;
}
.bodywebsite .button.button-small span i {
  vertical-align: 0;
  margin-right: 5px;
}
.bodywebsite .button.button-small span i.right {
  margin-right: 0;
  margin-left: 5px;
}
.bodywebsite .button.button-small span:hover {
  background: #575757;
  border-color: #303030 #303030 #666 #444;
  color:#fff;
}
.bodywebsite .button.button-medium {
  font-size: 17px;
  line-height: 21px;
  color: #fff;
  padding: 0;
  font-weight: 700;
  background: #43b754;
  background: -moz-linear-gradient(top, #43b754 0, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #43b754), color-stop(2%, #41b757), color-stop(4%, #41b854), color-stop(6%, #43b756), color-stop(38%, #41b354), color-stop(40%, #44b355), color-stop(66%, #45af55), color-stop(74%, #41ae53), color-stop(91%, #42ac52), color-stop(94%, #41ae55), color-stop(96%, #43ab54), color-stop(100%, #42ac52));
  background: -webkit-linear-gradient(top, #43b754 0, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  background: -o-linear-gradient(top, #43b754 0, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  background: -ms-linear-gradient(top, #43b754 0, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  background: linear-gradient(to bottom, #43b754 0, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  border: 1px solid;
  border-color: #399a49 #247f32 #1a6d27 #399a49;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.bodywebsite .button.button-medium span {
  display: block;
  padding: 10px 10px 10px 14px;
  border: 1px solid;
  border-color: #74d578;
}
@media (max-width: 480px) {
  .bodywebsite .button.button-medium span {
    font-size: 15px;
    padding-right: 7px;
    padding-left: 7px;
  }
}
.bodywebsite .button.button-medium span i.right {
  margin-right: 0;
  margin-left: 9px;
}
@media (max-width: 480px) {
  .bodywebsite .button.button-medium span i.right {
    margin-left: 5px;
  }
}
.bodywebsite .button.button-medium:hover {
  background: #3aa04c;
  background: -moz-linear-gradient(top, #3aa04c 0, #3aa04a 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #3aa04c), color-stop(100%, #3aa04a));
  background: -webkit-linear-gradient(top, #3aa04c 0, #3aa04a 100%);
  background: -o-linear-gradient(top, #3aa04c 0, #3aa04a 100%);
  background: -ms-linear-gradient(top, #3aa04c 0, #3aa04a 100%);
  background: linear-gradient(to bottom, #3aa04c 0, #3aa04a 100%);
  border-color: #196f28 #399a49 #399a49 #258033;
}
.bodywebsite .button.exclusive-medium {
  font-size: 17px;
  padding: 0;
  line-height: 21px;
  color: #333;
  font-weight: 700;
  border: 1px solid;
  border-color: #cacaca #b7b7b7 #9a9a9a;
  text-shadow: 1px 1px #fff;
}
.bodywebsite .button.exclusive-medium span {
  border: 1px solid;
  border-color: #fff;
  display: block;
  padding: 9px 10px 11px;
  background: #f7f7f7;
  background: -moz-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #f7f7f7), color-stop(100%, #ededed));
  background: -webkit-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: -o-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: -ms-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: linear-gradient(to bottom, #f7f7f7 0, #ededed 100%);
}
@media (max-width: 480px) {
  .bodywebsite .button.exclusive-medium span {
    font-size: 15px;
    padding-right: 7px;
    padding-left: 7px;
  }
}
.bodywebsite .button.exclusive-medium span:hover {
  border-color: #9e9e9e #c2c2c2 #c8c8c8;
}
.bodywebsite .ajax_add_to_cart_button {
  font: 700 17px/21px Arial, Helvetica, sans-serif;
  color: #fff;
  text-shadow: 1px 1px #0003;
  padding: 0;
  border: 1px solid;
  border-color: #0079b6 #006fa8 #012740;
  margin-bottom: 10px !important;
}
.bodywebsite .ajax_add_to_cart_button span {
  color: #fff;
  border: 1px solid;
  border-color: #06b2e6;
  padding: 10px 14px;
  display: block;
  background: #009ad0;
  background: -moz-linear-gradient(top, #009ad0 0, #007ab7 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #009ad0), color-stop(100%, #007ab7));
  background: -webkit-linear-gradient(top, #009ad0 0, #007ab7 100%);
  background: -o-linear-gradient(top, #009ad0 0, #007ab7 100%);
  background: -ms-linear-gradient(top, #009ad0 0, #007ab7 100%);
  background: linear-gradient(to bottom, #009ad0 0, #007ab7 100%);
}
.bodywebsite .ajax_add_to_cart_button:hover {
  border-color: #01314e #004b74 #0079b6;
}
.bodywebsite .ajax_add_to_cart_button:hover span {
  filter: none;
  background: #0084bf;
}
.bodywebsite .button.lnk_view {
  font: 700 17px/21px Arial, Helvetica, sans-serif;
  color: #333;
  text-shadow: 1px 1px #fff;
  padding: 0;
  border: 1px solid;
  border-color: #cacaca #b7b7b7 #9a9a9a;
}
.bodywebsite .button.lnk_view span {
  border: 1px solid;
  border-color: #fff;
  padding: 10px 14px;
  display: block;
  background: #f7f7f7;
  background: -moz-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #f7f7f7), color-stop(100%, #ededed));
  background: -webkit-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: -o-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: -ms-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: linear-gradient(to bottom, #f7f7f7 0, #ededed 100%);
}
.bodywebsite .button.lnk_view:hover {
  border-color: #9e9e9e #9e9e9e #c8c8c8;
}
.bodywebsite .button.lnk_view:hover span {
  filter: none;
  background: #e7e7e7;
}
.bodywebsite .form-control {
  padding: 3px 5px;
  height: 27px;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.bodywebsite .form-control.grey {
  background: #fbfbfb;
}
.bodywebsite .product-name {
  font-size: 15px;
  line-height: 21px;
  color: #3a3939;
  margin-bottom: 0;
}
.bodywebsite .price {
  font-size: 13px;
  color: #777;
  white-space: nowrap;
}
.bodywebsite .price.product-price {
  font: 600 21px/26px "Open Sans", sans-serif;
  color: #333;
}
.bodywebsite .old-price {
  color: #6f6f6f;
  text-decoration: line-through;
}
.bodywebsite .special-price {
  color: #f13340;
}
.bodywebsite .price-percent-reduction {
  background: #f13340;
  border: 1px solid #d02a2c;
  font: 600 21px/24px "Open Sans", sans-serif;
  color: #fff;
  padding: 0 5px 0 3px;
  display: inline-block;
}
.bodywebsite .sale-box {
  position: absolute;
  top: -4px;
  overflow: hidden;
  height: 85px;
  width: 85px;
  text-align: center;
  z-index: 0;
  right: -5px;
}
.bodywebsite .sale-label {
  font: 700 14px/12px Arial, Helvetica, sans-serif;
  color: #fff;
  background: #f13340;
  text-transform: uppercase;
  padding: 9px 0 7px;
  text-shadow: 1px 1px #0000003d;
  width: 130px;
  text-align: center;
  display: block;
  position: absolute;
  right: -33px;
  top: 16px;
  z-index: 1;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
.bodywebsite .sale-label:before {
  position: absolute;
  bottom: -3px;
  right: 4px;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 4px 4px 0;
  border-color: #ad2b34 transparent transparent;
  content: ".";
  text-indent: -5000px;
  -webkit-transform: rotate(225deg);
  -ms-transform: rotate(225deg);
  transform: rotate(225deg);
}
.bodywebsite .sale-label:after {
  position: absolute;
  bottom: -3px;
  left: 5px;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 4px 4px 0;
  border-color: #ad2b34 transparent transparent;
  content: ".";
  text-indent: -5000px;
  -webkit-transform: rotate(135deg);
  -ms-transform: rotate(135deg);
  transform: rotate(135deg);
}
.bodywebsite .block {
  margin-bottom: 30px;
}
@media (max-width: 767px) {
  .bodywebsite .block {
    margin-bottom: 0;
  }
  .bodywebsite .block .block_content {
    margin-bottom: 20px;
  }
}
.bodywebsite .block .title_block,
.bodywebsite .block h4 {
  font: 600 18px/22px "Open Sans", sans-serif;
  color: #555454;
  background: #f6f6f6;
  border-top: 5px solid #333;
  text-transform: uppercase;
  padding: 14px 5px 17px 20px;
  margin-bottom: 20px;
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite .block .title_block,
  .bodywebsite .block h4 {
    font-size: 14px;
  }
}
@media (max-width: 767px) {
  .bodywebsite .block .title_block,
  .bodywebsite .block h4 {
    position: relative;
  }
  .bodywebsite .block .title_block:after,
  .bodywebsite .block h4:after {
    display: block;
    font-family: FontAwesome;
    content: "\f055";
    position: absolute;
    right: 0;
    top: 15px;
    height: 36px;
    width: 36px;
    font-size: 26px;
    font-weight: 400;
  }
}
.bodywebsite .block .title_block a,
.bodywebsite .block h4 a {
  color: #555454;
}
.bodywebsite .block .title_block a:hover,
.bodywebsite .block h4 a:hover {
  color: #333;
}
.bodywebsite .block .products-block li {
  padding: 0 0 20px;
  margin-bottom: 20px;
  border-bottom: 1px solid #d6d4d4;
}
.bodywebsite .block .products-block li .products-block-image {
  float: left;
  border: 1px solid #d6d4d4;
  margin-right: 19px;
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite .block .products-block li .products-block-image {
    float: none;
    display: inline-block;
    margin: 0 auto 10px;
    text-align: center;
  }
}
.bodywebsite .block .products-block li .product-content {
  overflow: hidden;
}
.bodywebsite .block .products-block li .product-content h5 {
  margin: -3px 0 0;
}
.bodywebsite .block .products-block .product-name {
  font-size: 15px;
  line-height: 18px;
}
.bodywebsite .block .products-block .product-description {
  margin-bottom: 14px;
}
.bodywebsite .block .products-block .price-percent-reduction {
  font: 700 14px/17px Arial, Helvetica, sans-serif;
  padding: 1px 6px;
}
.bodywebsite #page .rte {
  padding: 0!important;
  background: transparent none repeat scroll 0 0;
}
.bodywebsite .header-container {
  background: #fff;
}
.bodywebsite .footer-container {
  background-color: #333;
}
@media (min-width: 768px) {
  .bodywebsite .footer-container {
    background: 0 0 !important;
  }
}
.bodywebsite .footer-container .container {
  padding-bottom: 20px;
}
.bodywebsite .footer-container #footer {
  color: #777;
}
.bodywebsite .footer-container #footer .row {
  position: relative;
}
.bodywebsite .footer-container #footer .footer-block {
  margin-top: 45px;
}
@media (max-width: 767px) {
  .bodywebsite .footer-container #footer .footer-block {
    margin-top: 20px;
  }
}
.bodywebsite .footer-container #footer a {
  color: #777;
}
.bodywebsite .footer-container #footer a:hover {
  color: #fff;
}
.bodywebsite .footer-container #footer h4 {
  font: 600 18px/22px "Open Sans", sans-serif;
  color: #fff;
  margin: 0 0 13px;
  cursor: pointer;
}
@media (max-width: 767px) {
  .bodywebsite .footer-container #footer h4 {
    position: relative;
    margin-bottom: 0;
    padding-bottom: 13px;
  }
  .bodywebsite .footer-container #footer h4:after {
    display: block;
    content: "\f055";
    font-family: FontAwesome;
    position: absolute;
    right: 0;
    top: 1px;
  }
}
.bodywebsite .footer-container #footer h4 a {
  color: #fff;
}
.bodywebsite .footer-container #footer ul li {
  padding-bottom: 8px;
}
.bodywebsite .footer-container #footer ul li a {
  font-weight: 700;
  text-shadow: 1px 1px 0 #0006;
}
.bodywebsite .rte ul {
  list-style-type: disc;
  padding-left: 15px;
}
.bodywebsite .editorial_block .img-responsive {
  display: unset;
  width: 250px;
}
.bodywebsite .editorial_block {
  text-align: center;
  margin-bottom: 4em !important;
}
.bodywebsite .editorial_block .rte {
  text-align: justify;
}
.bodywebsite .product-image-container {
  height: 200px;
}
.bodywebsite .product-image-container .img-responsive {
  height: auto;
  width: auto;
  max-height: 180px;
}
.bodywebsite .ajax_add_to_cart_button span {
  border-color: #373d5a;
  background: #373d5a;
}
@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min-device-pixel-ratio: 2) {
  .bodywebsite .replace-2x {
    font-size: 1px;
  }
}
.bodywebsite #categories_block_left .block_content > ul {
  border-top: 1px solid #d6d4d4;
}
.bodywebsite #categories_block_left li {
  position: relative;
}
.bodywebsite #categories_block_left li a {
  font-weight: 700;
  color: #333;
  display: block;
  font-size: 13px;
  line-height: 30px;
  padding: 0 30px 0 19px;
  border-bottom: 1px solid #d6d4d4;
}
.bodywebsite #categories_block_left li span.grower {
  display: block;
  background: #f6f6f6;
  position: absolute;
  right: 0;
  top: 0;
  cursor: pointer;
  font-family: "FontAwesome";
  font-size: 14px;
}
.bodywebsite #categories_block_left li span.grower.OPEN:before,
.bodywebsite #categories_block_left li span.grower.CLOSE:before {
  content: "\f068";
  display: block;
  vertical-align: middle;
  width: 30px;
  height: 30px;
  color: #333333;
  line-height: 30px;
  text-align: center;
}
.bodywebsite #categories_block_left li span.grower.CLOSE:before {
  content: "\f067";
  color: silver;
}
.bodywebsite #categories_block_left li span.grower:hover + a,
.bodywebsite #categories_block_left li a:hover,
.bodywebsite #categories_block_left li a.selected {
  background: #f6f6f6;
}
.bodywebsite #categories_block_left li li a {
  font-weight: normal;
  color: #777777;
}
.bodywebsite #categories_block_left li li a:before {
  content: "\f105";
  font-family: "FontAwesome";
  line-height: 29px;
  padding-right: 8px;
}
.bodywebsite #categories_block_left li a:hover {
  background: #f6f6f6;
}
.bodywebsite #categories_block_left li li a {
  font-weight: 400;
  color: #777;
}
.bodywebsite #categories_block_left li li a:before {
  content: "\f105";
  font-family: FontAwesome;
  line-height: 29px;
  padding-right: 8px;
}
.bodywebsite .editorial_block {
  margin-bottom: 2em;
}
.bodywebsite .editorial_block .rte {
  background: transparent none repeat scroll 0 0;
}
.bodywebsite #editorial_block_center p {
  padding-left: 0;
}
.bodywebsite #editorial_block_center .rte p {
  color: #666;
}
.bodywebsite ul.product_list .product-name {
  display: inline-block;
  width: 100%;
  overflow: hidden;
}
.bodywebsite ul.product_list .product-image-container {
  text-align: center;
}
.bodywebsite ul.product_list .product-image-container img {
  margin: 0 auto;
}
.bodywebsite ul.product_list .product-name {
  display: inline-block;
  width: 100%;
  overflow: hidden;
}
.bodywebsite ul.product_list .availability span {
  display: inline-block;
  color: #fff;
  font-weight: 700;
  padding: 3px 8px 4px;
  margin-bottom: 20px;
}
.bodywebsite ul.product_list .availability span.available-now {
  background: #55c65e;
  border: 1px solid #36943e;
}
.bodywebsite ul.product_list .availability span.out-of-stock {
  background: #fe9126;
  border: 1px solid #e4752b;
}
.bodywebsite ul.product_list .availability span.available-dif {
  background: #fe9126;
  border: 1px solid #e4752b;
}
.bodywebsite ul.product_list .color-list-container {
  margin-bottom: 12px;
}
.bodywebsite ul.product_list .color-list-container ul li {
  display: inline-block;
  border: 1px solid #d6d4d4;
  width: 26px;
  height: 26px;
}
.bodywebsite ul.product_list .color-list-container ul li a {
  display: block;
  width: 22px;
  height: 22px;
  margin: 1px;
}
.bodywebsite ul.product_list .color-list-container ul li a img {
  display: block;
  width: 22px;
  height: 22px;
}
.bodywebsite ul.product_list .product-image-container {
  text-align: center;
}
.bodywebsite ul.product_list .product-image-container img {
  margin: 0 auto;
}
.bodywebsite ul.product_list .product-image-container .quick-view-wrapper-mobile {
  display: none;
}
.bodywebsite ul.product_list .product-image-container .quick-view-wrapper-mobile .quick-view-mobile {
  display: none;
}
@media (max-width: 1199px) {
  .bodywebsite ul.product_list .product-image-container .quick-view-wrapper-mobile .quick-view-mobile {
    display: block;
    position: relative;
    background-color: rgba(208, 208, 211, 0.57);
    height: 130px;
    width: 85px;
    top: 80px;
    right: -162px;
    -moz-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
    zoom: 1;
    pointer-events: all;
  }
  .bodywebsite ul.product_list .product-image-container .quick-view-wrapper-mobile .quick-view-mobile i {
    position: relative;
    top: 48px;
    left: -20px;
    font-size: x-large;
    color: #000;
  }
  .bodywebsite ul.product_list .product-image-container .quick-view-wrapper-mobile .quick-view-mobile i:before {
    -moz-transform: rotate(315deg);
    -o-transform: rotate(315deg);
    -webkit-transform: rotate(315deg);
    -ms-transform: rotate(315deg);
    transform: rotate(315deg);
  }
}
@media (max-width: 1199px) {
  .bodywebsite ul.product_list .product-image-container .quick-view-wrapper-mobile .quick-view-mobile:hover {
    background-color: rgba(167, 167, 167, 0.57);
  }
}
@media (max-width: 1199px) {
  .bodywebsite ul.product_list .product-image-container .quick-view-wrapper-mobile {
    display: block;
    background-color: transparent;
    height: 155px;
    width: 215px;
    position: absolute;
    overflow: hidden;
    pointer-events: none;
    bottom: 0;
    right: 0;
  }
}
.bodywebsite ul.product_list .product-image-container .quick-view {
  font: 700 13px/16px Arial, Helvetica, sans-serif;
  color: #777676;
  position: absolute;
  left: 50%;
  top: 50%;
  margin: -21px 0 0 -53px;
  padding: 13px 0 0;
  background: rgba(255, 255, 255, 0.82);
  width: 107px;
  height: 43px;
  text-align: center;
  -webkit-box-shadow: rgba(0, 0, 0, 0.16) 0 2px 8px;
  -moz-box-shadow: rgba(0, 0, 0, 0.16) 0 2px 8px;
  box-shadow: rgba(0, 0, 0, 0.16) 0 2px 8px;
}
@media (max-width: 1199px) {
  .bodywebsite ul.product_list .product-image-container .quick-view {
    display: none;
  }
}
@media (min-width: 1200px) {
  .bodywebsite ul.product_list .product-image-container .quick-view {
    display: none;
  }
}
@media (max-width: 767px) {
  .bodywebsite ul.product_list .product-image-container .quick-view {
    display: none;
  }
}
.bodywebsite ul.product_list .comments_note {
  text-align: left;
  overflow: hidden;
}
.bodywebsite ul.product_list .comments_note .star_content {
  float: left;
}
.bodywebsite ul.product_list .comments_note .nb-comments {
  overflow: hidden;
  font-style: italic;
}
.bodywebsite ul.product_list.grid > li .product-container .functional-buttons {
  padding: 0 !important;
}
.bodywebsite ul.product_list .functional-buttons div a,
.bodywebsite ul.product_list .functional-buttons div label {
  font-weight: 700;
  color: #777676;
  cursor: pointer;
}
.bodywebsite ul.product_list .functional-buttons div a:hover,
.bodywebsite ul.product_list .functional-buttons div label:hover {
  color: #000;
}
.bodywebsite ul.product_list .functional-buttons div.wishlist {
  border-right: 1px solid #d6d4d4;
}
.bodywebsite ul.product_list .functional-buttons div.wishlist a:before {
  display: inline-block;
  font-family: fontawesome;
  content: "\f08a";
  margin-right: 3px;
  padding: 0 3px;
}
.bodywebsite ul.product_list .functional-buttons div.wishlist a.checked:before {
  content: "\f004";
}
@media (min-width: 992px) and (max-width: 1199px) {
  .bodywebsite ul.product_list .functional-buttons div.wishlist {
    border-right: 0;
  }
  .bodywebsite ul.product_list .functional-buttons div.wishlist a:before {
    display: none;
  }
}
@media (min-width: 480px) and (max-width: 767px) {
  .bodywebsite ul.product_list .functional-buttons div.wishlist {
    border-right: 0;
  }
  .bodywebsite ul.product_list .functional-buttons div.wishlist a:before {
    display: none;
  }
}
.bodywebsite ul.product_list .functional-buttons div.compare a:before {
  content: "\f067";
  display: inline-block;
  font-family: fontawesome;
  margin-right: 3px;
}
@media (min-width: 992px) and (max-width: 1199px) {
  .bodywebsite ul.product_list .functional-buttons div.compare a:before {
    display: none;
  }
}
@media (min-width: 480px) and (max-width: 767px) {
  .bodywebsite ul.product_list .functional-buttons div.compare a:before {
    display: none;
  }
}
.bodywebsite ul.product_list .functional-buttons div.compare a.checked:before {
  content: "\f068";
}
.bodywebsite ul.product_list.grid > li {
  padding-bottom: 20px;
  text-align: center;
}
@media (min-width: 480px) and (max-width: 767px) {
  .bodywebsite ul.product_list.grid > li {
    width: 50%;
    float: left;
  }
}
.bodywebsite ul.product_list.grid > li .product-container {
  background: #fff;
  padding: 0;
  position: relative;
}
.bodywebsite ul.product_list.grid > li .product-container .product-image-container {
  border: 1px solid #d6d4d4;
  padding: 9px;
  margin-bottom: 13px;
  position: relative;
}
@media (max-width: 767px) {
  .bodywebsite ul.product_list.grid > li .product-container .product-image-container {
    max-width: 290px;
    margin-left: auto;
    margin-right: auto;
  }
}
.bodywebsite ul.product_list.grid > li .product-container .product-image-container .content_price {
  position: absolute;
  left: 0;
  bottom: -1px;
  width: 100%;
  background: url(https://www.dolistore.com/themes/dolibarr-bootstrap/img/price-container-bg.png);
  padding: 9px 0;
  display: none;
}
.bodywebsite ul.product_list.grid > li .product-container .product-image-container .content_price span {
  color: #fff;
}
.bodywebsite ul.product_list.grid > li .product-container .product-image-container .content_price span.old-price {
  color: #b1b0b0;
}
.bodywebsite ul.product_list.grid > li .product-container h5 {
  padding: 0 15px 7px;
  min-height: 53px;
}
@media (min-width: 1200px) {
  .bodywebsite ul.product_list.grid > li .product-container .comments_note {
    display: none;
  }
}
.bodywebsite ul.product_list.grid > li .product-container .comments_note .star_content {
  margin: 0 3px 12px 59px;
}
.bodywebsite ul.product_list.grid > li .product-container .product-desc {
  display: none;
}
.bodywebsite ul.product_list.grid > li .product-container .content_price {
  padding-bottom: 9px;
  line-height: 21px;
}
.bodywebsite ul.product_list.grid > li .product-container .old-price,
.bodywebsite ul.product_list.grid > li .product-container .price,
.bodywebsite ul.product_list.grid > li .product-container .price-percent-reduction {
  display: inline-block;
}
.bodywebsite ul.product_list.grid > li .product-container .product-flags {
  display: none;
}
.bodywebsite ul.product_list.grid > li .product-container .old-price {
  margin-right: 5px;
}
.bodywebsite ul.product_list.grid > li .product-container .button-container {
  margin-bottom: 14px;
}
@media (min-width: 1200px) {
  .bodywebsite ul.product_list.grid > li .product-container .button-container {
    display: none;
  }
}
.bodywebsite ul.product_list.grid > li .product-container .button-container .ajax_add_to_cart_button,
.bodywebsite ul.product_list.grid > li .product-container .button-container span.button,
.bodywebsite ul.product_list.grid > li .product-container .button-container .lnk_view {
  margin: 0 6px 4px;
}
.bodywebsite ul.product_list.grid > li .product-container .functional-buttons {
  background: url(https://www.dolistore.com/themes/dolibarr-bootstrap/img/functional-bt-shadow.png) repeat-x;
  padding: 11px 0 5px;
}
@media (min-width: 1200px) {
  .bodywebsite ul.product_list.grid > li .product-container .functional-buttons {
    display: none;
  }
}
.bodywebsite ul.product_list.grid > li .product-container .functional-buttons div {
  width: 50%;
  float: left;
  padding: 3px 0 4px;
}
@media (min-width: 1200px) {
  .bodywebsite ul.product_list.grid > li.hovered .product-container {
    -webkit-box-shadow: rgba(0, 0, 0, 0.17) 0 0 13px;
    -moz-box-shadow: rgba(0, 0, 0, 0.17) 0 0 13px;
    box-shadow: rgba(0, 0, 0, 0.17) 0 0 13px;
    position: relative;
    z-index: 10;
  }
  .bodywebsite ul.product_list.grid > li.hovered .product-container .content_price {
    display: none;
  }
  .bodywebsite ul.product_list.grid > li.hovered .product-container .product-image-container .content_price {
    display: block;
  }
  .bodywebsite ul.product_list.grid > li.hovered .product-container .product-image-container .quick-view {
    display: block;
  }
  .bodywebsite ul.product_list.grid > li.hovered .product-container .functional-buttons,
  .bodywebsite ul.product_list.grid > li.hovered .product-container .button-container,
  .bodywebsite ul.product_list.grid > li.hovered .product-container .comments_note {
    display: block;
  }
}
@media (min-width: 992px) {
  .bodywebsite ul.product_list.grid > li.first-in-line {
    clear: left;
  }
}
@media (min-width: 480px) and (max-width: 991px) {
  .bodywebsite ul.product_list.grid > li.first-item-of-tablet-line {
    clear: left;
  }
}
.bodywebsite ul.product_list.grid li.hovered h5 {
  min-height: 30px;
}
@media (min-width: 1200px) {
  .bodywebsite #blockpack ul > li.last-line {
    border: none;
    padding-bottom: 0;
    margin-bottom: 0;
  }
}
@media (min-width: 480px) and (max-width: 767px) {
  .bodywebsite #blockpack ul > li.first-item-of-tablet-line {
    clear: none;
  }
  .bodywebsite #blockpack ul > li.first-item-of-mobile-line {
    clear: left;
  }
}
@media (max-width: 479px) {
  .bodywebsite ul.product_list.list > li .left-block {
    width: 100%;
  }
}
.bodywebsite ul.product_list.list > li .product-container {
  border-top: 1px solid #d6d4d4;
  padding: 30px 0;
}
.bodywebsite ul.product_list.list > li .product-image-container {
  position: relative;
  border: 1px solid #d6d4d4;
  padding: 9px;
}
@media (max-width: 479px) {
  .bodywebsite ul.product_list.list > li .product-image-container {
    max-width: 290px;
    margin: 0 auto;
  }
}
.bodywebsite ul.product_list.list > li .product-image-container .content_price {
  display: none !important;
}
.bodywebsite ul.product_list.list > li .product-flags {
  color: #333;
  margin: -5px 0 10px;
}
.bodywebsite ul.product_list.list > li .product-flags .discount {
  color: #f13340;
}
.bodywebsite ul.product_list.list > li h5 {
  padding-bottom: 8px;
}
.bodywebsite ul.product_list.list > li .product-desc {
  margin-bottom: 15px;
}
@media (max-width: 479px) {
  .bodywebsite ul.product_list.list > li .center-block {
    width: 100%;
  }
}
.bodywebsite ul.product_list.list > li .center-block .comments_note {
  margin-bottom: 12px;
}
@media (min-width: 992px) {
  .bodywebsite ul.product_list.list > li .right-block .right-block-content {
    margin: 0;
    border-left: 1px solid #d6d4d4;
    padding-left: 15px;
    padding-bottom: 16px;
  }
}
@media (max-width: 991px) {
  .bodywebsite ul.product_list.list > li .right-block .right-block-content {
    padding-top: 20px;
  }
}
@media (max-width: 479px) {
  .bodywebsite ul.product_list.list > li .right-block .right-block-content {
    padding-top: 5px;
  }
}
.bodywebsite ul.product_list.list > li .right-block .right-block-content .content_price {
  padding-bottom: 10px;
}
@media (max-width: 991px) {
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .content_price {
    padding-top: 13px;
    padding-bottom: 0;
  }
}
@media (max-width: 479px) {
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .content_price {
    padding-top: 0;
    width: 100%;
  }
}
.bodywebsite ul.product_list.list > li .right-block .right-block-content .content_price span {
  display: inline-block;
  margin-top: -4px;
  margin-bottom: 14px;
}
.bodywebsite ul.product_list.list > li .right-block .right-block-content .content_price span.old-price {
  margin-right: 8px;
}
.bodywebsite ul.product_list.list > li .right-block .right-block-content .button-container {
  overflow: hidden;
  padding-bottom: 20px;
}
@media (max-width: 479px) {
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .button-container {
    width: 100%;
  }
}
.bodywebsite ul.product_list.list > li .right-block .right-block-content .button-container .btn {
  margin-bottom: 10px;
}
@media (min-width: 992px) {
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .button-container .btn {
    float: left;
    clear: both;
  }
}
@media (min-width: 992px) {
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons {
    overflow: hidden;
  }
}
@media (max-width: 991px) {
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons {
    clear: both;
  }
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons > div {
    float: left;
    padding-top: 0!important;
    padding-right: 20px;
  }
}
@media (max-width: 479px) {
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons {
    float: none;
    display: inline-block;
  }
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons a i,
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons a:before,
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons label i,
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons label:before {
    display: none !important;
  }
}
.bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons a {
  cursor: pointer;
}
.bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons .wishlist {
  border: none;
}
.bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons .compare {
  padding-top: 10px;
}
.bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons .compare a:before {
  margin-right: 10px;
}
@media (min-width: 1200px) {
  .bodywebsite ul.product_list.list > li:hover .product-image-container .quick-view {
    display: block;
  }
}
@media (max-width: 479px) {
  .bodywebsite ul.product_list.list > li {
    text-align: center;
  }
}
.bodywebsite #index ul.product_list.tab-pane > li {
  padding-bottom: 10px;
  margin-bottom: 10px;
}
@media (min-width: 1200px) {
  .bodywebsite #index ul.product_list.tab-pane > li {
    padding-bottom: 85px;
    margin-bottom: 0;
  }
}
.bodywebsite #index ul.product_list.tab-pane > li .availability {
  display: none;
}
@media (min-width: 1200px) {
  .bodywebsite #index ul.product_list.tab-pane > li.last-line {
    border: none;
    padding-bottom: 0;
    margin-bottom: 0;
  }
}
@media (min-width: 480px) and (max-width: 767px) {
  .bodywebsite #index ul.product_list.tab-pane > li.first-item-of-tablet-line {
    clear: none;
  }
  .bodywebsite #index ul.product_list.tab-pane > li.first-item-of-mobile-line {
    clear: left;
  }
}
.bodywebsite #index ul.product_list.tab-pane > li {
  padding-bottom: 10px;
  margin-bottom: 10px;
}
.bodywebsite #index ul.product_list.tab-pane > li.last-line {
  border: none;
  padding-bottom: 0;
  margin-bottom: 0;
}
@media (min-width: 480px) and (max-width: 767px) {
  .bodywebsite #index ul.product_list.tab-pane > li.first-item-of-tablet-line {
    clear: none;
  }
  .bodywebsite #index ul.product_list.tab-pane > li.first-item-of-mobile-line {
    clear: left;
  }
}
.bodywebsite #footer #newsletter_block_left {
  overflow: hidden;
  width: 50%;
  float: left;
  padding: 13px 15px 7px;
  margin-bottom: 0;
}
@media (max-width: 767px) {
  .bodywebsite #footer #newsletter_block_left {
    width: 100%;
  }
}
.bodywebsite #footer #newsletter_block_left h4 {
  background: 0 0;
  float: left;
  padding: 7px 16px 5px 0;
  text-transform: none;
  font-size: 21px;
  line-height: 25px;
  border: none;
}
.bodywebsite #footer #newsletter_block_left .form-group {
  margin-bottom: 0;
}
.bodywebsite #footer #newsletter_block_left .form-group .form-control {
  height: 45px;
  line-height: 30px;
  max-width: 267px;
  background: #3c3c3c;
  border-color: #515151;
  color: #fff;
  padding: 5px 43px 5px 12px;
  display: inline-block;
  float: left;
}
.bodywebsite #footer #newsletter_block_left .form-group .form-control:focus {
  -webkit-box-shadow: #000 0 0 0;
  -moz-box-shadow: #000 0 0 0;
  box-shadow: #000 0 0 0;
}
.bodywebsite #footer #newsletter_block_left .form-group .button-small {
  margin-left: -43px;
  border: none;
  background: 0 0;
  text-align: center;
  color: #908f8f;
  padding: 8px;
}
.bodywebsite #footer #newsletter_block_left .form-group .button-small:before {
  content: "\f138";
  font-family: FontAwesome;
  font-size: 28px;
  line-height: 28px;
}
.bodywebsite #footer #newsletter_block_left .form-group .button-small:hover {
  color: #fff !important;
}
.bodywebsite #footer #newsletter_block_left .newsletter-input {
  max-width: 300px !important;
}
.bodywebsite #search_block_top {
  padding-top: 30px;
}
.bodywebsite #search_block_top #searchbox {
  float: left;
  width: 100%;
}
.bodywebsite #search_block_top .btn.button-search {
  background: #333;
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  border: none;
  color: #fff;
  width: 50px;
  text-align: center;
  padding: 10px 0 11px;
}
.bodywebsite #search_block_top .btn.button-search:before {
  content: "\f002";
  display: block;
  font-family: FontAwesome;
  font-size: 17px;
  width: 100%;
  text-align: center;
}
.bodywebsite #search_block_top .btn.button-search:hover {
  color: #6f6f6f;
}
.bodywebsite #search_block_top #search_query_top {
  display: inline;
  padding: 0 13px;
  height: 45px;
  line-height: 45px;
  background: #fbfbfb;
  margin-right: 1px;
}
.bodywebsite form#searchbox {
  position: relative;
}
.bodywebsite .tags_block .block_content a {
  display: inline-block;
  font-size: 13px;
  line-height: 16px;
  font-weight: 700;
  padding: 4px 9px 5px;
  border: 1px solid #d6d4d4;
  float: left;
  margin: 0 3px 3px 0;
}
.bodywebsite .tags_block .block_content a:hover {
  color: #333;
  background: #f6f6f6;
}
.bodywebsite body {
  background: #282828;
}
.bodywebsite #header #languages-block-top {
  border-color: #515151;
}
.bodywebsite #header #languages-block-top div.current:hover {
  background: #2b2b2b;
  color: #fff;
}
.bodywebsite #header #search_block_top .btn.button-search {
  background: #eea200;
  text-shadow: 0 1px #b57b00;
}
.bodywebsite #header #search_block_top .btn.button-search:hover {
  color: #fff;
  background: #333;
  text-shadow: 0 1px #333;
}
.bodywebsite #header #search_block_top #search_query_top {
  border-color: #e2dec8;
  background: #f8f8f8a1;
  color: #686666;
}
.bodywebsite ul.product_list.grid > li .product-container .product-image-container {
  border-color: #e2dec8;
  background: #fff;
}
.bodywebsite .sale-label:after,
.bodywebsite .sale-label:before {
  border-color: #eea200 transparent transparent;
}
.bodywebsite ul.product_list.grid > li .product-container {
  background: 0 0;
}
.bodywebsite .ajax_add_to_cart_button {
  border-color: #eea200;
}
.bodywebsite .ajax_add_to_cart_button span {
  border-color: #eea200;
  background: #eea200;
}
.bodywebsite .ajax_add_to_cart_button:hover {
  border-color: #333;
}
.bodywebsite .ajax_add_to_cart_button:hover span {
  border-color: #333;
  background: #333;
}
.bodywebsite .price-percent-reduction {
  background: #eea200;
  border-color: #eea200;
}
.bodywebsite .price,
.bodywebsite .price.product-price {
  color: #eea200;
}
.bodywebsite .old-price {
  color: #b1b0b0;
}
.bodywebsite ul.product_list.grid > li .product-container:hover {
  background: #fff;
  -webkit-box-shadow: 0 5px 13px #0000002b;
  -moz-box-shadow: 0 5px 13px #0000002b;
  box-shadow: 0 5px 13px #0000002b;
}
.bodywebsite .footer-container {
  background: #3f3f3f;
}
.bodywebsite #footer #newsletter_block_left h4:after,
.bodywebsite #footer #newsletter_block_left .form-group .button-small span,
.bodywebsite #search_block_top .btn.button-search span {
  display: none;
}
.bodywebsite #footer #newsletter_block_left .block_content,
.bodywebsite .tags_block .block_content {
  overflow: hidden;
}
.bodywebsite #header #languages-block-top div.current,
.bodywebsite #header #languages-block-top div.current:after {
  color: #fff;
}
.bodywebsite #header #languages-block-top ul li.selected,
.bodywebsite #header #languages-block-top ul li:hover a,
.bodywebsite .sale-label {
  background: #eea200;
}
.bodywebsite ul.product_list.grid > li .product-container .product-image-container .product_img_link,
.bodywebsite ul.product_list.grid > li .product-container .product-image-container .product_img_link img {
  background: #f1e8e3;
}
@media (min-width: 768px) {
  .bodywebsite .footer-container {
    /*background: url(/dolibarr18/dolibarr/htdocs/viewimage.php?modulepart=medias&file=image/dolistore3/modules/themeconfigurator/img/footer-bg.png) repeat-x;*/
    background-color: #3f3f3f !important;
  }
}
.bodywebsite #footer #newsletter_block_left .form-group .form-control {
  background: #3c3c3c;
}
.bodywebsite #footer #newsletter_block_left .form-group .button-small {
  color: #fff;
}
.bodywebsite #footer #newsletter_block_left .form-group .button-small:hover {
  color: #eea200;
}
.bodywebsite h2,
.bodywebsite h3,
.bodywebsite h4,
.bodywebsite h5 {
  font-family: 'Open Sans', sans-serif !important;
}
.bodywebsite .header_user_info {
  float: right;
  border-left: 1px solid #515151;
  border-right: 1px solid #515151;
}
.bodywebsite .header_user_info a {
  color: #fff;
  font-weight: 700;
  display: block;
  padding: 8px 9px 11px 8px;
  cursor: pointer;
  line-height: 18px;
}
@media (max-width: 479px) {
  .bodywebsite .header_user_info a {
    font-size: 11px;
  }
}
.bodywebsite .header_user_info a:hover {
  background: #2b2b2b;
}
.bodywebsite #languages-block-top {
  float: right;
  border-left: 1px solid #515151;
  position: relative;
}
@media (max-width: 479px) {
  .bodywebsite #languages-block-top {
    width: 55%;
  }
}
.bodywebsite #languages-block-top div.current {
  font-weight: 700;
  padding: 8px 10px 10px;
  line-height: 18px;
  color: #fff;
  text-shadow: 1px 1px #0003;
  cursor: pointer;
}
@media (max-width: 479px) {
  .bodywebsite #languages-block-top div.current {
    text-align: center;
    padding: 9px 5px 10px;
    font-size: 11px;
  }
}
.bodywebsite #languages-block-top div.current:after {
  content: "\f0d7";
  font-family: FontAwesome;
  font-size: 18px;
  line-height: 18px;
  color: #686666;
  vertical-align: -2px;
  padding-left: 12px;
}
@media (max-width: 479px) {
  .bodywebsite #languages-block-top div.current:after {
    padding-left: 2px;
    font-size: 13px;
    line-height: 13px;
    vertical-align: 0;
  }
}
.bodywebsite #languages-block-top ul {
  display: none;
  position: absolute;
  top: 37px;
  left: 0;
  width: 157px;
  background: #333;
  z-index: 2;
}
.bodywebsite #languages-block-top ul li {
  color: #fff;
  line-height: 35px;
  font-size: 13px;
}
.bodywebsite #languages-block-top ul li a,
.bodywebsite #languages-block-top ul li > span {
  padding: 0 10px 0 12px;
  display: block;
  color: #fff;
}
.bodywebsite #languages-block-top ul li.selected,
.bodywebsite #languages-block-top ul li:hover a {
  background: #484848;
}
.bodywebsite #header .shopping_cart {
  position: relative;
  float: right;
  padding-top: 30px;
}
.bodywebsite #header .shopping_cart > a:first-child:after {
  content: "\f0d7";
  font-family: FontAwesome;
  display: inline-block;
  float: right;
  font-size: 17px;
  color: #686666;
  padding: 0;
}
.bodywebsite #header .shopping_cart > a:first-child:hover:after {
  content: "\f0d8";
  padding: 0;
}
.bodywebsite .shopping_cart {
  width: 270px;
}
@media (max-width: 480px) {
  .bodywebsite .shopping_cart {
    padding-top: 20px;
  }
}
@media (max-width: 1200px) {
  .bodywebsite .shopping_cart {
    margin: 0 auto;
    float: none;
    width: 100%;
  }
}
.bodywebsite .shopping_cart > a:first-child {
  padding: 7px 10px 14px 16px;
  background: #333;
  display: block;
  font-weight: 700;
  color: #777;
  text-shadow: 1px 1px #0003;
  overflow: hidden;
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite .shopping_cart > a:first-child span.ajax_cart_product_txt,
  .bodywebsite .shopping_cart > a:first-child span.ajax_cart_product_txt_s {
    display: none !important;
  }
}
.bodywebsite .shopping_cart > a:first-child b {
  color: #fff;
  font: 600 18px/22px "Open Sans", sans-serif;
  padding-right: 5px;
}
.bodywebsite .shopping_cart > a:first-child:before {
  content: "\f07a";
  font-family: FontAwesome;
  display: inline-block;
  font-size: 23px;
  line-height: 23px;
  color: #fff;
  padding-right: 15px;
}
.bodywebsite .shopping_cart .ajax_cart_total {
  display: none !important;
}
.bodywebsite .cart_block .cart_block_no_products {
  margin: 0;
  padding: 10px 20px;
}
.bodywebsite .cart_block .cart-prices {
  border-top: 1px solid #d6d4d4;
  font-weight: 700;
  padding: 10px 20px 22px;
}
.bodywebsite .cart_block .cart-prices .cart-prices-line {
  overflow: hidden;
  border-bottom: 1px solid #515151;
  padding: 7px 0;
}
.bodywebsite .cart_block .cart-prices .cart-prices-line.last-line {
  border: none;
}
.bodywebsite .cart_block .cart-buttons {
  overflow: hidden;
  padding: 20px 20px 10px;
  margin: 0;
  background: #f6f6f6;
}
.bodywebsite .cart_block .cart-buttons a {
  width: 100%;
  float: left;
  text-align: center;
  margin-bottom: 10px;
  margin-right: 10px;
}
.bodywebsite .cart_block .cart-buttons a#button_order_cart {
  margin-right: 0;
  border: none;
}
.bodywebsite .cart_block .cart-buttons a#button_order_cart span {
  padding: 7px 0;
  font-size: 1.1em;
  border: solid 1px #63c473;
  background: #43b155;
}
.bodywebsite .cart_block .cart-buttons a#button_order_cart:hover span {
  border: solid 1px #358c43;
  background: #2e7a3a;
  color: #fff;
}
.bodywebsite #header .cart_block {
  position: absolute;
  top: 95px;
  right: 0;
  z-index: 100;
  display: none;
  height: auto;
  background: #484848;
  color: #fff;
  width: 270px;
}
@media (max-width: 480px) {
  .bodywebsite #header .cart_block {
    width: 100%;
  }
}
@media (max-width: 1200px) {
  .bodywebsite #header .cart_block {
    width: 100%;
  }
}
.bodywebsite #header .cart_block a:hover {
  color: #9c9b9b;
}
.bodywebsite #header .cart_block .cart-prices {
  border: none;
  background: url(/dolibarr18/dolibarr/htdocs/viewimage.php?modulepart=medias&file=image/dolistore3/themes/dolibarr-bootstrap/css/modules/img/cart-shadow.png) repeat-x #3d3d3d;
}
.bodywebsite #header .cart_block .cart-buttons {
  background: url(/dolibarr18/dolibarr/htdocs/viewimage.php?modulepart=medias&file=image/dolistore3/themes/dolibarr-bootstrap/css/modules/img/cart-shadow.png) repeat-x #333;
}
.bodywebsite #header .block_content {
  margin-bottom: 0;
}
.bodywebsite .cart_block .cart_block_shipping_cost,
.bodywebsite .cart_block .cart_block_tax_cost,
.bodywebsite .cart_block .cart_block_total {
  float: right;
}
.bodywebsite .layer_cart_overlay {
  background-color: #000;
  display: none;
  height: 100%;
  left: 0;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 98;
  opacity: 0.2;
}
.bodywebsite #layer_cart {
  background-color: #fff;
  position: absolute;
  display: none;
  z-index: 99;
  width: 84%;
  margin-right: 8%;
  margin-left: 8%;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  -o-border-radius: 4px;
  border-radius: 4px;
}
.bodywebsite #layer_cart .layer_cart_product {
  padding: 30px !important;
  overflow: hidden;
  position: static;
  /*padding-bottom: 0px !important;*/
}
.bodywebsite #layer_cart .layer_cart_product h2 {
  font: 400 23px/29px Arial, Helvetica, sans-serif;
  color: #46a74e;
  margin-bottom: 22px;
  padding-right: 100px;
}
.bodywebsite #header .cart_block a,
.bodywebsite #header .cart_block .price {
  color: #fff;
}
@media (max-width: 767px) {
  .bodywebsite #layer_cart .layer_cart_product h2 {
    font-size: 18px;
    padding-right: 0;
    line-height: normal;
  }
}
.bodywebsite #layer_cart .layer_cart_product h2 i {
  font-size: 30px;
  line-height: 30px;
  float: left;
  padding-right: 8px;
}
@media (max-width: 767px) {
  .bodywebsite #layer_cart .layer_cart_product h2 i {
    font-size: 22px;
    line-height: 22px;
  }
}
.bodywebsite #layer_cart .layer_cart_product .product-image-container {
  max-width: 178px;
  border: 1px solid #d6d4d4;
  padding: 5px;
  float: left;
  margin-right: 30px;
}
@media (max-width: 480px) {
  .bodywebsite #layer_cart .layer_cart_product .product-image-container {
    float: none;
    margin-right: 0;
    margin-bottom: 10px;
  }
}
.bodywebsite #layer_cart .layer_cart_product .layer_cart_product_info {
  padding: 38px 0 0;
}
.bodywebsite #layer_cart .layer_cart_product .layer_cart_product_info #layer_cart_product_title {
  display: block;
  padding-bottom: 8px;
}
.bodywebsite #layer_cart .layer_cart_product .layer_cart_product_info > div {
  padding-bottom: 7px;
}
.bodywebsite #layer_cart .layer_cart_product .layer_cart_product_info > div strong {
  padding-right: 3px;
}
.bodywebsite #layer_cart .layer_cart_cart {
  background: #fafafa;
  border-left: 1px solid #d6d4d4;
  padding: 21px 30px 170px;
  -webkit-border-radius: 0 4px 4px 0;
  -moz-border-radius: 0 4px 4px 0;
  -ms-border-radius: 0 4px 4px 0;
  -o-border-radius: 0 4px 4px 0;
  border-radius: 0 4px 4px 0;
  position: relative;
}
@media (min-width: 1200px) {
  .bodywebsite #layer_cart .layer_cart_cart {
    min-height: 318px;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .bodywebsite #layer_cart .layer_cart_cart {
    min-height: 360px;
  }
}
@media (max-width: 991px) {
  .bodywebsite #layer_cart .layer_cart_cart {
    border-left: none;
    border-top: 1px solid #d6d4d4;
  }
}
.bodywebsite #layer_cart .layer_cart_cart h2 {
  font: 400 23px/29px Arial, Helvetica, sans-serif;
  color: #333;
  border-bottom: 1px solid #d6d4d4;
  padding-bottom: 13px;
  margin-bottom: 17px;
}
@media (max-width: 767px) {
  .bodywebsite #layer_cart .layer_cart_cart h2 {
    font-size: 18px;
  }
}
.bodywebsite #layer_cart .layer_cart_cart .layer_cart_row {
  padding: 0 0 7px;
}
.bodywebsite #layer_cart .layer_cart_cart .button-container {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 0 30px 20px;
}
.bodywebsite #layer_cart .layer_cart_cart .button-container .btn {
  margin-bottom: 10px;
}
.bodywebsite #layer_cart .layer_cart_cart .button-container span.exclusive-medium {
  margin-right: 5px;
}
.bodywebsite #layer_cart .layer_cart_cart .button-container span.exclusive-medium i {
  padding-right: 5px;
  color: #777;
}
.bodywebsite #layer_cart .cross {
  position: absolute;
  right: 7px;
  top: 15px;
  width: 25px;
  height: 25px;
  cursor: pointer;
  color: #333;
  z-index: 2;
}
.bodywebsite #layer_cart .cross:before {
  content: "\f057";
  display: block;
  font-family: FontAwesome;
  font-size: 25px;
  line-height: 25px;
}
.bodywebsite #layer_cart .cross:hover {
  color: #515151;
}
.bodywebsite #layer_cart .continue {
  cursor: pointer;
}
.bodywebsite .width98 {
  width: 98px !important;
}
.bodywebsite .truncate2 {
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
}
/*.bodywebsite a,
.bodywebsite b,
.bodywebsite body,
.bodywebsite div,
.bodywebsite footer,
.bodywebsite form,
.bodywebsite h1,
.bodywebsite h2,
.bodywebsite h3,
.bodywebsite h4,
.bodywebsite h5,
.bodywebsite header,
.bodywebsite html,
.bodywebsite i,
.bodywebsite img,
.bodywebsite label,
.bodywebsite li,
.bodywebsite nav,
.bodywebsite p,
.bodywebsite section,
.bodywebsite span,
.bodywebsite strong,
.bodywebsite table,
.bodywebsite tbody,
.bodywebsite td,
.bodywebsite tr,
.bodywebsite ul {
  margin: 0;
  padding: 0;
  border: 0;
  font: inherit;
  font-size: 100%;
  vertical-align: baseline;
}*/
.bodywebsite html {
  line-height: 1;
  font-family: sans-serif;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  font-size: 62.5%;
  -webkit-tap-highlight-color: transparent;
}
.bodywebsite ul {
  list-style: none;
  margin-top: 0;
  margin-bottom: 9px;
}
.bodywebsite table {
  border-collapse: collapse;
  border-spacing: 0;
}
.bodywebsite td {
  text-align: left;
  font-weight: 400;
  vertical-align: middle;
}
.bodywebsite a img {
  border: none;
}
.bodywebsite footer,
.bodywebsite header,
.bodywebsite nav,
.bodywebsite section {
  display: block;
}
.bodywebsite body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 13px;
  line-height: 1.42857;
  color: #111;
  background-color: #fff;
}
.bodywebsite a:focus {
  outline: thin dotted;
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.bodywebsite a:active,
.bodywebsite a:hover {
  outline: 0;
}
.bodywebsite h1 {
  font-size: 2em;
  margin: 0.67em 0;
  font-size: 33px;
}
.bodywebsite b,
.bodywebsite strong {
  font-weight: 700;
}
.bodywebsite hr {
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 0;
  margin-top: 18px;
  margin-bottom: 18px;
  border: 0;
  border-top: 1px solid #eee;
}
.bodywebsite img {
  border: 0;
  vertical-align: middle;
}
.bodywebsite button,
.bodywebsite input {
  font-size: 100%;
  margin: 0;
  line-height: normal;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
  background-image: none;
}
.bodywebsite button {
  text-transform: none;
  -webkit-appearance: button;
  cursor: pointer;
}
.bodywebsite button::-moz-focus-inner,
.bodywebsite input::-moz-focus-inner {
  border: 0;
  padding: 0;
}
.bodywebsite *,
.bodywebsite :after,
.bodywebsite :before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.bodywebsite a {
  color: #dc7306;
  text-decoration: none !important;
}
.bodywebsite a:focus,
.bodywebsite a:hover {
  color: #515151;
  text-decoration: underline;
}
.bodywebsite .img-responsive {
  display: block;
  max-width: 100%;
  height: auto;
}
.bodywebsite p {
  margin: 0 0 9px;
}
.bodywebsite h1,
.bodywebsite h2,
.bodywebsite h3,
.bodywebsite h4,
.bodywebsite h5 {
  font-family: Arial, Helvetica, sans-serif;
  font-weight: 500;
  line-height: 1.1;
}
.bodywebsite h1,
.bodywebsite h2,
.bodywebsite h3 {
  margin-top: 2px;
  margin-bottom: 9px;
}
.bodywebsite h4,
.bodywebsite h5 {
  margin-top: 9px;
  margin-bottom: 9px;
}
.bodywebsite h2 {
  font-size: 27px;
}
.bodywebsite h3 {
  font-size: 23px;
}
.bodywebsite h4 {
  font-size: 17px;
}
.bodywebsite h5 {
  font-size: 13px;
}
.bodywebsite ul ul {
  margin-bottom: 0;
}
.bodywebsite .container {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
}
.bodywebsite .row {
  margin-left: -15px;
  margin-right: -15px;
}
.bodywebsite .col-md-3,
.bodywebsite .col-md-5,
.bodywebsite .col-md-6,
.bodywebsite .col-sm-12,
.bodywebsite .col-sm-2,
.bodywebsite .col-sm-3,
.bodywebsite .col-sm-4,
.bodywebsite .col-sm-9,
.bodywebsite .col-xs-12,
.bodywebsite header .row #header_logo {
  position: relative;
  min-height: 1px;
  padding-left: 15px;
  padding-right: 15px;
}
.bodywebsite .col-xs-12 {
  width: 100%;
}
.bodywebsite .container:after,
.bodywebsite .container:before,
.bodywebsite .row:after,
.bodywebsite .row:before {
  content: " ";
  display: table;
}
.bodywebsite .container:after,
.bodywebsite .row:after {
  clear: both;
}
@media (min-width: 768px) {
  .bodywebsite .container {
    max-width: 750px;
  }
  .bodywebsite .col-sm-2,
  .bodywebsite .col-sm-3,
  .bodywebsite .col-sm-4,
  .bodywebsite .col-sm-9,
  .bodywebsite header .row #header_logo {
    float: left;
  }
  .bodywebsite .col-sm-2 {
    width: 33%;
  }
  .bodywebsite .col-sm-9 {
    width: 75%;
  }
  .bodywebsite .col-sm-12 {
    width: 100%;
  }
  .bodywebsite .col-sm-3,
  .bodywebsite .col-sm-4,
  .bodywebsite header .row #header_logo {
    width: 25%;
  }
}
@media (min-width: 992px) {
  .bodywebsite .container {
    max-width: 970px;
  }
  .bodywebsite .col-md-3,
  .bodywebsite .col-md-5,
  .bodywebsite .col-md-6 {
    float: left;
  }
  .bodywebsite .col-md-3 {
    width: 25%;
  }
  .bodywebsite .col-md-5 {
    width: 41.66667%;
  }
  .bodywebsite .col-md-6 {
    width: 50%;
  }
}
@media (min-width: 1200px) {
  .bodywebsite .container {
    max-width: 1170px;
  }
}
.bodywebsite table {
  max-width: 100%;
  background-color: transparent;
}
.bodywebsite label {
  /*display: inline-block;*/
  margin-bottom: 5px;
  font-weight: 700;
}
.bodywebsite .form-control {
  display: block;
  width: 100%;
  height: 32px;
  padding: 6px 12px;
  font-size: 13px;
  line-height: 1.42857;
  color: #9c9b9b;
  vertical-align: middle;
  background-color: #fff;
  border: 1px solid #d6d4d4;
  border-radius: 0;
  -webkit-box-shadow: inset 0 1px 1px #00000013;
  box-shadow: inset 0 1px 1px #00000013;
  -webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
}
.bodywebsite .form-control:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px #00000013 0 8px #66afe999;
  box-shadow: inset 0 1px 1px #00000013 0 8px #66afe999;
}
.bodywebsite .form-group {
  margin-bottom: 15px;
}
.bodywebsite .btn {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 13px;
  font-weight: 400;
  line-height: 1.42857;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  border: 1px solid transparent;
  border-radius: 0;
  white-space: nowrap;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}
.bodywebsite .btn:focus {
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.bodywebsite .btn:focus,
.bodywebsite .btn:hover {
  color: #333;
  text-decoration: none;
}
.bodywebsite .btn:active {
  outline: 0;
  background-image: none;
  -webkit-box-shadow: inset 0 3px 5px #00000020;
  box-shadow: inset 0 3px 5px #00000020;
}
.bodywebsite .btn-default {
  color: #333;
  background-color: #fff;
  border-color: #ccc;
}
.bodywebsite .btn-default:active,
.bodywebsite .btn-default:focus,
.bodywebsite .btn-default:hover {
  color: #333;
  background-color: #ebebeb;
  border-color: #adadad;
}
.bodywebsite .btn-default:active {
  background-image: none;
}
.bodywebsite .nav {
  margin-bottom: 0;
  padding-left: 0;
  list-style: none;
}
.bodywebsite .breadcrumb {
  padding: 8px 15px;
  margin-bottom: 18px;
  list-style: none;
  background-color: #f6f6f6;
  border-radius: 0;
}
.bodywebsite .form-control:-moz-placeholder,
.bodywebsite .form-control::-moz-placeholder,
.bodywebsite .form-control:-ms-input-placeholder,
.bodywebsite .form-control::-webkit-input-placeholder {
  color: #999;
}
.bodywebsite .nav:after,
.bodywebsite .nav:before,
.bodywebsite .clearfix:after,
.bodywebsite .clearfix:before {
  content: " ";
  display: table;
}
.bodywebsite .nav:after,
.bodywebsite .clearfix:after {
  clear: both;
}
.bodywebsite .hidden {
  display: none!important;
  visibility: hidden !important;
}
@font-face {
  font-family: fontawesome;
  src: url(https://www.dolistore.com/themes/dolibarr-bootstrap/font/fontawesome-webfont.eot?v=3.2.1);
  src: url(https://www.dolistore.com/themes/dolibarr-bootstrap/font/fontawesome-webfont.eot?#iefix&v=3.2.1) format("embedded-opentype"), url(https://www.dolistore.com/themes/dolibarr-bootstrap/font/fontawesome-webfont.woff?v=3.2.1) format("woff"), url(https://www.dolistore.com/themes/dolibarr-bootstrap/font/fontawesome-webfont.ttf?v=3.2.1) format("truetype"), url(https://www.dolistore.com/themes/dolibarr-bootstrap/font/fontawesome-webfont.svg#fontawesomeregular?v=3.2.1) format("svg");
  font-weight: 400;
  font-style: normal;
}
.bodywebsite [class^=icon-] {
  font-family: FontAwesome;
  font-weight: 400;
  font-style: normal;
  text-decoration: inherit;
  -webkit-font-smoothing: antialiased;
  display: inline;
  width: auto;
  height: auto;
  line-height: normal;
  vertical-align: baseline;
  background-image: none;
  background-position: 0 0;
  background-repeat: repeat;
  margin-top: 0;
}
.bodywebsite [class^=icon-]:before {
  text-decoration: inherit;
  display: inline-block;
  speak: none;
}
.bodywebsite a [class^=icon-] {
  display: inline;
}
.bodywebsite .icon-ok:before {
  content: "\f00c";
}
.bodywebsite .icon-home:before {
  content: "\f015";
}
.bodywebsite .icon-repeat:before {
  content: "\f01e";
}
.bodywebsite .icon-check:before {
  content: "\f046";
}
.bodywebsite .icon-chevron-left:before {
  content: "\f053";
}
.bodywebsite .icon-chevron-right:before {
  content: "\f054";
}
.bodywebsite .icon-plus:before {
  content: "\f067";
}
.bodywebsite .icon-minus:before {
  content: "\f068";
}
.bodywebsite .icon-warning-sign:before {
  content: "\f071";
}
.bodywebsite .icon-calendar:before {
  content: "\f073";
}
.bodywebsite .icon-save:before {
  content: "\f0c7";
}
.bodywebsite .icon-caret-right:before {
  content: "\f0da";
}
.bodywebsite .icon-puzzle-piece:before {
  content: "\f12e";
}
.bodywebsite a:hover {
  text-decoration: none;
}
@media only screen and (min-width: 1200px) {
  .bodywebsite .container {
    padding-left: 0;
    padding-right: 0;
  }
}
.bodywebsite body {
  min-width: 320px;
  height: 100%;
  line-height: 18px;
  font-size: 13px;
  color: #111;
}
.bodywebsite #header {
  z-index: 1001;
}
.bodywebsite .columns-container {
  background: #fff;
}
.bodywebsite #columns {
  position: relative;
  padding-bottom: 50px;
  padding-top: 15px;
}
.bodywebsite header {
  z-index: 1;
  position: relative;
  background: #fff;
  padding-bottom: 15px;
}
.bodywebsite header .banner {
  background: #000;
  max-height: 100%;
}
.bodywebsite header .nav {
  background: #333;
}
.bodywebsite header .nav nav {
  width: 100%;
}
.bodywebsite header .row {
  position: relative;
}
.bodywebsite header .row #header_logo {
  padding-top: 15px;
}
.bodywebsite header .banner .row,
.bodywebsite header .nav .row {
  margin: 0;
}
@media (max-width: 992px) {
  .bodywebsite header .row #header_logo {
    padding-top: 40px;
  }
}
@media (max-width: 767px) {
  .bodywebsite header .row #header_logo {
    padding-top: 15px;
  }
  .bodywebsite header .row #header_logo img {
    margin: 0 auto;
  }
}
@media (min-width: 767px) {
  .bodywebsite header .row #header_logo + .col-sm-4 + .col-sm-4 {
    float: right;
  }
}
.bodywebsite .unvisible {
  display: none;
}
.bodywebsite a.button,
.bodywebsite span.button {
  position: relative;
  display: inline-block;
  padding: 5px 7px;
  border: 1px solid #c90;
  font-weight: 700;
  color: #000;
  background: url(https://www.dolistore.com/themes/dolibarr-bootstrap/img/bg_bt.gif) repeat-x 0 0 #f4b61b;
  cursor: pointer;
  white-space: normal;
  text-align: left;
}
.bodywebsite a.button:hover {
  text-decoration: none;
  background-position: left -50px;
}
.bodywebsite a.button:active {
  background-position: left -100px;
}
.bodywebsite .button.button-small {
  font: bold 13px/17px Arial, Helvetica, sans-serif;
  color: #fff;
  background: #6f6f6f;
  border: 1px solid;
  border-color: #666 #5f5f5f #292929;
  padding: 0;
  text-shadow: 1px 1px #0000003d;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.bodywebsite .button.button-small span {
  display: block;
  padding: 3px 8px;
  border: 1px solid;
  border-color: #8b8a8a;
}
.bodywebsite .button.button-small span i {
  vertical-align: 0;
  margin-right: 5px;
}
.bodywebsite .button.button-small span i.right {
  margin-right: 0;
  margin-left: 5px;
}
.bodywebsite .button.button-small span:hover {
  background: #575757;
  border-color: #303030 #303030 #666 #444;
  color:#fff;
}
.bodywebsite .button.button-medium {
  font-size: 17px;
  line-height: 21px;
  color: #fff;
  padding: 0;
  font-weight: 700;
  background: #43b754;
  background: -moz-linear-gradient(top, #43b754 0, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #43b754), color-stop(2%, #41b757), color-stop(4%, #41b854), color-stop(6%, #43b756), color-stop(38%, #41b354), color-stop(40%, #44b355), color-stop(66%, #45af55), color-stop(74%, #41ae53), color-stop(91%, #42ac52), color-stop(94%, #41ae55), color-stop(96%, #43ab54), color-stop(100%, #42ac52));
  background: -webkit-linear-gradient(top, #43b754 0, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  background: -o-linear-gradient(top, #43b754 0, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  background: -ms-linear-gradient(top, #43b754 0, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  background: linear-gradient(to bottom, #43b754 0, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  border: 1px solid;
  border-color: #399a49 #247f32 #1a6d27 #399a49;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.bodywebsite .button.button-medium span {
  display: block;
  padding: 10px 10px 10px 14px;
  border: 1px solid;
  border-color: #74d578;
}
.bodywebsite .dark,
.bodywebsite label {
  color: #333;
}
@media (max-width: 480px) {
  .bodywebsite .button.button-medium span {
    font-size: 15px;
    padding-right: 7px;
    padding-left: 7px;
  }
}
.bodywebsite .button.button-medium span i.right {
  margin-right: 0;
  margin-left: 9px;
}
@media (max-width: 480px) {
  .bodywebsite .button.button-medium span i.right {
    margin-left: 5px;
  }
}
.bodywebsite .button.button-medium:hover {
  background: #3aa04c;
  background: -moz-linear-gradient(top, #3aa04c 0, #3aa04a 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #3aa04c), color-stop(100%, #3aa04a));
  background: -webkit-linear-gradient(top, #3aa04c 0, #3aa04a 100%);
  background: -o-linear-gradient(top, #3aa04c 0, #3aa04a 100%);
  background: -ms-linear-gradient(top, #3aa04c 0, #3aa04a 100%);
  background: linear-gradient(to bottom, #3aa04c 0, #3aa04a 100%);
  border-color: #196f28 #399a49 #399a49 #258033;
}
.bodywebsite .btn.button-minus,
.bodywebsite .btn.button-plus {
  font-size: 14px;
  line-height: 14px;
  color: silver;
  text-shadow: 1px -1px #0000000d;
  padding: 0;
  border: 1px solid;
  border-color: #dedcdc #c1bfbf #b5b4b4 #dad8d8;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.bodywebsite .btn.button-minus span,
.bodywebsite .btn.button-plus span {
  display: block;
  border: 1px solid #fff;
  width: 100%;
  height: 25px;
  text-align: center;
  vertical-align: middle;
  padding: 4px 0 0;
  background: #1e5799;
  background: #fff;
  background: -moz-linear-gradient(top, #fff 0, #fbfbfb 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #fff), color-stop(100%, #fbfbfb));
  background: -webkit-linear-gradient(top, #fff 0, #fbfbfb 100%);
  background: -o-linear-gradient(top, #fff 0, #fbfbfb 100%);
  background: -ms-linear-gradient(top, #fff 0, #fbfbfb 100%);
  background: linear-gradient(to bottom, #fff 0, #fbfbfb 100%);
}
.bodywebsite .btn.button-minus-order span, .bodywebsite .btn.button-plus-order span{
  width: 25px;
}
.bodywebsite .btn.button-minus:hover,
.bodywebsite .btn.button-plus:hover {
  color: #333;
}
.bodywebsite .btn.button-minus:hover span,
.bodywebsite .btn.button-plus:hover span {
  filter: none;
  background: #f6f6f6;
}
.bodywebsite .button.exclusive-medium {
  font-size: 17px;
  padding: 0;
  line-height: 21px;
  color: #333;
  font-weight: 700;
  border: 1px solid;
  border-color: #cacaca #b7b7b7 #9a9a9a;
  text-shadow: 1px 1px #fff;
}
.bodywebsite .button.exclusive-medium span {
  border: 1px solid;
  border-color: #fff;
  display: block;
  padding: 9px 10px 11px;
  background: #f7f7f7;
  background: -moz-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #f7f7f7), color-stop(100%, #ededed));
  background: -webkit-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: -o-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: -ms-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: linear-gradient(to bottom, #f7f7f7 0, #ededed 100%);
}
@media (max-width: 480px) {
  .bodywebsite .button.exclusive-medium span {
    font-size: 15px;
    padding-right: 7px;
    padding-left: 7px;
  }
}
.bodywebsite .button.exclusive-medium span:hover {
  border-color: #9e9e9e #c2c2c2 #c8c8c8;
}
.bodywebsite .form-control {
  padding: 3px 5px;
  height: 27px;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.bodywebsite .form-control.grey {
  background: #fbfbfb;
}
.bodywebsite .price {
  font-size: 13px;
  color: #777;
  white-space: nowrap;
}
.bodywebsite .old-price {
  color: #6f6f6f;
  text-decoration: line-through;
}
.bodywebsite .special-price {
  color: #f13340;
}
.bodywebsite .price-percent-reduction {
  background: #f13340;
  border: 1px solid #d02a2c;
  font: 600 21px/24px "Open Sans", sans-serif;
  color: #fff;
  padding: 0 5px 0 3px;
  display: inline-block;
}
.bodywebsite .sale-box {
  position: absolute;
  top: -4px;
  overflow: hidden;
  height: 85px;
  width: 85px;
  text-align: center;
  z-index: 0;
  right: -5px;
}
.bodywebsite .sale-label {
  font: 700 14px/12px Arial, Helvetica, sans-serif;
  color: #fff;
  background: #f13340;
  text-transform: uppercase;
  padding: 9px 0 7px;
  text-shadow: 1px 1px #0000003d;
  width: 130px;
  text-align: center;
  display: block;
  position: absolute;
  right: -33px;
  top: 16px;
  z-index: 1;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
.bodywebsite .sale-label:before {
  position: absolute;
  bottom: -3px;
  right: 4px;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 4px 4px 0;
  border-color: #ad2b34 transparent transparent;
  content: ".";
  text-indent: -5000px;
  -webkit-transform: rotate(225deg);
  -ms-transform: rotate(225deg);
  transform: rotate(225deg);
}
.bodywebsite .sale-label:after {
  position: absolute;
  bottom: -3px;
  left: 5px;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 4px 4px 0;
  border-color: #ad2b34 transparent transparent;
  content: ".";
  text-indent: -5000px;
  -webkit-transform: rotate(135deg);
  -ms-transform: rotate(135deg);
  transform: rotate(135deg);
}
.bodywebsite .page-product-box {
  padding-bottom: 10px;
}
.bodywebsite .block {
  margin-bottom: 30px;
}
@media (max-width: 767px) {
  .bodywebsite .block {
    margin-bottom: 0;
  }
  .bodywebsite .block .block_content {
    margin-bottom: 20px;
  }
}
.bodywebsite .block .title_block,
.bodywebsite .block h4 {
  font: 600 18px/22px "Open Sans", sans-serif;
  color: #555454;
  background: #f6f6f6;
  border-top: 5px solid #333;
  text-transform: uppercase;
  padding: 14px 5px 17px 20px;
  margin-bottom: 20px;
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite .block .title_block,
  .bodywebsite .block h4 {
    font-size: 14px;
  }
}
.bodywebsite .block .title_block a,
.bodywebsite .block h4 a {
  color: #555454;
}
.bodywebsite .block .title_block a:hover,
.bodywebsite .block h4 a:hover {
  color: #333;
}
.bodywebsite .block .products-block li {
  padding: 0 0 20px;
  margin-bottom: 20px;
  border-bottom: 1px solid #d6d4d4;
}
.bodywebsite .block .products-block li .products-block-image {
  float: left;
  border: 1px solid #d6d4d4;
  margin-right: 19px;
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite .block .products-block li .products-block-image {
    float: none;
    display: inline-block;
    margin: 0 auto 10px;
    text-align: center;
  }
}
.bodywebsite .block .products-block li .product-content {
  overflow: hidden;
}
.bodywebsite .block .products-block li .product-content h5 {
  margin: -3px 0 0;
}
.bodywebsite .block .products-block .product-name {
  font-size: 15px;
  line-height: 18px;
}
.bodywebsite .block .products-block .product-description {
  margin-bottom: 14px;
}
.bodywebsite .block .products-block .price-percent-reduction {
  font: 700 14px/17px Arial, Helvetica, sans-serif;
  padding: 1px 6px;
}
.bodywebsite h3.page-product-heading {
  color: #555454;
  text-transform: uppercase;
  font-family: open sans, sans-serif;
  font-weight: 600;
  font-size: 18px;
  line-height: 20px;
  padding: 14px 20px 17px;
  margin: 0 0 20px;
  position: relative;
  border: 1px solid #d6d4d4;
  background: #fbfbfb;
}
.bodywebsite #page .rte {
  padding: 0!important;
  background: transparent none repeat scroll 0 0;
}
.bodywebsite .header-container {
  background: #fff;
}
.bodywebsite .breadcrumb {
  display: inline-block;
  padding: 0 11px;
  border: 1px solid #d6d4d4;
  font-weight: 700;
  font-size: 12px;
  line-height: 24px;
  min-height: 6px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  overflow: hidden;
  margin-bottom: 16px;
  position: relative;
  z-index: 1;
}
.bodywebsite .breadcrumb .navigation-pipe {
  width: 18px;
  display: inline-block;
  text-indent: -5000px;
}
.bodywebsite .breadcrumb a {
  display: inline-block;
  background: #fff;
  padding: 0 15px 0 22px;
  margin-left: -26px;
  position: relative;
  z-index: 2;
  color: #333;
}
.bodywebsite .breadcrumb a.home {
  font-size: 20px;
  color: #777;
  width: 38px;
  text-align: center;
  padding: 0;
  margin: 0 1px 0 -11px;
  -moz-border-radius-topleft: 3px;
  -webkit-border-top-left-radius: 3px;
  border-top-left-radius: 3px;
  -moz-border-radius-bottomleft: 3px;
  -webkit-border-bottom-left-radius: 3px;
  border-bottom-left-radius: 3px;
  z-index: 99;
  line-height: 20px;
  display: inline-block;
  height: 24px;
}
.bodywebsite .breadcrumb a.home i {
  vertical-align: -1px;
}
.bodywebsite .breadcrumb a.home:before {
  border: none;
}
.bodywebsite .breadcrumb a:after {
  display: inline-block;
  content: ".";
  position: absolute;
  right: -10px;
  top: 3px;
  width: 18px;
  height: 18px;
  background: #fff;
  border-right: 1px solid #d6d4d4;
  border-top: 1px solid #d6d4d4;
  border-radius: 2px;
  text-indent: -5000px;
  z-index: -1;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
.bodywebsite .breadcrumb a:before {
  display: inline-block;
  content: ".";
  position: absolute;
  left: -10px;
  top: 3px;
  width: 18px;
  height: 18px;
  background: 0 0;
  border-right: 1px solid #d6d4d4;
  border-top: 1px solid #d6d4d4;
  border-radius: 2px;
  text-indent: -5000px;
  z-index: -1;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
.bodywebsite .breadcrumb a:hover {
  color: #777;
}
.bodywebsite .footer-container {
  background-color: #333;
}
@media (min-width: 768px) {
  .bodywebsite .footer-container {
    background: 0 0 !important;
  }
}
.bodywebsite .footer-container .container {
  padding-bottom: 20px;
}
.bodywebsite .footer-container #footer {
  color: #777;
}
.bodywebsite .footer-container #footer .row {
  position: relative;
}
.bodywebsite .footer-container #footer .footer-block {
  margin-top: 45px;
}
@media (max-width: 767px) {
  .bodywebsite .footer-container #footer .footer-block {
    margin-top: 20px;
  }
}
.bodywebsite .footer-container #footer a {
  color: #777;
}
.bodywebsite .footer-container #footer a:hover {
  color: #fff;
}
.bodywebsite .footer-container #footer h4 {
  font: 600 18px/22px "Open Sans", sans-serif;
  color: #fff;
  margin: 0 0 13px;
  cursor: pointer;
}
@media (max-width: 767px) {
  .bodywebsite .footer-container #footer h4 {
    position: relative;
    margin-bottom: 0;
    padding-bottom: 13px;
  }
  .bodywebsite .footer-container #footer h4:after {
    display: block;
    content: "\f055";
    font-family: fontawesome;
    position: absolute;
    right: 0;
    top: 1px;
  }
}
.bodywebsite .footer-container #footer h4 a {
  color: #fff;
}
.bodywebsite .footer-container #footer ul li {
  padding-bottom: 8px;
}
.bodywebsite .footer-container #footer ul li a {
  font-weight: 700;
  text-shadow: 1px 1px 0 #0006;
}
.bodywebsite .page-product-box > div > table {
  width: 100% !important;
  font-size: 13px !important;
}
.bodywebsite .page-product-box img {
  max-width: 100%;
  height: auto;
}
.bodywebsite div.primary_block div#views_block {
  float: right;
  width: 56%;
}
@media (max-width: 767px) {
  .bodywebsite div.primary_block div#views_block {
    margin-top: 25px;
    float: unset;
    width: unset;
    margin-left: 15px;
  }
}
.bodywebsite #thumbs_list li a.shown,
.bodywebsite #thumbs_list li a:hover {
  border-color: transparent !important;
}
.bodywebsite .product-image-container {
  height: 200px;
}
@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min-device-pixel-ratio: 2) {
  .bodywebsite .replace-2x {
    font-size: 1px;
  }
}
/*.bodywebsite table td {
  padding: 9px 10px;
  text-align: left;
}*/
.bodywebsite .primary_block {
  margin-bottom: 40px;
}
.bodywebsite .top-hr {
  background: #000;
  height: 5px;
  margin: 2px 15px 31px;
}
.bodywebsite .primary_block .pb-left-column img {
  max-width: 100%;
  height: auto;
}
.bodywebsite .pb-left-column #image-block {
  position: relative;
  display: block;
  cursor: pointer;
  padding: 5px;
  border: 1px solid #dbdbdb;
  background: #fff;
  min-width: 100%;
  min-height: 371px;
  justify-content: center;
  display: grid;
}
@media (max-width: 767px) {
  .bodywebsite .pb-left-column #image-block {
    width: 280px;
    margin: 0 auto;
  }
}
.bodywebsite .pb-left-column #image-block img {
  background: #fbfbfb;
  width: 100%;
}
.bodywebsite .pb-left-column #image-block #view_full_size .span_link {
  position: absolute;
  bottom: 20px;
  left: 50%;
  margin-left: -68px;
  display: block;
  padding: 10px 0;
  line-height: 22px;
  color: #777676;
  width: 136px;
  text-align: center;
  font-weight: 700;
  background: #ffffff80;
  -webkit-box-shadow: 0 2px 8px #00000029;
  -moz-box-shadow: 0 2px 8px #00000029;
  box-shadow: 0 2px 8px #00000029;
}
.bodywebsite .pb-left-column #image-block #view_full_size .span_link:after {
  font-family: fontawesome;
  color: silver;
  font-size: 20px;
  line-height: 22px;
  content: "\f00e";
  font-weight: 400;
  margin: 0 0 0 4px;
}
.bodywebsite .pb-left-column #image-block #view_full_size .span_link:hover:after {
  color: #333;
}
.bodywebsite .pb-left-column #image-block .sale-box {
  z-index: 1000;
}
.bodywebsite #thumbs_list {
  overflow: hidden;
  float: left;
  width: 392px;
}
@media (min-width: 992px) and (max-width: 1199px) {
  .bodywebsite #thumbs_list {
    width: 294px;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite #thumbs_list {
    width: 196px;
  }
}
@media (max-width: 767px) {
  .bodywebsite #thumbs_list {
    width: 196px;
  }
}
.bodywebsite #thumbs_list ul#thumbs_list_frame {
  list-style-type: none;
  padding-left: 0;
  overflow: hidden;
  height: 90px;
  width: 100%;
  display: grid;
  grid-template-columns: auto auto auto auto auto auto auto auto auto auto auto auto auto auto;
  grid-gap: 1px;
  flex: none;
}
.bodywebsite #thumbs_list li {
  float: left;
  height: 90px;
  width: 90px;
  cursor: pointer;
  border: 1px solid #dbdbdb;
  margin-right: 8px;
  line-height: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite #thumbs_list li {
    width: 90px;
    height: 90px;
  }
}
.bodywebsite #thumbs_list li:first-child {
  margin: 0 8px 0 0;
}
.bodywebsite #thumbs_list li.last {
  margin-right: 0;
}
.bodywebsite #thumbs_list li a {
  display: block;
  border: 3px solid #fff;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  background: #fbfbfb;
  height: 100%;
  background: #fff;
}
.bodywebsite #thumbs_list li a.shown,
.bodywebsite #thumbs_list li a:hover {
  border-color: #dbdbdb;
}
.bodywebsite #thumbs_list li img {
  border: 1px solid #fff;
  width: 100%;
  height: auto;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite #thumbs_list li img {
    width: 84px;
    height: auto;
  }
}
.bodywebsite span.view_scroll_spacer {
  float: left;
  width: 39px;
  padding-left: 12px;
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite span.view_scroll_spacer {
    padding-left: 6px;
    width: 28px;
  }
}
.bodywebsite #view_scroll_left,
.bodywebsite #view_scroll_right {
  margin-top: 38px;
  height: 20px;
  width: 20px;
  line-height: 0;
  font-size: 0;
  overflow: hidden;
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite #view_scroll_left,
  .bodywebsite #view_scroll_right {
    margin-top: 28px;
  }
}
.bodywebsite #view_scroll_left:before,
.bodywebsite #view_scroll_right:before {
  padding-left: 2px;
  color: silver;
  font-family: fontawesome;
  font-size: 20px;
  line-height: 22px;
}
.bodywebsite #view_scroll_left:hover:before,
.bodywebsite #view_scroll_right:hover:before {
  color: #333;
}
.bodywebsite #view_scroll_right {
  float: left;
}
.bodywebsite #view_scroll_right:before {
  content: "\f138";
}
.bodywebsite #view_scroll_left {
  margin-top: 0;
}
.bodywebsite #view_scroll_left:before {
  content: "\f137";
  padding-right: 2px;
}
.bodywebsite .resetimg {
  padding: 10px 0 0;
}
.bodywebsite .view_scroll_spacer {
  margin-top: 38px;
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite .view_scroll_spacer {
    margin-top: 28px;
  }
}
.bodywebsite #usefull_link_block {
  list-style-type: none;
}
.bodywebsite #usefull_link_block li {
  margin: 0 0 8px;
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite #usefull_link_block li {
    float: none !important;
  }
}
.bodywebsite #usefull_link_block li:first-child {
  margin: 0 0 8px;
  border: none;
  padding: 0;
}
.bodywebsite #usefull_link_block li a {
  color: #777676;
  font-weight: 700;
  position: relative;
  padding-left: 30px;
  line-height: 22px;
  display: inline-block;
}
.bodywebsite #usefull_link_block li a:before {
  font-family: fontawesome;
  color: #333;
  font-size: 19px;
  line-height: 24px;
  position: absolute;
  top: -2px;
  left: 0;
  font-weight: 400;
}
.bodywebsite #usefull_link_block li a:hover {
  color: #000;
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite #usefull_link_block li.print {
    margin: 8px 0 0;
    padding: 0;
    border: none;
  }
}
.bodywebsite #usefull_link_block li.print a:before {
  content: "\f02f";
}
.bodywebsite #usefull_link_block li#left_share_fb {
  clear: both;
  float: none;
}
.bodywebsite #usefull_link_block li#left_share_fb a {
  padding-left: 18px;
}
.bodywebsite #usefull_link_block li#left_share_fb a:before {
  content: "\f09a";
}
.bodywebsite .pb-center-column {
  margin-bottom: 30px;
}
.bodywebsite .pb-center-column h1 {
  font-size: 20px;
  color: #3a3939;
  padding-left: 0;
  padding-top: 0;
}
.bodywebsite .pb-center-column p {
  margin-bottom: 10px;
}
.bodywebsite .pb-center-column #product_reference {
  margin-bottom: 6px;
}
.bodywebsite .pb-center-column #product_reference span {
  font-weight: 700;
  color: #333;
}
.bodywebsite .pb-center-column #short_description_block {
  color: #666;
}
.bodywebsite .pb-center-column #short_description_block .buttons_bottom_block {
  display: none;
}
.bodywebsite .pb-center-column #short_description_block #short_description_content {
  padding: 0 0 15px;
  word-wrap: break-word;
}
.bodywebsite .pb-center-column #short_description_block #short_description_content p {
  line-height: 18px;
}
.bodywebsite #page .rte {
  padding: 0 20px 20px;
  word-wrap: break-word;
}
.bodywebsite #page .rte p {
  margin-bottom: 1em;
  min-height: 1px;
}
.bodywebsite .box-cart-bottom,
.bodywebsite .product_attributes {
  -webkit-box-shadow: inset 0 6px 6px #0000000d;
  -moz-box-shadow: inset 0 6px 6px #0000000d;
  box-shadow: inset 0 6px 6px #0000000d;
  padding: 19px 19px 17px;
  text-align: center;
}
.bodywebsite .box-cart-bottom {
  padding: 0;
}
.bodywebsite .page-product-box a {
  color: #333;
  text-decoration: underline;
}
.bodywebsite .page-product-box a.btn {
  text-decoration: none;
}
.bodywebsite .box-info-product {
  background: #f6f6f6;
  border: 1px solid #d2d0d0;
  border-top: 1px solid #b0afaf;
  border-bottom: 1px solid #b0afaf;
  margin-bottom: 30px;
}
.bodywebsite .box-info-product p {
  margin-bottom: 7px;
}
.bodywebsite .box-info-product .exclusive {
  padding: 0;
  border-top: 1px solid #0079b6;
  border-right: 1px solid #006fa8;
  border-left: 1px solid #006fa8;
  border-bottom: 1px solid #012740;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  position: relative;
  display: block;
  background-image: -webkit-gradient(linear, 50% 0, 50% 100%, color-stop(0, #009ad0), color-stop(100%, #007ab7));
  background-image: -webkit-linear-gradient(#009ad0, #007ab7);
  background-image: -moz-linear-gradient(#009ad0, #007ab7);
  background-image: -o-linear-gradient(#009ad0, #007ab7);
  background-image: linear-gradient(#009ad0, #007ab7);
}
.bodywebsite .box-info-product .exclusive:before {
  font-family: fontawesome;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  color: #fff;
  font-size: 25px;
  line-height: 47px;
  text-shadow: 0 1px #015883;
  content: "\f07a";
  z-index: 2;
  width: 51px;
  text-align: center;
  border: 1px solid #06b2e6;
  -webkit-border-radius: 5px 0 0 5px;
  -moz-border-radius: 5px 0 0 5px;
  -ms-border-radius: 5px 0 0 5px;
  -o-border-radius: 5px 0 0 5px;
  border-radius: 5px 0 0 5px;
}
@media (max-width: 991px) {
  .bodywebsite .box-info-product .exclusive:before {
    display: none;
  }
}
.bodywebsite .box-info-product .exclusive:after {
  background: url(https://www.dolistore.com/themes/dolibarr-bootstrap/img/border-1.gif) repeat-y 0 0;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 51px;
  content: "";
  width: 1px;
  z-index: 2;
}
@media (max-width: 991px) {
  .bodywebsite .box-info-product .exclusive:after {
    display: none;
  }
}
.bodywebsite .box-info-product .exclusive span {
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  font-weight: 700;
  font-size: 20px;
  line-height: 22px;
  border-top: 1px solid #06b2e6;
  border-right: 1px solid #06b2e6;
  border-left: 1px solid #06b2e6;
  border-bottom: 1px solid #06b2e6;
  text-shadow: 0 1px #015883;
  padding: 12px 36px 14px 60px;
  color: #fff;
  display: block!important;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
@media (max-width: 1199px) {
  .bodywebsite .box-info-product .exclusive span {
    padding: 12px 22px 14px 55px;
    font-size: 14px;
  }
}
@media (max-width: 991px) {
  .bodywebsite .box-info-product .exclusive span {
    padding: 8px 12px 10px;
    text-align: left;
  }
}
.bodywebsite .box-info-product .exclusive:hover {
  background-image: -webkit-gradient(linear, 50% 0, 50% 100%, color-stop(0, #007ab7), color-stop(100%, #009ad0));
  background-image: -webkit-linear-gradient(#007ab7, #009ad0);
  background-image: -moz-linear-gradient(#007ab7, #009ad0);
  background-image: -o-linear-gradient(#007ab7, #009ad0);
  background-image: linear-gradient(#007ab7, #009ad0);
  background-position: 0 0;
}
.bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product {
  background: #f6f6f6;
  border: 1px solid #d2d0d0;
  border-top: 1px solid #b0afaf;
  border-bottom: 1px solid #b0afaf;
}
.bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product p {
  margin-bottom: 7px;
  padding: 15px 10px 0;
}
.bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive {
  padding: 0;
  border-top: 1px solid #0079b6;
  border-right: 1px solid #006fa8;
  border-left: 1px solid #006fa8;
  border-bottom: 1px solid #012740;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  position: relative;
  display: block;
  background-image: -webkit-gradient(linear, 50% 0, 50% 100%, color-stop(0, #009ad0), color-stop(100%, #007ab7));
  background-image: -webkit-linear-gradient(#009ad0, #007ab7);
  background-image: -moz-linear-gradient(#009ad0, #007ab7);
  background-image: -o-linear-gradient(#009ad0, #007ab7);
  background-image: linear-gradient(#009ad0, #007ab7);
}
.bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive:before {
  font-family: fontawesome;
  position: relative;
  top: 0;
  left: 0;
  bottom: 0;
  color: #fff;
  font-size: 25px;
  line-height: 47px;
  text-shadow: 0 1px #015883;
  content: "\f07a";
  z-index: 2;
  width: 51px;
  text-align: center;
  border: none;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  -o-border-radius: 0;
  border-radius: 0;
}
@media (max-width: 991px) {
  .bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive:before {
    display: none;
  }
}
.bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive:after {
  background: 0 0;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 51px;
  content: "";
  width: 1px;
  z-index: 2;
}
@media (max-width: 991px) {
  .bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive:after {
    display: none;
  }
}
.bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive span {
  font-weight: 500;
  font-size: 18px;
  line-height: 22px;
  border: none;
  border-top: 1px solid #006fa8;
  text-shadow: 0 1px #015883;
  padding: 12px 16px 14px;
  color: #fff;
  display: block!important;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  -o-border-radius: 0;
  border-radius: 0;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
@media (max-width: 1199px) {
  .bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive span {
    font-size: 16px;
  }
}
@media (max-width: 991px) {
  .bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive span {
    padding: 8px 12px 10px;
    text-align: center;
  }
}
.bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive:hover {
  background-image: -webkit-gradient(linear, 50% 0, 50% 100%, color-stop(0, #007ab7), color-stop(100%, #009ad0));
  background-image: -webkit-linear-gradient(#007ab7, #009ad0);
  background-image: -moz-linear-gradient(#007ab7, #009ad0);
  background-image: -o-linear-gradient(#007ab7, #009ad0);
  background-image: linear-gradient(#007ab7, #009ad0);
  background-position: 0 0;
}
.bodywebsite #quantity_wanted_p input {
  width: 100%;
  height: 26px;
  padding: 0 6px;
  float: left;
  border: 1px solid #d6d4d4;
  line-height: 27px;
  margin-top: 3px;
  text-align: center;
}
.bodywebsite .icon-cart-plus::before {
  content: "\f07a";
}
.bodywebsite #quantity_wanted_p .btn {
  float: left;
  margin-left: 0px;
  margin-top: 3px;
  width: 50%;
  text-align: center;
}
.bodywebsite #quantity_wanted_p label {
  display: block;
  margin-bottom: 7px;
}
.bodywebsite #availability_date_label {
  display: inline-block;
  width: 125px;
  font-weight: 700;
  font-size: 12px;
  text-align: right;
}
.bodywebsite .content_prices {
  padding: 10px 0px !important;
  text-align: center;
}
.bodywebsite .our_price_display {
  font-weight: 600;
  font-size: 18px;
  line-height: 22px;
  font-family: open sans, sans-serif;
  color: #333;
}
@media (max-width: 991px) {
  .bodywebsite .our_price_display {
    font-size: 18px;
    line-height: 22px;
  }
}
.bodywebsite #old_price {
  padding-bottom: 15px;
  font-size: 17px;
  text-decoration: line-through;
  display: inline-block;
  font-family: open sans, sans-serif;
  line-height: 23px;
}
.bodywebsite #reduction_amount,
.bodywebsite #reduction_percent {
  display: inline-block;
  margin-right: 10px;
  padding: 1px 2px;
  font-weight: 600;
  font-family: open sans, sans-serif;
  font-size: 21px;
  line-height: 23px;
  color: #fff;
  background: #f13340;
  border: 1px solid #d02a2c;
}
.bodywebsite #reduction_amount span,
.bodywebsite #reduction_percent span {
  display: block;
}
.bodywebsite .buttons_bottom_block {
  clear: both;
  padding: 13px 0 0;
}
.bodywebsite #categories_block_left .block_content > ul {
  border-top: 1px solid #d6d4d4;
}
.bodywebsite #categories_block_left li {
  position: relative;
}
.bodywebsite #categories_block_left li a {
  font-weight: 700;
  color: #333;
  display: block;
  font-size: 13px;
  line-height: 30px;
  padding: 0 30px 0 19px;
  border-bottom: 1px solid #d6d4d4;
}
.bodywebsite #categories_block_left li a.selected,
.bodywebsite #categories_block_left li a:hover {
  background: #f6f6f6;
}
.bodywebsite #categories_block_left li li a {
  font-weight: 400;
  color: #777;
}
.bodywebsite #categories_block_left li li a:before {
  content: "\f105";
  font-family: fontawesome;
  line-height: 29px;
  padding-right: 8px;
}
.bodywebsite #footer #newsletter_block_left {
  overflow: hidden;
  width: 50%;
  float: left;
  padding: 13px 15px 7px;
  margin-bottom: 0;
}
@media (max-width: 767px) {
  .bodywebsite #footer #newsletter_block_left {
    width: 100%;
  }
}
.bodywebsite #footer #newsletter_block_left h4 {
  background: 0 0;
  float: left;
  padding: 7px 16px 5px 0;
  text-transform: none;
  font-size: 21px;
  line-height: 25px;
  border: none;
}
.bodywebsite #footer #newsletter_block_left .form-group {
  margin-bottom: 0;
}
.bodywebsite #footer #newsletter_block_left .form-group .form-control {
  height: 45px;
  line-height: 30px;
  max-width: 267px;
  background: #3c3c3c;
  border-color: #515151;
  color: #fff;
  padding: 5px 43px 5px 12px;
  display: inline-block;
  float: left;
}
.bodywebsite #footer #newsletter_block_left .form-group .form-control:focus {
  -webkit-box-shadow: #000 0 0 0;
  -moz-box-shadow: #000 0 0 0;
  box-shadow: #000 0 0 0;
}
.bodywebsite #footer #newsletter_block_left .form-group .button-small {
  margin-left: -43px;
  border: none;
  background: 0 0;
  text-align: center;
  color: #908f8f;
  padding: 8px;
}
.bodywebsite #footer #newsletter_block_left .form-group .button-small:before {
  content: "\f138";
  font-family: fontawesome;
  font-size: 28px;
  line-height: 28px;
}
.bodywebsite #footer #newsletter_block_left .form-group .button-small:hover {
  color: #fff !important;
}
.bodywebsite #footer #newsletter_block_left .newsletter-input {
  max-width: 300px !important;
}
.bodywebsite #search_block_top {
  padding-top: 30px;
}
.bodywebsite #search_block_top #searchbox {
  float: left;
  width: 100%;
}
.bodywebsite #search_block_top .btn.button-search {
  background: #333;
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  border: none;
  color: #fff;
  width: 50px;
  text-align: center;
  padding: 10px 0 11px;
}
.bodywebsite #search_block_top .btn.button-search:before {
  content: "\f002";
  display: block;
  font-family: fontawesome;
  font-size: 17px;
  width: 100%;
  text-align: center;
}
.bodywebsite #search_block_top .btn.button-search:hover {
  color: #6f6f6f;
}
.bodywebsite #search_block_top #search_query_top {
  display: inline;
  padding: 0 13px;
  height: 45px;
  line-height: 45px;
  background: #fbfbfb;
  margin-right: 1px;
}
.bodywebsite form#searchbox {
  position: relative;
}
.bodywebsite .tags_block .block_content a {
  display: inline-block;
  font-size: 13px;
  line-height: 16px;
  font-weight: 700;
  padding: 4px 9px 5px;
  border: 1px solid #d6d4d4;
  float: left;
  margin: 0 3px 3px 0;
}
.bodywebsite .tags_block .block_content a:hover {
  color: #333;
  background: #f6f6f6;
}
.bodywebsite #viewed-products_block_left li.last_item {
  padding-bottom: 0;
  margin-bottom: 0;
  border-bottom: none;
}
.bodywebsite body {
  background: #282828;
}
.bodywebsite #header #languages-block-top {
  border-color: #515151;
}
.bodywebsite #header #languages-block-top div.current:hover {
  background: #2b2b2b;
  color: #fff;
}
.bodywebsite #header #search_block_top .btn.button-search {
  background: #eea200;
  text-shadow: 0 1px #b57b00;
}
.bodywebsite #header #search_block_top .btn.button-search:hover {
  color: #fff;
  background: #333;
  text-shadow: 0 1px #333;
}
.bodywebsite #header #search_block_top #search_query_top {
  border-color: #e2dec8;
  background: #f8f8f8a1;
  color: #686666;
}
.bodywebsite .sale-label:after,
.bodywebsite .sale-label:before {
  border-color: #eea200 transparent transparent;
}
.bodywebsite .price-percent-reduction {
  background: #eea200;
  border-color: #eea200;
}
.bodywebsite .price {
  color: #eea200;
}
.bodywebsite .old-price {
  color: #b1b0b0;
}
.bodywebsite .footer-container {
  background: #3f3f3f;
}
.bodywebsite #footer #newsletter_block_left h4:after,
.bodywebsite #footer #newsletter_block_left .form-group .button-small span,
.bodywebsite #search_block_top .btn.button-search span {
  display: none;
}
.bodywebsite #footer #newsletter_block_left .block_content,
.bodywebsite .tags_block .block_content {
  overflow: hidden;
}
.bodywebsite #header #languages-block-top div.current,
.bodywebsite #header #languages-block-top div.current:after {
  color: #fff;
}
.bodywebsite #header #languages-block-top ul li.selected,
.bodywebsite #header #languages-block-top ul li:hover a,
.bodywebsite .sale-label {
  background: #eea200;
}
@media (min-width: 768px) {
  .bodywebsite .footer-container {
    /*background: url(https://www.dolistore.com/modules/themeconfigurator/img/footer-bg.png) repeat-x;*/
    background-color: #3f3f3f !important;
  }
}
.bodywebsite #footer #newsletter_block_left .form-group .form-control {
  background: #3c3c3c;
}
.bodywebsite #footer #newsletter_block_left .form-group .button-small {
  color: #fff;
}
.bodywebsite #footer #newsletter_block_left .form-group .button-small:hover {
  color: #eea200;
}
.bodywebsite h1,
.bodywebsite h2,
.bodywebsite h3,
.bodywebsite h4,
.bodywebsite h5 {
  font-family: open sans, sans-serif !important;
}
.bodywebsite .header_user_info {
  float: right;
  border-left: 1px solid #515151;
  border-right: 1px solid #515151;
}
.bodywebsite .header_user_info a {
  color: #fff;
  font-weight: 700;
  display: block;
  padding: 8px 9px 11px 8px;
  cursor: pointer;
  line-height: 18px;
}
@media (max-width: 479px) {
  .bodywebsite .header_user_info a {
    font-size: 11px;
  }
}
.bodywebsite .header_user_info a:hover {
  background: #2b2b2b;
}
.bodywebsite #languages-block-top div.current {
  font-weight: 700;
  padding: 8px 10px 10px;
  line-height: 18px;
  color: #fff;
  text-shadow: 1px 1px #0003;
  cursor: pointer;
}
@media (max-width: 479px) {
  .bodywebsite #languages-block-top div.current {
    text-align: center;
    padding: 9px 5px 10px;
    font-size: 11px;
  }
}
.bodywebsite #languages-block-top div.current:after {
  content: "\f0d7";
  font-family: fontawesome;
  font-size: 18px;
  line-height: 18px;
  color: #686666;
  vertical-align: -2px;
  padding-left: 12px;
}
@media (max-width: 479px) {
  .bodywebsite #languages-block-top div.current:after {
    padding-left: 2px;
    font-size: 13px;
    line-height: 13px;
    vertical-align: 0;
  }
}
.bodywebsite #languages-block-top ul {
  display: none;
  position: absolute;
  top: 37px;
  left: 0;
  width: 157px;
  background: #333;
  z-index: 2;
}
.bodywebsite #languages-block-top ul li {
  color: #fff;
  line-height: 35px;
  font-size: 13px;
}
.bodywebsite #languages-block-top ul li a,
.bodywebsite #languages-block-top ul li > span {
  padding: 0 10px 0 12px;
  display: block;
  color: #fff;
}
.bodywebsite #languages-block-top ul li.selected,
.bodywebsite #languages-block-top ul li:hover a {
  background: #484848;
}
.bodywebsite #header .shopping_cart {
  position: relative;
  float: right;
  padding-top: 30px;
}
.bodywebsite .shopping_cart {
  width: 270px;
}
@media (max-width: 480px) {
  .bodywebsite .shopping_cart {
    padding-top: 20px;
  }
}
@media (max-width: 1200px) {
  .bodywebsite .shopping_cart {
    margin: 0 auto;
    float: none;
    width: 100%;
  }
}
.bodywebsite .shopping_cart > a:first-child {
  padding: 7px 10px 14px 16px;
  background: #333;
  display: block;
  font-weight: 700;
  color: #777;
  text-shadow: 1px 1px #0003;
  overflow: hidden;
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite .shopping_cart > a:first-child span.ajax_cart_product_txt,
  .bodywebsite .shopping_cart > a:first-child span.ajax_cart_product_txt_s {
    display: none !important;
  }
}
.bodywebsite .shopping_cart > a:first-child b {
  color: #fff;
  font: 600 18px/22px "Open Sans", sans-serif;
  padding-right: 5px;
}
.bodywebsite .shopping_cart > a:first-child:before {
  content: "\f07a";
  font-family: fontawesome;
  display: inline-block;
  font-size: 23px;
  line-height: 23px;
  color: #fff;
  padding-right: 15px;
}
.bodywebsite .shopping_cart .ajax_cart_total {
  display: none !important;
}
.bodywebsite .cart_block .cart_block_no_products {
  margin: 0;
  padding: 10px 20px;
}
.bodywebsite .cart_block .cart-prices {
  border-top: 1px solid #d6d4d4;
  font-weight: 700;
  padding: 10px 20px 22px;
}
.bodywebsite .cart_block .cart-prices .cart-prices-line {
  overflow: hidden;
  border-bottom: 1px solid #515151;
  padding: 7px 0;
}
.bodywebsite .cart_block .cart-prices .cart-prices-line.last-line {
  border: none;
}
.bodywebsite .cart_block .cart-buttons {
  overflow: hidden;
  padding: 20px 20px 10px;
  margin: 0;
  background: #f6f6f6;
}
.bodywebsite .cart_block .cart-buttons a {
  width: 100%;
  float: left;
  text-align: center;
  margin-bottom: 10px;
  margin-right: 10px;
}
.bodywebsite .cart_block .cart-buttons a#button_order_cart {
  margin-right: 0;
  border: none;
}
.bodywebsite .cart_block .cart-buttons a#button_order_cart span {
  padding: 7px 0;
  font-size: 1.1em;
  border: solid 1px #63c473;
  background: #43b155;
}
.bodywebsite .cart_block .cart-buttons a#button_order_cart:hover span {
  border: solid 1px #358c43;
  background: #2e7a3a;
  color: #fff;
}
.bodywebsite #header .cart_block {
  position: absolute;
  top: 95px;
  right: 0;
  z-index: 100;
  display: none;
  height: auto;
  background: #484848;
  color: #fff;
  width: 270px;
}
@media (max-width: 480px) {
  .bodywebsite #header .cart_block {
    width: 100%;
  }
}
@media (max-width: 1200px) {
  .bodywebsite #header .cart_block {
    width: 100%;
  }
}
.bodywebsite #header .cart_block a:hover {
  color: #9c9b9b;
}
.bodywebsite #header .cart_block .cart-prices {
  border: none;
  background: url(https://www.dolistore.com/themes/dolibarr-bootstrap/img/cart-shadow.png) repeat-x #3d3d3d;
}
.bodywebsite #header .cart_block .cart-buttons {
  background: url(https://www.dolistore.com/themes/dolibarr-bootstrap/img/cart-shadow.png) repeat-x #333;
}
.bodywebsite #header .block_content {
  margin-bottom: 0;
}
.bodywebsite .cart_block .cart_block_shipping_cost,
.bodywebsite .cart_block .cart_block_tax_cost,
.bodywebsite .cart_block .cart_block_total {
  float: right;
}
.bodywebsite .layer_cart_overlay {
  background-color: #000;
  display: none;
  height: 100%;
  left: 0;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 98;
  opacity: 0.2;
}
.bodywebsite #layer_cart {
  background-color: #fff;
  position: absolute;
  display: none;
  z-index: 99;
  width: 84%;
  margin-right: 8%;
  margin-left: 8%;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  -o-border-radius: 4px;
  border-radius: 4px;
}
.bodywebsite #layer_cart .layer_cart_product h2 {
  font: 400 23px/29px Arial, Helvetica, sans-serif;
  color: #46a74e;
  margin-bottom: 22px;
  padding-right: 100px;
}
.bodywebsite #header .cart_block a,
.bodywebsite #header .cart_block .price {
  color: #fff;
}
@media (max-width: 767px) {
  .bodywebsite #layer_cart .layer_cart_product h2 {
    font-size: 18px;
    padding-right: 0;
    line-height: normal;
  }
}
.bodywebsite #layer_cart .layer_cart_product h2 i {
  font-size: 30px;
  line-height: 30px;
  float: left;
  padding-right: 8px;
}
@media (max-width: 767px) {
  .bodywebsite #layer_cart .layer_cart_product h2 i {
    font-size: 22px;
    line-height: 22px;
  }
}
.bodywebsite #layer_cart .layer_cart_product .product-image-container {
  max-width: 178px;
  border: 1px solid #d6d4d4;
  padding: 5px;
  float: left;
  margin-right: 30px;
}
@media (max-width: 480px) {
  .bodywebsite #layer_cart .layer_cart_product .product-image-container {
    float: none;
    margin-right: 0;
    margin-bottom: 10px;
  }
}
.bodywebsite #layer_cart .layer_cart_product .layer_cart_product_info {
  padding: 38px 0 0;
}
.bodywebsite #layer_cart .layer_cart_product .layer_cart_product_info #layer_cart_product_title {
  display: block;
  padding-bottom: 8px;
}
.bodywebsite #layer_cart .layer_cart_product .layer_cart_product_info > div {
  padding-bottom: 7px;
}
.bodywebsite #layer_cart .layer_cart_product .layer_cart_product_info > div strong {
  padding-right: 3px;
}
.bodywebsite #layer_cart .layer_cart_cart {
  background: #fafafa;
  border-left: 1px solid #d6d4d4;
  padding: 21px 30px 170px;
  -webkit-border-radius: 0 4px 4px 0;
  -moz-border-radius: 0 4px 4px 0;
  -ms-border-radius: 0 4px 4px 0;
  -o-border-radius: 0 4px 4px 0;
  border-radius: 0 4px 4px 0;
  position: relative;
}
@media (min-width: 1200px) {
  .bodywebsite #layer_cart .layer_cart_cart {
    min-height: 318px;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .bodywebsite #layer_cart .layer_cart_cart {
    min-height: 360px;
  }
}
@media (max-width: 991px) {
  .bodywebsite #layer_cart .layer_cart_cart {
    border-left: none;
    border-top: 1px solid #d6d4d4;
  }
}
.bodywebsite #layer_cart .layer_cart_cart h2 {
  font: 400 23px/29px Arial, Helvetica, sans-serif;
  color: #333;
  border-bottom: 1px solid #d6d4d4;
  padding-bottom: 13px;
  margin-bottom: 17px;
}
@media (max-width: 767px) {
  .bodywebsite #layer_cart .layer_cart_cart h2 {
    font-size: 18px;
  }
}
.bodywebsite #layer_cart .layer_cart_cart .layer_cart_row {
  padding: 0 0 7px;
}
.bodywebsite #layer_cart .layer_cart_cart .button-container {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 0 30px 20px;
}
.bodywebsite #layer_cart .layer_cart_cart .button-container .btn {
  margin-bottom: 10px;
}
.bodywebsite #layer_cart .layer_cart_cart .button-container span.exclusive-medium {
  margin-right: 5px;
}
.bodywebsite #layer_cart .layer_cart_cart .button-container span.exclusive-medium i {
  padding-right: 5px;
  color: #777;
}
.bodywebsite #layer_cart .cross {
  position: absolute;
  right: 7px;
  top: 15px;
  width: 25px;
  height: 25px;
  cursor: pointer;
  color: #333;
  z-index: 2;
}
.bodywebsite #layer_cart .cross:before {
  content: "\f057";
  display: block;
  font-family: fontawesome;
  font-size: 25px;
  line-height: 25px;
}
.bodywebsite #layer_cart .cross:hover {
  color: #515151;
}
.bodywebsite #layer_cart .continue {
  cursor: pointer;
}
.bodywebsite .info-table-box {
  padding: 14px 20px 17px !important;
  margin: 0 0 20px;
  border: 1px solid #d6d4d4;
  background: #fbfbfb;
  border-bottom-width: 3px;
}
.bodywebsite .info-table-box tbody tr td{
  padding: 12px 20px !important;
}
.bodywebsite .info-list-box li b::before {
  content: "\f14a";
  font-family: fontawesome;
  padding-right: 8px;
  font-size: 12px;
  font-weight: lighter;
  color: #888;
  line-height: 24px;
}
.bodywebsite .info-list-box {
  padding-left: 15px;
}
.bodywebsite .info-list-box li {
  margin-bottom: 3px !important;
}
.bodywebsite .info-table-box tbody tr td{
  vertical-align: top !important;
  padding: 5px 0 0px 0 !important;
}
.bodywebsite .content_scene_cat {
  border-top: 5px solid #333333;
  color: #d7d7d7;
  line-height: 19px;
  margin: 0 0 26px 0;
}
.bodywebsite .content_scene_cat .content_scene_cat_bg {
  padding: 18px 10px 10px 42px;
  background-color: #464646 !important;
}
@media (max-width: 1199px) {
  .bodywebsite .content_scene_cat .content_scene_cat_bg {
    padding: 10px 10px 10px 15px;
  }
}
.bodywebsite .content_scene_cat span.category-name {
  font: 600 42px/51px "Open Sans", sans-serif;
  color: white;
  margin-bottom: 12px;
}
@media (max-width: 1199px) {
  .bodywebsite .content_scene_cat span.category-name {
    font-size: 25px;
    line-height: 30px;
  }
}
.bodywebsite .content_scene_cat p {
  margin-bottom: 0;
}
.bodywebsite .content_scene_cat a {
  color: white;
}
.bodywebsite .content_scene_cat a:hover {
  text-decoration: underline;
}
.bodywebsite .content_scene_cat .content_scene {
  color: #777777;
}
.bodywebsite .content_scene_cat .content_scene .cat_desc {
  padding-top: 20px;
}
.bodywebsite .content_scene_cat .content_scene .cat_desc a {
  color: #777777;
}
.bodywebsite .content_scene_cat .content_scene .cat_desc a:hover {
  color: #515151;
}
.bodywebsite .page-heading {
  font: 600 18px/22px "Open Sans", sans-serif;
  color: #555454;
  text-transform: uppercase;
  padding: 0 0 17px 0;
  margin-bottom: 30px;
  border-bottom: 1px solid #d6d4d4;
  overflow: hidden;
}
.bodywebsite .page-heading span.heading-counter {
  font: bold 13px/22px Arial, Helvetica, sans-serif;
  float: right;
  color: #333333;
  text-transform: none;
  margin-bottom: 10px;
}
@media (max-width: 480px) {
  .bodywebsite .page-heading span.heading-counter {
    float: none;
    display: block;
    padding-top: 5px;
  }
}
.bodywebsite .page-heading span.lighter {
  color: #9c9c9c;
}
.bodywebsite .page-heading.bottom-indent {
  margin-bottom: 16px;
}
.bodywebsite .page-heading.product-listing {
  border-bottom: none;
  margin-bottom: 0;
  padding: 0px;
}
.bodywebsite .content_sortPagiBar .sortPagiBar {
  border-bottom: 1px solid #d6d4d4;
  clear: both;
}
.bodywebsite .content_sortPagiBar .sortPagiBar #productsSortForm {
  float: left;
  margin-right: 20px;
  margin-bottom: 10px;
}
.bodywebsite .content_sortPagiBar .sortPagiBar #productsSortForm select {
  max-width: 192px;
  float: left;
}
@media (max-width: 991px) {
  .bodywebsite .content_sortPagiBar .sortPagiBar #productsSortForm select {
    max-width: 160px;
  }
}
.bodywebsite .content_sortPagiBar .sortPagiBar #productsSortForm .selector {
  float: left;
}
.bodywebsite .content_sortPagiBar .sortPagiBar .nbrItemPage {
  float: left;
}
.bodywebsite .content_sortPagiBar .sortPagiBar .nbrItemPage select {
  max-width: 59px;
  float: left;
}
.bodywebsite .content_sortPagiBar .sortPagiBar .nbrItemPage .clearfix > span {
  padding: 3px 0 0 12px;
  display: inline-block;
  float: left;
}
.bodywebsite .content_sortPagiBar .sortPagiBar .nbrItemPage #uniform-nb_item {
  float: left;
}
.bodywebsite .content_sortPagiBar .sortPagiBar label,
.bodywebsite .content_sortPagiBar .sortPagiBar select {
  float: left;
}
.bodywebsite .content_sortPagiBar .sortPagiBar label {
  padding: 3px 6px 0 0;
}
.bodywebsite .content_sortPagiBar .sortPagiBar.instant_search #productsSortForm {
  display: none;
}
.bodywebsite .content_sortPagiBar .display,
.bodywebsite .content_sortPagiBar .display_m {
  float: right;
  margin-top: -4px;
}
.bodywebsite .content_sortPagiBar .display li,
.bodywebsite .content_sortPagiBar .display_m li {
  float: left;
  padding-left: 12px;
  text-align: center;
}
.bodywebsite .content_sortPagiBar .display li a,
.bodywebsite .content_sortPagiBar .display_m li a {
  color: gray;
  font-size: 11px;
  line-height: 14px;
  cursor: pointer;
}
.bodywebsite .content_sortPagiBar .display li a i,
.bodywebsite .content_sortPagiBar .display_m li a i {
  display: block;
  font-size: 24px;
  height: 24px;
  line-height: 24px;
  margin-bottom: -3px;
  color: #e1e0e0;
}
.bodywebsite .content_sortPagiBar .display li a:hover i,
.bodywebsite .content_sortPagiBar .display_m li a:hover i {
  color: gray;
}
.bodywebsite .content_sortPagiBar .display li.selected a,
.bodywebsite .content_sortPagiBar .display_m li.selected a {
  cursor: default;
}
.bodywebsite .content_sortPagiBar .display li.selected i,
.bodywebsite .content_sortPagiBar .display_m li.selected i {
  color: #333333;
}
.bodywebsite .content_sortPagiBar .display li.display-title,
.bodywebsite .content_sortPagiBar .display_m li.display-title {
  font-weight: bold;
  color: #333333;
  padding: 7px 6px 0 0;
}
.bodywebsite .top-pagination-content,
.bodywebsite .bottom-pagination-content {
  text-align: center;
  padding: 12px 0 12px 0;
  position: relative;
}
.bodywebsite .top-pagination-content div.pagination,
.bodywebsite .bottom-pagination-content div.pagination {
  margin: 0;
  float: right;
  width: 530px;
  text-align: center;
}
@media (min-width: 992px) and (max-width: 1199px) {
  .bodywebsite .top-pagination-content div.pagination,
  .bodywebsite .bottom-pagination-content div.pagination {
    width: 380px;
  }
}
@media (max-width: 991px) {
  .bodywebsite .top-pagination-content div.pagination,
  .bodywebsite .bottom-pagination-content div.pagination {
    float: left;
    width: auto;
  }
}
.bodywebsite .top-pagination-content div.pagination .showall,
.bodywebsite .bottom-pagination-content div.pagination .showall {
  float: right;
  margin: 8px 0px 8px 14px;
}
@media (min-width: 992px) and (max-width: 1199px) {
  .bodywebsite .top-pagination-content div.pagination .showall,
  .bodywebsite .bottom-pagination-content div.pagination .showall {
    margin-right: 11px;
  }
}
@media (max-width: 991px) {
  .bodywebsite .top-pagination-content div.pagination .showall,
  .bodywebsite .bottom-pagination-content div.pagination .showall {
    margin-right: 0;
  }
}
.bodywebsite .top-pagination-content div.pagination .showall .btn span,
.bodywebsite .bottom-pagination-content div.pagination .showall .btn span {
  font-size: 13px;
  padding: 3px 5px 4px 5px;
  line-height: normal;
}
.bodywebsite .top-pagination-content ul.pagination,
.bodywebsite .bottom-pagination-content ul.pagination {
  margin: 8px 0 8px 0;
}
@media (max-width: 991px) {
  .bodywebsite .top-pagination-content ul.pagination,
  .bodywebsite .bottom-pagination-content ul.pagination {
    float: left;
  }
}
.bodywebsite .top-pagination-content ul.pagination li,
.bodywebsite .bottom-pagination-content ul.pagination li {
  display: inline-block;
  float: left;
}
.bodywebsite .top-pagination-content ul.pagination li > a,
.bodywebsite .top-pagination-content ul.pagination li > span,
.bodywebsite .bottom-pagination-content ul.pagination li > a,
.bodywebsite .bottom-pagination-content ul.pagination li > span {
  margin: 0 1px 0 0;
  padding: 0;
  font-weight: bold;
  border: 1px solid;
  border-color: #dfdede #d2d0d0 #b0afaf #d2d0d0;
  display: block;
}
.bodywebsite .top-pagination-content ul.pagination li > a span,
.bodywebsite .top-pagination-content ul.pagination li > span span,
.bodywebsite .bottom-pagination-content ul.pagination li > a span,
.bodywebsite .bottom-pagination-content ul.pagination li > span span {
  border: 1px solid white;
  padding: 2px 8px;
  display: block;
  background: url(https://www.dolistore.com/themes/dolibarr-bootstrap/img/pagination-li.gif) 0 0 repeat-x #fbfbfb;
}
.bodywebsite .top-pagination-content ul.pagination li > a:hover span,
.bodywebsite .bottom-pagination-content ul.pagination li > a:hover span {
  background: #f6f6f6;
}
.bodywebsite .top-pagination-content ul.pagination li.pagination_previous,
.bodywebsite .top-pagination-content ul.pagination li.pagination_next,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_next {
  color: #777676;
  font-weight: bold;
}
.bodywebsite .top-pagination-content ul.pagination li.pagination_previous > a,
.bodywebsite .top-pagination-content ul.pagination li.pagination_previous > span,
.bodywebsite .top-pagination-content ul.pagination li.pagination_next > a,
.bodywebsite .top-pagination-content ul.pagination li.pagination_next > span,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous > a,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous > span,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_next > a,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_next > span {
  border: none;
  background: none;
  display: block;
  padding: 4px 0;
}
@media (max-width: 767px) {
  .bodywebsite .top-pagination-content ul.pagination li.pagination_previous > a b,
  .bodywebsite .top-pagination-content ul.pagination li.pagination_previous > span b,
  .bodywebsite .top-pagination-content ul.pagination li.pagination_next > a b,
  .bodywebsite .top-pagination-content ul.pagination li.pagination_next > span b,
  .bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous > a b,
  .bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous > span b,
  .bodywebsite .bottom-pagination-content ul.pagination li.pagination_next > a b,
  .bodywebsite .bottom-pagination-content ul.pagination li.pagination_next > span b {
    display: none;
  }
}
.bodywebsite .top-pagination-content ul.pagination li.pagination_previous > a span,
.bodywebsite .top-pagination-content ul.pagination li.pagination_previous > span span,
.bodywebsite .top-pagination-content ul.pagination li.pagination_next > a span,
.bodywebsite .top-pagination-content ul.pagination li.pagination_next > span span,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous > a span,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous > span span,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_next > a span,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_next > span span {
  border: none;
  padding: 0;
  background: none;
}
.bodywebsite .top-pagination-content ul.pagination li.pagination_previous > a span b,
.bodywebsite .top-pagination-content ul.pagination li.pagination_previous > span span b,
.bodywebsite .top-pagination-content ul.pagination li.pagination_next > a span b,
.bodywebsite .top-pagination-content ul.pagination li.pagination_next > span span b,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous > a span b,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous > span span b,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_next > a span b,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_next > span span b {
  font-weight: bold;
}
.bodywebsite .top-pagination-content ul.pagination li.pagination_previous,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous {
  margin-right: 10px;
}
.bodywebsite .top-pagination-content ul.pagination li.pagination_next,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_next {
  margin-left: 10px;
}
.bodywebsite .top-pagination-content ul.pagination li.active > span,
.bodywebsite .bottom-pagination-content ul.pagination li.active > span {
  color: #333333;
  border-color: #dfdede #d2d0d0 #b0afaf #d2d0d0;
}
.bodywebsite .top-pagination-content ul.pagination li.active > span span,
.bodywebsite .bottom-pagination-content ul.pagination li.active > span span {
  background: #f6f6f6;
}
.bodywebsite .top-pagination-content .compare-form,
.bodywebsite .bottom-pagination-content .compare-form {
  float: right;
}
@media (max-width: 479px) {
  .bodywebsite .top-pagination-content .compare-form,
  .bodywebsite .bottom-pagination-content .compare-form {
    float: left;
    width: 100%;
    text-align: left;
    padding-bottom: 10px;
    clear: both;
  }
}
.bodywebsite .top-pagination-content .product-count,
.bodywebsite .bottom-pagination-content .product-count {
  padding: 11px 0 0 0;
  float: left;
}
@media (max-width: 991px) {
  .bodywebsite .top-pagination-content .product-count,
  .bodywebsite .bottom-pagination-content .product-count {
    clear: left;
  }
}
.bodywebsite .icon-th-large:before {
  content: "\f009";
}
.bodywebsite .icon-th-list::before {
  content: "\f00b";
}
.bodywebsite .col-xs-1,
.bodywebsite .col-xs-2,
.bodywebsite .col-xs-3,
.bodywebsite .col-xs-4,
.bodywebsite .col-xs-5,
.bodywebsite .col-xs-6,
.bodywebsite .col-xs-7,
.bodywebsite .col-xs-8,
.bodywebsite .col-xs-9,
.bodywebsite .col-xs-10,
.bodywebsite .col-xs-11,
.bodywebsite .col-xs-12,
.bodywebsite .col-sm-1,
.bodywebsite .col-sm-2,
.bodywebsite .col-sm-3,
.bodywebsite .col-sm-4,
.bodywebsite header .row #header_logo,
.bodywebsite .col-sm-5,
.bodywebsite .col-sm-6,
.bodywebsite .col-sm-7,
.bodywebsite .col-sm-8,
.bodywebsite .col-sm-9,
.bodywebsite .col-sm-10,
.bodywebsite .col-sm-11,
.bodywebsite .col-sm-12,
.bodywebsite .col-md-1,
.bodywebsite .col-md-2,
.bodywebsite .col-md-3,
.bodywebsite .col-md-4,
.bodywebsite .col-md-5,
.bodywebsite .col-md-6,
.bodywebsite .col-md-7,
.bodywebsite .col-md-8,
.bodywebsite .col-md-9,
.bodywebsite .col-md-10,
.bodywebsite .col-md-11,
.bodywebsite .col-md-12,
.bodywebsite .col-lg-1,
.bodywebsite .col-lg-2,
.bodywebsite .col-lg-3,
.bodywebsite .col-lg-4,
.bodywebsite .col-lg-5,
.bodywebsite .col-lg-6,
.bodywebsite .col-lg-7,
.bodywebsite .col-lg-8,
.bodywebsite .col-lg-9,
.bodywebsite .col-lg-10,
.bodywebsite .col-lg-11,
.bodywebsite .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-left: 15px;
  padding-right: 15px;
}
.bodywebsite .col-xs-1,
.bodywebsite .col-xs-2,
.bodywebsite .col-xs-3,
.bodywebsite .col-xs-4,
.bodywebsite .col-xs-5,
.bodywebsite .col-xs-6,
.bodywebsite .col-xs-7,
.bodywebsite .col-xs-8,
.bodywebsite .col-xs-9,
.bodywebsite .col-xs-10,
.bodywebsite .col-xs-11 {
  float: left;
}
.bodywebsite .col-xs-1 {
  width: 8.33333%;
}
.bodywebsite .col-xs-2 {
  width: 16.66667%;
}
.bodywebsite .col-xs-3 {
  width: 25%;
}
.bodywebsite .col-xs-4 {
  width: 33.33333%;
}
.bodywebsite .col-xs-5 {
  width: 41.66667%;
}
.bodywebsite .col-xs-6 {
  width: 50%;
}
.bodywebsite .col-xs-7 {
  width: 58.33333%;
}
.bodywebsite .col-xs-8 {
  width: 66.66667%;
}
.bodywebsite .col-xs-9 {
  width: 75%;
}
.bodywebsite .col-xs-10 {
  width: 83.33333%;
}
.bodywebsite .col-xs-11 {
  width: 91.66667%;
}
.bodywebsite .col-xs-12 {
  width: 100%;
}
@media (min-width: 768px) {
  .bodywebsite .container {
    max-width: 750px;
  }
  .bodywebsite .col-sm-1,
  .bodywebsite .col-sm-2,
  .bodywebsite .col-sm-3,
  .bodywebsite .col-sm-4,
  .bodywebsite header .row #header_logo,
  .bodywebsite .col-sm-5,
  .bodywebsite .col-sm-6,
  .bodywebsite .col-sm-7,
  .bodywebsite .col-sm-8,
  .bodywebsite .col-sm-9,
  .bodywebsite .col-sm-10,
  .bodywebsite .col-sm-11 {
    float: left;
  }
  .bodywebsite .col-sm-1 {
    width: 8.33333%;
  }
  .bodywebsite .col-sm-2 {
    width: 16.66667%;
  }
  .bodywebsite .col-sm-3 {
    width: 25%;
  }
  .bodywebsite .col-sm-4,
  .bodywebsite header .row #header_logo {
    width: 33.33333%;
  }
  .bodywebsite .col-sm-5 {
    width: 41.66667%;
  }
  .bodywebsite .col-sm-6 {
    width: 50%;
  }
  .bodywebsite .col-sm-7 {
    width: 58.33333%;
  }
  .bodywebsite .col-sm-8 {
    width: 66.66667%;
  }
  .bodywebsite .col-sm-9 {
    width: 75%;
  }
  .bodywebsite .col-sm-10 {
    width: 83.33333%;
  }
  .bodywebsite .col-sm-11 {
    width: 91.66667%;
  }
  .bodywebsite .col-sm-12 {
    width: 100%;
  }
  .bodywebsite .col-sm-push-1 {
    left: 8.33333%;
  }
  .bodywebsite .col-sm-push-2 {
    left: 16.66667%;
  }
  .bodywebsite .col-sm-push-3 {
    left: 25%;
  }
  .bodywebsite .col-sm-push-4 {
    left: 33.33333%;
  }
  .bodywebsite .col-sm-push-5 {
    left: 41.66667%;
  }
  .bodywebsite .col-sm-push-6 {
    left: 50%;
  }
  .bodywebsite .col-sm-push-7 {
    left: 58.33333%;
  }
  .bodywebsite .col-sm-push-8 {
    left: 66.66667%;
  }
  .bodywebsite .col-sm-push-9 {
    left: 75%;
  }
  .bodywebsite .col-sm-push-10 {
    left: 83.33333%;
  }
  .bodywebsite .col-sm-push-11 {
    left: 91.66667%;
  }
  .bodywebsite .col-sm-pull-1 {
    right: 8.33333%;
  }
  .bodywebsite .col-sm-pull-2 {
    right: 16.66667%;
  }
  .bodywebsite .col-sm-pull-3 {
    right: 25%;
  }
  .bodywebsite .col-sm-pull-4 {
    right: 33.33333%;
  }
  .bodywebsite .col-sm-pull-5 {
    right: 41.66667%;
  }
  .bodywebsite .col-sm-pull-6 {
    right: 50%;
  }
  .bodywebsite .col-sm-pull-7 {
    right: 58.33333%;
  }
  .bodywebsite .col-sm-pull-8 {
    right: 66.66667%;
  }
  .bodywebsite .col-sm-pull-9 {
    right: 75%;
  }
  .bodywebsite .col-sm-pull-10 {
    right: 83.33333%;
  }
  .bodywebsite .col-sm-pull-11 {
    right: 91.66667%;
  }
  .bodywebsite .col-sm-offset-1 {
    margin-left: 8.33333%;
  }
  .bodywebsite .col-sm-offset-2 {
    margin-left: 16.66667%;
  }
  .bodywebsite .col-sm-offset-3 {
    margin-left: 25%;
  }
  .bodywebsite .col-sm-offset-4 {
    margin-left: 33.33333%;
  }
  .bodywebsite .col-sm-offset-5 {
    margin-left: 41.66667%;
  }
  .bodywebsite .col-sm-offset-6 {
    margin-left: 50%;
  }
  .bodywebsite .col-sm-offset-7 {
    margin-left: 58.33333%;
  }
  .bodywebsite .col-sm-offset-8 {
    margin-left: 66.66667%;
  }
  .bodywebsite .col-sm-offset-9 {
    margin-left: 75%;
  }
  .bodywebsite .col-sm-offset-10 {
    margin-left: 83.33333%;
  }
  .bodywebsite .col-sm-offset-11 {
    margin-left: 91.66667%;
  }
}
@media (min-width: 992px) {
  .bodywebsite .container {
    max-width: 970px;
  }
  .bodywebsite .col-md-1,
  .bodywebsite .col-md-2,
  .bodywebsite .col-md-3,
  .bodywebsite .col-md-4,
  .bodywebsite .col-md-5,
  .bodywebsite .col-md-6,
  .bodywebsite .col-md-7,
  .bodywebsite .col-md-8,
  .bodywebsite .col-md-9,
  .bodywebsite .col-md-10,
  .bodywebsite .col-md-11 {
    float: left;
  }
  .bodywebsite .col-md-1 {
    width: 8.33333%;
  }
  .bodywebsite .col-md-2 {
    width: 16.66667%;
  }
  .bodywebsite .col-md-3 {
    width: 25%;
  }
  .bodywebsite .col-md-4 {
    width: 33.33333%;
  }
  .bodywebsite .col-md-5 {
    width: 41.66667%;
  }
  .bodywebsite .col-md-6 {
    width: 50%;
  }
  .bodywebsite #HOOK_PAYMENT .row .col-md-6 {
    width: 100%;
  }
  .bodywebsite .col-md-7 {
    width: 58.33333%;
  }
  .bodywebsite .col-md-8 {
    width: 66.66667%;
  }
  .bodywebsite .col-md-9 {
    width: 75%;
  }
  .bodywebsite .col-md-10 {
    width: 83.33333%;
  }
  .bodywebsite .col-md-11 {
    width: 91.66667%;
  }
  .bodywebsite .col-md-12 {
    width: 100%;
  }
  .bodywebsite .col-md-push-0 {
    left: auto;
  }
  .bodywebsite .col-md-push-1 {
    left: 8.33333%;
  }
  .bodywebsite .col-md-push-2 {
    left: 16.66667%;
  }
  .bodywebsite .col-md-push-3 {
    left: 25%;
  }
  .bodywebsite .col-md-push-4 {
    left: 33.33333%;
  }
  .bodywebsite .col-md-push-5 {
    left: 41.66667%;
  }
  .bodywebsite .col-md-push-6 {
    left: 50%;
  }
  .bodywebsite .col-md-push-7 {
    left: 58.33333%;
  }
  .bodywebsite .col-md-push-8 {
    left: 66.66667%;
  }
  .bodywebsite .col-md-push-9 {
    left: 75%;
  }
  .bodywebsite .col-md-push-10 {
    left: 83.33333%;
  }
  .bodywebsite .col-md-push-11 {
    left: 91.66667%;
  }
  .bodywebsite .col-md-pull-0 {
    right: auto;
  }
  .bodywebsite .col-md-pull-1 {
    right: 8.33333%;
  }
  .bodywebsite .col-md-pull-2 {
    right: 16.66667%;
  }
  .bodywebsite .col-md-pull-3 {
    right: 25%;
  }
  .bodywebsite .col-md-pull-4 {
    right: 33.33333%;
  }
  .bodywebsite .col-md-pull-5 {
    right: 41.66667%;
  }
  .bodywebsite .col-md-pull-6 {
    right: 50%;
  }
  .bodywebsite .col-md-pull-7 {
    right: 58.33333%;
  }
  .bodywebsite .col-md-pull-8 {
    right: 66.66667%;
  }
  .bodywebsite .col-md-pull-9 {
    right: 75%;
  }
  .bodywebsite .col-md-pull-10 {
    right: 83.33333%;
  }
  .bodywebsite .col-md-pull-11 {
    right: 91.66667%;
  }
  .bodywebsite .col-md-offset-0 {
    margin-left: 0;
  }
  .bodywebsite .col-md-offset-1 {
    margin-left: 8.33333%;
  }
  .bodywebsite .col-md-offset-2 {
    margin-left: 16.66667%;
  }
  .bodywebsite .col-md-offset-3 {
    margin-left: 25%;
  }
  .bodywebsite .col-md-offset-4 {
    margin-left: 33.33333%;
  }
  .bodywebsite .col-md-offset-5 {
    margin-left: 41.66667%;
  }
  .bodywebsite .col-md-offset-6 {
    margin-left: 50%;
  }
  .bodywebsite .col-md-offset-7 {
    margin-left: 58.33333%;
  }
  .bodywebsite .col-md-offset-8 {
    margin-left: 66.66667%;
  }
  .bodywebsite .col-md-offset-9 {
    margin-left: 75%;
  }
  .bodywebsite .col-md-offset-10 {
    margin-left: 83.33333%;
  }
  .bodywebsite .col-md-offset-11 {
    margin-left: 91.66667%;
  }
}
@media (min-width: 1200px) {
  .bodywebsite .container {
    max-width: 1170px;
  }
  .bodywebsite .col-lg-1,
  .bodywebsite .col-lg-2,
  .bodywebsite .col-lg-3,
  .bodywebsite .col-lg-4,
  .bodywebsite .col-lg-5,
  .bodywebsite .col-lg-6,
  .bodywebsite .col-lg-7,
  .bodywebsite .col-lg-8,
  .bodywebsite .col-lg-9,
  .bodywebsite .col-lg-10,
  .bodywebsite .col-lg-11 {
    float: left;
  }
  .bodywebsite .col-lg-1 {
    width: 8.33333%;
  }
  .bodywebsite .col-lg-2 {
    width: 16.66667%;
  }
  .bodywebsite .col-lg-3 {
    width: 25%;
  }
  .bodywebsite .col-lg-4 {
    width: 36%;
  }
  .bodywebsite .col-lg-5 {
    width: 41.66667%;
  }
  .bodywebsite .col-lg-6 {
    width: 50%;
  }
  .bodywebsite .col-lg-7 {
    width: 58.33333%;
  }
  .bodywebsite .col-lg-8 {
    width: 66.66667%;
  }
  .bodywebsite .col-lg-9 {
    width: 75%;
  }
  .bodywebsite .col-lg-10 {
    width: 83.33333%;
  }
  .bodywebsite .col-lg-11 {
    width: 91.66667%;
  }
  .bodywebsite .col-lg-12 {
    width: 100%;
  }
  .bodywebsite .col-lg-push-0 {
    left: auto;
  }
  .bodywebsite .col-lg-push-1 {
    left: 8.33333%;
  }
  .bodywebsite .col-lg-push-2 {
    left: 16.66667%;
  }
  .bodywebsite .col-lg-push-3 {
    left: 25%;
  }
  .bodywebsite .col-lg-push-4 {
    left: 33.33333%;
  }
  .bodywebsite .col-lg-push-5 {
    left: 41.66667%;
  }
  .bodywebsite .col-lg-push-6 {
    left: 50%;
  }
  .bodywebsite .col-lg-push-7 {
    left: 58.33333%;
  }
  .bodywebsite .col-lg-push-8 {
    left: 66.66667%;
  }
  .bodywebsite .col-lg-push-9 {
    left: 75%;
  }
  .bodywebsite .col-lg-push-10 {
    left: 83.33333%;
  }
  .bodywebsite .col-lg-push-11 {
    left: 91.66667%;
  }
  .bodywebsite .col-lg-pull-0 {
    right: auto;
  }
  .bodywebsite .col-lg-pull-1 {
    right: 8.33333%;
  }
  .bodywebsite .col-lg-pull-2 {
    right: 16.66667%;
  }
  .bodywebsite .col-lg-pull-3 {
    right: 25%;
  }
  .bodywebsite .col-lg-pull-4 {
    right: 33.33333%;
  }
  .bodywebsite .col-lg-pull-5 {
    right: 41.66667%;
  }
  .bodywebsite .col-lg-pull-6 {
    right: 50%;
  }
  .bodywebsite .col-lg-pull-7 {
    right: 58.33333%;
  }
  .bodywebsite .col-lg-pull-8 {
    right: 66.66667%;
  }
  .bodywebsite .col-lg-pull-9 {
    right: 75%;
  }
  .bodywebsite .col-lg-pull-10 {
    right: 83.33333%;
  }
  .bodywebsite .col-lg-pull-11 {
    right: 91.66667%;
  }
  .bodywebsite .col-lg-offset-0 {
    margin-left: 0;
  }
  .bodywebsite .col-lg-offset-1 {
    margin-left: 8.33333%;
  }
  .bodywebsite .col-lg-offset-2 {
    margin-left: 16.66667%;
  }
  .bodywebsite .col-lg-offset-3 {
    margin-left: 25%;
  }
  .bodywebsite .col-lg-offset-4 {
    margin-left: 33.33333%;
  }
  .bodywebsite .col-lg-offset-5 {
    margin-left: 41.66667%;
  }
  .bodywebsite .col-lg-offset-6 {
    margin-left: 50%;
  }
  .bodywebsite .col-lg-offset-7 {
    margin-left: 58.33333%;
  }
  .bodywebsite .col-lg-offset-8 {
    margin-left: 66.66667%;
  }
  .bodywebsite .col-lg-offset-9 {
    margin-left: 75%;
  }
  .bodywebsite .col-lg-offset-10 {
    margin-left: 83.33333%;
  }
  .bodywebsite .col-lg-offset-11 {
    margin-left: 91.66667%;
  }
}
@media (min-width: 1200px) {
  .bodywebsite ul.grid.tab-pane > li {
    padding-bottom: 85px;
    margin-bottom: 0;
  }
}
.bodywebsite .bottom-pagination-content {
  border-top: 1px solid #d6d4d4;
}
.bodywebsite .alert {
  padding: 5px;
  margin-bottom: 18px;
  border: 1px solid transparent;
  border-radius: 0;
}
.bodywebsite .alert h4 {
  margin-top: 0;
  color: inherit;
}
.bodywebsite .alert .alert-link {
  font-weight: 700;
}
.bodywebsite .alert > p,
.bodywebsite .alert > ul {
  margin-bottom: 0;
}
.bodywebsite .alert > p + p {
  margin-top: 5px;
}
.bodywebsite .alert-dismissable {
  padding-right: 35px;
}
.bodywebsite .alert-dismissable .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit;
}
.bodywebsite .alert-success {
  background-color: #55c65e;
  border-color: #48b151;
  color: #fff;
}
.bodywebsite .alert-success hr {
  border-top-color: #419f49;
}
.bodywebsite .alert-success .alert-link {
  color: #e6e6e6;
}
.bodywebsite .alert-info {
  background-color: #5192f3;
  border-color: #4b80c3;
  color: #fff;
}
.bodywebsite .alert-info hr {
  border-top-color: #3d73b7;
}
.bodywebsite .alert-info .alert-link {
  color: #e6e6e6;
}
.bodywebsite .alert-warning {
  background-color: #fe9126;
  border-color: #e4752b;
  color: #fff;
}
.bodywebsite .alert-warning hr {
  border-top-color: #da681c;
}
.bodywebsite .alert-warning .alert-link {
  color: #e6e6e6;
}
.bodywebsite .alert-danger {
  background-color: #f3515c;
  border-color: #d4323d;
  color: #fff;
}
.bodywebsite .alert-danger hr {
  border-top-color: #c32933;
}
.bodywebsite .alert-danger .alert-link {
  color: #e6e6e6;
}
.bodywebsite #lightbox {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7);
  text-align: center;
  z-index: 10000;
}
.bodywebsite #lightbox p {
  text-align: center;
  color: #fff;
  font-size: 12px;
}
.bodywebsite #lightbox img {
  box-shadow: 0 0 25px #111;
  max-width: 700px;
  background-color: #fff;
}
.bodywebsite #facebook_block,
.bodywebsite #cmsinfo_block {
  overflow: hidden;
  background: #f2f2f2;
  min-height: 344px;
  padding-right: 29px;
  padding-left: 29px;
}
@media (max-width: 991px) {
  .bodywebsite #facebook_block,
  .bodywebsite #cmsinfo_block {
    min-height: 348px;
    padding-left: 13px;
    padding-right: 13px;
  }
}
@media (max-width: 767px) {
  .bodywebsite #facebook_block,
  .bodywebsite #cmsinfo_block {
    width: 100%;
    min-height: 1px;
  }
}
.bodywebsite #cmsinfo_block {
  border-left: 1px solid #d9d9d9;
}
@media (max-width: 767px) {
  .bodywebsite #cmsinfo_block {
    border: none;
    margin-top: 10px;
  }
}
.bodywebsite #cmsinfo_block > div {
  padding: 35px 10px 0 0;
}
@media (max-width: 767px) {
  .bodywebsite #cmsinfo_block > div {
    padding-top: 20px;
  }
}
@media (max-width: 479px) {
  .bodywebsite #cmsinfo_block > div {
    width: 100%;
    border-top: 1px solid #d9d9d9;
  }
}
.bodywebsite #cmsinfo_block > div + div {
  border-left: 1px solid #d9d9d9;
  min-height: 344px;
  padding-left: 29px;
}
@media (max-width: 479px) {
  .bodywebsite #cmsinfo_block > div + div {
    border-left: none;
    padding-left: 10px;
    min-height: 1px;
    padding-bottom: 15px;
  }
}
.bodywebsite #cmsinfo_block em {
  float: left;
  width: 60px;
  height: 60px;
  margin: 3px 10px 0 0;
  font-size: 30px;
  color: #fff;
  line-height: 60px;
  text-align: center;
  background: #6f6d6d;
  -webkit-border-radius: 100px;
  -moz-border-radius: 100px;
  border-radius: 100px;
}
@media (max-width: 991px) {
  .bodywebsite #cmsinfo_block em {
    width: 30px;
    height: 30px;
    line-height: 30px;
    font-size: 20px;
  }
}
.bodywebsite #cmsinfo_block .type-text {
  overflow: hidden;
}
.bodywebsite #cmsinfo_block h3 {
  margin: 0 0 5px;
  font: 300 21px/25px "Open Sans", sans-serif;
  color: #6f6d6d;
}
@media (max-width: 1199px) {
  .bodywebsite #cmsinfo_block h3 {
    font-size: 18px;
  }
}
.bodywebsite #cmsinfo_block ul li {
  padding-bottom: 22px;
}
@media (max-width: 1199px) {
  .bodywebsite #cmsinfo_block ul li {
    padding-bottom: 10px;
  }
}
@media (max-width: 991px) {
  .bodywebsite #cmsinfo_block ul li {
    padding-bottom: 0;
  }
}
.bodywebsite #cmsinfo_block p em {
  background: 0 0;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  margin: 0;
  font-size: 13px;
  color: #777;
  float: none;
  height: inherit;
  line-height: inherit;
  text-align: left;
  font-style: italic;
}
.bodywebsite .ie8 #facebook_block,
.bodywebsite .ie8 #cmsinfo_block {
  height: 344px;
}
.bodywebsite #cmsinfo_block em {
  background: #eea200;
  text-shadow: 0 1px #b57b00;
}
.bodywebsite #facebook_block,
.bodywebsite #cmsinfo_block {
  background: rgba(219, 213, 185, 0.5);
}
.bodywebsite #cmsinfo_block,
.bodywebsite #cmsinfo_block > div + div {
  border-color: #dbd5b9;
}
.bodywebsite #cms #center_column .block-cms {
  padding-bottom: 20px;
}
.bodywebsite #cms #center_column h1 {
  margin-bottom: 25px;
}
.bodywebsite #cms #center_column h3 {
  font-size: 16px;
  border-bottom: none;
  margin: 0;
  padding: 0 0 17px 0;
}
.bodywebsite #cms #center_column p {
  line-height: 18px;
}
.bodywebsite #cms #center_column .list-1 li {
  padding: 4px 0 6px 0;
  font-weight: bold;
  color: #46a74e;
  border-top: 1px solid #d6d4d4;
}
.bodywebsite #cms #center_column .list-1 li:first-child {
  border: none;
}
.bodywebsite #cms #center_column .list-1 li em {
  font-size: 20px;
  line-height: 20px;
  padding-right: 15px;
  vertical-align: -2px;
}
.bodywebsite #cms #center_column img {
  margin: 4px 0 17px;
  max-width: 100%;
  height: auto;
}
.bodywebsite #cms #center_column .testimonials {
  border: 1px solid;
  border-color: #dfdede #d2d0d0 #b0afaf #d2d0d0;
  margin: 4px 0 13px 0;
  position: relative;
}
.bodywebsite #cms #center_column .testimonials .inner {
  border: 1px solid white;
  padding: 19px 18px 11px 18px;
  background: #fbfbfb;
  background: -moz-linear-gradient(top, #fbfbfb 0, #fefefe 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fbfbfb), color-stop(100%, #fefefe));
  background: -webkit-linear-gradient(top, #fbfbfb 0, #fefefe 100%);
  background: -o-linear-gradient(top, #fbfbfb 0, #fefefe 100%);
  background: -ms-linear-gradient(top, #fbfbfb 0, #fefefe 100%);
  background: linear-gradient(to bottom, #fbfbfb 0, #fefefe 100%);
}
.bodywebsite #cms #center_column .testimonials .inner span {
  text-indent: -5000px;
  display: inline-block;
  width: 20px;
  height: 15px;
}
.bodywebsite #cms #center_column .testimonials .inner span.before {
  background: url(https://www.dolistore.com/themes/dolibarr-bootstrap/img/bl-before-bg.png) no-repeat;
  margin-right: 8px;
}
.bodywebsite #cms #center_column .testimonials .inner span.after {
  background: url(https://www.dolistore.com/themes/dolibarr-bootstrap/img/bl-after-bg.png) no-repeat;
  margin-left: 8px;
}
.bodywebsite #cms #center_column .testimonials:after {
  content: ".";
  display: block;
  text-indent: -5000px;
  position: absolute;
  bottom: -16px;
  left: 21px;
  width: 15px;
  height: 16px;
  background: url(https://www.dolistore.com/themes/dolibarr-bootstrap/img/testimon-after.gif) no-repeat;
}
.bodywebsite #cms #center_column .testimonials + p {
  padding-left: 45px;
  margin-bottom: 18px;
}
.bodywebsite #cms #center_column p.bottom-indent {
  margin-bottom: 18px;
}
.bodywebsite #cms #center_column #admin-action-cms {
  background: none repeat 0 0 #F6F6F6;
  border: 1px solid #d2d0d0;
  padding: 10px;
}
.bodywebsite #cms #center_column #admin-action-cms p {
  margin: 0;
}
.bodywebsite #cms #center_column #admin-action-cms p span {
  display: block;
  padding-bottom: 10px;
  font-size: 14px;
  font-weight: bold;
  color: #333333;
}
.bodywebsite #cms #center_column #admin-action-cms p .button {
  font: 700 17px/21px Arial, Helvetica, sans-serif;
  padding: 0;
  border: 1px solid;
  padding: 10px 14px;
  display: inline-block;
}
.bodywebsite #cms #center_column #admin-action-cms p .button.publish_button {
  color: white;
  text-shadow: 1px 1px rgba(0, 0, 0, 0.2);
  border-color: #0079b6 #006fa8 #012740 #006fa8;
  background: #009ad0;
  background: -moz-linear-gradient(top, #009ad0 0, #007ab7 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #009ad0), color-stop(100%, #007ab7));
  background: -webkit-linear-gradient(top, #009ad0 0, #007ab7 100%);
  background: -o-linear-gradient(top, #009ad0 0, #007ab7 100%);
  background: -ms-linear-gradient(top, #009ad0 0, #007ab7 100%);
  background: linear-gradient(to bottom, #009ad0 0, #007ab7 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#009ad0', endColorstr='#007ab7', GradientType=0);
}
.bodywebsite #cms #center_column #admin-action-cms p .button.publish_button:hover {
  border-color: #01314e #004b74 #0079b6 #004b74;
  filter: none;
  background: #0084bf;
}
.bodywebsite #cms #center_column #admin-action-cms p .button.lnk_view {
  color: #333333;
  text-shadow: 1px 1px white;
  border-color: #cacaca #b7b7b7 #9a9a9a #b7b7b7;
  background: #f7f7f7;
  background: -moz-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f7f7f7), color-stop(100%, #ededed));
  background: -webkit-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: -o-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: -ms-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: linear-gradient(to bottom, #f7f7f7 0, #ededed 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7f7f7', endColorstr='#ededed', GradientType=0);
}
.bodywebsite #cms #center_column #admin-action-cms p .button.lnk_view:hover {
  border-color: #9e9e9e #9e9e9e #c8c8c8 #9e9e9e;
  filter: none;
  background: #e7e7e7;
}
.bodywebsite a:focus {
  outline: thin dotted;
}
.bodywebsite a:active,
.bodywebsite a:hover {
  outline: 0;
}
.bodywebsite h1 {
  font-size: 2em;
  margin: 0.67em 0;
}
.bodywebsite button,
.bodywebsite input {
  font-family: inherit;
  font-size: 100%;
  margin: 0;
}
.bodywebsite button,
.bodywebsite input {
  line-height: normal;
}
.bodywebsite button {
  text-transform: none;
}
.bodywebsite button {
  -webkit-appearance: button;
  cursor: pointer;
}
.bodywebsite input,
.bodywebsite button {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
.bodywebsite button,
.bodywebsite input {
  background-image: none;
}
.bodywebsite a {
  color: #dc7306;
  text-decoration: none;
}
.bodywebsite a:hover,
.bodywebsite a:focus {
  color: #515151;
  text-decoration: underline;
}
.bodywebsite a:focus {
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.bodywebsite p {
  margin: 0 0 9px;
}
.bodywebsite h1,
.bodywebsite h3 {
  font-family: Arial, Helvetica, sans-serif;
  font-weight: 500;
  line-height: 1.1;
}
.bodywebsite h1,
.bodywebsite h3 {
  margin-top: 2px;
  margin-bottom: 9px;
}
.bodywebsite h1 {
  font-size: 33px;
}
.bodywebsite h3 {
  font-size: 23px;
}
.bodywebsite label {
  /*display: inline-block;*/
  margin-bottom: 5px;
  font-weight: bold;
}
.bodywebsite .form-control {
  display: block;
  width: 100%;
  height: 32px;
  padding: 6px 12px;
  font-size: 13px;
  line-height: 1.42857;
  color: #9c9b9b;
  vertical-align: middle;
  background-color: white;
  border: 1px solid #d6d4d4;
  border-radius: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
}
.bodywebsite .form-control:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
}
.bodywebsite .form-group {
  margin-bottom: 15px;
}
.bodywebsite .btn {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 13px;
  font-weight: normal;
  line-height: 1.42857;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  border: 1px solid transparent;
  border-radius: 0;
  white-space: nowrap;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}
.bodywebsite .btn:focus {
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.bodywebsite .btn:hover,
.bodywebsite .btn:focus {
  color: #333333;
  text-decoration: none;
}
.bodywebsite .btn:active {
  outline: 0;
  background-image: none;
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.bodywebsite .btn-default {
  color: #333333;
  background-color: white;
  border-color: #cccccc;
}
.bodywebsite .btn-default:hover,
.bodywebsite .btn-default:focus,
.bodywebsite .btn-default:active {
  color: #333333;
  background-color: #ebebeb;
  border-color: #adadad;
}
.bodywebsite .btn-default:active {
  background-image: none;
}
.bodywebsite .alert {
  padding: 5px;
  margin-bottom: 18px;
  border: 1px solid transparent;
  border-radius: 0;
}
.bodywebsite .alert-danger {
  background-color: #f3515c;
  border-color: #d4323d;
  color: white;
}
.bodywebsite .clearfix:before,
.bodywebsite .clearfix:after {
  content: " ";
  display: table;
}
.bodywebsite .clearfix:after {
  clear: both;
}
.bodywebsite .alert {
  font-weight: bold;
}
.bodywebsite .alert.alert-danger {
  text-shadow: 1px 1px rgba(0, 0, 0, 0.1);
}
.bodywebsite .alert.alert-danger:before {
  font-family: "FontAwesome";
  content: "\f057";
  font-size: 20px;
  vertical-align: -2px;
  padding-right: 7px;
  float: left;
}
.bodywebsite label {
  color: #333333;
}
.bodywebsite .button.button-medium {
  font-size: 17px;
  line-height: 21px;
  color: white;
  padding: 0;
  font-weight: bold;
  background: #43b754;
  background: -moz-linear-gradient(top, #43b754 0, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #43b754), color-stop(2%, #41b757), color-stop(4%, #41b854), color-stop(6%, #43b756), color-stop(38%, #41b354), color-stop(40%, #44b355), color-stop(66%, #45af55), color-stop(74%, #41ae53), color-stop(91%, #42ac52), color-stop(94%, #41ae55), color-stop(96%, #43ab54), color-stop(100%, #42ac52));
  background: -webkit-linear-gradient(top, #43b754 0, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  background: -o-linear-gradient(top, #43b754 0, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  background: -ms-linear-gradient(top, #43b754 0, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  background: linear-gradient(to bottom, #43b754 0, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#43b754', endColorstr='#42ac52', GradientType=0);
  border: 1px solid;
  border-color: #399a49 #247f32 #1a6d27 #399a49;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.bodywebsite .button.button-medium span {
  display: block;
  padding: 10px 10px 10px 14px;
  border: 1px solid;
}
@media (max-width: 480px) {
  .bodywebsite .button.button-medium span {
    font-size: 15px;
    padding-right: 7px;
    padding-left: 7px;
  }
}
.bodywebsite .button.button-medium span i.left {
  font-size: 24px;
  vertical-align: -2px;
  margin: -4px 10px 0 0;
  display: inline-block;
}
@media (max-width: 480px) {
  .bodywebsite .button.button-medium span i.left {
    margin-right: 5px;
  }
}
.bodywebsite .button.button-medium:hover {
  background: #3aa04c;
  background: -moz-linear-gradient(top, #3aa04c 0, #3aa04a 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #3aa04c), color-stop(100%, #3aa04a));
  background: -webkit-linear-gradient(top, #3aa04c 0, #3aa04a 100%);
  background: -o-linear-gradient(top, #3aa04c 0, #3aa04a 100%);
  background: -ms-linear-gradient(top, #3aa04c 0, #3aa04a 100%);
  background: linear-gradient(to bottom, #3aa04c 0, #3aa04a 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#3aa04c', endColorstr='#3aa04a', GradientType=0);
  border-color: #196f28 #399a49 #399a49 #258033;
}
.bodywebsite .button.button-medium.exclusive {
  border-color: #db8600 #d98305 #c86d26 #d98305;
  background-image: -webkit-gradient(linear, 50% 0, 50% 100%, color-stop(0%, #fdaa02), color-stop(100%, #fe9702));
  background-image: -webkit-linear-gradient(top, #fdaa02, #fe9702);
  background-image: -moz-linear-gradient(top, #fdaa02, #fe9702);
  background-image: -o-linear-gradient(top, #fdaa02, #fe9702);
  background-image: linear-gradient(top, #fdaa02, #fe9702);
}
.bodywebsite .button.button-medium.exclusive span {
  border-color: #fec133 #febc33 #feb233 #febc33;
}
.bodywebsite .button.button-medium.exclusive:hover {
  background: #f89609;
  border-color: #a6550c #ba6708 #db8600 #ba6708;
}
.bodywebsite .button.button-medium.exclusive:hover span {
  border-color: #fec133;
}
.bodywebsite .form-control {
  padding: 3px 5px;
  height: 27px;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.bodywebsite .box {
  background: #fbfbfb;
  border: 1px solid #d6d4d4;
  padding: 14px 18px 13px;
  margin: 0 0 30px 0;
  line-height: 23px;
}
.bodywebsite .box p {
  margin-bottom: 0;
}
.bodywebsite .page-heading {
  font: 600 18px/22px "Open Sans", sans-serif;
  color: #555454;
  text-transform: uppercase;
  padding: 0 0 17px 0;
  margin-bottom: 30px;
  border-bottom: 1px solid #d6d4d4;
  overflow: hidden;
}
.bodywebsite .page-subheading {
  font-family: "Open Sans", sans-serif;
  font-weight: 600;
  text-transform: uppercase;
  color: #555454;
  font-size: 18px;
  padding: 0 0 15px;
  line-height: normal;
  margin-bottom: 12px;
  border-bottom: 1px solid #d6d4d4;
}
.bodywebsite #authentication .box {
  padding-bottom: 20px;
  line-height: 20px;
}
.bodywebsite #authentication .form-group {
  margin-bottom: 4px;
}
.bodywebsite #authentication .form-group .form-control {
  max-width: 271px;
}
.bodywebsite #create-account_form {
  min-height: 297px;
}
.bodywebsite #create-account_form p {
  margin-bottom: 8px;
}
.bodywebsite #create-account_form .form-group {
  margin: 0 0 20px 0;
}
.bodywebsite #login_form {
  min-height: 297px;
}
.bodywebsite #login_form .form-group {
  margin: 0 0 3px 0;
}
.bodywebsite #login_form .form-group.lost_password {
  margin: 14px 0 15px 0;
}
.bodywebsite #login_form .form-group.lost_password a {
  text-decoration: underline;
}
.bodywebsite #login_form .form-group.lost_password a:hover {
  text-decoration: none;
}
.bodywebsite #login_form .form-control,
.bodywebsite #create-account_form .form-control {
  max-width: 271px;
}
.bodywebsite h1,
.bodywebsite h3 {
  font-family: "Open Sans", sans-serif !important;
}


.radio input[type="radio"],
.radio-inline input[type="radio"],
.checkbox input[type="checkbox"],
.checkbox-inline input[type="checkbox"] {
  float: left;
  margin-left: -20px;
}

.radio-inline,
.checkbox-inline {
  display: inline-block;
  padding-left: 20px;
  margin-bottom: 0;
  vertical-align: middle;
  font-weight: normal;
  cursor: pointer;
}
.radio-inline + .radio-inline,
.checkbox-inline + .checkbox-inline {
  margin-top: 0;
  margin-left: 10px;
}

input[type="radio"][disabled],
fieldset[disabled] input[type="radio"],
input[type="checkbox"][disabled],
fieldset[disabled] input[type="checkbox"],
.radio[disabled],
fieldset[disabled] .radio,
.radio-inline[disabled],
fieldset[disabled] .radio-inline,
.checkbox[disabled],
fieldset[disabled] .checkbox,
.checkbox-inline[disabled],
fieldset[disabled] .checkbox-inline {
  cursor: not-allowed;
}

.form-horizontal .control-label,
.form-horizontal .radio,
.form-horizontal .checkbox,
.form-horizontal .radio-inline,
.form-horizontal .checkbox-inline {
  margin-top: 0;
  margin-bottom: 0;
  padding-top: 7px;
}

#address .gender-line .radio-inline label,
#identity .gender-line .radio-inline label,
#account-creation_form .gender-line .radio-inline label,
#new_account_form .gender-line .radio-inline label,
#opc_account_form .gender-line .radio-inline label,
#authentication .gender-line .radio-inline label {
  font-weight: normal;
  color: #777777;
}

.radio-inline,
.checkbox {
  padding-left: 0;
}
.radio-inline .checker,
.checkbox .checker {
  float: left;
}
.radio-inline .checker span,
.checkbox .checker span {
  top: 0;
}
.radio-inline div.radio,
.checkbox div.radio {
  display: inline-block;
}
.radio-inline div.radio span,
.checkbox div.radio span {
  float: left;
  top: 0;
}

.radio input[type="radio"],
.radio-inline input[type="radio"],
.checkbox input[type="checkbox"],
.checkbox-inline input[type="checkbox"] {
  margin: 0 !important;
}
.radio-inline,
.checkbox-inline {
  cursor: default;
}


sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}
sup {
  top: -0.5em;
}
button,
input,
select {
  font-family: inherit;
  font-size: 100%;
  margin: 0;
}
button,
input {
  line-height: normal;
}
button,
select {
  text-transform: none;
}
button {
  -webkit-appearance: button;
  cursor: pointer;
}
input[type="checkbox"],
input[type="radio"] {
  box-sizing: border-box;
  padding: 0;
}
*,
*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
}
input,
button,
select {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
button,
input {
  background-image: none;
}
p {
  margin: 0 0 9px;
}
h3 {
  font-family: Arial, Helvetica, sans-serif;
  font-weight: 500;
  line-height: 1.1;
}
h3 {
  margin-top: 2px;
  margin-bottom: 9px;
}
h3 {
  font-size: 23px;
}
.row {
  margin-left: -15px;
  margin-right: -15px;
}
.row:before,
.row:after {
  content: " ";
  display: table;
}
.row:after {
  clear: both;
}
.col-xs-4 {
  position: relative;
  min-height: 1px;
  padding-left: 15px;
  padding-right: 15px;
}
.col-xs-4 {
  float: left;
}
.col-xs-4 {
  width: 33.33333%;
}
label {
  margin-bottom: 5px;
  font-weight: bold;
}
input[type="radio"],
input[type="checkbox"] {
  margin: 4px 0 0;
  margin-top: 1px \9;
  line-height: normal;
}
input[type="radio"]:focus,
input[type="checkbox"]:focus {
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.form-control {
  display: block;
  width: 100%;
  height: 32px;
  padding: 6px 12px;
  font-size: 13px;
  line-height: 1.42857;
  color: #9c9b9b;
  vertical-align: middle;
  background-color: white;
  border: 1px solid #d6d4d4;
  border-radius: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out 0.15s,
    box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
}
.form-control:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075),
    0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075),
    0 0 8px rgba(102, 175, 233, 0.6);
}
.form-group {
  margin-bottom: 15px;
}
.radio,
.checkbox {
  display: block;
  min-height: 18px;
  margin-top: 10px;
  margin-bottom: 10px;
  padding-left: 20px;
  vertical-align: middle;
}
.checkbox label {
  display: inline;
  margin-bottom: 0;
  font-weight: normal;
  cursor: pointer;
}
.radio input[type="radio"],
.radio-inline input[type="radio"],
.checkbox input[type="checkbox"] {
  float: left;
  margin-left: -20px;
}
.checkbox + .checkbox {
  margin-top: -5px;
}
.radio-inline {
  display: inline-block;
  padding-left: 20px;
  margin-bottom: 0;
  vertical-align: middle;
  font-weight: normal;
  cursor: pointer;
}
.radio-inline + .radio-inline {
  margin-top: 0;
  margin-left: 10px;
}
.btn {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 13px;
  font-weight: normal;
  line-height: 1.42857;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  border: 1px solid transparent;
  border-radius: 0;
  white-space: nowrap;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}
.btn:focus {
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.btn:hover,
.btn:focus {
  color: #333333;
  text-decoration: none;
}
.btn:active {
  outline: 0;
  background-image: none;
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.btn-default {
  color: #333333;
  background-color: white;
  border-color: #cccccc;
}
.btn-default:hover,
.btn-default:focus,
.btn-default:active {
  color: #333333;
  background-color: #ebebeb;
  border-color: #adadad;
}
.btn-default:active {
  background-image: none;
}
.clearfix:after {
  clear: both;
}
.pull-right {
  float: right !important;
}
.hidden {
  display: none !important;
  visibility: hidden !important;
}
[class^="icon-"] {
  font-family: FontAwesome;
  font-weight: normal;
  font-style: normal;
  text-decoration: inherit;
  -webkit-font-smoothing: antialiased;
  *margin-right: 0.3em;
}
[class^="icon-"]:before {
  text-decoration: inherit;
  display: inline-block;
  speak: none;
}
.pull-right {
  float: right;
}
[class^="icon-"] {
  display: inline;
  width: auto;
  height: auto;
  line-height: normal;
  vertical-align: baseline;
  background-image: none;
  background-position: 0 0;
  background-repeat: repeat;
  margin-top: 0;
}
.icon-chevron-right:before {
  content: "\f054";
}
label {
  color: #333333;
}
.checkbox {
  line-height: 16px;
}
.checkbox label {
  color: #777777;
}
.button.button-medium {
  font-size: 17px;
  line-height: 21px;
  color: white;
  padding: 0;
  font-weight: bold;
  background: #43b754;
  background: -moz-linear-gradient(
    top,
    #43b754 0,
    #41b757 2%,
    #41b854 4%,
    #43b756 6%,
    #41b354 38%,
    #44b355 40%,
    #45af55 66%,
    #41ae53 74%,
    #42ac52 91%,
    #41ae55 94%,
    #43ab54 96%,
    #42ac52 100%
  );
  background: -webkit-gradient(
    linear,
    left top,
    left bottom,
    color-stop(0%, #43b754),
    color-stop(2%, #41b757),
    color-stop(4%, #41b854),
    color-stop(6%, #43b756),
    color-stop(38%, #41b354),
    color-stop(40%, #44b355),
    color-stop(66%, #45af55),
    color-stop(74%, #41ae53),
    color-stop(91%, #42ac52),
    color-stop(94%, #41ae55),
    color-stop(96%, #43ab54),
    color-stop(100%, #42ac52)
  );
  background: -webkit-linear-gradient(
    top,
    #43b754 0,
    #41b757 2%,
    #41b854 4%,
    #43b756 6%,
    #41b354 38%,
    #44b355 40%,
    #45af55 66%,
    #41ae53 74%,
    #42ac52 91%,
    #41ae55 94%,
    #43ab54 96%,
    #42ac52 100%
  );
  background: -o-linear-gradient(
    top,
    #43b754 0,
    #41b757 2%,
    #41b854 4%,
    #43b756 6%,
    #41b354 38%,
    #44b355 40%,
    #45af55 66%,
    #41ae53 74%,
    #42ac52 91%,
    #41ae55 94%,
    #43ab54 96%,
    #42ac52 100%
  );
  background: -ms-linear-gradient(
    top,
    #43b754 0,
    #41b757 2%,
    #41b854 4%,
    #43b756 6%,
    #41b354 38%,
    #44b355 40%,
    #45af55 66%,
    #41ae53 74%,
    #42ac52 91%,
    #41ae55 94%,
    #43ab54 96%,
    #42ac52 100%
  );
  background: linear-gradient(
    to bottom,
    #43b754 0,
    #41b757 2%,
    #41b854 4%,
    #43b756 6%,
    #41b354 38%,
    #44b355 40%,
    #45af55 66%,
    #41ae53 74%,
    #42ac52 91%,
    #41ae55 94%,
    #43ab54 96%,
    #42ac52 100%
  );
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#43b754',endColorstr='#42ac52',GradientType=0 );
  border: 1px solid;
  border-color: #399a49 #247f32 #1a6d27 #399a49;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.button.button-medium span {
  display: block;
  padding: 10px 10px 10px 14px;
  border: 1px solid;
  border-color: #74d578;
}
@media (max-width: 480px) {
  .button.button-medium span {
    font-size: 15px;
    padding-right: 7px;
    padding-left: 7px;
  }
}
.button.button-medium span i.right {
  margin-right: 0;
  margin-left: 9px;
}
@media (max-width: 480px) {
  .button.button-medium span i.right {
    margin-left: 5px;
  }
}
.button.button-medium:hover {
  background: #3aa04c;
  background: -moz-linear-gradient(top, #3aa04c 0, #3aa04a 100%);
  background: -webkit-gradient(
    linear,
    left top,
    left bottom,
    color-stop(0%, #3aa04c),
    color-stop(100%, #3aa04a)
  );
  background: -webkit-linear-gradient(top, #3aa04c 0, #3aa04a 100%);
  background: -o-linear-gradient(top, #3aa04c 0, #3aa04a 100%);
  background: -ms-linear-gradient(top, #3aa04c 0, #3aa04a 100%);
  background: linear-gradient(to bottom, #3aa04c 0, #3aa04a 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#3aa04c',endColorstr='#3aa04a',GradientType=0 );
  border-color: #196f28 #399a49 #399a49 #258033;
}
.form-control {
  padding: 3px 5px;
  height: 27px;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.box {
  background: #fbfbfb;
  border: 1px solid #d6d4d4;
  padding: 14px 18px 13px;
  margin: 0 0 30px 0;
  line-height: 23px;
}
.box p {
  margin-bottom: 0;
}
.page-subheading {
  font-family: "Open Sans", sans-serif;
  font-weight: 600;
  text-transform: uppercase;
  color: #555454;
  font-size: 18px;
  padding: 0 0 15px;
  line-height: normal;
  margin-bottom: 12px;
  border-bottom: 1px solid #d6d4d4;
}
#authentication .box {
  padding-bottom: 20px;
  line-height: 20px;
}
#account-creation_form p.required,
#authentication p.required {
  color: #f13340;
  margin: 9px 0 16px 0;
}
#account-creation_form .form-group,
#authentication .form-group {
  margin-bottom: 4px;
}
#account-creation_form .form-group .form-control,
#authentication .form-group .form-control {
  max-width: 271px;
}
#authentication #center_column form.std .row {
  margin-left: -5px;
  margin-right: -5px;
}
#authentication #center_column form.std .row .col-xs-4 {
  padding-left: 5px;
  padding-right: 5px;
  max-width: 94px;
}
#authentication #center_column form.std .row .col-xs-4 .form-control {
  max-width: 84px;
}
.radio-inline,
.checkbox {
  padding-left: 0;
}
.checkbox .checker {
  float: left;
}
.checkbox .checker span {
  top: 0;
}
.radio-inline div.radio {
  display: inline-block;
}
.radio-inline div.radio span {
  float: left;
  top: 0;
}
div.selector,
div.selector span,
div.checker span,
div.radio span {
  background-image: url("https://www.dolistore.com/themes/dolibarr-bootstrap/img/jquery/uniform/sprite.png");
  background-repeat: no-repeat;
  -webkit-font-smoothing: antialiased;
}
div.selector,
div.checker,
div.radio {
  vertical-align: middle;
}
div.selector:focus,
div.checker:focus,
div.radio:focus {
  outline: 0;
}
div.selector,
div.selector *,
div.radio,
div.radio *,
div.checker,
div.checker * {
  margin: 0;
  padding: 0;
}
div.checker input {
  -moz-appearance: none;
  -webkit-appearance: none;
}
div.selector {
  background-position: 0 -54px;
  line-height: 27px;
  height: 27px;
  padding: 0 0 0 10px;
  position: relative;
  overflow: hidden;
}
div.selector span {
  text-overflow: ellipsis;
  display: block;
  overflow: hidden;
  white-space: nowrap;
  background-position: right 0;
  height: 27px;
  line-height: 27px;
  padding-right: 30px;
  cursor: pointer;
  width: 100%;
  display: block;
}
div.selector select {
  opacity: 0;
  filter: alpha(opacity=0);
  -moz-opacity: 0;
  border: none;
  background: none;
  position: absolute;
  height: 27px;
  top: 0;
  left: 0;
  width: 100%;
}
div.checker {
  position: relative;
}
div.checker,
div.checker span,
div.checker input {
  width: 15px;
  height: 15px;
}
div.checker span {
  display: -moz-inline-box;
  display: inline-block;
  *display: inline;
  zoom: 1;
  text-align: center;
  background-position: 0 -257px;
}
div.checker input {
  opacity: 0;
  filter: alpha(opacity=0);
  -moz-opacity: 0;
  border: none;
  background: none;
  display: -moz-inline-box;
  display: inline-block;
  *display: inline;
  zoom: 1;
}
div.radio {
  position: relative;
  display: inline;
}
div.radio,
div.radio span,
div.radio input {
  width: 13px;
  height: 13px;
}
div.radio span {
  display: -moz-inline-box;
  display: inline-block;
  *display: inline;
  zoom: 1;
  text-align: center;
  background-position: 0 -243px;
}
div.radio input {
  opacity: 0;
  filter: alpha(opacity=0);
  -moz-opacity: 0;
  border: none;
  background: none;
  display: -moz-inline-box;
  display: inline-block;
  *display: inline;
  zoom: 1;
  text-align: center;
}
div.selector {
  font-size: 12px;
}
div.selector span {
  color: #666;
  text-shadow: 0 1px 0 #fff;
}
div.selector select {
  font-family: "Helvetica Neue", Arial, Helvetica, sans-serif;
  font-size: 12px;
}
.checker span input {
  margin: 0 !important;
}
.radio input[type="radio"],
.radio-inline input[type="radio"],
.checkbox input[type="checkbox"] {
  margin: 0 !important;
}
.radio-inline {
  cursor: default;
}
div.checker {
  cursor: pointer;
  margin-right: 5px;
  display: inline-block;
}
div.checker span {
  position: relative;
  top: -2px;
}
div.radio {
  margin-right: 3px;
}
div.radio span {
  position: relative;
  top: -2px;
}
h3 {
  font-family: "Open Sans", sans-serif !important;
}

#identity #center_column form.std .row .col-xs-4, #authentication #center_column form.std .row .col-xs-4, #order-opc #center_column form.std .row .col-xs-4{
  padding-left: 5px;
    padding-right: 5px;
    max-width: 94px;
}

.page-subheading-login{
  font-size: 14px !important;
  font-weight: lighter !important;
  margin-top: 25px !important;
  line-height: 0px !important;
}


#my-account .addresses-lists {
  margin-bottom: 30px;
}
#my-account ul.myaccount-link-list li {
  overflow: hidden;
  padding-bottom: 10px;
}
#my-account ul.myaccount-link-list li a {
  display: block;
  overflow: hidden;
  font: 600 16px/20px "Open Sans", sans-serif;
  color: #555454;
  text-shadow: 0 1px white;
  text-transform: uppercase;
  text-decoration: none;
  position: relative;
  border: 1px solid;
  border-color: #cacaca #b7b7b7 #9a9a9a #b7b7b7;
  background-image: -webkit-gradient(
    linear,
    50% 0,
    50% 100%,
    color-stop(0%, #f7f7f7),
    color-stop(100%, #ededed)
  );
  background-image: -webkit-linear-gradient(#f7f7f7, #ededed);
  background-image: -moz-linear-gradient(#f7f7f7, #ededed);
  background-image: -o-linear-gradient(#f7f7f7, #ededed);
  background-image: linear-gradient(#f7f7f7, #ededed);
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  -o-border-radius: 4px;
  border-radius: 4px;
}
#my-account ul.myaccount-link-list li a i {
  font-size: 25px;
  color: #fd7e01;
  position: absolute;
  left: 0;
  top: 0;
  width: 52px;
  height: 100%;
  padding: 10px 0 0 0;
  text-align: center;
  border: 1px solid white;
  -moz-border-radius-topleft: 4px;
  -webkit-border-top-left-radius: 4px;
  border-top-left-radius: 4px;
  -moz-border-radius-bottomleft: 4px;
  -webkit-border-bottom-left-radius: 4px;
  border-bottom-left-radius: 4px;
}
#my-account ul.myaccount-link-list li a span {
  display: block;
  padding: 13px 15px 15px 17px;
  overflow: hidden;
  border: 1px solid;
  margin-left: 52px;
  border-color: white white white #c8c8c8;
  -moz-border-radius-topright: 5px;
  -webkit-border-top-right-radius: 5px;
  border-top-right-radius: 5px;
  -moz-border-radius-bottomright: 5px;
  -webkit-border-bottom-right-radius: 5px;
  border-bottom-right-radius: 5px;
}
#my-account ul.myaccount-link-list li a:hover {
  filter: none;
  background: #e7e7e7;
  border-color: #9e9e9e #c2c2c2 #c8c8c8 #c2c2c2;
}

.icon-list-ol:before {
  content: "\f0cb";
}
.icon-refresh:before {
  content: "\f021";
}
.icon-ban-circle:before {
  content: "\f05e";
}
.icon-building:before {
  content: "\f0f7";
}
.icon-user:before {
  content: "\f007";
}

.icon-barcode:before {
  content: "\f02a";
}
.icon-shopping-cart:before {
  content: "\f07a";
}


.shopping_cart>a:first-child b {
  color:#fff;
  font:600 18px/22px "Open Sans",sans-serif;
  padding-right:5px
}
.shopping_cart>a:first-child:before {
  content:"\f07a";
  font-family:fontawesome;
  display:inline-block;
  font-size:23px;
  line-height:23px;
  color:#fff;
  padding-right:15px
}
.shopping_cart .ajax_cart_total {
  display:none!important
}
.shopping_cart .block_cart_expand:after,
.shopping_cart .block_cart_collapse:after {
  content:"\f0d7";
  font-family:fontawesome;
  display:inline-block;
  float:right;
  font-size:18px;
  color:#686666;
  padding:6px 0 0
}
.shopping_cart .block_cart_collapse:after {
  content:"\f0d8";
  padding:4px 0 2px
}
.cart_block .cart_block_list .remove_link {
  position:absolute;
  right:10px;
  top:19px
}
.cart_block .cart_block_list .remove_link a,
.cart_block .cart_block_list .ajax_cart_block_remove_link {
  color:#777;
  display:block;
  width:100%;
  height:100%
}
.cart_block .cart_block_list .remove_link a:before,
.cart_block .cart_block_list .ajax_cart_block_remove_link:before {
  display:inline-block;
  content:"\f057";
  font-family:fontawesome;
  font-size:18px;
  line-height:18px
}
.cart_block .cart_block_list .remove_link a:hover,
.cart_block .cart_block_list .ajax_cart_block_remove_link:hover {
  color:#515151
}
.cart_block .cart-images {
  float:left;
  margin-right:20px
}
.cart_block .cart-info {
  overflow:hidden;
  position:relative;
  padding-right:20px
}
.cart_block .cart-info .product-name {
  padding-bottom:5px;
  margin-top:-4px
}
.cart_block .cart-info .product-name a {
  font-size:13px;
  line-height:18px;
  display:block
}
.cart_block .cart-info .quantity-formated {
  display:inline-block;
  color:#9c9b9b;
  text-transform:uppercase;
  font-size:10px;
  padding-right:5px
}
.cart_block .cart-info .quantity-formated .quantity {
  font-size:15px
}
.cart_block dt {
  font-weight:400;
  overflow:hidden;
  padding:20px 10px 16px 20px;
  position:relative
}
.cart_block dd {
  position:relative
}
.cart_block dd .cart_block_customizations {
  border-top:1px dashed #333
}
.cart_block dd .cart_block_customizations li {
  padding:10px 20px
}
.cart_block dd .cart_block_customizations li .deleteCustomizableProduct {
  position:absolute;
  right:10px
}
.cart_block .cart_block_no_products {
  margin:0;
  padding:10px 20px
}
.cart_block .cart-prices {
  border-top:1px solid #d6d4d4;
  font-weight:700;
  padding:10px 20px 22px
}
.cart_block .cart-prices .cart-prices-line {
  overflow:hidden;
  border-bottom:1px solid #515151;
  padding:7px 0
}
.cart_block .cart-prices .cart-prices-line.last-line {
  border:none
}
.cart_block .cart-buttons {
  overflow:hidden;
  padding:20px 20px 10px;
  margin:0;
  background:#f6f6f6
}
.cart_block .cart-buttons a {
  width:100%;
  float:left;
  text-align:center;
  margin-bottom:10px;
  margin-right:10px
}
.cart_block .cart-buttons a#button_order_cart {
  margin-right:0;
  border:none
}
.cart_block .cart-buttons a#button_order_cart span {
  padding:7px 0;
  font-size:1.1em;
  border:solid 1px #63c473;
  background:#43b155
}
.cart_block .cart-buttons a#button_order_cart:hover span {
  border:solid 1px #358c43;
  background:#2e7a3a;
  color:#fff
}
#header .cart_block {
  position:absolute;
  top:95px;
  right:0;
  z-index:100;
  display:none;
  height:auto;
  background:#484848;
  color:#fff;
  width:270px
}
.cart_block_list img {
  width: 80px;
  height: auto;
}

.cart_block .cart-info .quantity-formated {
  display: inline-block;
  color: #9c9b9b;
  text-transform: uppercase;
  font-size: 10px;
  padding-right: 5px;
}

.cart_block .cart-info .product-name a {
  font-size: 13px;
  line-height: 18px;
  display: block;
}

.cart_block .cart_block_list .remove_link {
  position: absolute;
  right: 10px;
  top: 19px;
}

.truncate3 {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.lightbox3 {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7) !important;
  z-index: 10000;
}
.lightbox3 p {
  text-align: center;
  color: #fff;
  font-size: 12px;
}
.lightbox3 img {
  max-width: 700px;
}

.lightbox3 #content3 {
  background-color: #fff;
  border: 1px solid #dbdbdb;
}
/*
.layer_cart_product {
  padding-bottom: 0px;
}*/

/*=====================================*/

.cart_quantity .cart_quantity_input {
  height: 27px;
  line-height: 27px;
  padding: 0;
  text-align: center;
  width: 57px;
}
.cart_gift_quantity .cart_quantity_input {
  height: 27px;
  line-height: 27px;
  padding: 0;
  text-align: center;
  width: 57px;
}

.table tbody > tr > td {
  vertical-align: middle;
}
.table tbody > tr > td.cart_quantity {
  padding: 41px 14px 25px;
  width: 88px;
  text-align: center;
}
.table tbody > tr > td.cart_quantity .cart_quantity_button {
  margin-top: 3px;
}
.table tbody > tr > td.cart_quantity .cart_quantity_button a {
  float: left;
  margin-right: 3px;
}
.table tbody > tr > td.cart_quantity .cart_quantity_button a + a {
  margin-right: 0;
}

.cart_delete a.cart_quantity_delete,
a.price_discount_delete {
  font-size: 23px;
  color: #333333;
}
.cart_delete a.cart_quantity_delete:hover,
a.price_discount_delete:hover {
  color: silver;
}
#cart_summary tbody td {
  padding: 7px 8px 9px 18px;
}
#cart_summary tbody td.cart_product {
  padding: 7px;
  width: 137px;
}
#cart_summary tbody td.cart_product img {
  border: 1px solid #d6d4d4;
}
#cart_summary tbody td.cart_unit .price span {
  display: inline-block;
}
#cart_summary tbody td.cart_unit .price span.price-percent-reduction {
  margin: 5px auto;
  display: inline-block;
}
#cart_summary tbody td.cart_unit .price span.old-price {
  text-decoration: line-through;
}
#cart_summary tbody td.cart_description small {
  display: block;
  padding: 5px 0 0 0;
}
#cart_summary tfoot td.text-right,
#cart_summary tfoot tbody td.cart_unit,
#cart_summary tbody tfoot td.cart_unit,
#cart_summary tfoot tbody td.cart_total,
#cart_summary tbody tfoot td.cart_total {
  font-weight: bold;
  color: #333333;
}
#cart_summary tfoot td.price {
  text-align: right;
}
#cart_summary tfoot td.total_price_container span {
  font: 600 18px/22px "Open Sans", sans-serif;
  color: #555454;
  text-transform: uppercase;
}
#cart_summary tfoot td#total_price_container {
  font: 600 21px/25px "Open Sans", sans-serif;
  color: #333333;
  background: white;
}
#cart_summary .stock-management-on tbody td.cart_description {
  width: 480px;
}
.cart_discount_price {
  text-align: right;
}
.cart_discount_delete {
  text-align: center;
}

.cart_voucher {
  vertical-align: top !important;
}
.cart_voucher h4 {
  font: 600 18px/22px "Open Sans", sans-serif;
  color: #555454;
  text-transform: uppercase;
  padding: 7px 0 10px 0;
}
.cart_voucher .title-offers {
  color: #333333;
  font-weight: bold;
  margin-bottom: 6px;
}
.cart_voucher fieldset {
  margin-bottom: 10px;
  border: none;
}
.cart_voucher fieldset #discount_name {
  float: left;
  width: 219px;
  margin-right: 11px;
}
.cart_voucher #display_cart_vouchers span {
  font-weight: bold;
  cursor: pointer;
  color: #777777;
}
.cart_voucher #display_cart_vouchers span:hover {
  color: #515151;
}

@media (max-width: 767px) {
  #order-detail-content #cart_summary table,
  #order-detail-content #cart_summary thead,
  #order-detail-content #cart_summary tbody,
  #order-detail-content #cart_summary th,
  #order-detail-content #cart_summary td,
  #order-detail-content #cart_summary tr {
    display: block;
  }
  #order-detail-content #cart_summary thead tr {
    position: absolute;
    top: -9999px;
    left: -9999px;
  }
  #order-detail-content #cart_summary tr {
    border-bottom: 1px solid #cccccc;
    overflow: hidden;
  }
  #order-detail-content #cart_summary td {
    border: none;
    position: relative;
    /*width: 50%;*/
    float: left;
    white-space: normal;
  }
  #order-detail-content #cart_summary td.cart_avail {
    clear: both;
  }
  #order-detail-content #cart_summary td.cart_quantity {
    clear: both;
    padding: 9px 8px 11px 18px;
  }
  #order-detail-content #cart_summary td.cart_delete {
    width: 100%;
    clear: both;
    text-align: right;
    padding-right: 30px;
  }
  #order-detail-content #cart_summary td.cart_delete:before {
    display: inline-block;
    padding-right: 0.5em;
    position: relative;
    top: -3px;
  }
  #order-detail-content #cart_summary td div {
    display: inline;
  }
  #order-detail-content #cart_summary td:before {
    content: attr(data-title);
    display: block;
  }
  #order-detail-content #cart_summary tfoot td {
    float: none;
    width: 100%;
  }
  #order-detail-content #cart_summary tfoot td:before {
    display: inline;
  }
  #order-detail-content #cart_summary tfoot tr .text-right,
  #order-detail-content #cart_summary tfoot tr tbody td.cart_unit,
  #order-detail-content #cart_summary tbody tfoot tr td.cart_unit,
  #order-detail-content #cart_summary tfoot tr tbody td.cart_total,
  #order-detail-content #cart_summary tbody tfoot tr td.cart_total,
  #order-detail-content #cart_summary tfoot tr .price {
    display: block;
    float: left;
    width: 50%;
  }
}
@media (max-width: 768px) {
  #order-detail-content #cart_summary tbody td .price {
    text-align: center;
  }
  #order-detail-content #cart_summary tbody td.cart_description {
    width: 300px;
  }
}

table#cart_summary .gift-icon {
  color: white;
  background: #0088cc;
  line-height: 20px;
  padding: 2px 5px;
  border-radius: 5px;
}

table.std,
table.table_block {
  margin-bottom: 20px;
  width: 100%;
  border: 1px solid #999999;
  border-bottom: none;
  background: white;
  border-collapse: inherit;
}
table.std th,
table.table_block th {
  padding: 14px 12px;
  font-size: 12px;
  color: white;
  font-weight: bold;
  text-transform: uppercase;
  text-shadow: 0 1px 0 black;
  background: #999999;
}
table.std tr.alternate_item,
table.table_block tr.alternate_item {
  background-color: #f3f3f3;
}
table.std td,
table.table_block td {
  padding: 12px;
  border-right: 1px solid #e9e9e9;
  border-bottom: 1px solid #e9e9e9;
  font-size: 12px;
  vertical-align: top;
}

@media (max-width: 768px) {
  .table-responsive {
    width: 100%;
    margin-bottom: 15px;
    overflow-y: hidden;
    overflow-x: scroll;
    border: 1px solid #d6d4d4;
  }
  .table-responsive > .table {
    margin-bottom: 0;
    background-color: #fff;
  }
  .table-responsive > .table > thead > tr > th,
  .table-responsive > .table > thead > tr > td,
  .table-responsive > .table > tbody > tr > th,
  .table-responsive > .table > tbody > tr > td,
  .table-responsive > .table > tfoot > tr > th,
  .table-responsive > .table > tfoot > tr > td {
    white-space: nowrap;
  }
  .table-responsive > .table-bordered {
    border: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:first-child,
  .table-responsive > .table-bordered > thead > tr > td:first-child,
  .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:last-child,
  .table-responsive > .table-bordered > thead > tr > td:last-child,
  .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0;
  }
  .table-responsive > .table-bordered > thead > tr:last-child > th,
  .table-responsive > .table-bordered > thead > tr:last-child > td,
  .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .table-responsive > .table-bordered > tfoot > tr:last-child > th,
  .table-responsive > .table-bordered > tfoot > tr:last-child > td {
    border-bottom: 0;
  }
}

table {
  max-width: 100%;
  background-color: transparent;
}
th {
  text-align: left;
}
.table {
  width: 100%;
  margin-bottom: 18px;
}
.table thead > tr > th,
.table thead > tr > td,
.table tbody > tr > th,
.table tbody > tr > td,
.table tfoot > tr > th,
.table tfoot > tr > td {
  padding: 9px 8px 11px 18px;
  line-height: 1.42857;
  vertical-align: top;
  border-top: 1px solid #d6d4d4;
}
.table thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #d6d4d4;
}
.table caption + thead tr:first-child th,
.table caption + thead tr:first-child td,
.table colgroup + thead tr:first-child th,
.table colgroup + thead tr:first-child td,
.table thead:first-child tr:first-child th,
.table thead:first-child tr:first-child td {
  border-top: 0;
}
.table tbody + tbody {
  border-top: 2px solid #d6d4d4;
}
.table .table {
  background-color: white;
}
.table-condensed thead > tr > th,
.table-condensed thead > tr > td,
.table-condensed tbody > tr > th,
.table-condensed tbody > tr > td,
.table-condensed tfoot > tr > th,
.table-condensed tfoot > tr > td {
  padding: 5px;
}
.table-bordered {
  border: 1px solid #d6d4d4;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > th,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > th,
.table-bordered > tfoot > tr > td {
  border: 1px solid #d6d4d4;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.table-striped > tbody > tr:nth-child(odd) > td,
.table-striped > tbody > tr:nth-child(odd) > th {
  background-color: #f9f9f9;
}
.table-hover > tbody > tr:hover > td,
.table-hover > tbody > tr:hover > th {
  background-color: whitesmoke;
}
table col[class*="col-"] {
  float: none;
  display: table-column;
}
table td[class*="col-"],
table th[class*="col-"] {
  float: none;
  display: table-cell;
}
.table > thead > tr > td.active,
.table > thead > tr > th.active,
.table > thead > tr.active > td,
.table > thead > tr.active > th,
.table > tbody > tr > td.active,
.table > tbody > tr > th.active,
.table > tbody > tr.active > td,
.table > tbody > tr.active > th,
.table > tfoot > tr > td.active,
.table > tfoot > tr > th.active,
.table > tfoot > tr.active > td,
.table > tfoot > tr.active > th {
  background-color: whitesmoke;
}
.table > thead > tr > td.success,
.table > thead > tr > th.success,
.table > thead > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr > td.success,
.table > tbody > tr > th.success,
.table > tbody > tr.success > td,
.table > tbody > tr.success > th,
.table > tfoot > tr > td.success,
.table > tfoot > tr > th.success,
.table > tfoot > tr.success > td,
.table > tfoot > tr.success > th {
  background-color: #55c65e;
  border-color: #48b151;
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td {
  background-color: #42c04c;
  border-color: #419f49;
}
.table > thead > tr > td.danger,
.table > thead > tr > th.danger,
.table > thead > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr > td.danger,
.table > tbody > tr > th.danger,
.table > tbody > tr.danger > td,
.table > tbody > tr.danger > th,
.table > tfoot > tr > td.danger,
.table > tfoot > tr > th.danger,
.table > tfoot > tr.danger > td,
.table > tfoot > tr.danger > th {
  background-color: #f3515c;
  border-color: #d4323d;
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td {
  background-color: #f13946;
  border-color: #c32933;
}
.table > thead > tr > td.warning,
.table > thead > tr > th.warning,
.table > thead > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr > td.warning,
.table > tbody > tr > th.warning,
.table > tbody > tr.warning > td,
.table > tbody > tr.warning > th,
.table > tfoot > tr > td.warning,
.table > tfoot > tr > th.warning,
.table > tfoot > tr.warning > td,
.table > tfoot > tr.warning > th {
  background-color: #fe9126;
  border-color: #e4752b;
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td {
  background-color: #fe840d;
  border-color: #da681c;
}

table.std,
table.table_block {
  margin-bottom: 20px;
  width: 100%;
  border: 1px solid #999999;
  border-bottom: none;
  background: white;
  border-collapse: inherit;
}
table.std th,
table.table_block th {
  padding: 14px 12px;
  font-size: 12px;
  color: white;
  font-weight: bold;
  text-transform: uppercase;
  text-shadow: 0 1px 0 black;
  background: #999999;
}
table.std tr.alternate_item,
table.table_block tr.alternate_item {
  background-color: #f3f3f3;
}
table.std td,
table.table_block td {
  padding: 12px;
  border-right: 1px solid #e9e9e9;
  border-bottom: 1px solid #e9e9e9;
  font-size: 12px;
  vertical-align: top;
}
.table {
  margin-bottom: 30px;
}
.table > thead > tr > th {
  background: #fbfbfb;
  border-bottom-width: 1px;
  color: #333333;
  vertical-align: middle;
}
.table td a.color-myaccount {
  color: #777777;
  text-decoration: underline;
}
.table td a.color-myaccount:hover {
  text-decoration: none;
}
.table tfoot tr {
  background: #fbfbfb;
}

.table tbody > tr > td {
  vertical-align: middle;
}
.table tbody > tr > td.cart_quantity {
  padding: 41px 14px 25px;
  width: 88px;
}
.table tbody > tr > td.cart_quantity .cart_quantity_button {
  margin-top: 3px;
}
.table tbody > tr > td.cart_quantity .cart_quantity_button a {
  float: left;
  margin-right: 3px;
}
.table tbody > tr > td.cart_quantity .cart_quantity_button a + a {
  margin-right: 0;
}
.table tbody > tr > td.cart_delete,
.table tbody > tr > td.price_discount_del {
  padding: 5px;
}
.table tfoot > tr > td {
  vertical-align: middle;
}

#order .delivery_option > div > table.resume.delivery_option_carrier td,
#order-opc .delivery_option > div > table.resume.delivery_option_carrier td {
  padding: 8px 11px 7px 11px;
}
#order .delivery_option > div > table.resume.delivery_option_carrier td i,
#order-opc .delivery_option > div > table.resume.delivery_option_carrier td i {
  font-size: 20px;
  margin-right: 7px;
  vertical-align: -2px;
}
#order .delivery_option > div > table.resume td.delivery_option_radio,
#order-opc .delivery_option > div > table.resume td.delivery_option_radio {
  width: 54px;
  padding-left: 0;
  padding-right: 0;
  text-align: center;
}
#order .delivery_option > div > table.resume td.delivery_option_logo,
#order-opc .delivery_option > div > table.resume td.delivery_option_logo {
  width: 97px;
  padding-left: 21px;
}
#order .delivery_option > div > table.resume td.delivery_option_price,
#order-opc .delivery_option > div > table.resume td.delivery_option_price {
  width: 162px;
}
table.discount i {
  font-size: 20px;
  line-height: 20px;
  vertical-align: -2px;
}
table.discount i.icon-ok {
  color: #46a74e;
}
table.discount i.icon-remove {
  color: #f13340;
}

@media only screen and (max-width: 767px) {
  table.responsive {
    margin-bottom: 0;
  }
  .pinned {
    position: absolute;
    left: 0;
    top: 0;
    background: #fff;
    width: 35%;
    overflow: hidden;
    overflow-x: scroll;
    border-right: 1px solid #ccc;
    border-left: 1px solid #ccc;
  }
  .pinned table {
    border-right: none;
    border-left: none;
    width: 100%;
  }
  .pinned table th,
  .pinned table td {
    white-space: nowrap;
  }
  .pinned td:last-child {
    border-bottom: 0;
  }
  div.table-wrapper {
    position: relative;
    margin-bottom: 20px;
    overflow: hidden;
    border-right: 1px solid #ccc;
  }
  div.table-wrapper div.scrollable {
    margin-left: 35%;
  }
  div.table-wrapper div.scrollable {
    overflow: scroll;
    overflow-y: hidden;
  }
  table.responsive td,
  table.responsive th {
    position: relative;
    white-space: nowrap;
    overflow: hidden;
  }
  table.responsive th:first-child,
  table.responsive td:first-child,
  table.responsive td:first-child,
  table.responsive.pinned td {
    display: none;
  }
}

.table-bordered {
  border: 1px solid #d6d4d4;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > th,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > th,
.table-bordered > tfoot > tr > td {
  border: 1px solid #d6d4d4;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  border-bottom-width: 1px;
}

#cart_summary tbody td.cart_product {
  padding: 7px;
  width: 137px;
}
#cart_summary tbody td.cart_product img {
  border: 1px solid #d6d4d4;
}
#cart_summary{
  border: 1px solid #dbdbdb;
}
ul.step {
  margin-bottom: 30px;
  overflow: hidden;
}
@media (min-width: 768px) {
  ul.step {
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
  }
}
ul.step li {
  float: left;
  width: 20%;
  text-align: left;
  border: 1px solid;
  border-top-color: #cacaca;
  border-bottom-color: #9a9a9a;
  border-right-color: #b7b7b7;
  border-left-width: 0;
}
@media (max-width: 767px) {
  ul.step li {
    width: 100%;
    border-left-width: 1px;
  }
}
ul.step li a,
ul.step li span,
ul.step li.step_current span,
ul.step li.step_current_end span {
  display: block;
  padding: 13px 10px 14px 13px;
  color: #333333;
  font-size: 17px;
  line-height: 21px;
  font-weight: bold;
  text-shadow: 1px 1px white;
  position: relative;
}
@media (max-width: 992px) {
  ul.step li a,
  ul.step li span,
  ul.step li.step_current span,
  ul.step li.step_current_end span {
    font-size: 15px;
  }
}
@media (min-width: 992px) {
  ul.step li a:after,
  ul.step li span:after,
  ul.step li.step_current span:after,
  ul.step li.step_current_end span:after {
    content: ".";
    position: absolute;
    top: 0;
    right: -31px;
    z-index: 0;
    text-indent: -5000px;
    display: block;
    width: 31px;
    height: 52px;
    margin-top: -2px;
  }
}
ul.step li a:focus,
ul.step li span:focus,
ul.step li.step_current span:focus,
ul.step li.step_current_end span:focus {
  text-decoration: none;
  outline: none;
}
ul.step li.first {
  border-left-width: 1px;
  border-left-color: #b7b7b7;
}
@media (min-width: 768px) {
  ul.step li.first {
    -moz-border-radius-topleft: 4px;
    -webkit-border-top-left-radius: 4px;
    border-top-left-radius: 4px;
    -moz-border-radius-bottomleft: 4px;
    -webkit-border-bottom-left-radius: 4px;
    border-bottom-left-radius: 4px;
  }
}
ul.step li.first span,
ul.step li.first a {
  z-index: 5;
  padding-left: 13px !important;
}
@media (min-width: 768px) {
  ul.step li.first span,
  ul.step li.first a {
    -moz-border-radius-topleft: 4px;
    -webkit-border-top-left-radius: 4px;
    border-top-left-radius: 4px;
    -moz-border-radius-bottomleft: 4px;
    -webkit-border-bottom-left-radius: 4px;
    border-bottom-left-radius: 4px;
  }
}
ul.step li.second span,
ul.step li.second a {
  z-index: 4;
}
ul.step li.third span,
ul.step li.third a {
  z-index: 3;
}
ul.step li.four span,
ul.step li.four a {
  z-index: 2;
}
ul.step li.last span {
  z-index: 1;
}
@media (min-width: 768px) {
  ul.step li.last {
    -moz-border-radius-topright: 4px;
    -webkit-border-top-right-radius: 4px;
    border-top-right-radius: 4px;
    -moz-border-radius-bottomright: 4px;
    -webkit-border-bottom-right-radius: 4px;
    border-bottom-right-radius: 4px;
  }
  ul.step li.last span {
    -moz-border-radius-topright: 4px;
    -webkit-border-top-right-radius: 4px;
    border-top-right-radius: 4px;
    -moz-border-radius-bottomright: 4px;
    -webkit-border-bottom-right-radius: 4px;
    border-bottom-right-radius: 4px;
  }
}
ul.step li.step_current {
  font-weight: bold;
  background: #42b856;
  background: -moz-linear-gradient(top, #42b856 0, #43ab54 100%);
  background: -webkit-gradient(
    linear,
    left top,
    left bottom,
    color-stop(0%, #42b856),
    color-stop(100%, #43ab54)
  );
  background: -webkit-linear-gradient(top, #42b856 0, #43ab54 100%);
  background: -o-linear-gradient(top, #42b856 0, #43ab54 100%);
  background: -ms-linear-gradient(top, #42b856 0, #43ab54 100%);
  background: linear-gradient(to bottom, #42b856 0, #43ab54 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#42b856',endColorstr='#43ab54',GradientType=0);
  border-color: #399b49 #51ae5c #208931 #369946;
}
ul.step li.step_current span {
  color: white;
  text-shadow: 1px 1px #208931;
  border: 1px solid;
  border-color: #73ca77 #74c776 #74c175 #74c776;
  position: relative;
}
@media (min-width: 992px) {
  ul.step li.step_current span {
    padding-left: 38px;
  }
  ul.step li.step_current span:after {
    background: url(https://www.dolistore.com/themes/dolibarr-bootstrap/css/../img/order-step-a.png)
      right 0 no-repeat;
  }
}
ul.step li.step_current_end {
  font-weight: bold;
}
ul.step li.step_todo {
  background: #f7f7f7;
  background: -moz-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: -webkit-gradient(
    linear,
    left top,
    left bottom,
    color-stop(0%, #f7f7f7),
    color-stop(100%, #ededed)
  );
  background: -webkit-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: -o-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: -ms-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: linear-gradient(to bottom, #f7f7f7 0, #ededed 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7f7f7',endColorstr='#ededed',GradientType=0);
}
ul.step li.step_todo span {
  display: block;
  border: 1px solid;
  border-color: white;
  color: #333333;
  position: relative;
}
@media (min-width: 992px) {
  ul.step li.step_todo span {
    padding-left: 38px;
  }
  ul.step li.step_todo span:after {
    background: url(https://www.dolistore.com/themes/dolibarr-bootstrap/css/../img/order-step-current.png)
      right 0 no-repeat;
  }
}
ul.step li.step_done {
  border-color: #666666 #5f5f5f #292929 #5f5f5f;
  background: #727171;
  background: -moz-linear-gradient(top, #727171 0, #666666 100%);
  background: -webkit-gradient(
    linear,
    left top,
    left bottom,
    color-stop(0%, #727171),
    color-stop(100%, #666666)
  );
  background: -webkit-linear-gradient(top, #727171 0, #666666 100%);
  background: -o-linear-gradient(top, #727171 0, #666666 100%);
  background: -ms-linear-gradient(top, #727171 0, #666666 100%);
  background: linear-gradient(to bottom, #727171 0, #666666 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#727171',endColorstr='#666666',GradientType=0);
}
ul.step li.step_done a {
  color: white;
  text-shadow: 1px 1px rgba(0, 0, 0, 0.3);
  border: 1px solid;
  border-color: #8b8a8a;
}
@media (min-width: 992px) {
  ul.step li.step_done a {
    padding-left: 38px;
  }
  ul.step li.step_done a:after {
    background: url(https://www.dolistore.com/themes/dolibarr-bootstrap/css/../img/order-step-done.png)
      right 0 no-repeat;
  }
}
@media (min-width: 992px) {
  ul.step li.step_done.step_done_last a:after {
    background: url(https://www.dolistore.com/themes/dolibarr-bootstrap/css/../img/order-step-done-last.png)
      right 0 no-repeat;
  }
}
@media (min-width: 992px) {
  ul.step li#step_end span:after {
    display: none;
  }
}
ul.step li em {
  font-style: normal;
}
@media (min-width: 768px) and (max-width: 991px) {
  ul.step li em {
    display: none;
  }
}
#cart_summary tbody td.cart_product,
#cart_summary tbody td.cart_avail {
  text-align: center;
}
#cart_summary tbody td.cart_description small {
  display: block;
  padding: 5px 0 0 0;
}
#cart_summary .stock-management-on tbody td.cart_description {
  width: 480px;
}

.text-center,
#cart_summary tbody td.cart_product,
#cart_summary tbody td.cart_avail {
  text-align: center;
}
.icon-trash:before {
  content: "\f014";
}
.cart_navigation {
  margin: 0 0 20px;
}
.cart_navigation .button-medium {
  float: right;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  font-size: 20px;
  line-height: 24px;
}
.cart_navigation .button-medium span {
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  padding: 11px 15px 10px 15px;
}
@media (max-width: 992px) {
  .cart_navigation .button-medium span {
    font-size: 16px;
  }
}
.cart_navigation .button-medium i.right {
  font-size: 25px;
  line-height: 25px;
  vertical-align: -4px;
  margin-left: 6px;
}

@media (max-width: 480px) {
  .cart_navigation > span {
    display: block;
    width: 100%;
    padding-bottom: 15px;
  }
}

#order-detail-content{
  margin-bottom: 35px;
}

.cart_navigation .button-exclusive {
  border: none;
  background: none !important;
  padding: 0;
  font-size: 17px;
  font-weight: bold;
  color: #333333;
  margin: 9px 0 0 0;
}
.cart_navigation .button-exclusive i {
  color: #777777;
  margin-right: 8px;
}
.cart_navigation .button-exclusive:hover,
.cart_navigation .button-exclusive:focus,
.cart_navigation .button-exclusive:active {
  color: #515151;
  -webkit-box-shadow: none;
  box-shadow: none;
}

.cart_total_payment{
  text-align: right !important;
}

#HOOK_PAYMENT{
  border: 1px solid #dbdbdb;
  height: 1000px;
  text-align: center;
  background: #fbfbfb;
}

#uniform-selectProductSort{
  float: left;
}

.clearfix.payment_accepted {
  background-color: #f5f5f5;
  border: 1px solid #ddd;
  border-radius: 5px;
  padding: 20px;
  text-align: center;
  margin: 0 auto;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.clearfix.payment_accepted h1 {
  font-size: 24px;
  color: #333;
  margin-bottom: 25px;
}

.clearfix.payment_accepted p {
  font-size: 15px;
  color: #666;
  margin-bottom: 10px;
  line-height: 14px;
}
.countdown-container {
  width: 45px;
  margin: 0 auto !important;
  background-color: #fff;
  border-radius: 5px;
  padding: 10px;
  margin-top: 20px;
  
}
#countdown {
  font-size: 20px;
  color: #eea200;
  font-weight: bold;
}
.icon-file-text::before {
  content: "\f15c";
}
.info-order i {
  font-size: 20px;
}
.table-bordered-block-order-detail {
  border: 1px solid #d6d4d4 !important;
}
.detail_step_by_step{
  margin-bottom: 30px !important;
}
ul.footer_links {
  padding: 20px 0 0 0;
  border-top: 1px solid #d6d4d4;
  height: 65px;
}
ul.footer_links li {
  float: left;
}
ul.footer_links li + li {
  margin-left: 10px;
}
.download_invoice{
  margin-top: 25px !important;
}
.table-bordered-block-order-detail .product-name{
  font-size: 15px !important;
}
.icon-cloud-download:before {
  content: "\f0ed";
}
.icon-cloud-download:before {
  content: "\f0ed";
}
.icon-external-link:before {
  content: "\f08e";
}
.download_icon i{
  font-size: 15px;
}
.order-history tbody > tr > td {
  vertical-align: top !important;
}
.invoice-pdf-link{
  display: block ruby;
}
.order-history-products-list{
  list-style: initial !important;
  margin-left: 10px !important;
  font-size: 13px !important;
  min-width: 230px !important;
}
.order-history-products-list li{
  padding-bottom: 10px !important;
}
.btn-table .button.button-small span {
  display: inline-flex;
}
.tag_version{
  white-space: nowrap;
  width: 40px;
  text-align: center;
}
/*==================================*/
.nav-link {
  padding: 5px 20px;
  cursor: pointer;
  border: none;
  background: none;
  outline: none;
}
.nav-link.active {
  border-bottom: 3px solid #333;
  font-weight: bold;
  background-color: #dbdbdb;
}
.tab-content {
  padding: 20px;
  border-top: 2px solid #999 !important;
  margin-top: -2px !important;
  margin-bottom: 20px;
  background-color: fbfbfb;
}
.std .tab-pane {
  display: none;
}
.std .tab-pane.active {
  display: block;
}
.add-product-page{
  border: 1px solid #dbdbdb !important;
  padding: 0px 15px 10px 15px !important;
}
.nav-tabs .nav-link {
  margin-bottom: -1px;
  background: 0 0;
    background-color: rgba(0, 0, 0, 0);
  border: 1px solid transparent;
    border-top-color: transparent;
    border-right-color: transparent;
    border-bottom-color: transparent;
    border-left-color: transparent;
}
.add-product-page h5{
  text-align: center;
  margin-bottom: 60px;
}
.tab-content .tab-pane .form-group .form-control, #authentication .form-group .form-control{
  max-width: none !important;
}
.box-form{
  padding: 20px;
  /*border: 1px solid #dbdbdb;*/
  margin-top: 20px;
  padding-top: 0px;
}
.textarea-short-description{
  height: 80px !important;
}
.info p {
  text-align: justify;
  margin-bottom: 15px !important;
}
div.info {
  border-left: solid 5px #87cfd2;
  padding-top: 8px;
  padding-left: 10px;
  padding-right: 4px;
  padding-bottom: 8px;
  margin: 1em 0em 1em 0em;
  background: #eff8fc;
  color: #558;
}
.price-field{
  max-width: 53% !important;
}
.version-field{
  width: 120px !important;
  float: left;
  margin-right: 8px !important;
}
.module-version, .how-to-contact, .module-keywords{
  max-width: none !important;
}
.info-inline{
  display: inline-block;
}
.price-currency{
  margin-left: 5px;
}
.price-free{
  font-size: 11px;
  font-style: italic;
}
.cat-check-table td{
  font-size: 13px;
  padding: 2px !important;
}
div.uploader {
  background: none;
  height: 27px;
  width: 100%;
  cursor: pointer;
  position: relative;
  overflow: hidden;
}
input.button_large, input.button_large_disabled {
  position: relative;
  display: inline-block;
  padding: 5px 7px;
  border: 1px solid #cc9900;
  font-weight: bold;
  color: black;
  background: url(https://www.dolistore.com/themes/dolibarr-bootstrap/css/../img/bg_bt.gif) repeat-x 0 0 #f4b61b;
  cursor: pointer;
  white-space: normal;
  text-align: left;
}
button[disabled], html input[disabled] {
  cursor: default;
}
.lang_span{
  text-transform: uppercase;
  font-style: italic;
  font-size: 10px;
}
.tooltip {
  position: relative;
  display: inline-block;
  cursor: pointer;
}
.tooltip .tooltiptext {
  visibility: hidden;
  width: 350px;
  padding: 15px !important;
  font-family: sans-serif;
  font-size: 12px;
  line-height: 16px;
  font-weight: normal;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%; 
  left: 50%;
  margin-left: -100px;
  opacity: 0;
  transition: opacity 0.3s;
  text-align: justify;
  text-justify: inter-word;
}
.tooltip .tooltiptext::after {
  content: '';
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}
.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}
.checkbox_label{
  cursor: pointer;
  margin-left: 5px;
  font-weight: 400 !important;
}
.field-info{
  font-family: sans-serif;
  color: #555;
  font-size: 12px;
  font-weight: lighter;
  text-align: justify;
  border-left: 1px solid #dbdbdb;
  padding-left: 12px;
  margin-top: 6px;
}
.dolibarr_core_include{
  margin-top: 15px !important;
}
.subcat-checkbox-td{
  font-size: 13px;
  padding: 5px 10px !important;
  padding-left: 30px !important;  
  padding-top: 0px !important;
}
.cat-checkbox-td{
  font-size: 13px;
  padding: 5px 10px !important;
  padding-top: 4px !important;
}
#product-creation-form{
  font-family: 'Open Sans', sans-serif !important;
}
#product-creation-form label{
  font-family: 'Open Sans', sans-serif !important;
  font-weight: normal !important;
}
#product-creation-form hr{
  margin: 10px 0px 10px 0px !important;
}
/*.ui-state-highlight {
  height: 50px;
  background-color: #f0f0f0;
  border: 1px dashed #ccc;
}*/
.sortable-placeholder {
  background-color: #f0f0f0;
  border: 1px dashed #ccc;
  height: 100px; /* Adjust as needed */
}
.icon-move::before {
  content: "\f047";
}
.iconAddImage::before {
  content: "\f067";
  color: silver;
}
#addImageBtn, #addImageBtn2 {
  margin-bottom: 10px;
}
#addImageBtn span.iconAddImage {
  cursor: pointer;
  font-family: "FontAwesome";
  font-size: 14px;
  margin-left: 5px;
}
#addImageBtn2 span.iconAddImage {
  cursor: pointer;
  font-family: "FontAwesome";
  font-size: 14px;
  margin-left: 5px;
}
.table-body, .tbody-image-cover{
  font-size: 13px;
}
.table-body{
  border-left: 4px solid #dbdbdb;
}
.table-body tr{
  border-bottom: 1px solid #dbdbdb;
}
.td-deleteBtn{
  text-align: right !important;
  padding-right: 0px !important;
}
.icon-delete:before{
  content: "\f014";
}
.icon-delete{
  font-size: 17px !important;
  padding: 0 !important;
  line-height: 15px;
  cursor: pointer;
}
.tbody-image-cover td {
  padding: 0 !important;
}
.table-body td {
  padding: 4px 0px 4px 15px !important
}
.input-image-cover, .image-input{
  max-width: 350px;
}
.dragging {
  background-color: #f0f0f0;
  opacity: 0.7;
}
.form-subheading {
  font-family: "Open Sans", sans-serif !important;
  font-weight: 600 !important;
  text-transform: uppercase;
  color: #555454;
  font-size: 15px !important;
  padding: 0 0 0px !important;
  line-height: normal !important;
  margin-bottom: 20px !important;
  border-bottom: 1px solid #dbdbdb !important;
}
.image-cover-preview{
  border: 1px solid #dbdbdb;
  box-shadow: 1px 1px 3px -1px #333;
  margin-left: 15px !important;
}
.image-preview{
  border: 1px solid #dbdbdb;
  box-shadow: 1px 1px 3px -1px #333;
}
.fade-in {
  animation: fadeIn 0.6s;
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
.form-check{
  width: 90px;
  float: left;
}
.notification {
  display: none;
  position: fixed;
  top: 20px;
  right: 20px;
  background-color: #4caf50;
  color: white;
  padding: 10px;
  border-radius: 5px;
}
.icon-add:before {
  content: "\f055";
}
.icon-manage:before {
  content: "\f0ae";
}
/*===========================*/
.product-table-icons {
  margin-left: 0 !important;
  margin-right: 0 !important;
  font-size: 15px !important;
}
.icon-edit:before {
  content: "\f044";
}
.order-history tbody{
  font-size: 14px !important;
}
.icon-euro:before {
  content: "\f153";
}
.hasDatepicker  {
  display: inline;
  height: 25px;
  padding: 6px 12px;
  font-size: 13px;
  line-height: 1.42857;
  color: #9c9b9b;
  vertical-align: middle;
  background-color: white;
  border: 1px solid #d6d4d4;
  border-radius: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out 0.15s,
    box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  margin-right: 3px !important;
}
.hasDatepicker:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075),
    0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075),
    0 0 8px rgba(102, 175, 233, 0.6);
}
.inline-date-filter span{
  float: left;
  margin-right: 25px;
}
.btn-filter {
  position: relative;
  display: inline-block;
  padding: 0px 8px;
  border: 1px solid #cc9900;
  font-weight: bold;
  color: #fff;
  background: #eea200;
  cursor: pointer;
  white-space: normal;
  text-align: left;
  text-shadow: 0 1px #b57b00;
}
.btn-filter:after {
  content: "\f002";
  font-family: fontawesome;
  margin-left: 7px;
}
.table-no-border td, .table-no-border th {
  border: 0 !important;
  padding-right: 60px;
  font-size: 14px;
  padding-bottom: 4px;
}
.span-blue{
  background-color: rgba(238, 162, 0, 0.2);
  border-color: rgba(238, 162, 0, 0.5);
  padding: 0px 7px;
}
.table-payment-recap td, th{
  padding: 7px 8px 7px 8px !important;
  text-align: center !important;
}
#generate-csv{
  position: absolute;
  top: 0px;
  right: 15px;
}
.p_with_margin{
  text-align: center;
  margin: 45px !important;
}
.e404 {
  color: #333;
  text-align: center !important;
  padding: 50px;
  max-width: 610px;
  margin: auto;
}
.e404 h1 {
  font-size: 100px;
  margin: 0;
  color: #ff6f61;
  font-weight: bold;
}
.e404 h2 {
  font-size: 24px;
  margin: 20px 0;
}
.e404 p {
  font-size: 18px;
  margin: 10px 0 30px;
}
.e404 a {
  display: inline-block;
  padding: 10px 20px;
  color: #fff;
  background-color: #ff6f61;
  text-decoration: none;
  border-radius: 5px;
  font-size: 18px;
  transition: background-color 0.3s ease;
}
.e404 a:hover {
  background-color: #ff4a39;
}
.e404 .container {
  max-width: 600px;
  margin: 0 auto;
}
.list-grid-product-title{
  padding: 2px !important;
}
#add_to_cart .icon-cart-plus{
  font-size: 19px;
}
#add_to_cart .btn-add-to-cart-product{
  padding: 3px 10px;
  margin-bottom: 5px;
  width: 88%;
  min-width: 85px;
}
#add_to_cart .btn-add-to-cart-product p{
  margin-bottom: 1px !important;
  white-space: normal;
  word-wrap: break-word;
  overflow-wrap: break-word;
}
.box-info-product{
  border-bottom-width: 3px !important;
}
@media (max-width: 768px) {
  .bodywebsite .info-table-box tbody tr td {
      display: block;
      width: 100%;
      box-sizing: border-box;
  }
}
.pb-right-column{
  max-width: 340px;
  margin: auto;
}
.infos-module {
  background-color: #dbdbdb;
  opacity: 0.9;
  border-radius: 5px;
  padding: 0px 5px;
  font-size: 12px;
  margin-left: 10px;
}
@media (min-width: 768px) {
  header .row #header_logo {
    width: 25% !important;
  }
}
.price.product-price.original-price {
  font-size: 15px;
  vertical-align: top;
  opacity: 0.6;
  text-decoration: line-through;
  border-right: 1px solid #dbdbdb;
  padding-right: 6px;
}
.price.product-price.original-price-product-view {
  font-size: 15px;
  opacity: 0.6;
  text-decoration: line-through;
  display: block;
  color: #555;
}
#languages-block-top {
  max-width: 33.33% !important;
}
.block-sells-notification {
  padding: 15px;
  border: 1px solid #e74c3c;
  background-color: #fdecea;
  color: #e74c3c;
  text-align: center;
  max-width: 500px;
  margin: auto;
  margin-bottom: 30px;
  text-transform: uppercase;
}

.shop-container {
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  background-color: #fff;
  text-align: center;
  transform: scale(1);
  transition: transform 0.3s ease;
  border-top: none;
}
.shop-image {
  position: relative;
  overflow: hidden;
}
.shop-image img {
  width: 100%;
  display: block;
}
.shop-button {
  position: absolute;
  top: 20%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #ff5f57;
  color: #fff;
  font-size: 16px;
  padding: 10px 20px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  text-transform: uppercase;
  box-shadow: 0 5px 15px rgba(255, 95, 87, 0.3);
  transition: background-color 0.3s ease, transform 0.3s ease;
}
.shop-overlay:hover .shop-button {
  background-color: #e54b45;
  transform: translate(-50%, -50%) scale(1.1);
}
.shop-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.2);
  display: flex;
  justify-content: center;
  align-items: center;
}

<?php // BEGIN PHP
$tmp = ob_get_contents(); ob_end_clean(); dolWebsiteOutput($tmp, "css");
// END PHP
