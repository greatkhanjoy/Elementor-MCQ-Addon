<?php
/*
Plugin Name: Browter MCQ, Quiz, Question Addon for Elementor
Description: A simple Elementor MCQ / Quiz / Question Addon.
Version: 1.0
Author: Imran Hosein Khan Joy (Greatkhanjoy)
Author URI: https://greatkhanjoy.netlify.app
Text Domain: browter_mcq_addon
Domain Path: /languages/
Requires at least: 6.2
Requires PHP: 7.4
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class Browter_MCQ_Addon
{

    public function __construct()
    {
        add_action('elementor/widgets/widgets_registered', [$this, 'register_elementor_widgets']);
        add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);
        add_action('admin_notices', [$this, 'elementor_check_notice']);
    }

    public function register_elementor_widgets()
    {
        if (class_exists('Elementor\Widget_Base')) {
            require_once('elementor-widget-mcq.php');
        }
    }

    public function enqueue_scripts()
    {
        wp_enqueue_style('browter-mcq-addon-styles', plugin_dir_url(__FILE__) . 'assets/styles.css');

        wp_enqueue_script('browter-mcq-addon-script', plugin_dir_url(__FILE__) . 'assets/script.js', array('jquery'), '1.0', true);
    }

    public function elementor_check_notice()
    {
        if (!is_plugin_active('elementor/elementor.php')) {
            echo '<div class="notice notice-error is-dismissible">
                <p>Elementor is required for <strong>Browter MCQ </strong> plugin to work. Please install and activate Elementor.</p>
            </div>';
        }
    }
}

new Browter_MCQ_Addon();
