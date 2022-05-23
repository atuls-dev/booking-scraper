<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://thresholdtestingsite.com/
 * @since      1.0.0
 *
 * @package    Booking_scraper
 * @subpackage Booking_scraper/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Booking_scraper
 * @subpackage Booking_scraper/public
 * @author     author <author@email.com>
 */
class Booking_scraper_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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
        
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/booking_scraper-public.css', array(), $this->version, 'all' );
		
		wp_enqueue_style( 'Datepicker-jquery-ui.css', plugin_dir_url( __FILE__ ) . 'css/jquery-ui.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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
        wp_enqueue_script( $this->plugin_name.'jquery-1.12.4', plugin_dir_url( __FILE__ ) . 'js/jquery-1.12.4.js', array( 'jquery' ), $this->version, false );
		
		wp_enqueue_script( $this->plugin_name.'jquery-ui.js', plugin_dir_url( __FILE__ ) . 'js/jquery-ui.js', array( 'jquery' ), $this->version, false );
		
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/booking_scraper-public.js', array( 'jquery' ), $this->version, false );
	
		wp_localize_script( $this->plugin_name, 'ajax', array( 'url' => admin_url( 'admin-ajax.php' ), 'pluginsUrl' => plugin_dir_url( __FILE__ ) ) ); 
	    
	}
	
	/**
	 * Registering shortcodes for different scrapers
	 * Add hook into public hooks includes/class-booking_scraper.php
	 * @since    1.0.0
	 */
	public function register_shortcodes() {
	   
        add_shortcode( 'hedonism', array( $this, 'hedonism_display') );
        
        add_shortcode( 'desire_riviera_maya', array( $this, 'desire_riviera_display') );
        
        add_shortcode( 'desire_pearl', array( $this, 'desire_pearl_display') );
        
        add_shortcode( 'temptation', array( $this, 'temptation_display') );
        
        add_shortcode( 'hidden_beach', array( $this, 'hidden_beach_display') );
     
    }
    
    /**
	 *  Display View of hedonism scraper form 
	 * 
	 * @since    1.0.0
	 */
    public function hedonism_display() {
        ob_start();
        include_once 'partials/hedonism-public-display.php';
        $myvariable = ob_get_clean();
    	return $myvariable;
    }
    

    /**
     * Display View of Desire Riviera Maya Scraper Form
     * 
     * @since    1.0.0
     */
    public function desire_riviera_display() {
        ob_start();
        include_once 'partials/desire_riviera-public-display.php';
        $myvariable = ob_get_clean();
    	return $myvariable;
    }
    
    /**
     * Display View of Desire Riviera Maya Scraper Form
     * 
     * @since    1.0.0
     */
    public function desire_pearl_display() {
        ob_start();
        include_once 'partials/desire_pearl-public-display.php';
        $myvariable = ob_get_clean();
    	return $myvariable;
    }
    
    /**
     * Display View of Desire Riviera Maya Scraper Form
     * 
     * @since    1.0.0
     */
    public function temptation_display() {
        ob_start();
        include_once 'partials/temptation-public-display.php';
        $myvariable = ob_get_clean();
    	return $myvariable;
    }
        
    /**
	 *  Display View of Hidden Beach form 
	 * 
	 * @since    1.0.0
	 */
    public function hidden_beach_display() {
        ob_start();
        include_once 'partials/hidden_beach-public-display.php';
        $myvariable = ob_get_clean();
    	return $myvariable;
    }
        
    /**
	 * Ajax Requested Function From Script 
	 * On page load & On button click 
	 * 
	 * @since    1.0.0
	 */
    public function getBooking() {
        
        if( isset($_POST) ) {
            
            $formId = $_POST['formId'];
            $aff_id = $_POST['aff_id']; 
            $date = $_POST['date']; 
            $nights = $_POST['nights']; 
            $adults = $_POST['adults'];
            $url = '';
            if ( $formId == 'hedonism') {
                
                $url = "https://integratedtravelsystems.com/api/v1/hedonism.php?date=". $date . "&nights=" . $nights . "&adults=" . $adults . "&aff_id=" . $aff_id ;
                
            }else if ( $formId == 'desire-riviera') {
                
                $url = "https://integratedtravelsystems.com/api/v1/desire_riviera_maya.php?date=". $date . "&nights=" . $nights . "&aff_id=" . $aff_id;
                
            }else if ( $formId == 'desire-pearl' ) {
                
                $url = "https://integratedtravelsystems.com/api/v1/desire_pearl.php?date=". $date . "&nights=" . $nights . "&aff_id=" . $aff_id ;
                
            }else if ( $formId == 'temptation' ) {
                
                $url = "https://integratedtravelsystems.com/api/v1/desire_temptation.php?date=". $date . "&nights=" . $nights ."&adults=" . $adults . "&aff_id=" . $aff_id;
                
            }else if ( $formId == 'hidden-beach' ) {
                
                $url = "https://integratedtravelsystems.com/api/v1/hidden_beach.php?date=". $date . "&nights=" . $nights ."&adults=" . $adults . "&aff_id=" . $aff_id ;
            }
            
    		$ch = curl_init();
    		curl_setopt($ch, CURLOPT_URL, $url );
    		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    		curl_setopt($ch, CURLOPT_TIMEOUT, 300);
    		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.99 Safari/537.36');
    		curl_setopt($ch, CURLOPT_HTTPHEADER, 
    			array(
    				'Connection: Keep-Alive',
    				'Keep-Alive: 300',
    				)
    		); 
    		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    		//curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data) );
    		curl_setopt($ch, CURLOPT_POST, true );  
    		$response = curl_exec($ch); 
    		
		    echo $response;
        }
        wp_die();
        
    }
    
    /**
	 *  Setting Default Constants For Scraper Form
	 * 
	 * @since    1.0.0
	 */
    public function setConstants() {
      
        if ( !defined( 'AFF_ID' ) ) {
            define( 'AFF_ID', 151 ); // default $aff_id
        }
        if ( !defined( 'DATE' ) ) {
            define( 'DATE', date('m/d/Y') ); // default $date
        }
        if ( !defined( 'ADULTS' ) ) {
            define( 'ADULTS', 2 ); // default $adults
        }
        if ( !defined( 'NIGHTS' ) ) {
            define( 'NIGHTS', 3 ); // default $nights
        }
  
    }
    
}
