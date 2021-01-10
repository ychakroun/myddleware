<?php
/*********************************************************************************
 * This file is part of Myddleware.

 * @package Myddleware
 * @copyright Copyright (C) 2013 - 2015  Stéphane Faure - CRMconsult EURL
 * @copyright Copyright (C) 2015 - 2016  Stéphane Faure - Myddleware ltd - contact@myddleware.com
 * @link http://www.myddleware.com

 This file is part of Myddleware.

 Myddleware is free software: you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.

 Myddleware is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Myddleware.  If not, see <http://www.gnu.org/licenses/>.
*********************************************************************************/
use Automattic\WooCommerce\Client;

// $woocommerce = new Client(
//     'http://localhost/myddleware/wordpress',
//     'ck_4d08598e65e7ad6a188fecaeb26d06ecdbdd30b4',
//     'cs_82858696bfa94993dc4e27cdf59d5cf2432f87c1',
//     [
//         'version' => 'wc/v3',
//     ]
// );

// foreach($woocommerce->get('payment_gateways') as $key => $value){
//     foreach($value as $clef => $ligne){
//         echo '<br/>';
//         print_r("'".$clef."' => array( 'label' => '".ucfirst($clef)."',
//         'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),");
//     }

// }

// print_r($woocommerce->get('products'));

$moduleFields = [
    'products' => [
        'id' => ['label' => 'Id', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'name' => ['label' => 'Name', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'slug' => ['label' => 'Slug', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'permalink' => ['label' => 'Permalink', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'date_created' => ['label' => 'Date_created', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'date_created_gmt' => ['label' => 'Date_created_gmt', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'date_modified' => ['label' => 'Date_modified', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'date_modified_gmt' => ['label' => 'Date_modified_gmt', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'type' => ['label' => 'Type', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'status' => ['label' => 'Status', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'featured' => ['label' => 'Featured', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'catalog_visibility' => ['label' => 'Catalog_visibility', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'description' => ['label' => 'Description', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'short_description' => ['label' => 'Short_description', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'sku' => ['label' => 'Sku', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'price' => ['label' => 'Price', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'regular_price' => ['label' => 'Regular_price', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'sale_price' => ['label' => 'Sale_price', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'date_on_sale_from' => ['label' => 'Date_on_sale_from', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'date_on_sale_from_gmt' => ['label' => 'Date_on_sale_from_gmt', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'date_on_sale_to' => ['label' => 'Date_on_sale_to', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'date_on_sale_to_gmt' => ['label' => 'Date_on_sale_to_gmt', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'price_html' => ['label' => 'Price_html', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'on_sale' => ['label' => 'On_sale', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'purchasable' => ['label' => 'Purchasable', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'total_sales' => ['label' => 'Total_sales', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'virtual' => ['label' => 'Virtual', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'downloadable' => ['label' => 'Downloadable', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'downloads' => ['label' => 'Downloads', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'download_limit' => ['label' => 'Download_limit', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'download_expiry' => ['label' => 'Download_expiry', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'external_url' => ['label' => 'External_url', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'button_text' => ['label' => 'Button_text', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'tax_status' => ['label' => 'Tax_status', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'tax_class' => ['label' => 'Tax_class', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'manage_stock' => ['label' => 'Manage_stock', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'stock_quantity' => ['label' => 'Stock_quantity', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'stock_status' => ['label' => 'Stock_status', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'backorders' => ['label' => 'Backorders', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'backorders_allowed' => ['label' => 'Backorders_allowed', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'backordered' => ['label' => 'Backordered', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'sold_individually' => ['label' => 'Sold_individually', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'weight' => ['label' => 'Weight', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'dimensions__length' => ['label' => 'Dimensions : Length', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'dimensions__width' => ['label' => 'Dimensions : Width', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'dimensions__height' => ['label' => 'Dimensions : Height', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'shipping_required' => ['label' => 'Shipping_required', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'shipping_taxable' => ['label' => 'Shipping_taxable', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'shipping_class' => ['label' => 'Shipping_class', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'shipping_class_id' => ['label' => 'Shipping_class_id', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'reviews_allowed' => ['label' => 'Reviews_allowed', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'average_rating' => ['label' => 'Average_rating', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'rating_count' => ['label' => 'Rating_count', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'related_ids' => ['label' => 'Related_ids', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'upsell_ids' => ['label' => 'Upsell_ids', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'cross_sell_ids' => ['label' => 'Cross_sell_ids', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'parent_id' => ['label' => 'Parent_id', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'purchase_note' => ['label' => 'Purchase_note', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        // 'categories' => array( 'label' => 'Categories', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        // 'categories__id' => array( 'label' => 'Categories ID', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        // 'categories__name' => array( 'label' => 'Categories Name', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        // 'categories__slug' => array( 'label' => 'Categories Slug', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'tags' => ['label' => 'Tags', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'images' => ['label' => 'Images', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'attributes' => ['label' => 'Attributes', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'default_attributes' => ['label' => 'Default_attributes', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'variations' => ['label' => 'Variations', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'grouped_products' => ['label' => 'Grouped_products', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'menu_order' => ['label' => 'Menu_order', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'meta_data' => ['label' => 'Meta_data', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        '_links' => ['label' => '_links', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        // 'attributes__id' => array( 'label' => 'Product attributes id', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        // 'attributes__name' => array( 'label' => 'Product attributes name', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        // 'attributes__slug' => array( 'label' => 'Product attributes slug', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        // 'attributes__type' => array( 'label' => 'Product attributes type', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        // 'attributes__has_archives' => array( 'label' => 'Product attributes has archives', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0)
    ],
    'payment_gateways' => [
        'id' => ['label' => 'Id', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'title' => ['label' => 'Title', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'description' => ['label' => 'Description', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'order' => ['label' => 'Order', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'enabled' => ['label' => 'Enabled', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'method_title' => ['label' => 'Method_title', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'method_description' => ['label' => 'Method_description', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'method_supports' => ['label' => 'Method_supports', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'settings' => ['label' => 'Settings', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        '_links' => ['label' => '_links', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
    ],
    'customers' => [
        'id' => ['label' => 'Id', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'date_created' => ['label' => 'Date Created', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'date_created_gmt' => ['label' => 'Date Created GMT', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'date_modified' => ['label' => 'Date Modified', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'date_modified_gmt' => ['label' => 'Date Modified GMT', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'email' => ['label' => 'Email', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'first_name' => ['label' => 'First Name', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'last_name' => ['label' => 'Id', 'Last Name' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'role' => ['label' => 'Id', 'Role' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'username' => ['label' => 'Username', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'password' => ['label' => 'Password', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'billing__first_name' => ['label' => 'Billing : First Name', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'billing__last_name' => ['label' => 'Billing : Last Name', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'billing__company' => ['label' => 'Billing : Company', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'billing__address_1' => ['label' => 'Billing : Address 1', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'billing__address_2' => ['label' => 'Billing : Address 2', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'billing__city' => ['label' => 'Billing : City', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'billing__postcode' => ['label' => 'Billing : Postcode', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'billing__country' => ['label' => 'Billing : Country', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'billing__state' => ['label' => 'Billing : State', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'billing__email' => ['label' => 'Billing : Email', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'billing__phone' => ['label' => 'Billing : Phone', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'billing__state' => ['label' => 'Billing : State', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'shipping__first_name' => ['label' => 'Shipping : First Name', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'shipping__last_name' => ['label' => 'Shipping : Last Name', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'shipping__company' => ['label' => 'Shipping : Company', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'shipping__address_1' => ['label' => 'Shipping : Address 1', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'shipping__address_2' => ['label' => 'Shipping : Address 2', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'shipping__city' => ['label' => 'Shipping : City', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'shipping__state' => ['label' => 'Shipping : State', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'shipping__postcode' => ['label' => 'Shipping : Postcode', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'shipping__country' => ['label' => 'Shipping : Country', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'is_paying_customer' => ['label' => 'Is Paying Customer', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'avatar_url' => ['label' => 'Avatar URL', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'meta_data' => ['label' => 'Meta Data', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
    ],
    'orders' => [
        'id' => ['label' => 'Id', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'parent_id' => ['label' => 'Parent ID', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'number' => ['label' => 'Number', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'order_key' => ['label' => 'Order Key', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'created_via' => ['label' => 'Created via', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'version' => ['label' => 'Version', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'status' => ['label' => 'Status', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'currency' => ['label' => 'Currency', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'date_created' => ['label' => 'Date created', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'date_created_gmt' => ['label' => 'Date created GMT', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'date_modified' => ['label' => 'Date modified', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'date_modified_gmt' => ['label' => 'Date modified GMT', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'discount_total' => ['label' => 'Discount total', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'discount_tax' => ['label' => 'Discount tax', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'shipping_total' => ['label' => 'Shipping total', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'shipping_tax' => ['label' => 'Shipping tax', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'cart_tax' => ['label' => 'Cart tax', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'total' => ['label' => 'Total', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'total_tax' => ['label' => 'Total tax', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'prices_include_tax' => ['label' => 'Prices include tax', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        // 'customer_id'	=> array( 'label' => 'customer_id', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'customer_ip_address' => ['label' => 'Customer IP address', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'customer_user_agent' => ['label' => 'Customer user agent', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'customer_note' => ['label' => 'Customer Note', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'billing__first_name' => ['label' => 'Billing first name', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'billing__last_name' => ['label' => 'Billing last name', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'billing__company' => ['label' => 'Billing company', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'billing__address_1' => ['label' => 'Billing address 1', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'billing__address_2' => ['label' => 'Billing address 2', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'billing__city' => ['label' => 'Billing city', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'billing__postcode' => ['label' => 'Billing postcode', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'billing__country' => ['label' => 'Billing country', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'billing__state' => ['label' => 'Billing state', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'billing__email' => ['label' => 'Billing email', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'billing__phone' => ['label' => 'Billing phone', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'billing__state' => ['label' => 'Billing state', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'shipping__first_name' => ['label' => 'Shipping : First Name', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'shipping__last_name' => ['label' => 'Shipping : Last Name', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'shipping__company' => ['label' => 'Shipping : Company', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'shipping__address_1' => ['label' => 'Shipping : Address 1', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'shipping__address_2' => ['label' => 'Shipping : Address 2', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'shipping__city' => ['label' => 'Shipping : City', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'shipping__state' => ['label' => 'Shipping : State', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'shipping__postcode' => ['label' => 'Shipping : Postcode', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'shipping__country' => ['label' => 'Shipping : Country', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'payment_method' => ['label' => 'Payment method', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'payment_method_title' => ['label' => 'Payment method title', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'transaction_id' => ['label' => 'Transaction ID', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'date_paid' => ['label' => 'Date paid', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'date_paid_gmt' => ['label' => 'Date paid GMT', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'date_completed' => ['label' => 'Date completed', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'date_completed_gmt' => ['label' => 'Date completed GMT', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'cart_hash' => ['label' => 'Cart hash', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'meta_data' => ['label' => 'Meta data', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'line_items' => ['label' => 'Line items', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'tax_lines' => ['label' => 'Tax lines', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'shipping_lines' => ['label' => 'Shipping lines', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'fee_lines' => ['label' => 'Fee lines', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'coupon_lines' => ['label' => 'Coupon lines', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'refunds' => ['label' => 'Refunds', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'set_paid' => ['label' => 'Set paid', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
    ],
    'line_items' => [
        'id' => ['label' => 'Id', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'name' => ['label' => 'Name', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'product_id' => ['label' => 'Product ID', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'variation_id' => ['label' => 'Variation ID', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'quantity' => ['label' => 'Quantity', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'tax_class' => ['label' => 'Tax class', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'subtotal' => ['label' => 'Subtotal', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'subtotal_tax' => ['label' => 'Subtotal tax', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'total' => ['label' => 'Total', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'total_tax' => ['label' => 'Total tax', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'taxes' => ['label' => 'Taxes', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'meta_data' => ['label' => 'Meta data', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'sku' => ['label' => 'SKU', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'price' => ['label' => 'Price', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
    ],
];

$fieldsRelate = [
    'line_items' => [
        'order_id' => ['label' => 'Order Id', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
        'product_id' => ['label' => 'Product id', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
    ],
    'orders' => [
        'customer_id' => ['label' => 'Customer id', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0],
    ],
];
