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

$logoalttext = theme_mb2nl_theme_setting($PAGE, 'logoalttext','New Learning');
$logotitle = theme_mb2nl_theme_setting($PAGE, 'logotitle','New Learning');
$customlogin = theme_mb2nl_is_login( true );
$customlogo = $customlogin ? theme_mb2nl_theme_setting( $PAGE,'loginlogo','', true ) : '';
?>
<div class="logo-wrap">
	<div class="main-logo">
		<a href="<?php echo $CFG->wwwroot; ?>" title="<?php echo $logotitle; ?>">
			<img class="logo-light" src="<?php echo theme_mb2nl_logo_url( $customlogo ); ?>" alt="<?php echo $logoalttext; ?>">
			<img class="logo-dark" src="<?php echo theme_mb2nl_logo_url( false, true ); ?>" alt="<?php echo $logoalttext; ?>">
		</a>
	</div>
</div>
