<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        Gate::define('user',function($user){
            return $user->role=='1';
        });
        Gate::define('staff',function($user){
            return $user->role=='2';
        });
        Gate::define('auth',function($user){
            return in_array($user->role,['1', '2']);
        });
        Gate::define('admin',function($user){
            return $user->role=='3';
        });
        Gate::define('manajer',function($user){
            return $user->role=='4';
        });
        Gate::define('isLogin',function($user){
            return auth()->check();
        });
        Gate::define('notLogin',function($user){
            return Auth::guest();
        });
    }
}
