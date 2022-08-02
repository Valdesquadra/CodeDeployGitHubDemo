<?php

defined('MOODLE_INTERNAL') || die();

mb2_add_shortcode('courses', 'mb2_shortcode_courses');

function mb2_shortcode_courses($atts, $content= null){

	global $CFG;

	$atts2 = array(
		'limit' => 8,
		'catids' => '',
		'courseids' => '',
		'excourses' => 0,
		'mobcolumns' => 0,
		'excats' => 0,
		'carousel' => 0,
		'columns' => 3,
		'sdots' => 0,
		'sloop' => 0,
		'snav' => 1,
		'sautoplay' => 1,
		'autoplay' => 0,
		'spausetime' => 5000,
		'pausetime' => 5000,
		'sanimate' => 600,
		'animtime' => 600,
		'desclimit' => 25,
		'titlelimit' => 6,
		'gridwidth' => 'normal',
		'gutter' => 'normal',
		'linkbtn' => 0,
		'btntext' => '',
		'prestyle' => 'none',
		'custom_class' => '',
		'colors' => '',
		'mt' => 0,
		'mb' => 30,
		'coursestudentscount' => 1,
		'coursinstructor' => 1,
		//'coursestartdate' => 0,
		'courseprice' => 1
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
	$courses = theme_mb2nl_get_courses( $courseopts );
	$itemCount = count( $courses );

	// Carousel layout
	$list_cls .= $carousel ? ' owl-carousel' : '';
	$list_cls .= ! $carousel ? ' theme-boxes theme-col-' . $columns : '';
	$list_cls .= ! $carousel ? ' gutter-' . $gutter : '';

	$cls .= ' prestyle' . $prestyle;

	if ( $mt || $mb )
	{
		$style .= ' style="';
		$style .= $mt ? 'margin-top:' . $mt . 'px;' : '';
		$style .= $mb ? 'margin-bottom:' . $mb . 'px;' : '';
		$style .= '"';
	}

	$output .= '<div class="mb2-pb-content mb2-pb-courses clearfix' . $cls . '"' . $style . '>';
	$output .= '<div class="mb2-pb-content-inner clearfix">';
	$output .= '<div class="mb2-pb-content-list' . $list_cls . '"' . $sliderdata . '>';

	if ( ! $itemCount )
	{
		$output .= get_string('nothingtodisplay');

		if ( in_array( theme_mb2nl_site_access(), array( 'admin', 'manager', 'coursecreator' ) ) )
		{
			$output .= '<div>';
			$output .= '<a href="' . new moodle_url($CFG->wwwroot . '/course/edit.php',array('category'=>theme_mb2nl_get_category()->id)) . '">' .
			get_string('createnewcourse') . '</a>';
			$output .= '</div>';
		}
	}

	$output .= theme_mb2nl_shortcodes_course_template( $courses, $courseopts );

	$output .= '</div>';
	$output .= '</div>';
	$output .= '</div>';

	return $output;

}
