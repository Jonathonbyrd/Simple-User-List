<?php
/**
 * Joomla! 1.5 component reservation
 *
 * @version $Id: view.html.php 2010-06-02 12:34:25 svn $
 * @author 
 * @package Joomla
 * @subpackage reservation
 * @license Copyright (c) 2010 - All Rights Reserved
 *
 * 
 *
 * Use this file if you want to manually build the relationships. Normally
 * done if you're not using sugarcrm.
 *
 */

// no direct access
defined('_JEXEC') or die('Restricted access');


$GLOBALS['relationships'] = array
(
	'category_images' => array
	(
		'id' => '8c484205-c65e-8d1f-7554-4c096634a8',
		'relationship_name' => 'category_images',
		'lhs_module' => 'categories',
		'lhs_table' => '#__byrdlist_categories',
		'lhs_key' => 'id',
		'rhs_module' => 'images',
		'rhs_table' => '#__byrdlist_images',
		'rhs_key' => 'id',
		'join_table' => '#__byrdlist_category_images',
		'join_key_lhs' => 'category_id',
		'join_key_rhs' => 'image_id',
		'relationship_type' => 'many-to-many',
		'relationship_role_column' => '',
		'relationship_role_column_value' => '',
		'reverse' => '0',
		'deleted' => '0',
	),
	'websites_images' => array
	(
		'id' => '8c484205-c65e-8d1f-7554-4c096634a8',
		'relationship_name' => 'websites_images',
		'lhs_module' => 'websites',
		'lhs_table' => '#__byrdlist_websites',
		'lhs_key' => 'id',
		'rhs_module' => 'images',
		'rhs_table' => '#__byrdlist_images',
		'rhs_key' => 'id',
		'join_table' => '#__byrdlist_websites_images',
		'join_key_lhs' => 'websites_id',
		'join_key_rhs' => 'images_id',
		'relationship_type' => 'many-to-many',
		'relationship_role_column' => '',
		'relationship_role_column_value' => '',
		'reverse' => '0',
		'deleted' => '0',
	),
	'listings_images' => array
	(
		'id' => '8c484205-c65e-2d1f-7554-4c44434a8',
		'relationship_name' => 'listings_images',
		'lhs_module' => 'listings',
		'lhs_table' => '#__byrdlist_listings',
		'lhs_key' => 'id',
		'rhs_module' => 'images',
		'rhs_table' => '#__byrdlist_images',
		'rhs_key' => 'id',
		'join_table' => '#__byrdlist_listings_images',
		'join_key_lhs' => 'listings_id',
		'join_key_rhs' => 'images_id',
		'relationship_type' => 'one-to-many',
		'relationship_role_column' => '',
		'relationship_role_column_value' => '',
		'reverse' => '0',
		'deleted' => '0',
	),
	'listings_bids' => array
	(
		'id' => '8c484205-c65e-8d1f-7554-4c09549008',
		'relationship_name' => 'listings_bids',
		'lhs_module' => 'listings',
		'lhs_table' => '#__byrdlist_listings',
		'lhs_key' => 'id',
		'rhs_module' => 'bids',
		'rhs_table' => '#__byrdlist_bids',
		'rhs_key' => 'id',
		'join_table' => '#__byrdlist_listings_bids',
		'join_key_lhs' => 'listings_id',
		'join_key_rhs' => 'bids_id',
		'relationship_type' => 'one-to-many',
		'relationship_role_column' => '',
		'relationship_role_column_value' => '',
		'reverse' => '0',
		'deleted' => '0',
	),
	'listings_comments' => array
	(
		'id' => '8c484205-c65e-8d1f-8554-47895434a8',
		'relationship_name' => 'listings_comments',
		'lhs_module' => 'listings',
		'lhs_table' => '#__byrdlist_listings',
		'lhs_key' => 'id',
		'rhs_module' => 'comments',
		'rhs_table' => '#__byrdlist_comments',
		'rhs_key' => 'id',
		'join_table' => '#__byrdlist_listings_comments',
		'join_key_lhs' => 'listings_id',
		'join_key_rhs' => 'comments_id',
		'relationship_type' => 'one-to-many',
		'relationship_role_column' => '',
		'relationship_role_column_value' => '',
		'reverse' => '0',
		'deleted' => '0',
	),
	'listings_reported' => array
	(
		'id' => '8c484205-c65e-851f-75674-4c09544a8',
		'relationship_name' => 'listings_reported',
		'lhs_module' => 'listings',
		'lhs_table' => '#__byrdlist_listings',
		'lhs_key' => 'id',
		'rhs_module' => 'reported',
		'rhs_table' => '#__byrdlist_reported',
		'rhs_key' => 'id',
		'join_table' => '#__byrdlist_listings_reported',
		'join_key_lhs' => 'listings_id',
		'join_key_rhs' => 'reported_id',
		'relationship_type' => 'one-to-many',
		'relationship_role_column' => '',
		'relationship_role_column_value' => '',
		'reverse' => '0',
		'deleted' => '0',
	),
	'listings_ratings' => array
	(
		'id' => '8c484205-c65e-8d1f-7654-4c096734a8',
		'relationship_name' => 'listings_ratings',
		'lhs_module' => 'listings',
		'lhs_table' => '#__byrdlist_listings',
		'lhs_key' => 'id',
		'rhs_module' => 'ratings',
		'rhs_table' => '#__byrdlist_ratings',
		'rhs_key' => 'id',
		'join_table' => '#__byrdlist_listings_ratings',
		'join_key_lhs' => 'listings_id',
		'join_key_rhs' => 'ratings_id',
		'relationship_type' => 'one-to-many',
		'relationship_role_column' => '',
		'relationship_role_column_value' => '',
		'reverse' => '0',
		'deleted' => '0',
	),
	'listings_tags' => array
	(
		'id' => '8c484205-c65e-8d1f-7554-4c46434a8',
		'relationship_name' => 'listings_tags',
		'lhs_module' => 'listings',
		'lhs_table' => '#__byrdlist_listings',
		'lhs_key' => 'id',
		'rhs_module' => 'tags',
		'rhs_table' => '#__byrdlist_tags',
		'rhs_key' => 'id',
		'join_table' => '#__byrdlist_listings_tags',
		'join_key_lhs' => 'listings_id',
		'join_key_rhs' => 'tags_id',
		'relationship_type' => 'many-to-many',
		'relationship_role_column' => '',
		'relationship_role_column_value' => '',
		'reverse' => '0',
		'deleted' => '0',
	),
	'listings_payments' => array
	(
		'id' => '8c484205-c65e-8d1f-7554-43455434a8',
		'relationship_name' => 'listings_payments',
		'lhs_module' => 'listings',
		'lhs_table' => '#__byrdlist_listings',
		'lhs_key' => 'id',
		'rhs_module' => 'payments',
		'rhs_table' => '#__byrdlist_payments',
		'rhs_key' => 'id',
		'join_table' => '#__byrdlist_listings_payments',
		'join_key_lhs' => 'listings_id',
		'join_key_rhs' => 'payments_id',
		'relationship_type' => 'many-to-many',
		'relationship_role_column' => '',
		'relationship_role_column_value' => '',
		'reverse' => '0',
		'deleted' => '0',
	),
	'listings_categories' => array
	(
		'id' => '8c484205-c65e-8d1f-4554-434455434a8',
		'relationship_name' => 'listings_categories',
		'lhs_module' => 'listings',
		'lhs_table' => '#__byrdlist_listings',
		'lhs_key' => 'id',
		'rhs_module' => 'categories',
		'rhs_table' => '#__byrdlist_categories',
		'rhs_key' => 'id',
		'join_table' => '#__byrdlist_listings_categories',
		'join_key_lhs' => 'listings_id',
		'join_key_rhs' => 'categories_id',
		'relationship_type' => 'many-to-many',
		'relationship_role_column' => '',
		'relationship_role_column_value' => '',
		'reverse' => '0',
		'deleted' => '0',
	),
	'listings_juser' => array
	(
		'id' => '8c484205-c65e-8d1f-7554-47766434a8',
		'relationship_name' => 'listings_juser',
		'lhs_module' => 'listings',
		'lhs_table' => '#__byrdlist_listings',
		'lhs_key' => 'id',
		'rhs_module' => 'juser',
		'rhs_table' => '#__byrdlist_juser',
		'rhs_key' => 'id',
		'join_table' => '#__byrdlist_listings_juser',
		'join_key_lhs' => 'listings_id',
		'join_key_rhs' => 'juser_id',
		'relationship_type' => 'many-to-one',
		'relationship_role_column' => '',
		'relationship_role_column_value' => '',
		'reverse' => '0',
		'deleted' => '0',
	),
	'listings_financials' => array
	(
		'id' => '8c484205-c65e-8d1f-7554-47766434a8',
		'relationship_name' => 'listings_financials',
		'lhs_module' => 'listings',
		'lhs_table' => '#__byrdlist_listings',
		'lhs_key' => 'id',
		'rhs_module' => 'financials',
		'rhs_table' => '#__byrdlist_listings',
		'rhs_key' => 'id',
		'join_table' => '#__byrdlist_listings_financials',
		'join_key_lhs' => 'listings_id',
		'join_key_rhs' => 'financial_id',
		'relationship_type' => 'many-to-one',
		'relationship_role_column' => '',
		'relationship_role_column_value' => '',
		'reverse' => '0',
		'deleted' => '0',
	),
	'listings_watched' => array
	(
		'id' => '843dda-c65e-8d1f-2333-443576434a8',
		'relationship_name' => 'listings_watched',
		'lhs_module' => 'listings',
		'lhs_table' => '#__byrdlist_listings',
		'lhs_key' => 'id',
		'rhs_module' => 'watched',
		'rhs_table' => '#__users',
		'rhs_key' => 'id',
		'join_table' => '#__byrdlist_listings_watched',
		'join_key_lhs' => 'listings_id',
		'join_key_rhs' => 'juser_id',
		'relationship_type' => 'many-to-many',
		'relationship_role_column' => '',
		'relationship_role_column_value' => '',
		'reverse' => '0',
		'deleted' => '0',
	),
	'websites_juser' => array
	(
		'id' => '8c43205-c65e-8d1f-7554-477663434a8',
		'relationship_name' => 'websites_juser',
		'lhs_module' => 'websites',
		'lhs_table' => '#__byrdlist_websites',
		'lhs_key' => 'id',
		'rhs_module' => 'juser',
		'rhs_table' => '#__byrdlist_juser',
		'rhs_key' => 'id',
		'join_table' => '#__byrdlist_websites_juser',
		'join_key_lhs' => 'websites_id',
		'join_key_rhs' => 'juser_id',
		'relationship_type' => 'many-to-one',
		'relationship_role_column' => '',
		'relationship_role_column_value' => '',
		'reverse' => '0',
		'deleted' => '0',
	),
	'comments_juser' => array
	(
		'id' => '8c484205-c65e-8d1f-7554-4355434a8',
		'relationship_name' => 'comments_juser',
		'lhs_module' => 'comments',
		'lhs_table' => '#__byrdlist_comments',
		'lhs_key' => 'id',
		'rhs_module' => 'juser',
		'rhs_table' => '#__byrdlist_juser',
		'rhs_key' => 'id',
		'join_table' => '#__byrdlist_comments_juser',
		'join_key_lhs' => 'comments_id',
		'join_key_rhs' => 'juser_id',
		'relationship_type' => 'many-to-one',
		'relationship_role_column' => '',
		'relationship_role_column_value' => '',
		'reverse' => '0',
		'deleted' => '0',
	),
	'bids_juser' => array
	(
		'id' => '8555205-c65e-8d1f-554-437768434a8',
		'relationship_name' => 'bids_juser',
		'lhs_module' => 'bids',
		'lhs_table' => '#__byrdlist_bids',
		'lhs_key' => 'id',
		'rhs_module' => 'juser',
		'rhs_table' => '#__byrdlist_juser',
		'rhs_key' => 'id',
		'join_table' => '#__byrdlist_bids_juser',
		'join_key_lhs' => 'bids_id',
		'join_key_rhs' => 'juser_id',
		'relationship_type' => 'many-to-one',
		'relationship_role_column' => '',
		'relationship_role_column_value' => '',
		'reverse' => '0',
		'deleted' => '0',
	),
	'categories_juser' => array
	(
		'id' => '8555205-c65e-8d1f-554-437768434a8',
		'relationship_name' => 'categories_juser',
		'lhs_module' => 'categories',
		'lhs_table' => '#__byrdlist_categories',
		'lhs_key' => 'id',
		'rhs_module' => 'juser',
		'rhs_table' => '#__byrdlist_juser',
		'rhs_key' => 'id',
		'join_table' => '#__byrdlist_categories_juser',
		'join_key_lhs' => 'categories_id',
		'join_key_rhs' => 'juser_id',
		'relationship_type' => 'many-to-one',
		'relationship_role_column' => '',
		'relationship_role_column_value' => '',
		'reverse' => '0',
		'deleted' => '0',
	),
	'images_juser' => array
	(
		'id' => '855dd5-c65e-8d1f-554-437458434a8',
		'relationship_name' => 'images_juser',
		'lhs_module' => 'images',
		'lhs_table' => '#__byrdlist_images',
		'lhs_key' => 'id',
		'rhs_module' => 'juser',
		'rhs_table' => '#__byrdlist_juser',
		'rhs_key' => 'id',
		'join_table' => '#__byrdlist_images_juser',
		'join_key_lhs' => 'images_id',
		'join_key_rhs' => 'juser_id',
		'relationship_type' => 'many-to-one',
		'relationship_role_column' => '',
		'relationship_role_column_value' => '',
		'reverse' => '0',
		'deleted' => '0',
	),
	'payments_juser' => array
	(
		'id' => '8555205-c65e-8d1f-554-437768434a8',
		'relationship_name' => 'payments_juser',
		'lhs_module' => 'payments',
		'lhs_table' => '#__byrdlist_payments',
		'lhs_key' => 'id',
		'rhs_module' => 'juser',
		'rhs_table' => '#__byrdlist_juser',
		'rhs_key' => 'id',
		'join_table' => '#__byrdlist_payments_juser',
		'join_key_lhs' => 'payments_id',
		'join_key_rhs' => 'juser_id',
		'relationship_type' => 'many-to-one',
		'relationship_role_column' => '',
		'relationship_role_column_value' => '',
		'reverse' => '0',
		'deleted' => '0',
	),
	'ratings_juser' => array
	(
		'id' => '8434305-c65e-8d1f-554-437456434a8',
		'relationship_name' => 'ratings_juser',
		'lhs_module' => 'ratings',
		'lhs_table' => '#__byrdlist_ratings',
		'lhs_key' => 'id',
		'rhs_module' => 'juser',
		'rhs_table' => '#__byrdlist_juser',
		'rhs_key' => 'id',
		'join_table' => '#__byrdlist_ratings_juser',
		'join_key_lhs' => 'ratings_id',
		'join_key_rhs' => 'juser_id',
		'relationship_type' => 'many-to-one',
		'relationship_role_column' => '',
		'relationship_role_column_value' => '',
		'reverse' => '0',
		'deleted' => '0',
	),
	'reported_juser' => array
	(
		'id' => '843430da-c65e-8d1f-554-447456434a8',
		'relationship_name' => 'reported_juser',
		'lhs_module' => 'reported',
		'lhs_table' => '#__byrdlist_reported',
		'lhs_key' => 'id',
		'rhs_module' => 'juser',
		'rhs_table' => '#__byrdlist_juser',
		'rhs_key' => 'id',
		'join_table' => '#__byrdlist_reported_juser',
		'join_key_lhs' => 'reported_id',
		'join_key_rhs' => 'juser_id',
		'relationship_type' => 'many-to-one',
		'relationship_role_column' => '',
		'relationship_role_column_value' => '',
		'reverse' => '0',
		'deleted' => '0',
	),
	'tags_juser' => array
	(
		'id' => '843dda-c65e-8d1f-554-4356576434a8',
		'relationship_name' => 'tags_juser',
		'lhs_module' => 'tags',
		'lhs_table' => '#__byrdlist_tags',
		'lhs_key' => 'id',
		'rhs_module' => 'juser',
		'rhs_table' => '#__byrdlist_juser',
		'rhs_key' => 'id',
		'join_table' => '#__byrdlist_tags_juser',
		'join_key_lhs' => 'tags_id',
		'join_key_rhs' => 'juser_id',
		'relationship_type' => 'many-to-one',
		'relationship_role_column' => '',
		'relationship_role_column_value' => '',
		'reverse' => '0',
		'deleted' => '0',
	),
	'comments_helpful' => array
	(
		'id' => '843dda-c65e-8d1f-2222-433576434a8',
		'relationship_name' => 'comments_helpful',
		'lhs_module' => 'comments',
		'lhs_table' => '#__byrdlist_comments',
		'lhs_key' => 'id',
		'rhs_module' => 'helpful',
		'rhs_table' => '#__users',
		'rhs_key' => 'id',
		'join_table' => '#__byrdlist_comments_helpful',
		'join_key_lhs' => 'comments_id',
		'join_key_rhs' => 'juser_id',
		'relationship_type' => 'one-to-many',
		'relationship_role_column' => '',
		'relationship_role_column_value' => '',
		'reverse' => '0',
		'deleted' => '0',
	),
	'comments_helpful_no' => array
	(
		'id' => '843dda-c65e-8d1f-2333-443576434a8',
		'relationship_name' => 'comments_helpful_no',
		'lhs_module' => 'comments',
		'lhs_table' => '#__byrdlist_comments',
		'lhs_key' => 'id',
		'rhs_module' => 'helpful_no',
		'rhs_table' => '#__users',
		'rhs_key' => 'id',
		'join_table' => '#__byrdlist_comments_helpful_no',
		'join_key_lhs' => 'comments_id',
		'join_key_rhs' => 'juser_id',
		'relationship_type' => 'one-to-many',
		'relationship_role_column' => '',
		'relationship_role_column_value' => '',
		'reverse' => '0',
		'deleted' => '0',
	),
	'ipn_payments' => array
	(
		'id' => '8c484205-c65e-8d1f-7554-43455434a8',
		'relationship_name' => 'ipn_payments',
		'lhs_module' => 'ipn',
		'lhs_table' => '#__byrdlist_ipn',
		'lhs_key' => 'id',
		'rhs_module' => 'payments',
		'rhs_table' => '#__byrdlist_payments',
		'rhs_key' => 'id',
		'join_table' => '#__byrdlist_ipn_payments',
		'join_key_lhs' => 'ipn_id',
		'join_key_rhs' => 'payments_id',
		'relationship_type' => 'many-to-many',
		'relationship_role_column' => '',
		'relationship_role_column_value' => '',
		'reverse' => '0',
		'deleted' => '0',
	),
	
);
