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
 * Method to get blog posts
 *
 */
function theme_mb2nl_get_blog_posts( $opt = array() )
{

	global $DB, $CFG;

	require_once( $CFG->libdir . '/filelib.php' );

	$sql = '';
	$sqlorder = '';
	$sqlwhere = ' WHERE 1=1';
	$params = array();
	$sort = $opt['sortcreated'] ? 'created DESC' : 'lastmodified DESC';

	if ( $CFG->version >= 2021051700 ) // For moodle 3.11+
	{
		$userfieldsapi = \core_user\fields::for_userpic();
		$allnamefields = $userfieldsapi->get_sql('u', false, 'useridalias', '', false)->selects;
	}
	else
	{
		$allnamefields = \user_picture::fields('u', null, 'useridalias');
	}

	$sql .= 'SELECT p.*';
	$sql .= ',' . $allnamefields;
	$sql .= ' FROM';
	$sql .= ' {post} p';
	$sql .= ',{user} u';

	if ( $opt['postids'] && $opt['exposts'] )
	{
		$isnot = '';
		$opt['postids'] = explode( ',', $opt['postids'] );

		if ( $opt['exposts'] === 'exclude' )
		{
			$isnot = count( $opt['postids'] ) > 1 ? 'NOT ' : '!';
		}

		list( $postnsql, $postparams ) = $DB->get_in_or_equal( $opt['postids'] );
		$params = array_merge( $params, $postparams );
		$sqlwhere .= ' AND p.id ' . $isnot . $postnsql;
	}

	if ( $opt['tagids'] && $opt['extags'] )
	{
		$tagsarr = explode( ',', $opt['tagids'] );
		$isnot = '';
		$notexists = '';

		if ( $opt['extags'] === 'exclude' )
		{
			$isnot = count( $tagsarr ) > 1 ? 'NOT ' : '!';
			$notexists = 'NOT ';
		}

		list( $extagsinsql, $extagsparams ) = $DB->get_in_or_equal( $tagsarr );
		$params = array_merge( $params, $extagsparams );

		$sqlwhere .= ' AND ' . $notexists . 'EXISTS(';
		$sqlwhere .= ' SELECT ti.* FROM {tag_instance} ti WHERE 1=1';
		$sqlwhere .= ' AND ti.itemtype=\'post\'';
		$sqlwhere .= ' AND ti.itemid=p.id';
		$sqlwhere .= ' AND ti.tagid ' . $isnot . $extagsinsql;
		$sqlwhere .= ')';
	}

	$sqlwhere .= ' AND u.deleted=0';
	$sqlwhere .= ' AND p.userid=u.id';
	$sqlwhere .= ' AND (p.publishstate=\'site\' OR p.publishstate=\'public\')';

	$sqlwhere .= $opt['postexternal'] ? ' AND (p.module=\'blog\' OR p.module =\'blog_external\')' : ' AND (p.module !=\'blog_external\')';

	$sqlorder .= ' ORDER BY ' . $sort;

	return $DB->get_records_sql( $sql . $sqlwhere . $sqlorder, $params, 0 , $opt['limit'] );

}







/*
 *
 * Method to get shortcode course teplate
 *
 */
function theme_mb2nl_blog_template( $posts, $options )
{

	$output = '';
	$cls = '';

	if ( $options['layout'] == 1 )
	{
		$output .= '<div class="superpost">';
		$firstpost = array_shift( $posts );
		$output .= theme_mb2nl_blog_template_item( $firstpost, $options );
		$output .= '</div>';

		$output .= '<div class="postlist">';
	}

	if (  $options['layout'] != 1 &&  $options['superpost'] )
	{
		array_shift( $posts );
	}

	foreach ( $posts as $post )
	{
		$output .= theme_mb2nl_blog_template_item( $post, $options );
	}

	if ( $options['layout'] == 1 )
	{
		$output .= '</div>';
	}

	return $output;

}






/*
 *
 * Method to get shortcode blog item template
 *
 */
function theme_mb2nl_blog_template_item( $post, $options )
{
	global $OUTPUT, $DB, $PAGE;
	$output = '';

	if ( ! isset( $post->id ) )
	{
		return;
	}

	$blogplaceholder = theme_mb2nl_theme_setting( $PAGE, 'blogplaceholder', '', true );
	$postimgurl = $blogplaceholder ? $blogplaceholder : $OUTPUT->image_url( 'blog-default', 'theme' );
	$cls = $options['layout'] == 2 ? ' theme-box' : '';
	$syscontext = context_system::instance();
	$postlink = new moodle_url( '/blog/index.php', array( 'entryid' => $post->id ) );

	if ( theme_mb2nl_blog_item_image( $post->id ) )
	{
		$postimgurl = theme_mb2nl_blog_item_image( $post->id );
	}

	$user = $DB->get_record( 'user', array( 'id' => $post->userid ) );
	$userfullname = fullname( $user, has_capability('moodle/site:viewfullnames', $syscontext ) );

	$output .= '<div class="theme-post-item post-' . $post->id . $cls .'">';
	$output .= '<div class="theme-post-item-inner">';

	$output .= '<div class="image-wrap">';

	$output .= '<div class="image">';
	$output .= '<a href="' . $postlink . '">';
	$output .= '<img src="' . $postimgurl . '" alt="' . $post->subject . '">';
	$output .= '</a>';
	$output .= '</div>'; // image

	$output .= '</div>'; // image-wrap

	$output .= '<div class="content-wrap">';

	$output .= '<div class="header">';

	if ( $options['author'] || $options['date'] )
	{
		$output .= '<div class="meta">';

		if ( $options['date'] )
		{
			$output .= '<span class="date">';
			$output .= userdate( $post->lastmodified, get_string( 'blogitemdate', 'local_mb2builder' ) );
			$output .= '</span>';
		}

		if ( $options['author'] && $userfullname )
		{
			$output .= '<span class="author">';
			$output .= $userfullname;
			$output .= '</span>';
		}

		$output .= '</div>'; // meta
	}

	$output .= '<h4 class="title">';
	$output .= '<a href="' . $postlink . '">' . $post->subject .'</a>';
	$output .= '</h4>';

	$output .= '</div>'; // header

	$output .= '<div class="desc">';
	$output .= theme_mb2nl_get_paragraph( theme_mb2nl_get_blog_description( $post->summary, $post->id ) );
	$output .= '</div>';

	$output .= '</div>'; // content-wrap

	$output .= '</div>'; // theme-post-item
	$output .= '</div>'; // theme-post-item-inner

	return $output;

}





/*
 *
 * Method to get shortcode blog item template
 *
 */
function theme_mb2nl_blog_item_image( $postid )
{

	global $CFG, $COURSE;

	require_once( $CFG->libdir . '/filelib.php' );
	$context = context_system::instance();
	$url = '';
	$fs = get_file_storage();
	$files = $fs->get_area_files( $context->id, 'blog', 'attachment', $postid );

	foreach ( $files as $f )
	{
		if ( $f->is_valid_image() )
		{
			$url = moodle_url::make_pluginfile_url(
				$f->get_contextid(), $f->get_component(), $f->get_filearea(), $f->get_itemid(), $f->get_filepath(), $f->get_filename(), false);
				break;
		}
	}

	return $url;


}





/**
 *
 * Method to update get blog description
 *
 */
function theme_mb2nl_get_blog_description( $description, $postid )
{
	global $COURSE, $CFG;
	require_once( $CFG->libdir . '/filelib.php' );

	$context = context_system::instance();
	$desc = file_rewrite_pluginfile_urls( $description, 'pluginfile.php', $context->id, 'blog', 'post', $postid );
	$desc = format_text( $desc, FORMAT_HTML );

	return $desc;

}





/**
 *
 * Method to update get course description
 *
 */
function theme_mb2nl_get_paragraph( $text )
{
	if ( ! preg_match( '@<p>@', $text ) )
	{
		return $text;
	}

	return substr( $text, strpos( $text, '<p'), strpos( $text, '</p>' ) + 4);

}
