<?php

defined('MOODLE_INTERNAL') || die();

mb2_add_shortcode('accordion', 'mb2_shortcode_accordion');
mb2_add_shortcode('accordion_item', 'mb2_shortcode_accordion_item');

function mb2_shortcode_accordion($atts, $content= null){

	extract(mb2_shortcode_atts( array(
		'show_all' => 0,
		'custom_class' => '',
		'isicon' => 1,
		'icon' => 'fa fa-trophy',
		'accordion_active' => theme_mb2nl_shortcodes_global_opts('accordion', 'accordion_active', 1),
		'mt' => 0,
		'mb' => 30,
		'parent' => 1
		), $atts)
	);

	$output = '';
	$style = '';

	// if( isset( $GLOBALS['accordion_count'] ) )
	// {
	//   $GLOBALS['accordion_count']++;
	// }
	// else
	// {
	//   $GLOBALS['accordion_count'] = 0;
	// }

	$GLOBALS['show_all'] = $show_all;
	//$GLOBALS['accordion_active'] = $accordion_active;
	//$GLOBALS['parent'] = $parent;
	$GLOBALS['accordionisicon'] = $isicon;
	//$GLOBALS['accordionicon'] = $icon;
	$accid = uniqid( 'mb2acc_' );
	$GLOBALS['mb2acc'] = $accid;
	$GLOBALS['mb2accparent'] = $parent;
	$GLOBALS['mb2accactive'] = $accordion_active;
	$GLOBALS['mb2accicon'] = $icon ? $icon : 'fa fa-trophy';

	$cls = $custom_class ? ' ' . $custom_class : '';
	$cls .= ' isicon' . $isicon;

	if ( $mt || $mb )
	{
		$style .= ' style="';
		$style .= $mt ? 'margin-top:' . $mt . 'px;' : '';
		$style .= $mb ? 'margin-bottom:' . $mb . 'px;' : '';
		$style .= '"';
	}

	$output .= '<div id="' . $accid . '" class="mb2-accordion accordion' . $cls . '"' . $style;
	$output .= '>' . mb2_do_shortcode($content) . '</div>';

	unset( $GLOBALS['mb2acc'] );
 	unset( $GLOBALS['mb2accparent'] );
	unset( $GLOBALS['mb2accactive'] );
	//unset( $GLOBALS['accitem'] );
	unset( $GLOBALS['mb2accicon'] );
	//unset( $GLOBALS['accordion_item_count'] );
	//unset( $GLOBALS['accordionisicon'] );

	return $output;

}





function mb2_shortcode_accordion_item($atts, $content= null){
	extract(mb2_shortcode_atts( array(
		'title' => '',
		'active' => 0,
		'icon' => ''
		), $atts)
	);

	$output = '';
	$cls = '';
	$parent = '';
	$show = '';
	$expanded = 'false';
	$colpsed = 'collapsed';

	$icon = $icon ? $icon : $GLOBALS['mb2accicon'];

	// Get accordion ids
	$parentid = $GLOBALS['mb2acc'];
	$accid = uniqid( 'accitem_' );

	// Get parent attribute
	if ( $GLOBALS['mb2accparent'] )
	{
		$parent = ' data-parent="#' . $parentid . '"';
	}

	// Define accordion number
	if ( isset( $GLOBALS['accitem'] ) )
	{
		$GLOBALS['accitem']++;
	}
	else
	{
		$GLOBALS['accitem'] = 1;
	}

	// Check if is active
	if( $GLOBALS['mb2accactive'] == $GLOBALS['accitem'] )
	{
		$show = ' show';
		$expanded = 'true';
		$colpsed = '';
	}

	$pref = theme_mb2nl_font_icon_prefix( $icon );
	$title = format_text( $title, FORMAT_HTML );

	// Check if in title is an icon
	if( $icon || $GLOBALS['accordionisicon'] )
	{
		$is_icon = ' is-icon';
		$title = '<i class="' . $pref . $icon . '"></i> ' . format_text( $title, FORMAT_HTML );
	}

	//$parent = isset($GLOBALS['parent']) ? $GLOBALS['parent'] : 1;

	$output .= '<div class="card">';

	$output .= '<div class="card-header' . $is_icon . '">';
	$output .= '<h5 class="mb-0">';
	$output .= '<a href="#" data-toggle="collapse" class="' . $colpsed . '" data-target="#' . $accid . '" aria-controls="#' . $accid . '" aria-expanded="' . $expanded . '"' . $parent . '>';

	//class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
	$output .= $title;
	$output .= '</a>';
	$output .= '</h5>';
	$output .= '</div>';


	$output .= '<div id="' . $accid . '" class="collapse' . $show . '"' . $parent . '>';
	$output .= '<div class="card-body">';
	$output .= theme_mb2nl_check_for_tags($content, 'iframe') ? $content : mb2_do_shortcode(format_text($content, FORMAT_HTML));
	$output .= '</div>';
	$output .= '</div>';


	$output .= '</div>';


	return $output;
}
