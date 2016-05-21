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

require_once("$CFG->libdir/externallib.php");
/**
 * External local_activitytemplates API
 *
 * @package    local_activitytemplates
 * @category   external
 * @copyright  2016 WWU Münster
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class local_activitytemplates_template_provider extends external_api{
    public static function create_output_parameters() {
        return new external_function_parameters(
            array(
                'id' => new external_value(PARAM_INT, 'ID of activity type'),
                )
            )
        );
    }
    public static function create_output_returns() {
        return new external_single_structure(
            array(
                'id' => new external_value(PARAM_INT, 'ID of activity type'),
                'templatehtml' => new external_value(PARAM_TEXT, 'HTML list of templates'),
            )
        );
    }
    /**
     *  Changed the Database and returns the updated html content.
     *
     * @params $activitytype
     * @return string
     */
    public static function get_templates_for_activity($activitytype) {
        global $DB, $PAGE, $CFG;
        $params = self::validate_parameters(self::create_output_parameters(), array('id' => $activitytype));
        $output = array();
        $output['íd'] = $params['id'];
        $output['templatehtml'] = '<div>test</div>';
        return  $output;
    }
}