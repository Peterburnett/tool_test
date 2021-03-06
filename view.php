<?php

    require_once('/../../config.php');
    $cmid = required_param('id', PARAM_INT);
    $cm = get_coursemodule_from_id('test', $cmid, 0, false, MUST_EXIST);
    $course = $DB->get_record('course', array('id' => $cm->course), '*', MUST_EXIST);

    require_login($course, true, $cm);
    $PAGE->set_url('/mod/test/view.php', array('id' => $cm->id));
    $PAGE->set_pagelayout('standard'); 
    $PAGE->set_title('Test Page Title');
    $PAGE->set_heading('Test Page Heading');

