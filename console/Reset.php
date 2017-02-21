<?php namespace Bedard\ShopDemo\Console;

use Backend\Models\User;
use Illuminate\Console\Command;

class Reset extends Command
{
    /**
     * @var string The console command name.
     */
    protected $name = 'shopdemo:reset';

    /**
     * @var string The console command description.
     */
    protected $description = 'Reset the demo shop and admin account.';

    /**
     * Execute the console command.
     * @return void
     */
    public function fire()
    {
        // refresh the shop plugin
        $this->call('plugin:refresh', ['name' => 'Bedard.Shop']);

        // reset the demo user's password
        $user = User::where('is_superuser', false)->first();
        $user->first_name = 'Demo';
        $user->last_name = '';
        $user->login = 'demo';
        $user->email = 'demo@bedard.shop';
        $user->password = 'demo';
        $user->password_confirmation = 'demo';
        $user->save();
    }
}
