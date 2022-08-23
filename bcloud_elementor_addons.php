<?php
/**
 * Plugin Name: BCloud Elementor Addons
 * Description: Plugin to extend Elementor Form to allow users to add or edit post or custom posts from frontend. Adds Range & Calculated fields.
 * Requires at least: 4.7
 * Plugin URI:  https://blue-cloud.io/
 * Version:     1.1.0
 * License:     GPL-2.0-or-later
 * Author:      Salil Agarwal
 * Author URI:  https://blue-cloud.io
 * Text Domain: bcloud-elementor-addons
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define('BCLOUD_ELEMENTOR_ADDONS_URL', plugin_dir_url(__FILE__));


add_shortcode('first_shortcode', 'first_shortcode_fn');

function first_shortcode_fn(){
    ob_start();
    echo '<p>Ankush</p>';
    ?>
    <p>Software</p>
    <?php
    return ob_get_clean();
}


add_shortcode('bcloud_offcanvas', 'bcloud_offcanvas_fn');

function bcloud_offcanvas_fn($atts){
    $atts = shortcode_atts(
        array(
            'position'=> 'left'
        ), $atts, 'bcloud_offcanvas' );

     wp_enqueue_script(
            'bcloud-offcanvas',
            BCLOUD_ELEMENTOR_ADDONS_URL . 'assets/js/bcloud_offcanvas.js',
            'jquery',
            microtime(),
            true
            );
     wp_enqueue_style(
            'bcloud-off-canvas',
            BCLOUD_ELEMENTOR_ADDONS_URL . 'assets/css/bcloud_offcanvas.css',
            '',
            microtime()
        );
    
    ob_start();
    ?>
    <div class="cover" onclick="closeNav();"></div>
    <div>
        <span style="font-size:30px;cursor:pointer" class="open_off_canvas">&#9776; open</span>
        <div class="sidenav" style="<?php echo $atts['position']; ?> :0;">
            <a href="javascript:void(0)" class="closebtn">&times;</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
        </div>
    </div>
        <!--
        <div id="main">
            <h2>Sidenav Push Example</h2>
            <p>Click on the element below to open the side navigation menu, and push this content to the right.</p>
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
            </div>
        <div id="myright" class="sidenav" style="<?php// echo $atts['position']; ?> :0;">
                <a href="javascript:void(0)" class="closebtan3" onclick="closeNav3()">&times;</a>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Clients</a>
                <a href="#">Contact</a>
        </div>
                <h2>Right-sided Navigation</h2>
                <p>Click on the element below to open the right-sided navigation menu.</p>
                <span style="font-size:30px;cursor:pointer padding-left:" onclick="openNav3()">&#9776; open</span>
                </p>
                -->
                
	<?php
    return ob_get_clean();
}

add_shortcode('bcloud_tooltip', 'bcloud_tooltip_fn');

function bcloud_tooltip_fn($atts){
    $atts = shortcode_atts(
        array(
            'position'=> 'left'
        ), $atts, 'bcloud_tooltip' );

     wp_enqueue_script(
            'bcloud-tooltip',
            BCLOUD_ELEMENTOR_ADDONS_URL . 'vendors/js/bcloud_jquery_ui.js',
            'jquery',
            microtime(),
            true
            );
     wp_enqueue_style(
            'bcloud-tooltip',
            BCLOUD_ELEMENTOR_ADDONS_URL . 'vendors/css/bcloud_jquery_ui.css',
            '',
            microtime()
        );
     wp_enqueue_script(
            'bcloud-tooltip1',
            BCLOUD_ELEMENTOR_ADDONS_URL . 'assets/js/bcloud_tooltip.js',
            'jquery',
            microtime(),
            true
            );
              wp_enqueue_script(
            'bcloud-tooltip1',
            BCLOUD_ELEMENTOR_ADDONS_URL . 'assets/js/bcloud_tooltip.css',
            'jquery',
            microtime(),
            true
            );
    ob_start();
    ?>
    
    <div>
                    <p id="p1">
                         <a href="#" title="This is a tooltip">Tooltips</a>
	                     GeeksforGeeks is a computer science portal
	                     </p
	                     
	                     </div>
    <?php
    return ob_get_clean();
}