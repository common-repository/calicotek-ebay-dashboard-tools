<?php
/*
Plugin Name: CaliCoTek Ebay Dashboard Tools
Plugin URI: http://calicotek.com/calicotek-wp/
Description: This plugin Adds an Ebay Tools & Announcements Feed Widget to the Wordpress Admin Dashboard Page.. Many Features Coming Soon, IE; Full Settings and Ebay API integaration, Feedback, Ready To Ship Notfications, Messages and more.
Version: 1.8.1
Author: ModManMatt
Author URI: http://calicotek.com/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

// For debugging purposes
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
//define('WP-DEBUG', true);

/* Version check */
global $wp_version;
$exit_msg=__('calicotek ebay dashboard tools requires WordPress version 3.0 or higher; please update first.', 'cct_ebay');
if (version_compare($wp_version,"3.0","<"))
{
	exit ($exit_msg);
}

// Add Plugin Version Db Field and use it to store the plugin version for output in plugin
$cct_ebay_plugin_version = '1.8.0';

// the function to get the global variable
function cct_ebay_plugin_version_get_var()
{
    global $cct_ebay_plugin_version;
    return $cct_ebay_plugin_version;
}
 
  

// Set-up Action and Filter Hooks
register_activation_hook(__FILE__, 'cct_ebay_add_defaults');  // add action hook defaults to database
register_uninstall_hook(__FILE__, 'cct_ebay_delete_plugin_options');  // clean and delete old plugin options if option to complete remove is used
add_action('admin_init', 'cct_ebay_init' );
add_action('admin_menu', 'cct_ebay_add_options_page'); // Register options Page
add_filter( 'plugin_action_links', 'cct_ebay_plugin_action_links', 10, 2 ); // adds setting link to plugin installer page
add_action( 'admin_menu', 'register_cct_ebay_dash_menu_page' ); // register dash menu and page action

// Delete options table entries ONLY when plugin deactivated AND deleted
function cct_ebay_delete_plugin_options() {
	delete_option('cct_ebay_options');
}

// Define default option settings
function cct_ebay_add_defaults() {
	$tmp = get_option('cct_ebay_options');
	if(($tmp['chk_default_options_db']=='1')||(!is_array($tmp))) {
		delete_option('cct_ebay_options'); // so we don't have to reset all the 'off' checkboxes too! (don't think this is needed but leave for now)
		$arr = array(
			'widget_title' => __('CaliCoTek Ebay Dashboard Tools', 'cct_ebay'),
			'feed_url' => 'http://announcements.ebay.com/feed/',
			'drp_select_box' => '5',
			'chk_default_options_db' => ''
		);
		update_option('cct_ebay_options', $arr);
	}
}



// Init plugin options to white list our options
function cct_ebay_init(){
	register_setting( 'cct_ebay_plugin_options', 'cct_ebay_options', 'cct_ebay_validate_options' );
	load_plugin_textdomain( 'cct_ebay' );
}

	if(!load_plugin_textdomain('cct_ebay','/wp-content/languages/'))
		load_plugin_textdomain('cct_ebay', false, basename( dirname( __FILE__ ) ) . '/languages' );

// Add menu page
function cct_ebay_add_options_page() {
	add_options_page('CCT Ebay Dash Widget Settings', 'CCT Ebay Dash Tools', 'manage_options', __FILE__, 'cct_ebay_render_form');
}


// Sart Plugin Options Page
// Render the Plugin options form
function cct_ebay_render_form() {
	?>
	<div class="wrap">
		<!-- Display Plugin Icon, Header, and Description -->
	  <table style="width:100%;">
		<tr>
		  <td><div class="icon32" id="icon-options-general"></div><h2><?php _e('CCT Ebay Dash Widget Settings', 'cct_ebay'); ?> 
		  </h2></td>
		  <td width="49%" align="right"><h2>Version : <?php echo $cct_ebay_plugin_version;?> Developed by: ModManMatt@CaliCoTek.Com <a href="http://calicotek.com/">CaliCoTek.Com</a></h2></td>
		</tr>
	  </table><hr />
	  <!-- Start Donation Plugin Info Heml -->
	  <table class="table_settings_page" style="width:100%;border:1;  ">
			<tr>
			  <td style="background-color:#FFFF99;" Align="center">		  
			  
		   
		    <!-- End Donation Plugin Info Heml -->
	  <b><i>Tip: </i></b><?php _e('Below you can adjust the output of the Dashboard Widget. You can change the title of the widget, the feed URL and the amount of feed items to show.', 'cct_ebay'); ?>

		<!-- Beginning of the Plugin Options Form -->
		<form method="post" action="options.php">
			<?php settings_fields('cct_ebay_plugin_options'); ?>
			<?php $options = get_option('cct_ebay_options'); ?>

		  
			<!-- Table Structure Containing Form Controls -->
			<!-- Each Plugin Option Defined on a New Table Row -->
		  <table  style="color:#666666;margin-left:2px;width:100%;">

				<!-- Textbox Control -->
				<tr>
					<th scope="row"><?php _e('Widget Title', 'cct_ebay'); ?></th>
					<td>
						<input type="text" size="30" name="cct_ebay_options[widget_title]" value="<?php echo $options['widget_title']; ?>" />
						<span style="color:#666666;margin-left:2px;"><?php _e('Change the title of the CCT Ebay Dash Widget into something of your liking', 'cct_ebay'); ?></span>
					</td>
				</tr>

				<!-- Textbox Control -->
				<tr>
					<th scope="row"><?php _e('Feed URL', 'cct_ebay'); ?></th>
					<td>
						<input type="text" size="30" name="cct_ebay_options[feed_url]" value="<?php echo $options['feed_url']; ?>" />
						<span style="color:#666666;margin-left:2px;"><?php _e('This is to Ebay Announcements feed by Default ... if you need to Change the feed-URL you may do so here', 'cct_ebay'); ?></span>
					</td>
				</tr>

				<!-- Select Drop-Down Control -->
				<tr>
					<th scope="row"><?php _e('Feed Item Amount?', 'cct_ebay'); ?></th>
					<td>
						<select name='cct_ebay_options[drp_select_box]'>
							<option value='1' <?php selected('1', $options['drp_select_box']); ?>>1</option>
							<option value='2' <?php selected('2', $options['drp_select_box']); ?>>2</option>
							<option value='3' <?php selected('3', $options['drp_select_box']); ?>>3</option>
							<option value='4' <?php selected('4', $options['drp_select_box']); ?>>4</option>
							<option value='5' <?php selected('5', $options['drp_select_box']); ?>>5</option>
							<option value='7' <?php selected('7', $options['drp_select_box']); ?>>7</option>
							<option value='10' <?php selected('10', $options['drp_select_box']); ?>>10</option>
						</select>
						<span style="color:#666666;margin-left:2px;"><?php _e('How many feed items to show in the widget?', 'cct_ebay'); ?></span>
					</td>
				</tr>
				<tr valign="top" style="border-top:#dddddd 1px solid;">
					<th scope="row"><?php _e('Database Options', 'cct_ebay'); ?></th>
					<td>
						<label><input name="cct_ebay_options[chk_default_options_db]" type="checkbox" value="1" <?php if (isset($options['chk_default_options_db'])) { checked('1', $options['chk_default_options_db']); } ?> /> <?php _e('Restore defaults upon plugin deactivation/reactivation', 'cct_ebay'); ?></label>
					  <br /><span style="color:#666666;margin-left:2px;"><?php _e('Only check this if you want to reset plugin settings upon Plugin reactivation', 'cct_ebay'); ?></span>
					</td>
				</tr>
			</table>
			<p class="submit">
			<input type="submit" class="button-primary" value="<?php _e('Save Settings', 'cct_ebay') ?>" />
			</p>
				</form>
			  </td><td width="200px" align"center"><p>Version 
			  
			  <?php // now get it in any place you want, even inside another function
function cct_ebay_plugin_version()
{
    $other_var = $cct_ebay_plugin_version_get_var();
    echo $cct_ebay_plugin_version; // show the global variable
}	 echo $cct_ebay_plugin_version ; 
			  ?>
			  
			  by ModManMatt@calicotek.com</p> <hr/>Like this Plugin? Please <a href="http://calicotek.com/donate">Donate!</a><hr/>
				Help its Creator Create more great plugins and Updates<a href="http://calicotek.com/donate">Donate Now!</a><hr />Need Help or Installition Instructions?... <a href="http://calicotek.com/donate">Try here</a>
			  <hr/>Other Great Plugins<br> by CaliCoTek
			  <ul>
				<li>CaliCoTek Floating Social Slider</li>
				<li>Calicotek Membership Dashboard</li>
			  </ul>
			  </td>
			
			  </tr>
		  </table>

	  
<!-- End Plugin Options Page -->

<?php
}

// Sanitize and validate input. Accepts an array, return a sanitized array.
function cct_ebay_validate_options($input) {
	// strip html from textboxes
	$input['widget_title'] =  wp_filter_nohtml_kses($input['widget_title']); // Sanitize input (strip html tags, and escape characters)
	$input['feed_url'] =  wp_filter_nohtml_kses($input['feed_url']); // Sanitize input (strip html tags, and escape characters)
	return $input;
}

// Display a Settings link on the main Plugins page
function cct_ebay_plugin_action_links($links, $file) {

	if ( $file == plugin_basename( __FILE__ ) ) {
	    // the anchor tag and href to the URL we want. For a "Settings" link, this needs to be the url of your settings page
       	$cct_ebay_links = '<a href="'.get_admin_url().'options-general.php?page=calicotek-ebay-dashboard-tools/index.php">'.__('Settings', 'cct_ebay').'</a>';
		// make the 'Settings' link appear first
		array_unshift( $links, $cct_ebay_links );
	}

	return $links;
}


// Add Feed Dashboard Widget
function cct_ebay_setup_function() {
	$options = get_option('cct_ebay_options');
	$widgettitle = $options['widget_title'];
	add_meta_box( 'cct_ebay_widget',  $widgettitle, 'cct_ebay_widget_function', 'dashboard', 'normal', 'high' );
}

function cct_ebay_widget_function() {
	$options = get_option('cct_ebay_options');
	$feedurl = $options['feed_url'];
	$select = $options['drp_select_box'];

	$rss = fetch_feed($feedurl);
	if (!is_wp_error($rss)) { // Checks that the object is created correctly
	// Figure out how many total items there are, but limit it to 3.
	$maxitems = $rss->get_item_quantity($select);
	// Build an array of all the items, starting with element 0 (first element).
	$rss_items = $rss->get_items(0, $maxitems);
	}
	if (!empty($maxitems)) {
?>

<!-- Start Widget  top buttons Output-->
<center>
  <table>
    <div class="cct_widget_menu">
      <td><a href="http://my.ebay.com/" target="_blank"><img src="<?php echo plugins_url(); ?>/calicotek-ebay-dashboard-tools/images/my-ebay-selling.gif" height="40px" width="40px" title="Open MyEbay in New Window" /></a></td>
      <td><a href="http://my.ebay.com/ws/eBayISAPI.dll?MyEbay&gbh=1&CurrentPage=MyeBayAllSelling" target="_blank"><img src="<?php echo plugins_url(); ?>/calicotek-ebay-dashboard-tools/images/selling-manager.gif" height="40px" width="40px" title="Open MyEbay Advanced Selling Manager" /></a></td>
	  <td><a href="http://cgi6.ebay.com/ws/eBayISAPI.dll?SellerDashboard" target="_blank"><img src="<?php echo plugins_url(); ?>/calicotek-ebay-dashboard-tools/images/dashboard-icon.gif" height="40px" width="40px" title="MyEbay Seller Dashboard" /></a></td>

	  <td><a href="http://www2.ebay.com/aw/announce.xml" target="_blank"><img src="<?php echo plugins_url(); ?>/calicotek-ebay-dashboard-tools/images/money_sign.jpg" height="40px" width="40px" title="Lessons" /></a></td>
      <td><a href="http://mesgmy.ebay.com/ws/eBayISAPI.dll?ViewMyMessages" target="_blank"><img src="<?php echo plugins_url(); ?>/calicotek-ebay-dashboard-tools/images/messages.gif" height="40px" width="40px" title="My Messages from Ebay" /></a></td>
      <td><a href="http://mystore.ebay.com/" target="_blank"><img src="<?php echo plugins_url(); ?>/calicotek-ebay-dashboard-tools/images/icon-ebay.png" height="40px" width="40px" title="My Store" /></a></td>
    </div>
  </table>
</center>

  <div class="cct_widget">
	<center>
	  <a href="http://announcements.ebay.com/" target="_blank"><font size="+1"><b><img src="<?php echo plugins_url(); ?>/calicotek-ebay-dashboard-tools/images/down-arrow.png" height="30px" width="30px">Ebay Announcements<img src="<?php echo plugins_url(); ?>/calicotek-ebay-dashboard-tools/images/down-arrow.png" height="30px" width="30px"></b></font></a>
	</center></div>
	
  <!-- Start Widget Scroller feed Output -->
  <div class="scroller">
		<ul>
<?php
    // Loop through each feed item and display each item as a hyperlink.
    foreach ($rss_items as $item) {

?>
		<li><span class="rss-date"><?php echo $item->get_date('j F Y'); ?> </span><a class="rsswidget" href='<?php echo $item->get_permalink(); ?>'><?php echo $item->get_title(); ?></a> </li>
<?php } ?>
	</ul>
  </div>
	
	  <!-- Start Widget bottom buttons Output-->
<center>
  <table>
    <div class="cct_widget_menu">
	  <td><a href="<?php echo plugins_url(); ?>/calicotek-ebay-dashboard-tools/includes/goodies/eBay_Millionaire_Secrets/eBay_Millionaire_Secrets.pdf" target="_blank">
		<img src="<?php echo plugins_url(); ?>/calicotek-ebay-dashboard-tools/images/topsecret.png" height="40px" width="40px" title="Ebay Millionair Secrets Guide" /></a></td>
	  
	        <td><a href="http://www2.ebay.com/aw/announce.xml" target="_blank"><img src="<?php echo plugins_url(); ?>/calicotek-ebay-dashboard-tools/images/stats-icon.png" height="40px" width="40px" title="My Ebay Status" /></a></td>
	  
	  <td><a href="http://calicotek.com/download/VIP%20Downloads/BayGenie%20eBay%20Auction%20Sniper%20Pro%20v3.3.6.1%20+%20Crack---PMS/BayGenie%20eBay%20Auction%20Sniper%20Pro%20v3.3.6.1%20+%20Crack---PMS%20-%20Zipped.tgz" target="_blank">
		<img src="<?php echo plugins_url(); ?>/calicotek-ebay-dashboard-tools/images/eabysniper3.jpg" height="40px" width="40px" title="Ebay Auction Sniper Tools" /></a></td>
	  
	  <td><a href="<?php echo plugins_url(); ?>/calicotek-ebay-dashboard-tools/includes/goodies/eBay_Millionaire_Secrets/eBay_Millionaire_Secrets.pdf" target="_blank">
		<img src="<?php echo plugins_url(); ?>/calicotek-ebay-dashboard-tools/images/turbo-lister.png" height="40px" width="40px" title="Ebay Turbo Lister Download" /></a></td>
	  
   </div>
  </table>
</center>	  
Plugin  by: <a href="http://calicotek.com">CaliCoTek.Com</a> - <a href="http://calicotek.com/donate">Please Donate</a>   

<?php
									 											
}
	$x = is_rtl() ? 'left' : 'right'; // This makes sure that the positioning is also correct for right-to-left languages
	echo '<style type="text/css">#cct_ebay_widget {float:$x;}</style>';
}
 // End Widget Scroller feed Output 

// End Widget Output-->

// Register the new dashboard widget into the 'wp_dashboard_setup' action
add_action( 'wp_dashboard_setup', 'cct_ebay_setup_function' );

// Adds stylesheet
add_action( 'admin_print_styles', 'cct_ebay_load_custom_admin_css' );


// The load CSS function
function cct_ebay_load_custom_admin_css() {
	wp_enqueue_style( 'cct_ebay_custom_admin_css', plugins_url( '/style.css', __FILE__ ) );
}


// Start admin Menu and Page Install code.
// add admin menu function to system for the menu
function register_cct_ebay_dash_menu_page(){ // Register the dash menu and page function the number 3 is the menu position system higher numbers move it down the list
    add_menu_page( 'CCT Ebay Dashboard', 'CCT Ebay Dash', 'manage_options', 'cct_ebay_page', 'cct_ebay_menu_page', plugins_url( 'calicotek-ebay-dashboard-tools/images/ebay-hammer-icon.png' )); 
}
// retreive the dashboard page code from dashpage.php and display the page when the menu button is clicked
function cct_ebay_menu_page(){
    require_once( 'dashpage.php' );	
}
// End admin Menu and Page Install code
  
  
?>