<?php
	/**
		* Plugin Name: OK FAQ Dashboard
		* Description: Display FAQ on dashboard
		* Version: 0.1
		* Author: Dennis Neumann
		* Author URI: www.dennisneumann.nl
		* License: GPLv2
		* Copyright 2013  DENNIS NEUMANN  (email : dennisneumann@galmoer.nl)
		
		This program is free software; you can redistribute it and/or modify
		it under the terms of the GNU General Public License, version 2, as 
		published by the Free Software Foundation.
		
		This program is distributed in the hope that it will be useful,
		but WITHOUT ANY WARRANTY; without even the implied warranty of
		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
		GNU General Public License for more details.
		
		You should have received a copy of the GNU General Public License
		along with this program; if not, write to the Free Software
		Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
		*
	*/
	
	require_once( plugin_dir_path( __FILE__ ) . '/custom_widgets.php' );
	
	class OK_FAQ_Dashboard {
		
		function __construct() {
			add_action( 'wp_dashboard_setup', array( $this, 'add_dashboard_widgets' ) );
		}
		
		
		function add_dashboard_widgets() {
			global $custom_dashboard_widgets;
			
			foreach ( $custom_dashboard_widgets as $widget_id => $options ) {
				wp_add_dashboard_widget(
				$widget_id,
				$options['title'],
				$options['callback']
				);
			}
		}
		
	}
	
	
	
	$wdw = new OK_FAQ_Dashboard();
	
?>