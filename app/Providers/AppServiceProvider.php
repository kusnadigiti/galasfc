<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade; //import mata uang

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //script untuk tambah mata uang
        Blade::directive('rupiah', function($expression){
            return "Rp. <? echo number_format($expression,0,',',','.'); ?>";
        });
    }
}
