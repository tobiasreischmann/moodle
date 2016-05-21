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
 * Version details
 * @package local_activitytemplates
 * @category  local
 * @copyright 2016 Tobias Reischmann and Jan Dageförde, University of Münster
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();


function local_activitytemplates_modchooser_templates($module) {
    var_dump($module);
    $templates = "aaa";

    $templates = html_writer::start_div('local_activitytemplates_modchooser_extend');
    $templates .= get_string("extend_description","local_activitytemplates");
    $templates .= html_writer::end_div();

    $templates .= html_writer::start_div('local_activitytemplates_modchooser_head');
    $templates .= get_string("heading_templates","local_activitytemplates");
    $templates .= html_writer::end_div();

    $templates .= html_writer::start_div('local_activitytemplates_modchooser_body');
    // TODO UL LI
    $templates .= "@Template1";
    $templates .= "@Template2";
    $templates .= html_writer::end_div();

    $output = html_writer::span($templates, 'local_activitytemplates_modchooser_rightpane');

    return $output;

}
