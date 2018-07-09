{*
* @author	Krzysztof Pecak
* @copyright	2017 Krzysztof Pecak
* @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*}

<style>

{* Css *}
body { background-color: {$css2|escape:'htmlall':'UTF-8'}; }
body ul.product_list.grid li.hovered h5, body ul.product_list.grid > li .product-container h5 { height: {$css26|escape:'htmlall':'UTF-8'}px; }

body ul.product_list.grid > li .product-container h5 a.product-name { font-size: {$css27|escape:'htmlall':'UTF-8'}px; line-height: {$css28|escape:'htmlall':'UTF-8'}px; }

{* Logo *}

@media (min-width: 992px) {

header .row #header_logo {
padding-top: {$css44|escape:'htmlall':'UTF-8'}px;
}

}


{* Colors *}


{* Nav *}

header .nav{
background: {$color1|escape:'htmlall':'UTF-8'};
}

#currencies-block-top,
#languages-block-top,
header .nav,
.header_user_info,
.header_user_info a,
.shop-phone,
.shop-phone:last-child,
#contact-link a{
border-color: {$color2|escape:'htmlall':'UTF-8'};
}

.header_user_info a,
.header_user_info > span,
.shop-phone,
#contact-link a,
#currencies-block-top div.current,
#languages-block-top div.current{
color: {$color3|escape:'htmlall':'UTF-8'};
}

.header_user_info a.account,
.shop-phone strong,
#currencies-block-top div.current strong{
color: {$color4|escape:'htmlall':'UTF-8'};
}

.shop-phone i{
color: {$color5|escape:'htmlall':'UTF-8'};
}


{* Header *}

header{
background: {$color6|escape:'htmlall':'UTF-8'};
}

#search_block_top .btn.button-search{
background: {$color7|escape:'htmlall':'UTF-8'};
}

#search_block_top .btn.button-search:hover{
background: {$color8|escape:'htmlall':'UTF-8'};
}

a.account_cart_rwd{
background: {$color59|escape:'htmlall':'UTF-8'};
}

#header .shopping_cart{
background: {$color9|escape:'htmlall':'UTF-8'};
}


{* Slider *}

#homepage-slider .bx-wrapper .bx-pager.bx-default-pager a:hover,
#homepage-slider .bx-wrapper .bx-pager.bx-default-pager a.active{
background: {$color10|escape:'htmlall':'UTF-8'};
}


{* Menu *}

@media (min-width: 768px) {
#block_top_menu{
background: {$color11|escape:'htmlall':'UTF-8'};
}
}

.cat-title{
background: {$color11|escape:'htmlall':'UTF-8'};
color: {$color13|escape:'htmlall':'UTF-8'};
}

.menu_sep2 .cat-title,
body #page #block_top_menu,
body #page .sf-menu > li{
border-color: {$color12|escape:'htmlall':'UTF-8'};
}

@media (min-width: 768px) {
.sf-menu > li > a{
color: {$color13|escape:'htmlall':'UTF-8'};
}
}

.sf-menu > li.sfHover > a,
.sf-menu > li > a:hover,
.sf-menu > li.sfHoverForce > a {
color: {$color14|escape:'htmlall':'UTF-8'};
background: {$color15|escape:'htmlall':'UTF-8'};
}

@media (min-width: 768px) {
.submenu2 .sf-menu li ul li a:hover{
background: {$color16|escape:'htmlall':'UTF-8'};
}
}

@media (max-width: 767px) {
.sf-menu > li.sfHover > a, .sf-menu > li > a:hover, .sf-menu > li.sfHoverForce > a { background: {$color16|escape:'htmlall':'UTF-8'}; }
}

{* Columns *}

.column .shopping_cart > a:first-child b,
#columns .block .title_block a,
#columns .block .title_block span{
border-color: {$color17|escape:'htmlall':'UTF-8'};
}

#columns .block_content .price{
color: {$color18|escape:'htmlall':'UTF-8'};
}

{* Tabs or blocks *}

#home-page-tabs > li.active a,
#home-page-tabs > li a:hover,
h4.index_title a,
h4.index_title span{
border-color: {$color19|escape:'htmlall':'UTF-8'};
}

{* Product-list *}

.new-label { background: {$color20|escape:'htmlall':'UTF-8'}; }

body ul.product_list.grid > li .product-container h5 a.product-name {
color: {$color21|escape:'htmlall':'UTF-8'};
}

ul.product_list .price {
color: {$color22|escape:'htmlall':'UTF-8'};
}

.button.ajax_add_to_cart_button span,
.cart_block .cart-buttons a#button_order_cart span {
background: {$color23|escape:'htmlall':'UTF-8'};
color: {$color24|escape:'htmlall':'UTF-8'};
border-color: {$color25|escape:'htmlall':'UTF-8'};
}

.button.ajax_add_to_cart_button:hover span,
.cart_block .cart-buttons a#button_order_cart span:hover {
background: {$color26|escape:'htmlall':'UTF-8'};
color: {$color27|escape:'htmlall':'UTF-8'};
border-color: {$color28|escape:'htmlall':'UTF-8'};
}

{* Footer *}

div#angarinfo_block .icon_cms{
color: {$color29|escape:'htmlall':'UTF-8'};
}

.footer-container{
background: {$color30|escape:'htmlall':'UTF-8'};
}

.footer-container,
.footer-container #footer h4,
#footer #newsletter_block_left,
.footer-container #footer #social_block{
border-color: {$color31|escape:'htmlall':'UTF-8'};
}

.footer-container #footer h4 span,
.footer-container #footer h4 a{
border-color: {$color32|escape:'htmlall':'UTF-8'};
}

.footer-container #footer h4,
.footer-container #footer h4 a,
.footer-container #footer a,
.footer-container #footer #block_contact_infos ul,
.footer-container #footer #block_contact_infos > div ul li > span,
.footer-container #footer #block_contact_infos > div ul li > span a,
#footer #newsletter_block_left h4,
.footer-container #footer #social_block h4{
color: {$color33|escape:'htmlall':'UTF-8'};
}

#footer #newsletter_block_left .form-group .button-small{
background: {$color34|escape:'htmlall':'UTF-8'};
}

#footer #newsletter_block_left .form-group .button-small:hover{
background: {$color35|escape:'htmlall':'UTF-8'};
}

.footer-container #footer .bottom-footer{
background: {$color36|escape:'htmlall':'UTF-8'};
border-color: {$color37|escape:'htmlall':'UTF-8'};
color: {$color38|escape:'htmlall':'UTF-8'};
}

{* Product page *}

.our_price_display,
.our_price_display .price{
color: {$color39|escape:'htmlall':'UTF-8'};
}

.box-info-product .exclusive {
background: {$color40|escape:'htmlall':'UTF-8'};
color: {$color41|escape:'htmlall':'UTF-8'};
border-color: {$color42|escape:'htmlall':'UTF-8'};
}

.box-info-product .exclusive:hover {
background: {$color43|escape:'htmlall':'UTF-8'};
color: {$color44|escape:'htmlall':'UTF-8'};
border-color: {$color45|escape:'htmlall':'UTF-8'};
}

h3.page-product-heading span,
.product_tabs2 ul#more_info_tabs li a.selected{
border-color: {$color46|escape:'htmlall':'UTF-8'};
}

{* Other buttons *}

.button.button-medium {
background: {$color47|escape:'htmlall':'UTF-8'};
color: {$color48|escape:'htmlall':'UTF-8'};
border-color: {$color49|escape:'htmlall':'UTF-8'};
}

.button.button-medium:hover {
background: {$color50|escape:'htmlall':'UTF-8'};
color: {$color51|escape:'htmlall':'UTF-8'};
border-color: {$color52|escape:'htmlall':'UTF-8'};
}

.button.button-small {
background: {$color53|escape:'htmlall':'UTF-8'};
color: {$color54|escape:'htmlall':'UTF-8'};
border-color: {$color55|escape:'htmlall':'UTF-8'};
}

.button.button-small:hover {
background: {$color56|escape:'htmlall':'UTF-8'};
color: {$color57|escape:'htmlall':'UTF-8'};
border-color: {$color58|escape:'htmlall':'UTF-8'};
}


{* Featured categories *}
#home_categories h4.homecat_title span {
border-color: {$color60|escape:'htmlall':'UTF-8'};
}

#home_categories ul li h2 span {
background: {$color61|escape:'htmlall':'UTF-8'};
}

#home_categories ul li a.view_more {
background: {$color62|escape:'htmlall':'UTF-8'};
color: {$color63|escape:'htmlall':'UTF-8'};
border-color: {$color64|escape:'htmlall':'UTF-8'};
}

#home_categories ul li a.view_more:hover {
background: {$color65|escape:'htmlall':'UTF-8'};
color: {$color66|escape:'htmlall':'UTF-8'};
border-color: {$color67|escape:'htmlall':'UTF-8'};
}

#home_cat_product h4.catprod_title span {
border-color: {$color68|escape:'htmlall':'UTF-8'};
}

#home_cat_product ul li .right-block .price {
color: {$color69|escape:'htmlall':'UTF-8'};
}

#home_cat_product ul li .left-block .new-label {
background: {$color70|escape:'htmlall':'UTF-8'};
}


{* Featured manufacturers *}
#home_man h4.man_title span {
border-color: {$color71|escape:'htmlall':'UTF-8'};
}

</style>