<?php

/**
 * Plugin Name: Plugin Boilerplate
 * Version: 1.0
 * Description: Plugin description text
 * Author: Lutfur Rahman
 * Author URI: #
 * Plugin URI:  https://github.com/Lutfur-info/wp-plugin-boilerplate
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * Current plugin version.
 */
define('PLUGIN_VERSION', '1.0');

if (!class_exists('PluginName')) {

    /**
     * Class PluginName
     */
    class PluginName
    {

        /**
         * Plugin constructor.
         */
        public function __construct()
        {
            spl_autoload_register(array($this, 'loader'));

            add_action(
                'plugins_loaded',
                array($this, 'init')
            );
        }

        /**
         * @param $className
         * Autoload Plugin Classes
         */
        public function loader($className)
        {
            if (is_file(plugin_dir_path(__FILE__) . 'includes/' . $className . '.php')) {
                include_once plugin_dir_path(__FILE__) . 'includes/' . $className . '.php';
            }
        }

        /**
         * Initialize plugin
         */
        public function init()
        {
            new PluginAdminMenu();
            new PluginAssets();
            new PluginFunctionality();
        }
    }
}

new PluginName();
new PluginActionsInit();
