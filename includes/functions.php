<?php
/*
* @Author 		ParaTheme
* Copyright: 	2015 ParaTheme
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 
	
	
	add_action( 'job_bm_action_single_job_main', 'job_bm_template_breadcrumb', 10 );
	add_action( 'job_bm_action_location_single_main', 'job_bm_template_breadcrumb', 10 );
	add_action( 'job_bm_action_company_single_main', 'job_bm_template_breadcrumb', 10 );
	
	
	if ( ! function_exists( 'job_bm_template_breadcrumb' ) ) {
		function job_bm_template_breadcrumb() {
			
			$job_bm_archive_page_id = get_option('job_bm_archive_page_id');
			$job_bm_archive_page_url = get_permalink($job_bm_archive_page_id);
			$job_bm_archive_page_title 	= get_the_title($job_bm_archive_page_id);	
			
			
			echo '<div id="job_bm_breadcrumb_container">
				<ul class="job_bm_breadcrumb">
					<li><a href="'.get_home_url().'"><i class="fa fa-home"></i></a> <span class="separetor"><i class="fa fa-angle-double-right"></i></span> </li>
					<li><a href="'.$job_bm_archive_page_url.'">'.$job_bm_archive_page_title.'</a> <span class="separetor"><i class="fa fa-angle-double-right"></i></span> </li>
					<li><a href="#">'. breadcrumb_shorten_string(get_the_title()) .'</a></li>
					
				</ul>
			</div>';
		}
	}

	function breadcrumb_shorten_string($string, $wordcount=""){
		
		if ( empty($wordcount) ) $wordcount = 5;
		
		$array = explode( " ", $string );
		if ( count($array) > $wordcount ){
			
			array_splice($array, $wordcount);
			return implode(" ", $array). '...';
		}
		else return $string;
    }
	
