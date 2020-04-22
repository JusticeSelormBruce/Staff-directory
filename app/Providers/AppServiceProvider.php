<?php

namespace App\Providers;


use App\Article;
use App\Bio;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
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
        view()->composer('*', function ($view) {
            $NewsNo = DB::table('news')->orderBy('id', 'desc')->take(3)->count();
            $value = DB::table('news')->orderBy('id', 'desc')->take(3)->get()->all();
            $articlemain = Article::orderBy('id', 'desc')->take(4)->get()->all();
            $user1 = DB::table('users')->get()->all();
            $bio1 = Bio::orderBy('id', 'desc')->take(8)->get()->all();
            $roles = DB::table('roles')->get()->all();
            $admin = Session::get('Admin');
            $user = Session::get('user');
            $departments = DB::table('departments')->get()->all();
            $AllNews = DB::table('news')->get()->all();
            $AllUsers = DB::table('users')->paginate(20);
            $key=Session::get('key');
            $view->with(compact('value', 'user', 'articlemain',
                'user1', 'bio1', 'roles', 'admin', 'AllUsers', 'NewsNo', 'AllNews',
                'departments','key'
            ));
        });
    }
}
