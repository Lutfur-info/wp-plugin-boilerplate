<?php

if (!class_exists('PluginAssets')) {

    /**
     * Class PluginAssets
     */
    class PluginAssets
    {

        /**
         * PluginAssets constructor.
         */
        public function __construct()
        {
            $this->initAssets();
        }

        /**
         * Enqueue scripts and styles
         */
        public function initAssets()
        {
            add_action(
                "admin_enqueue_scripts",
                array($this, 'PluginScripts')
            );

            add_action(
                "admin_enqueue_scripts",
                array($this, 'PluginStyles')
            );
        }

        /**
         * @param $hook
         * Enqueue scripts
         */
        public function PluginScripts()
        {
            wp_enqueue_script(
                'plugin-script',
                plugin_dir_url(__DIR__) . 'assets/js/script.js',
                array(),
                null
            );
        }

        /**
         * @param $hook
         * Enqueue styles
         */
        public function PluginStyles()
        {
            wp_enqueue_style(
                'plugin-style',
                plugin_dir_url(__DIR__) . 'assets/css/style.css',
                array(),
                null
            );
        }
    }
}
