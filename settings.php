<?php

    defined('MOODLE_INTERNAL') || die();

    // Admin Controls: 
    // https://docs.moodle.org/dev/Admin_settings

    if ($hassitconfig) {
        $settings = new admin_settingpage('tool_test', get_string('pluginname', 'tool_test'));
        $ADMIN->add('tools', $settings);

        
        //$settings->add(new admin_setting_heading('tool_test/heading', 'Test Heading', ''));
        //$settings->add(new admin_setting_configselect('forum_displaymode', get_string('displaymode', 'forum'),get_string('configdisplaymode', 'forum'), FORUM_MODE_NESTED, forum_get_layout_modes()));
    }