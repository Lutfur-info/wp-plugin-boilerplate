<?php

if (!class_exists('PluginActionsInit')) {

    /**
     * Class PluginActionsInit
     */
    class PluginActionsInit
    {

        /**
         * PluginActionsInit constructor.
         */
        public function __construct()
        {
            $this->initActions();
        }

        /**
         * Register activation/deactivation hook
         */
        protected function initActions()
        {
            register_deactivation_hook(
                __FILE__,
                array($this, 'activate')
            );

            register_deactivation_hook(
                __FILE__,
                array($this, 'deactivate')
            );
        }

        /**
         * Activation actions
         */
        public function activate()
        {
            //Activation code goes here
        }

        /*
         * Deactivation actions
         */
        public function deactivate()
        {
            //Deactivation code goes here
        }
    }
}
