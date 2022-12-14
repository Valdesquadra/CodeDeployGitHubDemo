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


// Message displayed to the user when they choose this theme.
$string['choosereadme'] = 'Hey, I\'m New Learning';


// Human readable name of the plugin.
$string['pluginname'] = 'New Learning';


// Global
$string['bold'] = 'Bold';
$string['bolder'] = 'Bolder';
$string['bottom'] = 'Bottom';
$string['center'] = 'Center';
$string['dark'] = 'Dark';
$string['ddmenu'] = 'Drop Down menu';
$string['default'] = 'Default';
$string['description'] = 'Description';
$string['fade'] = 'Fade';
$string['general'] = 'General';
$string['global'] = 'Global';
$string['header'] = 'Header';
$string['headings'] = 'Headings';
$string['hide'] = 'Hide';
$string['icon'] = 'Icon';
$string['icondesc'] = 'Glyphicon, Font Awesome or PE-icon-7-stroke icon name, e.g. \'fa-envelope\'.';
$string['image'] = 'Image';
$string['inherit'] = 'Inherit';
$string['left'] = 'Left';
$string['light'] = 'Light';
$string['lighter'] = 'Lighter';
$string['link'] = 'Link';
$string['links'] = 'Links';
$string['margindesc'] = 'Margin: top right bottom left.';
$string['menu'] = 'Menu';
$string['menu'] = 'Menu';
$string['name'] = 'Name';
$string['no'] = 'No';
$string['none'] = 'None';
$string['normal'] = 'Normal';
$string['openlink'] = 'Open Link';
$string['openlinkblank'] = 'In a new window';
$string['openlinkself'] = 'In the same window';
$string['options'] = 'Options';
$string['ordering'] = 'Ordering';
$string['orderingdesc'] = 'Leave it empty to use default ordering.';
$string['right'] = 'Right';
$string['settingslink'] = 'Theme Settings';
$string['show'] = 'Show';
$string['slide'] = 'Slide';
$string['style'] = 'Style';
$string['subtitle'] = 'Sub Title';
$string['text'] = 'Text';
$string['textdesc'] = 'Optional text.';
$string['title'] = 'Title';
$string['top'] = 'Top';
$string['url'] = 'Url';
$string['yes'] = 'Yes';
$string['loading'] = 'Loading...';


// Check plugins

$string['mb2shortcodes_filter_plugin'] = '<div class="filter-message"><p>Everything works great, but one little thing have to be done.</p><p><strong>Mb2 Shortcodes FILTER</strong> plugin must be:</p><ol><li>Installed (<em>Site administration &rarr; Plugins &rarr; Install plugins</em>)</li><li>Activated (<em>Site administration &rarr; Plugins &rarr; Filters &rarr; Manage filters</em>)</li></ol></div>';
$string['urltolink_filter_plugin'] = '<div class="filter-message urltolink"><p>One more thing have to be done:</p><ol><li>Go to: <em>Site administration &rarr;  Plugins &rarr; Filters &rarr; Manage filters</em></li><li>Move <strong>Mb2 Shortcodes</strong> filter above <strong>Convert URLs into links and images</strong> filter.</li></ol></div>';
$string['mb2slides_plugin'] = '<strong>Mb2 Slides</strong> plugin must be installed. Please see <a href="https://mb2themes.com/docs/new-learning/#slider_installation" target="_blank">documentation</a>.';
$string['mb2slides_plugin_empty'] = 'Mb2 Slides plugin is installed! Go to plugin page to <a href="{$a->link}">Manage slides</a>.';


// Regions
$string['region-adminblock'] = 'Adminblock';
$string['region-after-slider'] = 'After Slider';
$string['region-after-content'] = 'After Content';
$string['region-before-content'] = 'Before Content';
$string['region-side-pre'] = 'Side Pre';
$string['region-side-post'] = 'Side Post';
$string['region-slider'] = 'Slider';
$string['region-bottom'] = 'Bottom';
$string['region-bottom-a'] = 'Bottom A';
$string['region-bottom-b'] = 'Bottom B';
$string['region-bottom-c'] = 'Bottom C';
$string['region-bottom-d'] = 'Bottom D';
$string['region-content-top'] = 'Content Top';
$string['region-content-bottom'] = 'Content Bottom';


// Frontend
$string['logininfo'] = 'Forgot your username or password?';
$string['foldernoexists'] = 'Images folder does not exists.';
$string['folderisempty'] = 'Images folder is empty.';
$string['adminblockinfo'] = 'Blocks placed in this region will be visible only for admin users.';
$string['entercourse'] = 'Enter this course';
$string['showsidebar'] = 'Show sidebars';
$string['hidesidebar'] = 'Hide sidebars';
$string['recyclebin'] = 'Recycle bin';
$string['eventmonitoring'] = 'Event monitoring';
$string['livelogs'] = 'Live logs';
$string['courseparticipation'] = 'Course participation';
$string['coursemanagement'] = 'Course management';
$string['coursedashboard'] = 'Course dashboard';
$string['studentsandyou'] = '{$a->students} and you';
$string['xmoreteachers'] = 'and {$a->teachers} more';
$string['popularlinks'] = 'Popular links:';
$string['readmore'] = 'Read more';
$string['frontpagebuilder'] = 'Front page builder';
$string['hidden'] = 'Hidden';
$string['noprice'] = 'Free';
$string['nocourseincategory'] = 'No courses';
$string['mybookmarks'] = 'Bookmarks';
$string['wentwrong'] = 'Something went wrong';
$string['bkmarklimit'] = 'You may add up to {$a->limit} bookmarks';
$string['layoutgrid'] = 'Grid layout';
$string['layoutlist'] = 'List layout';
$string['certificate'] = 'Certificate';
$string['register'] = 'Register';
$string['strftimedatemonthabbr'] = '%d %b %Y';
$string['strftimedatemoncourselist'] = '%d %b';
$string['strftimedatecourseupdated'] = '%b %Y';
$string['price'] = 'Price';
$string['paid'] = 'Paid';
$string['instructors'] = 'Instructors';
$string['bestseller'] = 'Bestseller';
$string['categorydesc'] = 'Category description';
$string['explorecategory'] = 'View all courses in category: {$a->category}';

// Settings tabs
$string['configtitle'] = 'New Learning';
$string['settingsgeneral'] = 'General';
$string['settingscourses'] = 'Courses';
$string['settingsfeatures'] = 'Features';
$string['settingsnav'] = 'Menus';
$string['settingssocial'] = 'Social';
$string['settingsfonts'] = 'Fonts';
$string['settingstypography'] = 'Typography';
$string['settingsstyle'] = 'Style';
$string['allsettings'] = 'All settings';

// Settings panel
$string['documentation'] = 'Documentation';
$string['morethemes'] = 'More Themes';
$string['urldoc'] = 'https://mb2themes.com/docs/new-learning';
$string['urlmore'] = 'https://themeforest.net/user/marbol2/portfolio';

// Settings courses
$string['courseslist'] = 'Course list';
$string['coursesettings'] = 'Course';
$string['courseprice'] = 'Course price';
$string['coursinstructor'] = 'Course instructor';
$string['morecat'] = 'Categories filter more/less';
$string['moreinstructor'] = 'Instructors filter more/less';
$string['excludecat'] = 'Exclude category ID\'s';
$string['enrollmentpage'] = 'Course enrollment page';
$string['enrollayout'] = 'Layout {$a->layout}';
$string['showmorebtn'] = 'More link';
$string['elrollsections'] = 'Course sections';
$string['shareicons'] = 'Share icons';
$string['sharefacebook'] = 'Facebook';
$string['sharetwitter'] = 'Twitter';
$string['sharelinkedin'] = 'LinkedIn';
$string['quickview'] = 'Quick view';
$string['expiredcourses'] = 'Expired courses';
$string['courseplaceholder'] = 'Course placeholder image';
$string['cbtntext'] = 'Course button text';
$string['fullscreenmod'] = 'Full screen';

// Settings general
$string['logo'] = 'Logo and favicon';
$string['favicon'] = 'Favicon';
$string['logoimg'] = 'Logo';
$string['logodarkimg'] = 'Logo dark';
$string['logoh'] = 'Logo height (px)';
$string['logohdesc'] = 'Logo height in pixels. Logo width will be set automatically.';
$string['logotitle'] = 'Logo title text';
$string['logotitledesc'] = 'Logo link "title" attribute. Require for SEO.';
$string['logoalttext'] = 'Logo alternative text';
$string['logoalttextdesc'] = 'Logo image "alt" attribute. Require for SEO.';
$string['pagewidth'] = 'Page width (px)';
$string['sidebarpos'] = 'Sidebars position';
$string['classic'] = 'Classic';
$string['layout'] = 'Layout';
$string['layoutfw'] = 'Full width';
$string['layoutfx'] = 'Boxed';
$string['regionnogrid'] = 'Disable Bs Grid for Regions';
$string['blockstyle'] = 'Block Region Class';
$string['blockstyledesc'] = 'Custom css class for block regions. Css class for each region ("regionName:className") must be placed in a new line.';
$string['footer'] = 'Footer';
$string['foottext'] = 'Footer Content';
$string['partnerlogos'] = 'Partner logos';
$string['partnerslinks'] = ' Partner links';
$string['partnerslinksdesc'] = 'Each line consists separated by pipe characters (|):partner name|url::"1" to open link in a new window.<br>For example:<pre>Parnter #1 name|http://example.com
Parnter #2 name|http://example.com::1</pre>';
$string['footlogin'] = 'Login Info in Footer';
$string['regions'] = 'Block Regions';
$string['coursestudentscount'] = 'Enrolled students';
$string['coursedate'] = 'Course date';
$string['coursestartdate'] = 'Course start date';
$string['coursemodifieddate'] = 'Course modified date';
$string['coursecustomfields'] = 'Course custom fields';
$string['faviconimg'] = 'Favicon';
$string['favicondesc'] = 'Upload favicon image in "ico" format.';
$string['coursescls'] = 'Course Css Class';
$string['coursesclsdesc'] = 'Custom css class for courses. Css class for each course ("courseID:className") must be placed in a new line.';
$string['cbannerstyle'] = 'Course banner';
$string['sidebarbtn'] = 'Show/hide sidebars';
$string['sidebarbtntext'] = 'Text sidebar button';
$string['sidebaryesshow'] = 'Yes and show sidebars';
$string['sidebaryeshide'] = 'Yes and hide sidebars';
$string['courseswitchlayout'] = 'Course list layout switcher';
$string['coursegrid'] = 'Course list grid';
$string['headercontent'] = 'Header content';
$string['headercontentdesc'] = 'Each line consists separated by pipe characters (|):<br>text::optional icon name|optional url::"1" to open link in a new window|language code or comma-separated codes|"1" to show text for logged in users only or "2" to show text for none logged in users only.<br>For example:<pre>Text with icon::fa-life-ring
Link with icon open in a new window::fa-link|http://example.com::1
English text||en
Spanish link text|http://example.com|es
English and Spanish text||en,es
Text for logged in users|||1
Text for guests|||2</pre>';
$string['editingfw'] = 'Full width content on editing mode';
$string['frontpage'] = 'Front page';
$string['slider'] = 'Slider';
$string['transparent'] = 'Transparent';
$string['headerbgcolor'] = 'Header background color';
$string['headerimg'] = 'Header background image';
$string['headernav'] = 'Main menu in header';
$string['headertoolstext'] = 'Header text buttons';


// Settings navigation
$string['navatype'] = 'Animation type';
$string['stickynav'] = 'Sicky navigation';
$string['stickymobilenav'] = 'Sticky navigation on mobile';
$string['navatypefade'] = 'Fade';
$string['navatypeslide'] = 'Slide';
$string['navaspeed'] = 'Animation speed (ms)';
$string['navddwidth'] = 'Dropdown items width (px)';
$string['mycinmenu'] = 'My courses in menu';
$string['mychidden'] = 'Hidden courses';
$string['myclimit'] = 'Course name words limit';
$string['navicon'] = 'Icon Navigation';
$string['urlnw'] = 'Open in a new window';
$string['navcls'] = 'Menu item class';
$string['navclsdesc'] = 'You may set different css class for different menu items and then styled it. Use "itemLabel:cssClass", e.g. "Courses:myCustoClass". Classess for each menu item must be placed in a new line.';
$string['mainmenu'] = 'Main menu';
$string['naviconsdesc'] = 'Each line consists separated by pipe characters (|):<br>text::icon name|optional url::"1" to open link in a new window|language code or comma-separated codes|"1" to show text for logged in users only or "2" to show text for none logged in users only.<br>For example:<pre>Link with icon::fa-life-ring|http://example.com
Link with icon open in a new window::fa-link|http://example.com::1
English text::fa-flag||en
Spanish link text::fa-star|http://example.com|es
English and Spanish text::fa-globe||en,es
Text for logged in users::fa-lock|||1
Text for guests::fa-unlock|||2</pre>';
$string['homeitem'] = 'Home item';


// Settings social
$string['socillist'] = 'Social List';
$string['socialheader'] = 'Header Icons';
$string['socialfooter'] = 'Footer Icons';
$string['sociallinknw'] = 'Open Links in a New Widnow';
$string['socialtt'] = 'Tooltip';
$string['socialmargin'] = 'Icon List Top Margin (px)';


// Settings features
$string['loadingscreen'] = 'Loading screen';
$string['spinnerw'] = 'Spinner image size (px)';
$string['ganaid'] = 'Tracking ID';
$string['ganaiddesc'] = 'Google Analytics tracking ID: "UA-XXXXX-Y"';
$string['ganatitle'] = 'Tracking code';
$string['ganaasync'] = 'Alternative Async Tracking';
$string['loginform'] = 'Login Form';
$string['loginsearchform'] = 'Login and search form';
$string['loginpage'] = 'Custom login page';
$string['forgotpage'] = 'Forgot password/username page';
$string['logintext'] = 'Login form text';
$string['signuplink'] = 'Register button';
$string['signuppage'] = 'Custom register page url';
$string['sitemenu'] = 'Site menu';
$string['teacherroleshortname'] = 'Teacher role shortname';
$string['studentroleshortname'] = 'Student role shortname';
$string['teacheremail'] = 'Teacher email';
$string['teachermessage'] = 'Teacher message link';
$string['coursepanel'] = 'Course panel';
$string['sitemnuitems'] = 'Site menu items';
$string['customsitemnuitems'] = 'Custom menu items';
$string['sitemnuitemsdesc'] = 'Comma separated site menu items. You may add the following items:<ul><li>dashboard - link to my dashboard</li><li>frontpage - link to front page</li><li>calendar - link to callendar page</li><li>badges - link to my badges pages</li><li>courses - link to list of all courses</li><li>addcourse - link to new course form</li><li>addcategory - link to new category form</li><li>editcourse - link to course edit form</li><li>editcategory - link to category edit form</li></ul>';
$string['cpaneldesclimit'] = 'Course Description Words Limit';
$string['searchlinks'] = 'Popular Links';
$string['searchlinksdesc'] = 'Each line consists separated by pipe characters (|):<br>link text|url::"1" to open link in a new window|language code or comma-separated codes|"1" to show text for logged in users only or "2" to show text for none logged in users only.<br>For example:<pre>Link text|http://example.com
Link open in a new window|http://example.com::1
English link text text|http://example.com|en
Spanish link text|http://example.com|es
English and Spanish link text|http://example.com|en,es
Link for logged in users|http://example.com||1
Link for guests|http://example.com||2</pre>';
$string['loginlinktopage'] = 'Link to Login Page';
$string['bookmarks'] = 'Bookmarks';
$string['bookmarkslimit'] = 'Bookmarks Limit';
$string['customsitemenudesc'] = 'Each line consists separated by pipe characters (|):<br>text::icon name|url::"1" to open link in a new window|language code or comma-separated codes.<br>For example:<pre>Link with icon::fa-life-ring|http://example.com
Link with icon open in a new window::fa-link|http://example.com::1
Spanish link text::fa-tag|http://example.com|es</pre>';
$string['certificatestr'] = 'Certificate String';
$string['certificatelinks'] = 'Custom Certificate Links';
$string['certificatelinksdesc'] = 'Each line consists separated by pipe characters (|) course_ID|certificate_url. For example:<br><pre>2|https://www.accredible.com/000001</pre>';
$string['langinmenu'] = 'Languages';
$string['language'] = 'Language';
$string['langpos'] = 'Language position';
$string['lang1'] = 'Main menu';
$string['lang2'] = 'Footer';
$string['modaltools'] = 'Login and search form in modal window';
$string['autologinguestsanypage'] = 'Auto-login guests on any page';
$string['blogplaceholder'] = 'Blog entry placeholder image';
$string['blogsettings'] = 'Blog';


// Settings fonts
$string['ficonfa'] = 'Font Awesome';
$string['ficon7stroke'] = 'Stroke Icons 7';
$string['gfonts'] = 'Google Web Fonts';
$string['nfonts'] = 'Normal Fonts';
$string['nfont'] = 'Normal Font';
$string['gfont'] = 'Google Font';
$string['fontname'] = 'Font Name';
$string['fontstyle'] = 'Font Style';
$string['fontsubset'] = 'Font Subset';
$string['cfont'] = 'Custom font';
$string['cfontname'] = 'Font name';
$string['cfontfiles'] = 'Font files';
$string['cfontfilesdesc'] = 'Upload font files in the following formats: woff2, woff, ttf.';


// Settings style
$string['colors'] = 'Colors';
$string['accentcolor'] = 'Accent color';
$string['textcolor'] = 'Text color';
$string['textcolorondark'] = 'Text color on dark background';
$string['linkcolor'] = 'Links color';
$string['linkhcolor'] = 'Links hover color';
$string['headingscolor'] = 'Headings color';
$string['pagestyle'] = 'Page';
$string['bgcolor'] = 'Background color';
$string['bgimage'] = 'Background image';
$string['bgpos'] = 'Background position';
$string['bgsize'] = 'Background size';
$string['bgrepeat'] = 'Background repeat';
$string['bgattachment'] = 'Background attachment';
$string['pbgdesc'] = 'To see page background color or image you need ot use \'Boxed\' page layout.';
$string['strip1'] = 'Strip left light';
$string['strip2'] = 'Strip left dark';
$string['pbgpre'] = 'Predefined background';
$string['colorscheme'] = 'Color scheme';
$string['sectionpadding'] = 'Top,bottom padding';
$string['sectionpaddingdesc'] = 'Comma separated padding top and bottom in pixels, e.g. \'20,20\'.';
$string['imgdefault'] = 'Default image';
$string['headerstyleheading'] = 'Header';
$string['headerstyle'] = 'Header style';
$string['navbarplugin'] = 'Navbar plugin';
$string['scustomcssstyleheading'] = 'Custom css style';
$string['customcss'] = 'Custom css code';
$string['btnprimarycolor'] = 'Primary button color';
$string['btncolor'] = 'Default button color';
$string['pbgimagescroll'] = 'Scroll background';


// Settings typography
$string['ffamily'] = 'Font';
$string['fsize'] = 'Font size (rem)';
$string['fsizepx'] = 'Font size (px)';
$string['fweight'] = 'Font weight';
$string['gfont'] = 'Google font';
$string['hsize'] = 'Heading {$a->hsize} size (rem)';
$string['fstyle'] = 'Font style';
$string['ttransform'] = 'Text transform';
$string['uppercase'] = 'Uppercase';
$string['capitalize'] = 'Capitalize';
$string['lowercase'] = 'Lowercase';
$string['italic'] = 'Italic';
$string['oblique'] = 'Oblique';
$string['celtypo'] = 'Custom elements';
$string['celsel'] = 'Css selectors';
$string['celseldesc'] = 'Add css selector or comma separated multiple selectors for which you want to set custom font family or font weight. E.g. "h1, .some-title, .custom-class".';


// Settings pages
$string['cloginpage'] = 'Custom login page';
$string['loginlogodesc'] = 'Leave it empty to use default logo on login page.';

// Settings features
$string['loadingscr'] = 'Loading screen';
$string['loadingscrdesc'] = 'Loading screen is NOT visible for admin user.';
$string['loadinglogodesc'] = 'Leave it empty to use default logo on loading page.';
$string['loadinghide'] = 'Hide screen after (ms)';
$string['scrolltt'] = 'Scroll to top';
$string['scrollspeed'] = 'Scroll speed (ms)';

// Enrolment page
$string['enroltextprice'] = 'Enrol in course for <span>{$a->currency}<span>{$a->cost}</span></span>';
$string['enroltextfree'] = 'Enrol now';
$string['headingaboutcourse'] = 'About the course';
$string['headingsections'] = 'Course content';
$string['headinginstructors'] = 'Instructors';
$string['headingactivities'] = 'This course includes';
$string['headingsocial'] = 'Share this course';
$string['teachercourses'] = '{$a->courses} courses';
$string['teacherstudents'] = '{$a->students} students';
$string['alreadyenrolled'] = '{$a->students} already enrolled!';
$string['nobodyenrolled'] = 'Be the first to enrol!';
$string['strftimedatedaymonth'] = '%d %b';
$string['coursestarts'] = 'Course starts {$a->startdate}';
$string['coursesupdated'] = 'Last updated {$a->updatedate}';

// Deprecated strings
$string['pagelogin'] = 'Deprecated';
$string['socialmargindesc'] = 'Deprecated';
$string['naviconfsize'] = 'Deprecated';
$string['stickysitemenu'] = 'Deprecated';
$string['coursepanelpos'] = 'Deprecated';
$string['coursepanelpossitemenu'] = 'Deprecated';
$string['coursepanelposcontent'] = 'Deprecated';
$string['logom'] = 'Deprecated';
$string['panellinkincontent'] = 'Deprecated';
$string['stickyheader'] = 'Deprecated';
$string['region-banner-top'] = 'Deprecated';
$string['region-banner-bottom'] = 'Deprecated';
$string['mb2slider_plugin'] = 'Deprecated';
$string['mb2shortcodes_button_plugin'] = 'Deprecated';
$string['bcstyle'] = 'Deprecated';
$string['acstyle'] = 'Deprecated';
$string['asstyle'] = 'Deprecated';
$string['headercontentmt'] = 'Deprecated';
$string['langmargin'] = 'Deprecated';
$string['pagecls'] = 'Deprecated';
$string['pageclsdesc'] = 'Deprecated';
$string['coursecls'] = 'Deprecated';
$string['courseclsdesc'] = 'Deprecated';
$string['loginlink'] = 'Deprecated';
$string['cbannertitle'] = 'Deprecated';
$string['logow'] = 'Deprecated';
$string['logowdesc'] = 'Deprecated';
$string['headertoolstype'] = 'Deprecated';
$string['toolsicon'] = 'Deprecated';
$string['toolstext'] = 'Deprecated';
$string['studentsroleid'] = 'Deprecated';
$string['roleshortname'] = 'Deprecated';
$string['coursegridfp'] = 'Deprecated';
$string['coursegridcat'] = 'Deprecated';
$string['courseplimg'] = 'Deprecated';
$string['coursebtn'] = 'Deprecated';
$string['mycexpierd'] = 'Deprecated';
