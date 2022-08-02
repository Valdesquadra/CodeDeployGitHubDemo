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
define(["jquery","theme_mb2nl/owlcarousel"],function(t,a){return{carouselInit:function(a,e,s){(a=a||t(".mb2-pb-content-list.owl-carousel")).each(function(){var a=e?t(this).closest(e):t(this),i=a.attr("data-columns"),o=0!=a.attr("data-sloop"),r=0!=a.attr("data-snav"),l=0!=a.attr("data-sdots"),n=0!=a.attr("data-autoplay"),u=a.attr("data-pausetime"),m=a.attr("data-animtime"),d=a.attr("data-mobcolumns"),c=30;"thin"===a.attr("data-gutter")?c=10:"none"===a.attr("data-gutter")&&(c=0);var f=i>3?3:i,h=i>5?5:i,p={0:{items:1},600:{items:i>2?2:i},780:{items:f},1000:{items:h}};1==d&&(p={0:{items:2},600:{items:f},780:{items:h},1000:{items:h}});var g=!1,v=['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'];t("body").hasClass("dir-rtl")&&(g=!0,v=['<i class="fa fa-angle-right"></i>','<i class="fa fa-angle-left"></i>']),s&&t(this).owlCarousel("destroy"),t(this).owlCarousel({margin:c,loop:o,nav:r,rtl:g,dots:l,autoplay:n,responsive:p,autoplayHoverPause:!0,autoplayTimeout:u,smartSpeed:m,navText:v,autoRefresh:!1})})}}});
