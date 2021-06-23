<?php

if (!class_exists('PluginAdminMenu')) {

    /**
     * Class PluginAdminMenu
     */
    class PluginAdminMenu
    {

        /**
         * PluginAdminMenu constructor.
         */
        public function __construct()
        {
            $this->initAdminMenu();
        }

        /**
         * Hooks into admin_menu
         */
        public function initAdminMenu()
        {
            add_action(
                'admin_menu',
                array($this, 'addAdminMenu')
            );
        }

        /**
         * Register settings menu page(s)
         */
        public function addAdminMenu()
        {
            add_menu_page(
                'Custom Menu Title',
                'Custom Menu',
                'manage_options',
                'custom-menu-slug',
                array(
                    $this,
                    'myAdminPage'
                ),
                'dashicons-menu',
                99
            );
        }

        /**
         * Settings menu page content
         */
        public function myAdminPage()
        {
            echo 'Admin Page Test';
        }
    }
}
