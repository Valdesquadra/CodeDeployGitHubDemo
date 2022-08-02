<?php

defined('MOODLE_INTERNAL') || die();

mb2_add_shortcode('reviews', 'mb2_shortcode_reviews');

function mb2_shortcode_reviews( $atts, $content= null ) {

	global $CFG;

	$atts2 = array(
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
		'mb' => 30
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
	$sliderdata = theme_mb2nl_shortcodes_slider_data( $courseopts );
	$reviews = theme_mb2nl_get_featured_reviews( $courseopts );
	$itemCount = count( $reviews );

	// Carousel layout
	$list_cls .= $carousel ? ' owl-carousel' : '';
	$list_cls .= ! $carousel ? ' theme-boxes theme-col-' . $columns : '';
	$list_cls .= ! $carousel ? ' gutter-' . $gutter : '';

	if ( $mt || $mb )
	{
		$style .= ' style="';
		$style .= $mt ? 'margin-top:' . $mt . 'px;' : '';
		$style .= $mb ? 'margin-bottom:' . $mb . 'px;' : '';
		$style .= '"';
	}

	$output .= '<div class="mb2-pb-content mb2-pb-reviews clearfix' . $cls . '"' . $style . '>';
	$output .= '<div class="mb2-pb-content-inner clearfix">';
	$output .= '<div class="mb2-pb-content-list' . $list_cls . '"' . $sliderdata . '>';

	if ( ! $itemCount )
	{
		$output .= get_string('nothingtodisplay');
	}

	$output .= theme_mb2nl_shortcodes_reviews_template( $reviews, $courseopts );

	$output .= '</div>';
	$output .= '</div>';
	$output .= '</div>';

	return $output;

}
