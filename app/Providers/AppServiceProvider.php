<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

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
        // gate for admin
        Gate::define('admin', function (User $user) {
            return $user->role === 'admin';
        });

        // gate for owner
        Gate::define('owner', function (User $user) {
            return $user->role === 'owner';
        });

        // gate for kasir
        Gate::define('kasir', function (User $user) {
            return $user->role === 'kasir';
        });

    }
}
