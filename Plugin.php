<?php namespace Bedard\ShopDemo;

use Backend;
use System\Classes\PluginBase;

/**
 * ShopDemo Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Shop Demo',
            'description' => 'Reset for Bedard.Shop demo.',
            'author'      => 'Scott Bedard',
            'icon'        => 'icon-leaf',
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConsoleCommand('shopdemo.reset', 'Bedard\ShopDemo\Console\Reset');
    }
}
