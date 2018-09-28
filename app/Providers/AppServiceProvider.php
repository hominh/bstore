<?php

namespace App\Providers;
use DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $parent_categories = DB::table('categories')->select('id','name','alias','parent_id','hassub')
                            ->where([
                                ['parent_id','=',0],
                                ['status','=',1]
                            ])
                            ->get();
        $sub_categories = DB::table('categories')->select('id','name','alias','parent_id','hassub')
                            ->where([
                                ['parent_id','<>',0],
                                ['status','=',1]
                            ])
                            ->get();

        view()->share('parent_categories', $parent_categories);
        view()->share('sub_categories', $sub_categories);
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
