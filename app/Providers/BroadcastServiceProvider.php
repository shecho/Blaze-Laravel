<?php
// Este archivo lo agregfa laravel por defecto y son funcionalidades propias del framework para mas informacion ir a doculemntacion oficila www.laravel/provider.com
namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();

        require base_path('routes/channels.php');
    }
}
