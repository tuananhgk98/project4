<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\hangsx;
use App\loaisp;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header',function($view){
            $hang_sx=hangsx::all();
            $view->with('hang_sx',$hang_sx);
        });
    $data['loaisp']=loaisp::all();
    view()->share($data);


    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
