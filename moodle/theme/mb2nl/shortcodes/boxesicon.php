<?php

defined('MOODLE_INTERNAL') || die();

mb2_add_shortcode( 'boxesicon_item', 'mb2_shortcode_boxesicon_item' );
mb2_add_shortcode( 'boxicon', 'mb2_shortcode_boxesicon_item' ); // This is old shortcode

function mb2_shortcode_boxesicon_item( $atts, $content = null ){
	extract(mb2_shortcode_atts( array(
		'icon' => 'fa-rocket',
		'type' => '',
		'title'=> '',
		'link' => '',
		'color' => '',
		'ccolor' => '',
		'link_target' => 0,
		'target' =>'',
		'readmore' => '',
		'linkbtn' => '',
		'btntext' => ''
	), $atts ) );

	$output = '';
	$cls = '';
	$ccolorstyle = '';
	$boxstyle = '';

	// Link target
	$target = $target ? $target : $link_target;
	$target = $target ? ' target="_blank"' : '';

	// Get some global values from parent shortcode
	$type = $type ? $type : $GLOBALS['boxtype'];
	$btntext = $btntext ? $btntext : $GLOBALS['boxbtntext'];
	$color = $color ? $color : $GLOBALS['boxcolor'];
	$linkbtn = $linkbtn ? $linkbtn : $GLOBALS['boxlinkbtn'];

	if ( $GLOBALS['boxccolor'] )
	{
		$ccolorstyle .= ' style="';
		$ccolorstyle .= 'color:' . $GLOBALS['boxccolor'] . ';';
		$ccolorstyle .= '"';
	}

	if ( $GLOBALS['boxmb'] || $GLOBALS['boxheight'] )
	{
		$boxstyle .= ' style="';
		$boxstyle .= $GLOBALS['boxmb'] ? 'margin-bottom:' . $GLOBALS['boxmb'] . 'px;' : '';
		$boxstyle .= $GLOBALS['boxheight'] ? 'min-height:' . $GLOBALS['boxheight'] . 'px;' : '';
		$boxstyle .= '"';
	}

	// Box classess
	$cls .= ' type-' . $type;
	$cls .= ' color-' . $color;

	$readmore = $readmore ? $readmore : $btntext;
	$readmore = $readmore ? $readmore : get_string( 'readmore', 'theme_mb2nl' );

	$pref = theme_mb2nl_font_icon_prefix( $icon );

	$output .= '<div class="theme-box">';
	$output .= $link ? '<a href="' . $link . '"' . $target . '>' : '';
	$output .= '<div class="theme-boxicon' . $cls. '"' . $boxstyle . '>';
	$output .= '<div class="theme-boxicon-inner">';
	$output .= '<div class="theme-boxicon-icon"' . $ccolorstyle . '>';
	$output .= '<i class="' . $pref . $icon . '"></i>';
	$output .= '</div>';
	$output .= $link ? '</a>' : '';
	$output .= '<div class="theme-boxicon-content">';

	if ( $title )
	{
		$output .= '<h4 class="box-title">';
		$output .= $link ? '<a href="' . $link . '"' . $target . '>' : '';
		$output .= format_text( $title, FORMAT_HTML );
		$output .= $link ? '</a>' : '';
		$output .= '</h4>';
	}

	if ( $GLOBALS['boxdesc'] )
	{
		$output .= '<div class="box-desc">';
		$output .= format_text( $content, FORMAT_HTML );
		$output .= '</div>';
	}

	if ( $linkbtn && $link )
	{
		$output .= '<a class="theme-boxicon-readmore btn btn-primary" href="' . $link . '"' . $target . '>' . $readmore . '</a>';
	}

	$output .= '</div>';
	$output .= '</div>';
	if ( $ccolor )
	{
		$output .= '<div class="box-color" style="background-color:' . $ccolor . ';"></div>';
	}

	$output .= $type == 5 ? '<div class="bigicon"><i class="' . $pref . $icon . '"></i></div>' : '';
	$output .= '</div>';
	$output .= '</div>';


	return $output;

}
