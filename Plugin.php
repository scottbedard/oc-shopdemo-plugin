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
            'description' => 'Reset command for Bedard.Shop demo.',
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

    /**
     * Call the reset command at a given interval.
     *
     * @return void
     */
    public function registerSchedule($schedule)
    {
        $schedule->command('shopdemo:reset')->everyThirtyMinutes();
    }
}
