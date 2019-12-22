<?php

namespace Shankesgk2\RongCloud;

use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider;
use Laravel\Lumen\Application as LumenApplication;
use RongCloud\RongCloud;

class RongCloudServiceProvider extends ServiceProvider
{
    /**
     * If is defer.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Boot the service.
     *
     * @author shankesgk2 <shankesgk2@gmail.com>
     */
    public function boot()
    {
        $path = realpath(__DIR__ . '/../config/rongcloud-config.php');
        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$path => config_path('rongcloud.php')], 'rongcloud-config');
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('rongcloud');
        }
        $this->mergeConfigFrom($path, 'rongcloud');
    }

    /**
     * Register the service.
     *
     * @return void
     * @author shankesgk2 <shankesgk2@gmail.com>
     *
     */
    public function register()
    {
        $this->app->singleton('RongCloud', function () {
            return new RongCloud(config('rongcloud.appKey'), config('rongcloud.appSecret'), config('rongcloud.apiUrl'));
        });
    }

    /**
     * Get services.
     *
     * @return array
     * @author shankesgk2 <shankesgk2@gmail.com>
     *
     */
    public function provides()
    {
        return ['RongCloud'];
    }
}
