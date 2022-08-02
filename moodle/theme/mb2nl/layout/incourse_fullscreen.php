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

user_preference_allow_ajax_update('fsmod-open-nav', PARAM_ALPHA);
user_preference_allow_ajax_update('fsmod-toggle-sections', PARAM_ALPHA);
$isisdebar = get_user_preferences('fsmod-open-nav', 'true');
$togglesections = get_user_preferences('fsmod-toggle-sections', 'section');
$isisdebarcls = $isisdebar === 'true' ? ' issidebar' : ' nosidebar';
$courseprogress = theme_mb2nl_course_completion_percentage();
$isprogresscls = $courseprogress ? ' isprogress' : ' noprogress';

$sidebar = theme_mb2nl_isblock($PAGE, 'side-pre');
$PAGE->requires->js_call_amd('theme_mb2nl/fsmode','sidebarToggle');

?>
<div class="fsmod-wrap<?php echo $isisdebarcls . ' is' . $togglesections . $isprogresscls; ?>">
	<div class="fsmod-course-sections">
		<div class="fsmod-sections-header">
			<?php if ( $courseprogress ) : ?>
				<div class="fsmod-course-progress">
					<span class="progress-text"><?php echo get_string('yourprogress', 'completion'); ?></span>
					<span class="progress-value"><?php echo $courseprogress; ?>%</span>
					<div class="fsmod-progress-bar"><div style="width:<?php echo $courseprogress;?>%;"></div></div>
				</div>
			<?php endif; ?>
			<div class="fsmod-section-tools">
				<div class="fsmod-toggle-sidebar">
					<span class="toggle-blocks"><?php echo get_string('blocks'); ?></span>
					<span class="toggle-sections"><?php echo get_string('sections'); ?></span>
				</div>
				<span class="fsmod-showhide-sidebar"><i class="fa fa-bars"></i></span>
			</div>
		</div>
		<div class="fsmod-sections-wrap">
			<div class="fsmod-sections">
				<?php echo theme_mb2nl_full_screen_module_sections(); ?>
			</div>
			<div class="fsmod-blocks">
				<?php if ( $sidebar ) : ?>
					<section class="fullscreen-sidebar">
						<?php echo $OUTPUT->blocks('side-pre', theme_mb2nl_block_cls($PAGE, 'side-pre')); ?>
					</section>
				<?php else : ?>
					<?php echo get_string('noblocks', 'error'); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="fsmod-course-content">
		<div class="fsmod-content-header">
			<div class="fsmod-course-tools">
				<span class="fsmod-showhide-sidebar"><i class="fa fa-bars"></i></span>
				<?php echo theme_mb2nl_panel_link('content', true); ?>
			</div>
			<?php echo theme_mb2nl_activity_nav(); ?>
			<?php echo theme_mb2nl_full_screen_module_backlink(); ?>
		</div>
		<div id="main-content">
			<section id="region-main" class="content-col">
				<div id="page-content">
					<?php echo $OUTPUT->page_heading_button(); ?>
					<?php echo theme_mb2nl_page_builder_pagelink(); //theme_mb2nl_panel_link() . theme_mb2nl_page_builder_pagelink(); ?>
					<?php echo $OUTPUT->course_content_header(); ?>
					<?php if (theme_mb2nl_isblock($PAGE, 'content-top')) : ?>
						<?php echo $OUTPUT->blocks('content-top', theme_mb2nl_block_cls($PAGE, 'content-top','none')); ?>
					<?php endif; ?>
					<?php echo $OUTPUT->main_content(); ?>
					<?php if (theme_mb2nl_isblock($PAGE, 'content-bottom')) : ?>
						<?php echo $OUTPUT->blocks('content-bottom', theme_mb2nl_block_cls($PAGE, 'content-bottom','none')); ?>
					<?php endif; ?>
					<?php echo $OUTPUT->course_content_footer(); ?>
				</div>
			</section>
		</div>
	</div>
</div>
<?php echo $OUTPUT->standard_after_main_region_html(); ?>
<?php echo $OUTPUT->theme_part('region_adminblock'); ?>
<?php echo $OUTPUT->theme_part('footer', array('sidebar'=>false)); ?>
