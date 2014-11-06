<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <service@webbehinds.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
define('__ossn_fontawesome__', ossn_route()->com . 'ossnfontawesome/');
require_once(dirname(__FILE__) . "/lib/functions.php");

function fontawesome() {
	
	// add CSS / JS
	ossn_extend_view("css/ossn.default", "components/ossnfontawesome/css/fontawesome/admin");
	// register css
	ossn_new_css("font.awesome", "components/ossnfontawesome/vendors/font-awesome-4.2.0/css/font-awesome");
	ossn_load_css("font.awesome");
	ossn_load_css('font.awesome', 'admin');
}

ossn_register_callback('ossn', 'init', 'fontawesome');
