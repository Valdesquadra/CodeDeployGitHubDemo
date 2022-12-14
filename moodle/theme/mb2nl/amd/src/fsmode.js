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
 * @module     theme_mb2nl
 * @copyright  2017 - 2021 Mariusz Boloz (https://mb2themes.com)
 * @license    Commercial https://themeforest.net/licenses
 */
 define(["jquery"],function(e){return{sidebarToggle:function(){var s=e(".fsmod-wrap");e(".fsmod-showhide-sidebar").each(function(){e(this).click(function(e){e.preventDefault(),s.hasClass("nosidebar")?(s.removeClass("nosidebar"),s.addClass("issidebar"),M.util.set_user_preference("fsmod-open-nav","true")):(s.removeClass("issidebar"),s.addClass("nosidebar"),M.util.set_user_preference("fsmod-open-nav","false"))})}),e(".fsmod-toggle-sidebar>span").click(function(o){o.preventDefault(),e(this).hasClass("toggle-blocks")?(s.removeClass("issection"),s.addClass("isblock"),M.util.set_user_preference("fsmod-toggle-sections","block")):(s.removeClass("isblock"),s.addClass("issection"),M.util.set_user_preference("fsmod-toggle-sections","section"))})}}});
