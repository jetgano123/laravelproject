<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        Schema::defaultStringLength(191);
        
   //     view() ->composer('*',function($view){
     // $view ->with([
      //    'category' =>Category::where ('status',1)-> ordderBy ('name','ASC') -> get(),
   
   //   ]);
   //     }); 
}

}
