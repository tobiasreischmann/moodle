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
 * Service definition for the activity templates plugin. Mainly used for exposing functions to AJAX.
 *
 * @package local_activitytemplates
 * @category   services
 * @copyright 2016 WWU Münster
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$functions = array(
    'local_activitytemplates_get_templates' => array(
        'classname' => 'local_activitytemplates_template_provider',
        'methodname' => 'get_templates_for_activity', // Implement this function into the above class.
        'classpath'   => 'local/activitytemplates/externallib.php',
        'description' => 'Service to provide templates for a activity type',
        'type' => 'read', // The value is 'write' if your function does any database change, otherwise it is 'read'.
//        'capabilities' => 'moodle/course:managegroups', TODO: Is there a moodle/course:addactivity?
        'ajax' => true,
    )
);