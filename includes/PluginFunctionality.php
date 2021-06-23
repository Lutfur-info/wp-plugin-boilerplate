<?php

if (!class_exists('PluginFunctionality')) {

    /**
     * Class PluginFunctionality
     */
    class PluginFunctionality
    {
        /**
         * PluginFunctionality constructor.
         */
        public function __construct()
        {
            $this->sayHello();
        }

        /**
         * Your core action output
         */
        protected function sayHello()
        {
            // Plugin functionality
        }
    }
}
