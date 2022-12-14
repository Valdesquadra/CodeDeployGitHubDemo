<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *
 * @package   theme_mb2nl
 * @copyright 2017 - 2021 Mariusz Boloz (https://mb2themes.com)
 * @license   Commercial https://themeforest.net/licenses
 *
 */

defined('MOODLE_INTERNAL') || die();


/*
 *
 * Method to get search form
 *
 */
function theme_mb2nl_search_form( $menu = false )
{

	global $CFG;

	$output = '';
	$search_action = new moodle_url( '/course/search.php', array() );
	$search_text = get_string('search');
	$global_search = (isset($CFG->enableglobalsearch) && $CFG->enableglobalsearch && theme_mb2nl_moodle_from(2016052300));
	$input_name = 'search';

	if ( $global_search )
	{
		$search_action = new moodle_url( '/search/index.php', array() );
		$input_name = 'q';
	}

	$cls = $menu ? 'menu-searchform' : 'theme-searchform';
	$id1 = $menu ? 'menu-search' : 'theme-search';
	$id2 = $menu ? 'menu-searchbox' : 'theme-searchbox';

	$output .= '<div class="' . $cls . '">';
	$output .= '<div class="form-inner">';
	$output .= '<form id="' . $id1 . '" action="' . $search_action . '">';
	$output .= '<input id="' . $id2 . '" type="text" value="" placeholder="' . $search_text . '" name="' . $input_name . '">';
	$output .= '<button type="submit"><i class="fa fa-search"></i></button>';
	$output .= '</div>'; // form-inner
	$output .= '</form>';
	$output .= theme_mb2nl_search_links();
	$output .= '</div>';

	return $output;

}




/*
 *
 * Method to get search links
 *
 */
function theme_mb2nl_search_links()
{
	global $PAGE;

	$search_menu_items = theme_mb2nl_theme_setting($PAGE,'searchlinks');

	if ($search_menu_items)
	{
		return theme_mb2nl_static_content($search_menu_items, true, array('listcls'=>'theme-searchform-links'));
	}

}






/*
 *
 * Method to get login form
 *
 *
 */
function theme_mb2nl_login_form( $modal = false )
{

	global $PAGE, $OUTPUT, $USER, $CFG;

	$output = '';
    $logintoken = '';
	$formstyle = ! $modal ? ' style="display:none;"' : '';

	if ( theme_mb2nl_theme_setting( $PAGE, 'loginlinktopage' ) && ( ! isloggedin() || isguestuser() ) )
	{
		return;
	}

	$login_url = get_login_url();

    if ( method_exists( '\core\session\manager','get_login_token' ) )
    {
        $logintoken = '<input type="hidden" name="logintoken" value="' . s(\core\session\manager::get_login_token()) .'" />';
    }

	$output .= '<div class="theme-loginform"' . $formstyle . '>';

	if ( ! isloggedin() || isguestuser() )
	{
		$output .= $modal ? '<h4>' . get_string('login') . '</h4>' : '';

		$output .= '<form id="header-form-login" method="post" action="' . $login_url . '">';
		$output .= '<div class="form-field">';
		$output .= '<label id="user"><i class="fa fa-user"></i></label>';
		$output .= '<input id="login-username" type="text" name="username" placeholder="' . get_string('username') . '" />';
		$output .= '</div>';
		$output .= '<div class="form-field">';
		$output .= '<label id="pass"><i class="fa fa-lock"></i></label>';
		$output .= '<input id="login-password" type="password" name="password" placeholder="' . get_string('password') . '" />';
		$output .= '</div>';

		if ( $modal )
		{
			$output .= '<input type="submit" id="submit" name="submit" value="' . get_string('login') . '" />';
		}
		else
		{
			$output .= '<button type="submit"><i class="fa fa-angle-right"></i></button>';
		}

		$output .= $logintoken;
		$output .= '</form>';

		$loginLink = new moodle_url($CFG->wwwroot . '/login/forgot_password.php');
		$loginText = theme_mb2nl_theme_setting($PAGE,'logintext') ? theme_mb2nl_theme_setting($PAGE,'logintext') : get_string( 'logininfo','theme_mb2nl' );
		$output .= '<p class="login-info"><a href="' . $loginLink . '">' . $loginText . '</a></p>';

		$output .= theme_mb2nl_get_login_auth();

	}
	elseif ( isloggedin() && ! isguestuser() )
	{

		if ( $modal )
		{
			$logout_link = new moodle_url( '/login/logout.php', array( 'sesskey'=>sesskey() ) );
	        $profile_link = new moodle_url( '/user/profile.php', array( 'id'=>$USER->id ) );

			$output .= '<div class="user-picture-container">';
			$output .= $OUTPUT->user_picture( $USER, array( 'size' => 80, 'class' => '' ) );
			$output .= '<div class="user-description">';
			$output .= '<span>';
			$output .= get_string('loggedinas', 'core', '<strong>' . $USER->firstname . ' ' . $USER->lastname . '</strong><span class="nline">('  . $USER->username . ')</span>');
			$output .= '</span>';

			$output .= '<div class="user-buttons">';
			$output .= '<a href="' . $profile_link . '" class="btn btn-inverse btn-sm">';
	        $output .= '<span class="text1">' . get_string('profile', 'core') . '</span>';
	        $output .= '</a>';

	        $output .= '<a href="' . $logout_link . '" class="btn btn-primary btn-sm">';
	        $output .= '<span class="text1">' . get_string('logout', 'core') . '</span>';
	        $output .= '</a>';
			$output .= '</div>'; // user-buttons

			$output .= '</div>'; // user-description
			$output .= '</div>'; // user-picture-container
			$output .= $OUTPUT->user_menu();
		}
		else
		{
			$output .= $OUTPUT->user_menu();
			$output .= $OUTPUT->user_picture( $USER, array( 'size' => 80, 'class' => 'welcome_userpicture' ) );
		}

	}

	$output .= '</div>';

	return $output;


}




/*
 *
 * Method to get login form
 *
 */
function theme_mb2nl_header_tools( $modal = false, $class = '' )
{

	global $OUTPUT, $PAGE, $USER, $CFG, $COURSE;
	$output = '';
	$class = $class ? ' ' . $class : '';
	$headertoolstext = theme_mb2nl_theme_setting($PAGE,'headertoolstext');
	$isLoginPage = theme_mb2nl_is_login();

	$global_search = (isset($CFG->enableglobalsearch) && $CFG->enableglobalsearch && theme_mb2nl_moodle_from(2016052300));
	$search_text = '';
	//$search_text_core = $global_search ? get_string('globalsearch','admin') : get_string('searchcourses','core');
	$search_text_core = get_string('search');
	$login_text = '';
	$settings_text = '';
	$sitesettings_text = '';
	$signup_text = '';
	$text_close = ' <span class="text2">' . get_string('closebuttontitle') . '</span>';
	$jslink_cls = ! $modal  ? ' header-tools-jslink' : '';
	$modalatts = $modal ? ' data-toggle="modal" data-target="#header-modal-search"' : '';
	$modalsettingsatts = $modal ? ' data-toggle="modal" data-target="#header-modal-settings"' : '';

	if ( $headertoolstext )
	{
		$search_text = ' <span class="text1">' . $search_text_core . '</span>' . $text_close;
		$settings_text = ' <span class="text1">' . get_string( 'settings' ) . '</span>' . $text_close;
		$signup_text = ' <span class="text1">' . get_string( 'register', 'theme_mb2nl' ) . '</span>';
	}

	$toolscls = $headertoolstext ? 'text' : 'icon';

	$output .= '<div class="header-tools type-' . $toolscls . $class . '">';

	if ( theme_mb2nl_theme_setting( $PAGE,'navbarplugin' ) && theme_mb2nl_moodle_from( 2016120500 ) ) // Feature since Moodle 3.2
	{
		$output .= '<div class="theme-plugins">';
		$output .= $OUTPUT->navbar_plugin_output();
		$output .= '</div>';
	}

	if ( is_siteadmin() )
	{
		$output .= '<span class="header-tools-link' . $jslink_cls . ' tool-links" title="' . get_string( 'settings' ) . '"' . $modalsettingsatts . '>';
		$output .= '<i class="icon1 fa fa-sliders"></i>';
		$output .= $settings_text;
		$output .= '</span>';
	}

	$output .= '<span class="header-tools-link' . $jslink_cls . ' tool-search" title="' . $search_text_core . '"' . $modalatts . '>';
	$output .= '<i class="icon1 fa fa-search"></i>';
	$output .= $search_text;
	$output .= '</span>';

	$output .= theme_mb2nl_tool_login( $modal );

	if ( theme_mb2nl_theme_setting( $PAGE, 'signuplink' ) && $PAGE->pagetype !== 'login-signup' && ( ! isloggedin() || isguestuser() ) )
	{
		$signupliknarr = explode( '|', theme_mb2nl_theme_setting( $PAGE, 'signuppage' ) );
		$signupliktarget = isset( $signupliknarr[1] ) ? ' target="_blank"' : '';

		$signuplink = theme_mb2nl_theme_setting( $PAGE, 'signuppage' ) ? trim( $signupliknarr[0] )
		: new moodle_url( $CFG->wwwroot . '/login/signup.php', array() );

		$output .= '<a href="' . $signuplink . '" class="header-tools-link tool-signup" title="' . get_string( 'register', 'theme_mb2nl' ) . '"' . $signupliktarget . '>';
		$output .= '<i class="icon1 fa fa-user"></i>';
		$output .= $signup_text;
		$output .= '</a>';
	}

	$output .= '</div>';

	return $output;

}








/*
 *
 * Method to set login button
 *
 */
function theme_mb2nl_tool_login( $modal = false )
{
	global $PAGE, $CFG, $USER;
	$output = '';
	$notlogin = ( ! isloggedin() || isguestuser() );
	$loginlinktopage = theme_mb2nl_theme_setting( $PAGE, 'loginlinktopage' );
	$login_link = '#';
	$tag = 'span';
	$href = '';
	$jslink_cls = ! $modal ? ' header-tools-jslink' : '';
	$login_text = '';
	$text_close = ' <span class="text2">' . get_string('closebuttontitle','core') . '</span>';
	$loginicon = $notlogin  ? 'lock' : 'user';
	$logintitle = $notlogin ? get_string( 'login' ) : $USER->firstname;
	$modalatts = $modal ? ' data-toggle="modal" data-target="#header-modal-login"' : '';

	if ( theme_mb2nl_is_login() )
	{
		return;
	}

	if ( theme_mb2nl_theme_setting( $PAGE, 'headertoolstext' ) )
	{
		$login_text = ' <span class="text1">' . $logintitle . '</span>' . $text_close;
	}

	if ( $notlogin && $loginlinktopage )
	{
		$jslink_cls = '';
		$tag = 'a';

	   if ( $CFG->alternateloginurl )
	   {
			$login_link = $CFG->alternateloginurl;
	   }
	   else
	   {
			$login_link = new moodle_url( $CFG->wwwroot . '/login/index.php', array() );
	   }

	   $modalatts = '';
	   $href = ' href="' . $login_link . '"';
	}

	$output .= '<' . $tag . $href . ' class="header-tools-link' . $jslink_cls . ' tool-login" title="' . $logintitle . '"' . $modalatts . '>';
	$output .= '<i class="icon1 fa fa-' . $loginicon . '"></i>';
	$output .= $login_text;
	$output .= '</' . $tag . '>';

	return $output;

}





/*
 *
 * Method to set login auth
 *
 */
function theme_mb2nl_get_login_auth()
{
	global $PAGE;

	$output = '';
	$authsequence = get_enabled_auth_plugins( true ); // Get all auths, in sequence.
	$potentialidps = array();

	foreach ( $authsequence as $authname )
	{
		$authplugin = get_auth_plugin( $authname );
		$potentialidps = array_merge( $potentialidps, $authplugin->loginpage_idp_list( $PAGE->url->out(false) ) );
	}

	if ( ! empty( $potentialidps ) )
	{
		$output .= '<div class="potentialidps">';
		$output .= '<h6>' . get_string('potentialidps', 'auth') . '</h6>';
		$output .= '<div class="potentialidplist">';
		foreach ($potentialidps as $idp)
		{
			$output .= '<div class="potentialidp">';
			$output .= '<a class="btn btn-default" ';
			$output.= 'href="' . $idp['url']->out() . '" title="' . s($idp['name']) . '">';

			if ( ! empty($idp['iconurl'] ) )
			{
				$output .= '<img src="' . s($idp['iconurl']) . '" width="24" height="24" class="m-r-1"/>';
			}

			$output .= s($idp['name']) . '</a></div>';
		}

		$output .= '</div>';
		$output .= '</div>';
	}

	return $output;

}






/*
 *
 * Method to get moadl window with search and login form
 *
 */
function theme_mb2nl_modal_tmpl( $type )
{
    global $PAGE;
    $output = '';
    $cls = $type ? ' ' . $type : '';

	if ( theme_mb2nl_theme_setting( $PAGE, 'loginlinktopage' ) && $type === 'login' && ( ! isloggedin() || isguestuser() ) )
	{
		return;
	}

    $output .= '<div id="header-modal-' . $type . '" class="modal theme-modal-scale theme-forms' . $cls . '" role="dialog">';
    $output .= '<div class="modal-dialog" role="document">';
    $output .= '<div class="modal-content">';
    $output .= '<div class="theme-modal-container">';
    $output .= '<span class="close-container" data-dismiss="modal">&times;</span>';

	if ( $type === 'login' )
	{
		$output .= theme_mb2nl_login_form( true );
	}
	elseif ( $type === 'search' )
	{
		$output .= theme_mb2nl_search_form();
	}
	elseif ( $type === 'settings' )
	{
		$output .= theme_mb2nl_theme_links( true );
	}

    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div>';

    return $output;

}
