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
define(["jquery","core/ajax","core/event","core/notification"],function(e,t,s,r){var i=function(t){this._regionSelector=t,this._region=e(t),this._coursesArea=e(t).find(".courses-container-inner"),this._userCache=[],this.registerEventListeners()};return i.prototype._submitForm=function(s){s.preventDefault();var i=e(this._region.find(".theme-course-filter"));i.trigger("save-form-state");var o=i.serialize();e(this._coursesArea).addClass("loading"),e("html, body").stop().animate({scrollTop:e(this._coursesArea).offset().top-165},650),t.call([{methodname:"theme_mb2nl_subscribe",args:{formdata:o},done:this._handleResponse.bind(this),fail:r.exception}])},i.prototype._pagination=function(s){s.preventDefault();var i=e(this._region.find(".theme-courses-list")),o=e(s.currentTarget);if(i.data("page")==o.data("page"))return null;e(this._coursesArea).addClass("loading"),e("html, body").stop().animate({scrollTop:e(this._coursesArea).offset().top-165},650),t.call([{methodname:"theme_mb2nl_course_pagination",args:{page:o.data("page"),categories:i.data("categories"),instructors:i.data("instructors"),price:i.data("price"),searchstr:i.data("searchstr")},done:this._handleResponse.bind(this),fail:r.exception}])},i.prototype._submitSearchForm=function(s){s.preventDefault();var i=e(this._region.find(".theme-courses-list")),o=e(this._region.find("#theme-course-search"));e(this._region.find(".theme-course-search")).trigger("save-form-state");var a=o.val().replace(/<\/?[^>]+(>|$)/g,"").toLowerCase();e("html, body").stop().animate({scrollTop:e(this._coursesArea).offset().top-165},650),e(this._coursesArea).addClass("loading"),t.call([{methodname:"theme_mb2nl_course_search",args:{searchstr:a,categories:i.data("categories"),instructors:i.data("instructors"),price:i.data("price")},done:this._handleResponse.bind(this),fail:r.exception}])},i.prototype._handleResponse=function(t){setTimeout(function(){e(this._coursesArea).empty(),e(this._coursesArea).append(t.courses),e(this._coursesArea).removeClass("loading")}.bind(this),2e3)},i.prototype.registerEventListeners=function(){e(document);var t=e(this._region);t.on("click",".theme-courses-paginitem",this._pagination.bind(this)),t.on("submit",".theme-course-filter",this._submitForm.bind(this)),t.on("submit",".theme-course-search",this._submitSearchForm.bind(this))},i});
