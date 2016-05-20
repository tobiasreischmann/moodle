<?php
/**
 * Created by IntelliJ IDEA.
 * User: j_dage01
 * Date: 20.05.16
 * Time: 11:52
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
