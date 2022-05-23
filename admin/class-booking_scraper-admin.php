<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://thresholdtestingsite.com/
 * @since      1.0.0
 *
 * @package    Booking_scraper
 * @subpackage Booking_scraper/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Booking_scraper
 * @subpackage Booking_scraper/admin
 * @author     author <author@email.com>
 */
class Booking_scraper_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Booking_scraper_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Booking_scraper_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/booking_scraper-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Booking_scraper_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Booking_scraper_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/booking_scraper-admin.js', array( 'jquery' ), $this->version, false );

	}
    
    /**
	 * Creating Admin Dashboard for the admin area.
	 *
	 * @since    1.0.0
	 */
    public function booking_setup_menu(){
       
        add_menu_page( 
            'Scraper Plugin Page', // $page_title
            'Scraper Plugin', // $menu_title
            'manage_options', // $capability
            'booking-scraper', // $menu_slug
             array($this, 'page_callback_function'), // callback function 
             'dashicons-admin-plugins' // icon 
            );

    }
    
    /**
	 * Dashboard Page View.
	 *
	 * @since    1.0.0
	 */
    public function page_callback_function() {
       
        include_once 'partials/booking_scraper-admin-display.php';
       
    }

}
