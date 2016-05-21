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
 * This file adds a setting page to the navigation menu
 *
 * @package   local_activitytemplates
 * @copyright 2016 WWU Münster
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) { // needs this condition or there is error on login page
    $settings = new admin_settingpage('local_activitytemplates', get_string('general_config_header','local_activitytemplates'));
    $ADMIN->add('localplugins', $settings);
}
if ($ADMIN->fulltree){
    $settings->add(new admin_setting_configtext('activitytemplates_template_courses', get_string('template_courses', 'local_activitytemplates'),
        get_string('template_courses_desc', 'local_activitytemplates'), '1', PARAM_TEXT, 50));
}
