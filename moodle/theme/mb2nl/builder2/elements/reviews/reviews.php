<?php

defined('MOODLE_INTERNAL') || die();

mb2_add_shortcode('mb2pb_reviews', 'mb2_shortcode_mb2pb_reviews');

function mb2_shortcode_mb2pb_reviews($atts, $content= null) {

	$atts2 = array(
		'id' => 'reviews',
		'limit' => 8,
		'carousel' => 0,
		'columns' => 3,
		'sloop' => 0,
		'snav' => 1,
		'sdots' => 0,
		'autoplay' => 0,
		'pausetime' => 5000,
		'animtime' => 450,
		'desclimit' => 25,
		'titlelimit' => 6,
		'gutter' => 'normal',
		'custom_class' => '',
		'mt' => 0,
		'mb' => 30,
		'template' => ''
	);

	extract( mb2_shortcode_atts( $atts2, $atts ) );

	$output = '';
	$cls = '';
	$list_cls = '';
	$col_cls = '';
	$style = '';

	// Set column style
	$col = 0;
	$col_style = '';
	$list_style = '';

	$courseopts = theme_mb2nl_page_builder_2arrays( $atts, $atts2 );
	$reviews = theme_mb2nl_get_featured_reviews( $courseopts );

	$itemCount = count( $reviews );

	// Carousel layout
	$list_cls .= $carousel ? ' owl-carousel' : '';
	$list_cls .= ! $carousel ? ' theme-boxes theme-col-' . $columns : '';
	$list_cls .= ! $carousel ? ' gutter-' . $gutter : '';

	$cls .= $template ? ' mb2-pb-template-reviews' : '';

	if ( $mt || $mb )
	{
		$style .= ' style="';
		$style .= $mt ? 'margin-top:' . $mt . 'px;' : '';
		$style .= $mb ? 'margin-bottom:' . $mb . 'px;' : '';
		$style .= '"';
	}

	$output .= '<div class="mb2-pb-content mb2-pb-element mb2-pb-reviews clearfix' . $cls . '"' . $style . theme_mb2nl_page_builder_el_datatts( $atts, $atts2 ) . '>';
	$output .= '<div class="element-helper"></div>';
	$output .= theme_mb2nl_page_builder_el_actions( 'element', 'reviews' );
	$output .= '<div class="mb2-pb-content-inner mb2-pb-element-inner clearfix">';
	$output .= '<div class="mb2-pb-content-list' . $list_cls . '">';

	if ( ! $itemCount )
	{
		$output .= '<div class="theme-box">';
		$output .= get_string( 'nothingtodisplay' );
		$output .= '</div>';
	}
	else
	{
		$output .= theme_mb2nl_shortcodes_reviews_template( $reviews, $courseopts );
	}

	$output .= '</div>';
	$output .= '</div>';
	$output .= '</div>';

	return $output;

}
