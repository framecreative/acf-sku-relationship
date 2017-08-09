<?php

/*
 * Plugin Name: Advanced Custom Fields: SKU Relationship
 * Plugin URI: https://github.com/framedigital/acf-sku-relationship
 * Description: Field for relating Products by SKU
 * Version: 1.0.0
 * Author: Frame Creative
 * Author URI: https://framecreative.com.au
 */

load_plugin_textdomain('acf-sku_relationship', false, dirname(plugin_basename(__FILE__)) . '/lang/');

function include_field_types_sku_relationship()
{
    include_once('field.php');
}
add_action('acf/include_field_types', 'include_field_types_sku_relationship');
