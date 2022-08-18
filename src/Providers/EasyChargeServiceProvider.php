<?php
namespace EasyCharge\Providers;
class EasyChargeServiceProvider extends ServiceProvider
{
    public function register()
    {   
       
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/easy-charge-config.php' =>  config_path('easy-charge-config.php'),
         ], 'config');
    }
}