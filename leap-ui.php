<?php
/*
Plugin Name: Leap UI
Author: Leap UI Team
Plugin URI: http://wwww.leapui.net/
Description: Easy way to integrate gesture control to your WordPress with Leap Motion.
Version: 0.1.0
Author URI: http://www.leapui.net/
*/


$leap_ui = new Leap_UI();


class Leap_UI {

const ver = '0.1.0';

function __construct()
{
    add_action('plugins_loaded', array($this, 'plugins_loaded'));
}

public function plugins_loaded()
{
    add_action('wp_enqueue_scripts', array($this, 'wp_enqueue_scripts'));
}

public function wp_enqueue_scripts()
{
    wp_enqueue_script(
        'leap-ui',
        apply_filters(
            'leap_ui_script_url',
            '//leapui.s3.amazonaws.com/leapui.js'
        ),
        array(),
        self::ver,
        true
    );
}

}

