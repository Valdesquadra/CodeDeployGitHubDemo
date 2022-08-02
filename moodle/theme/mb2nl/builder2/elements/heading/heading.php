<?php

defined('MOODLE_INTERNAL') || die();

mb2_add_shortcode( 'mb2pb_heading', 'mb2_shortcode_mb2pb_heading' );

function mb2_shortcode_mb2pb_heading( $atts, $content = null ){

	$atts2 = array(
		'id' => 'heading',
		'tag'=> 'h4',
		'size' => 1.33,
		'align' =>'none',
		'fweight' => 400,
		'lspacing' => 0,
		'wspacing' => 0,
		'upper' => 0,
		'mt' => 0,
		'mb' => 30,
		'width' => 2000,
		'color' => '',
		'custom_class'=> '',
		'lh' => 1,
		'template' => ''
	);

	extract( mb2_shortcode_atts( $atts2, $atts ) );

	$output = '';
	$style = '';
	$elstyle = '';
	$cls = '';

	$cls .= ' heading-' . $align;
	$cls .= ' ' . $tag;
	//$cls .= ' hsize-' . $size;
	$cls .= ' upper' . $upper;
	$cls .= ' ' . theme_mb2nl_heading_cls( $size );
	$cls .= $custom_class !== '' ? ' ' . $custom_class : '';

	$tmplcls = $template ? ' mb2-pb-template-heading' : '';

	//if ( $mt || $mb )
	//{
		$style .= ' style="';
		$style .= 'margin-top:' . $mt . 'px;';
		$style .= 'margin-bottom:' . $mb . 'px;';
		$style .= 'max-width:' . $width . 'px;margin-left:auto;margin-right:auto;';
		$style .= '"';
	//}

	//if ( $color || $fweight || $size || $lspacing != 0 || $wspacing != 0 || $lh )
	//{
		$elstyle .= ' style="';
		$elstyle .= $color ? 'color:' . $color . ';' : '';
		$elstyle .= $fweight ? 'font-weight:' . $fweight . ';' : '';
		$elstyle .= $lspacing != 0 ? 'letter-spacing:' . $lspacing . 'px;' : '';
		$elstyle .= $wspacing != 0 ? 'word-spacing:' . $wspacing . 'px;' : '';
		$elstyle .= $size ? 'font-size:' . $size . 'rem;' : '';
		$elstyle .= $lh ? 'line-height:' . $lh . ';' : '';
		$elstyle .= '"';
	//}

	$content = $content ? $content : 'Heading text here';
	$atts2['content'] = $content;

	$output .= '<div class="mb2-pb-element mb2pb-heading' . $tmplcls . '"' . $style . theme_mb2nl_page_builder_el_datatts( $atts, $atts2 ) . '>';
	$output .= '<div class="element-helper"></div>';
	$output .= theme_mb2nl_page_builder_el_actions( 'element', 'heading' );
	$output .= '<' . $tag . ' class="heading' . $cls . '"' . $elstyle . '>';
	$output .= format_text( $content, FORMAT_HTML );
	$output .= '</' . $tag . '>';
	$output .= '</div>';

	return $output;

}
