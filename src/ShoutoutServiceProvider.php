<?php
/**
 * Created by PhpStorm.
 * User: Dasun Dissanayake
 * Date: 2020-02-17
 * Time: 12:50 AM.
 */

namespace Dasun4u\LaravelShoutoutMessaging;

use Illuminate\Support\ServiceProvider;

class ShoutoutServiceProvider extends ServiceProvider
{
    /**
     * Publishes configuration file.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/shoutout_message.php' => config_path('shoutout_message.php'),
            ], 'shoutout-message-config');
        }
    }

    /**
     * Make config publishment optional by merge the config from the package.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/shoutout_message.php',
            'shoutout_message'
        );
    }
}
