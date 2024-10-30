<?php
/*
Plugin Name: Job Board Manager - Breadcrumb
Plugin URI: http://paratheme.com
Description: Breadcrumb for Job Board Manager.
Version: 1.0.0
Author: paratheme
Author URI: http://paratheme.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 


class JobBoardManagerBreadcrumb{
	
	public function __construct(){

		define('job_bm_breadcrumb_plugin_url', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );
		define('job_bm_breadcrumb_plugin_dir', plugin_dir_path( __FILE__ ) );

		require_once( plugin_dir_path( __FILE__ ) . 'includes/functions.php');

		add_action( 'wp_enqueue_scripts', array( $this, 'job_bm_locations_front_scripts' ) );
	}
		
	public function job_bm_locations_front_scripts(){
		
		wp_enqueue_style('job_bm_breadcrumb_style', job_bm_breadcrumb_plugin_url.'assets/front/css/style.css');
	
	}
		
		
} new JobBoardManagerBreadcrumb();