<?php
/**
 * Created by IntelliJ IDEA.
 * User: j_dage01
 * Date: 20.05.16
 * Time: 11:52
 */

defined('MOODLE_INTERNAL') || die();


function local_activitytemplates_modchooser_templates($module) {
    $output = var_export($module, true);
    return $output;
}
