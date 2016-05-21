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
 * Javascript module for local_activitytemplates
 *
 * @package    local_activitytemplates
 * @copyright  2016 WWU Münster
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define(['jquery','core/ajax'], function($, ajax) {

    /**
     * Method that calls for an ajax script and replaces and/or changes the output components.
     */
    var loadtemplates = function () {
        var promises = ajax.call([
            { methodname: 'local_activitytemplates_get_templates', args: {id: 1}}
        ]);

        promises[0].done(function(response) {
            alert(response);
        });
        return false;
    };
    /**
     * Calls for the main method.
     */
    return {
        initialise: function(){
            $(document).ready(function(){
                $('form#chooserform .alloptions input[name=jumplink]:radio').on('change', loadtemplates);
            });
        }
    };
});