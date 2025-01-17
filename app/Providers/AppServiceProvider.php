<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use App\Models\outlet;
use App\Models\member;
use App\Models\transaksi;
use App\Models\paket;
use App\Observers\userObserver;
use App\Observers\outletObserver;
use App\Observers\memberObserver;
use App\Observers\transaksiObserver;
use App\Observers\paketObserver;
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


        User::observe(userObserver::class);
        outlet::observe(outletObserver::class);
        member::observe(memberObserver::class);
        paket::observe(paketObserver::class);
        transaksi::observe(transaksiObserver::class);

    }
}
