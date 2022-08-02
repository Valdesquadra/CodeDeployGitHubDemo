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
 * @package    local_mb2builder
 * @copyright  2018 - 2020 Mariusz Boloz (https://mb2themes.com/)
 * @license    Commercial https://themeforest.net/licenses
 */

defined('MOODLE_INTERNAL') || die();



$mb2_settings = array(
	'id' => 'text',
	'subid' => '',
	'title' => get_string('text', 'local_mb2builder'),
	'icon' => 'fa fa-pencil',
	'tabs' => array(
		'general' => get_string('generaltab', 'local_mb2builder'),
		'typo' => get_string('text', 'local_mb2builder'),
		'typotitle' => get_string('title', 'local_mb2builder'),
		'button' => get_string('button', 'local_mb2builder'),
		'style' => get_string('styletab', 'local_mb2builder')
	),
	'attr' => array(
		'showtitle' => array(
			'type' => 'yesno',
			'section' => 'general',
			'title'=> get_string('title', 'local_mb2builder'),
			'options' => array(
				1 => get_string('yes', 'local_mb2builder'),
				0 => get_string('no', 'local_mb2builder')
			),
			'default' => 0,
			'action' => 'class',
			'selector' => '.theme-text-inner',
			'class_remove' => 'title0 title1',
			'class_prefix' => 'title',
		),
		'title'=>array(
			'type'=>'text',
			'section' => 'general',
			'showon' => 'showtitle:1',
			'title'=> get_string('titletext', 'local_mb2builder'),
			'action' => 'text',
			'selector' => '.theme-text-title'
		),
		'content'=>array(
			'type'=>'editor',
			'section' => 'general',
			'title'=> get_string('text', 'local_mb2builder'),
			'selector' => '.theme-text-text'
		),

		/*


		'tfw' => 400,
		'tlh' => 1.2,
		'tlspacing' => 0,
		'twspacing' => 0,
		'tsizerem' => 1.4,
		'tcolor' => '',

		*/
		'tsizerem'=>array(
			'type' => 'range',
			'section' => 'typotitle',
			'title'=> get_string('sizelabel', 'local_mb2builder'),
			'min'=> 1,
			'max' => 10,
			'step' => 0.01,
			'default'=> 1.4,
			'action' => 'style',
			'style_suffix' => 'none',
			'changemode' => 'input',
			'style_properity' => 'font-size',
			'selector' => '.theme-text-title',
			'style_suffix' => 'rem',
			'numclass' => 1,
			'sizepref' => 'textsize'
		),
		'tfw'=>array(
			'type'=>'range',
			'section' => 'typotitle',
			'title'=> get_string('fweight', 'local_mb2builder'),
			'min'=> 100,
			'max' => 900,
			'step' => 100,
			'default'=> 400,
			'action' => 'style',
			'selector' => '.theme-text-title',
			'style_suffix' => 'none',
			'changemode' => 'input',
			'style_properity' => 'font-weight'
		),
		'tlh'=>array(
			'type'=>'range',
			'section' => 'typotitle',
			'title'=> get_string('lh', 'local_mb2builder'),
			'min'=> .5,
			'max' => 3,
			'step' => .01,
			'default'=> 1.2,
			'action' => 'style',
			'changemode' => 'input',
			'selector' => '.theme-text-title',
			'style_suffix' => 'none',
			'style_properity' => 'line-height'
		),
		'tlspacing'=>array(
			'type'=>'range',
			'section' => 'typotitle',
			'title'=> get_string('lspacing', 'local_mb2builder'),
			'min'=> -10,
			'max' => 30,
			'step' => 1,
			'default'=> 0,
			'action' => 'style',
			'selector' => '.theme-text-title',
			'changemode' => 'input',
			'style_properity' => 'letter-spacing'
		),
		'twspacing'=>array(
			'type'=>'range',
			'section' => 'typotitle',
			'title'=> get_string('wspacing', 'local_mb2builder'),
			'min'=> -10,
			'max' => 30,
			'step' => 1,
			'default'=> 0,
			'action' => 'style',
			'changemode' => 'input',
			'selector' => '.theme-text-title',
			'style_properity' => 'word-spacing'
		),
		'tupper' => array(
			'type' => 'yesno',
			'section' => 'typotitle',
			'title'=> get_string('uppercase', 'local_mb2builder'),
			'options' => array(
				1 => get_string('yes', 'local_mb2builder'),
				0 => get_string('no', 'local_mb2builder')
			),
			'default' => 0,
			'action' => 'class',
			'selector' => '.theme-text-title',
			'class_remove' => 'upper0 upper1',
			'class_prefix' => 'upper',
		),
		'tmb'=>array(
			'type'=>'range',
			'section' => 'typotitle',
			'title'=> get_string('mb', 'local_mb2builder'),
			'min'=> 0,
			'max' => 300,
			'default'=> 30,
			'action' => 'style',
			'changemode' => 'input',
			'selector' => '.theme-text-title',
			'style_properity' => 'margin-bottom'
		),
		'tcolor' => array(
			'type'=>'color',
			'section' => 'typotitle',
			'title'=> get_string('color', 'local_mb2builder'),
			'action' => 'color',
			'selector' => '.theme-text-title',
			'style_properity' => 'color'
		),
		'sizerem'=>array(
			'type' => 'range',
			'section' => 'typo',
			'title'=> get_string('sizelabel', 'local_mb2builder'),
			'min'=> 1,
			'max' => 10,
			'step' => 0.01,
			'default'=> 1,
			'action' => 'style',
			'style_suffix' => 'none',
			'changemode' => 'input',
			'style_properity' => 'font-size',
			'selector' => '.theme-text-text',
			'style_suffix' => 'rem',
			'numclass' => 1,
			'sizepref' => 'textsize'
		),
		'fweight'=>array(
			'type'=>'range',
			'section' => 'typo',
			'title'=> get_string('fweight', 'local_mb2builder'),
			'min'=> 100,
			'max' => 900,
			'step' => 100,
			'default'=> 300,
			'action' => 'style',
			'selector' => '.theme-text-text',
			'style_suffix' => 'none',
			'changemode' => 'input',
			'style_properity' => 'font-weight'
		),
		'lh'=>array(
			'type'=>'range',
			'section' => 'typo',
			'title'=> get_string('lh', 'local_mb2builder'),
			'min'=> .5,
			'max' => 3,
			'step' => .01,
			'default'=> 1.67,
			'action' => 'style',
			'changemode' => 'input',
			'selector' => '.theme-text-text',
			'style_suffix' => 'none',
			'style_properity' => 'line-height'
		),
		'lspacing'=>array(
			'type'=>'range',
			'section' => 'typo',
			'title'=> get_string('lspacing', 'local_mb2builder'),
			'min'=> -10,
			'max' => 30,
			'step' => 1,
			'default'=> 0,
			'action' => 'style',
			'selector' => '.theme-text-text',
			'changemode' => 'input',
			'style_properity' => 'letter-spacing'
		),
		'wspacing'=>array(
			'type'=>'range',
			'section' => 'typo',
			'title'=> get_string('wspacing', 'local_mb2builder'),
			'min'=> -10,
			'max' => 30,
			'step' => 1,
			'default'=> 0,
			'action' => 'style',
			'changemode' => 'input',
			'selector' => '.theme-text-text',
			'style_properity' => 'word-spacing'
		),
		'color' => array(
			'type'=>'color',
			'section' => 'typo',
			'title'=> get_string('color', 'local_mb2builder'),
			'action' => 'color',
			'selector' => '.theme-text-text',
			'style_properity' => 'color'
		),
		'align' => array(
			'type' => 'buttons',
			'section' => 'style',
			'title'=> get_string('alignlabel', 'local_mb2builder'),
			'options' => array(
				'none' => get_string('none', 'local_mb2builder'),
				'left' => get_string('left', 'local_mb2builder'),
				'center' => get_string('center', 'local_mb2builder'),
				'right' => get_string('right', 'local_mb2builder')
			),
			'default' => 'none',
			'action' => 'class',
			'selector' => '.theme-text-inner',
			'class_remove' => 'align-none align-left align-right align-center',
			'class_prefix' => 'align-',
		),
		'scheme' => array(
			'type' => 'buttons',
			'section' => 'style',
			'title'=> get_string('scheme', 'local_mb2builder'),
			'options' => array(
				'light' => get_string('light', 'local_mb2builder'),
				'dark' => get_string('dark', 'local_mb2builder')
			),
			'default' => 'light',
			'action' => 'class',
			'selector' => '.theme-text-inner',
			'class_remove' => 'light dark'
		),
		'bgcolor' => array(
			'type'=>'color',
			'section' => 'style',
			'title'=> get_string('bgcolor', 'local_mb2builder'),
			'action' => 'color',
			'selector' => '.theme-text-inner',
			'style_properity' => 'background-color'
		),
		'gradient' => array(
			'type' => 'yesno',
			'section' => 'style',
			'title'=> get_string('gradient', 'local_mb2builder'),
			'options' => array(
				1 => get_string('yes', 'local_mb2builder'),
				0 => get_string('no', 'local_mb2builder')
			),
			'default' => 0,
			'action' => 'class',
			'selector' => '.theme-text-inner',
			'class_remove' => 'gradient0 gradient1',
			'class_prefix' => 'gradient',
		),
		'upper' => array(
			'type' => 'yesno',
			'section' => 'typo',
			'title'=> get_string('uppercase', 'local_mb2builder'),
			'options' => array(
				1 => get_string('yes', 'local_mb2builder'),
				0 => get_string('no', 'local_mb2builder')
			),
			'default' => 0,
			'action' => 'class',
			'selector' => '.theme-text-text',
			'class_remove' => 'upper0 upper1',
			'class_prefix' => 'upper',
		),
		'width'=>array(
			'type'=>'range',
			'section' => 'style',
			'title'=> get_string('widthlabel', 'local_mb2builder'),
			'min'=> 0,
			'max' => 2000,
			'default'=> 2000,
			'action' => 'style',
			'changemode' => 'input',
			'style_properity' => 'max-width'
		),
		'mt'=>array(
			'type'=>'range',
			'section' => 'style',
			'title'=> get_string('mt', 'local_mb2builder'),
			'min'=> 0,
			'max' => 300,
			'default'=> 0,
			'action' => 'style',
			'changemode' => 'input',
			'style_properity' => 'margin-top'
		),
		'mb'=>array(
			'type'=>'range',
			'section' => 'style',
			'title'=> get_string('mb', 'local_mb2builder'),
			'min'=> 0,
			'max' => 300,
			'default'=> 30,
			'action' => 'style',
			'changemode' => 'input',
			'style_properity' => 'margin-bottom'
		),
		'pv'=>array(
			'type'=>'range',
			'section' => 'style',
			'title'=> get_string('pvlabel', 'local_mb2builder'),
			'min'=> 0,
			'max' => 300,
			'default'=> 0,
			'action' => 'style',
			'selector' => '.theme-text-inner',
			'changemode' => 'input',
			'style_properity' => 'padding-top',
			'style_properity2' => 'padding-bottom'
		),
		'ph'=>array(
			'type'=>'range',
			'section' => 'style',
			'title'=> get_string('phlabel', 'local_mb2builder'),
			'min'=> 0,
			'max' => 300,
			'default'=> 30,
			'action' => 'style',
			'changemode' => 'input',
			'selector' => '.theme-text-inner',
			'style_properity' => 'padding-left',
			'style_properity2' => 'padding-right'
		),
		'rounded'=>array(
			'type'=>'yesno',
			'section' => 'style',
			'title'=> get_string('rounded', 'local_mb2builder'),
			'options' => array(
				1 => get_string('yes', 'local_mb2builder'),
				0 => get_string('no', 'local_mb2builder')
			),
			'action' => 'class',
			'class_remove' => 'rounded0 rounded1',
			'class_prefix' => 'rounded',
			'default' => 0
		),

		'button' => array(
			'type' => 'yesno',
			'section' => 'button',
			'title'=> get_string('button', 'local_mb2builder'),
			'options' => array(
				1 => get_string('yes', 'local_mb2builder'),
				0 => get_string('no', 'local_mb2builder')
			),
			'default' => 0,
			'action' => 'class',
			'selector' => '.theme-text-inner',
			'class_remove' => 'button0 button1',
			'class_prefix' => 'button',
		),


		'btext'=>array(
			'type'=>'text',
			'section' => 'button',
			'showon' => 'button:1',
			'title'=> get_string('titletext', 'local_mb2builder'),
			'action' => 'text',
			'selector' => '.theme-text-button a'
		),
		'link'=>array(
			'type'=>'text',
			'showon' => 'button:1',
			'section' => 'button',
			'title'=> get_string('link', 'local_mb2builder'),
			'default' => '#'
		),
		'target'=>array(
			'type'=>'yesno',
			'section' => 'button',
			'showon' => 'button:1',
			'title'=> get_string('linknewwindow', 'local_mb2builder'),
			'options' => array(
				1 => get_string('yes', 'local_mb2builder'),
				0 => get_string('no', 'local_mb2builder')
			),
			'action' => 'none',
			'default' => 0
		),
		'btype'=>array(
			'type'=>'list',
			'section' => 'button',
			'showon' => 'button:1',
			'title'=> get_string('type', 'local_mb2builder'),
			'options' => array(
				'default' => get_string('default', 'local_mb2builder'),
				'primary' => get_string('primary', 'local_mb2builder'),
				'success' => get_string('success', 'local_mb2builder'),
				'warning' => get_string('warning', 'local_mb2builder'),
				'info' => get_string('info', 'local_mb2builder'),
				'danger' => get_string('danger', 'local_mb2builder'),
				'inverse' => get_string('inverse', 'local_mb2builder'),
			),
			'default' => 'primary',
			'action' => 'class',
			'selector' => '.theme-text-button a',
			'class_remove' => 'btn-primary btn-secondary btn-success btn-warning btn-info btn-danger btn-inverse btn-link',
			'class_prefix' => 'btn-',
		),
		'bsize'=>array(
			'type' => 'buttons',
			'showon' => 'button:1',
			'section' => 'button',
			'title'=> get_string('sizelabel', 'local_mb2builder'),
			'options' => array(
				'sm' => get_string('small', 'local_mb2builder'),
				'normal' => get_string('medium', 'local_mb2builder'),
				'lg' => get_string('large', 'local_mb2builder'),
				'xlg' => get_string('xlarge', 'local_mb2builder')
			),
			'default' => 'normal',
			'action' => 'class',
			'selector' => '.theme-text-button a',
			'class_remove' => 'btn-sm btn-lg btn-xlg',
			'class_prefix' => 'btn-',
		),
		'brounded' => array(
			'type' => 'yesno',
			'showon' => 'button:1',
			'section' => 'button',
			'title'=> get_string('rounded', 'local_mb2builder'),
			'options' => array(
				1 => get_string('yes', 'local_mb2builder'),
				0 => get_string('no', 'local_mb2builder')
			),
			'default' => 0,
			'action' => 'class',
			'selector' => '.theme-text-button a',
			'class_remove' => 'rounded0 rounded1',
			'class_prefix' => 'rounded',
		),
		'bborder' => array(
			'type' => 'yesno',
			'showon' => 'button:1',
			'section' => 'button',
			'title'=> get_string('border', 'local_mb2builder'),
			'options' => array(
				1 => get_string('yes', 'local_mb2builder'),
				0 => get_string('no', 'local_mb2builder')
			),
			'default' => 0,
			'action' => 'class',
			'selector' => '.theme-text-button a',
			'class_remove' => 'btnborder0 btnborder1',
			'class_prefix' => 'btnborder',
		),
		'bmt'=>array(
			'type'=>'range',
			'showon' => 'button:1',
			'section' => 'button',
			'title'=> get_string('mt', 'local_mb2builder'),
			'min'=> 0,
			'max' => 300,
			'default'=> 0,
			'action' => 'style',
			'changemode' => 'input',
			'selector' => '.theme-text-button',
			'style_properity' => 'padding-top'
		),
		'custom_class'=>array(
			'type'=>'text',
			'section' => 'style',
			'title'=> get_string('customclasslabel', 'local_mb2builder'),
			'desc'=> get_string('customclassdesc', 'local_mb2builder'),
			'action' => 'class',
			'selector' => 'theme-text'
		)
	)
);


define( 'LOCAL_MB2BUILDER_SETTINGS_TEXT', base64_encode( serialize( $mb2_settings ) ) );
