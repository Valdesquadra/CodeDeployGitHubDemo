<?php

defined('MOODLE_INTERNAL') || die();


mb2_add_shortcode('row', 'mb2_shortcode_row');


function mb2_shortcode_row ($atts, $content= null)
{
	extract(mb2_shortcode_atts( array(
		'rowheader' => 0,
		'rowheader_content' => '',
		'rowheader_textcolor' => '',
		'rowheader_bgcolor' => '',
		'rowheader_mb' => 30,
		'colgutter' => 's',
		'bgcolor' => '',
		'bgvideo' => '',
		'prbg' => 0,
		'scheme' => 'light',
		'bgimage' => '',
		'bgfixed' => 0,
		'rowhidden' => 0,
		'rowlang' => '',
		'parallax' => 0,
		//
		'heroimg' => 0,
		'heroimgurl' => '',
		'herov' => 'center',
		//'heroh' => 'right',
		'herow' => 1200,
		'heroml' => 0,
		'herogradl' => 0,
		'herogradr' => 0,
		//
		'bgtext' => 0,
		'bgtextmob' => 0,
		'bgtexttext' => 'Sample text',
		'btsize' => 290,
		'btfweight' => 600,
		'btlh' => 1,
		'btlspacing' => 0,
		'btwspacing' => 0,
		'btupper' => 0,
		'bth' => 'left',
		'btv' => 'center',
		'btcolor' => 'rgba(0,0,0,.05)',
		//
		'pt' => 60,
		'pb' => 0,
		'fw' => 0,
		'mt' => 0,
		'va' => 0,
		'wave' => 'none',
		'wavecolor' => '#ffffff',
		'wavepos' => 0,
		'wavefliph' => 0,
		'wavetop' => 0,
		'wavewidth' => 100,
		'waveheight' => 150,
		'rowaccess' => 0,
		'custom_class' => ''
	), $atts));

	$output = '';
	$row_style = '';
	$btcls = '';
	$btcls2 = '';
	$btstyle = '';
	$wrap_style = '';
	$wavestyle = '';
	$wavenum = 0;
	$innercls = '';

	$innercls .= ' ' . theme_mb2nl_heading_cls( $pt, 'rowpt-', false );
	$innercls .= ' ' . theme_mb2nl_heading_cls( $pb, 'rowpb-', false );

	$cls = $custom_class ? ' ' . $custom_class : '';
	$cls .= ' pre-bg' . $prbg;
	$cls .= ' ' . $scheme;
	$cls .= ' bgfixed' . $bgfixed;
	$cls .= ' wave-' . $wave;
	$cls .= ' va' . $va;
	$cls .= ' bgfixed' . $bgfixed;
	$cls .= ' wavefliph' . $wavefliph;
	$cls .= ' wavepos' . $wavepos;
	$cls .= ' colgutter-' . $colgutter;
	$cls .= ' parallax' . $parallax;
	$cls .= ' heroimg' . $heroimg;
	$cls .= ' herov' . $herov;
	$cls .= ' herogradl' . $herogradl;
	$cls .= ' herogradr' . $herogradr;
	$cls .= ' bgtextmob' . $bgtextmob;
	//$cls .= ' heroh' . $heroh;
	$cls .= ' isfw' . $fw;

	$btcls2 .= ' btupper' . $btupper;
	$btcls .= ' bth' . $bth;
	$btcls .= ' btv' . $btv;

	$btstyle .= ' style="';
	$btstyle .= 'font-size:' . $btsize . 'px;';
	$btstyle .= 'font-weight:' . $btfweight . ';';
	$btstyle .= 'line-height:' . $btlh . ';';
	$btstyle .= 'letter-spacing:' . $btlspacing . 'px;';
	$btstyle .= 'word-spacing:' . $btwspacing . 'px;';
	$btstyle .= 'color:' . $btcolor . ';';
	$btstyle .= '"';

	$lang_arr = explode( ',', $rowlang );
	$trimmed_lang_arr = array_map( 'trim', $lang_arr );

	if ( $rowlang && ! in_array( current_language(), $trimmed_lang_arr ) )
	{
		return ;
	}

	if ( $rowhidden && ! is_siteadmin() )
	{
		return ;
	}

	if ( $rowhidden && is_siteadmin() )
	{
		$cls .= ' hiddenel';
	}

	if ( $rowaccess == 1 )
	{
		if ( ! isloggedin() || isguestuser() )
		{
			return ;
		}
	}
	elseif ( $rowaccess == 2 )
	{
		if ( isloggedin() && ! isguestuser() )
		{
			return ;
		}
	}

	$isid = theme_mb2nl_get_id_from_class( $custom_class );
	$id_attr = $isid ? 'id="' . $isid . '" ' : '';

	if ( $bgimage || $mt )
	{
		$wrap_style .= ' style="';
		$wrap_style .= $bgimage ? 'background-image:url(\'' . $bgimage . '\');' : '';
		$wrap_style .= $mt ? 'margin-top:' . $mt . 'px;' : '';
		$wrap_style .= '"';
	}

	$row_style .= ' style="';
	$row_style .= 'padding-top:' . $pt . 'px;';
	$row_style .= 'padding-bottom:' . $pb . 'px;';
	$row_style .= $bgcolor ? 'background-color:' . $bgcolor . ';' : '';
	$row_style .= '"';

	$row_data = $parallax ? ' data-jarallax data-speed=".6"' : '';

	$output .= '<div ' . $id_attr . 'class="mb2-pb-row' . $cls . '"' . $wrap_style . $row_data . '>';
	$output .= '<div class="section-inner mb2-pb-row-inner' . $innercls . '"' . $row_style . '>';
	$output .= '<div class="container-fluid">';
	$output .= '<div class="row">';
	$output .= mb2_do_shortcode( $content );
	$output .= '</div>';
	$output .= '</div>';


	if ( $wave !== 'none' && $wave != 0 )
	{
		$waves = theme_mb2nl_get_waves();
		$wavestyle .= ' style="';
		$wavestyle .= 'width:' . $wavewidth . '%;';
		$wavestyle .= 'height:' . $waveheight . 'px;';
		$wavestyle .= '"';

		foreach ( $waves as $wave )
		{
			$wavenum++;

			$output .= '<div class="mb2-pb-row-wave wave-' . $wavenum . '">';
			$output .= '<svg xmlns="http://www.w3.org/2000/svg" viewBox="' . $wave['box'] . '" preserveAspectRatio="none"' . $wavestyle . '><path fill="' . $wavecolor . '" fill-opacity="1" d="' . $wave['d'] . '"></path></svg>';
			$output .= '</div>';
		}
	}

	if ( $heroimg )
	{
		$output .= '<div class="hero-img-wrap">';
		$output .= '<div class="hero-img-wrap2">';
		$output .= '<div class="hero-img-wrap3" style="width:' . $herow . 'px;left:' . $heroml . '%;">';
		$output .= '<img class="hero-img js-tilt" src="' . $heroimgurl . '" alt="">';
		$output .= '<div class="hero-img-grad grad-left" style="background-image:linear-gradient(to right,' . $bgcolor . ',rgba(255,255,255,0)); "></div>';
		$output .= '<div class="hero-img-grad grad-right" style="background-image:linear-gradient(to right,rgba(255,255,255,0),' . $bgcolor . '); "></div>';
		$output .= '</div>'; // hero-img-wrap3
		$output .= '</div>'; // hero-img-wrap2
		$output .= '</div>'; // hero-img-wrap
	}

	if ( $bgtext )
	{
		$output .= '<div class="bgtext' . $btcls . '">';
		$output .= '<div class="bgtext-text' . $btcls2 . '"' . $btstyle . '>';
		$output .= $bgtexttext;
		$output .= '</div>';
		$output .= '</div>';
	}

	$output .= '</div>';

	if ( $bgvideo )
	{
		$output .= '<div class="section-video">';
		$output .= '<video autoplay muted loop >';
	  	$output .= '<source src="' . $bgvideo . '">';
		$output .= '</video>';
		$output .= '</div>'; // section-video
	}

	$output .= $parallax ? '<img class="parallax-img" src="' . $bgimage . '" alt="">' : '';

	$output .= '</div>';

	return $output;

}
