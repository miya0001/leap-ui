<?php
/*
Plugin Name: Leap UI
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
        'http://cdn.leapui.net/',
        array(),
        self::ver,
        true
    );
}

}

