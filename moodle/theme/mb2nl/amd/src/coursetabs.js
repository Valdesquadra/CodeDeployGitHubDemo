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
 define(["jquery","core/ajax","core/notification","theme_mb2nl/carousel"],function(t,e,a,s){var r=function(t){this.registerEventListeners()};return r.prototype._getCourses=function(s){s.preventDefault();var r=t(s.currentTarget),o=t(s.currentTarget).closest(".mb2-pb-coursetabs"),c=t("#category-content-"+r.attr("data-category"));if(t(".coursetabs-catitem").removeClass("active"),r.addClass("active"),t(".coursetabs-content").removeClass("active"),c.addClass("active"),c.hasClass("fillin"))return null;c.addClass("loading"),e.call([{methodname:"theme_mb2nl_coursetabs",args:{category:r.attr("data-category"),limit:o.attr("data-limit"),carousel:o.attr("data-carousel"),columns:o.attr("data-columns"),gutter:o.attr("data-gutter"),catdesc:o.attr("data-catdesc")},done:this._handleResponse.bind(this),fail:a.exception}])},r.prototype._handleResponse=function(e){t(".coursetabs-content.active").html(e.courses),t(".coursetabs-content.active").addClass("fillin");var a=t(".coursetabs-content.active").find(".owl-carousel");a.length&&s.carouselInit(a,".mb2-pb-coursetabs",!0),t(".coursetabs-content.active").removeClass("loading")},r.prototype.registerEventListeners=function(){t(document).on("click",".coursetabs-catitem",this._getCourses.bind(this))},r});
