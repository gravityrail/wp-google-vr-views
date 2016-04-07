<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Google_VR_Views
 * @subpackage Google_VR_Views/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Google_VR_Views
 * @subpackage Google_VR_Views/public
 * @author     Daniel Walmsley <goldsounds@gmail.com>
 */
class Google_VR_Views_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $google_vr_views    The ID of this plugin.
	 */
	private $google_vr_views;

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
	 * @param      string    $google_vr_views       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $google_vr_views, $version ) {

		$this->google_vr_views = $google_vr_views;
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
		 * defined in Google_VR_Views_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Google_VR_Views_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->google_vr_views, plugin_dir_url( __FILE__ ) . 'css/google-vr-views-public.css', array(), $this->version, 'all' );

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
		 * defined in Google_VR_Views_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Google_VR_Views_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->google_vr_views, plugin_dir_url( __FILE__ ) . 'js/google-vr-views-public.js', array( 'jquery' ), $this->version, false );

	}

	// [vrview url="to/my/image"]
	// <iframe width="100%" allowfullscreen frameborder="0" src="//storage.googleapis.com/vrview/index.html?image=//photovrse.com/examples/coral.jpg&is_stereo=true"></iframe>
	public function render_vrview_shortcode( $atts ) {
		$a = shortcode_atts( array(
			//image or video are required
			'image'     => NULL,
			'video'     => NULL,
			'preview'   => NULL,
			'is_stereo' => false,
			'start_yaw' => 0,
			'is_yaw_only' => false,
		), $atts );

		if ( !isset( $a['video'] ) && !isset( $a['image'] ) ) {
			return "Error: vrview requires 'image' or 'video' to be set";
		}

		$iframe_url = plugin_dir_url( __FILE__ ) . 'html/vrview.html';
		$iframe_url = add_query_arg( $a, $iframe_url );

		return <<<ENDHTML
			<iframe class="vrview" width="100%" allowfullscreen frameborder="0" src="$iframe_url"></iframe>
ENDHTML;
	}
}