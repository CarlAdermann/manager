<?php
namespace Carsguide\ServiceManager\Providers;

use Carsguide\Auth\AuthManager;
use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

class ServiceManagerProvider extends ServiceProvider
{
    /**
     * Register auth service
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('servicemanager', function () {
            return new ServiceManager(new AuthManager(), new Client());
        });
    }

}
