<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models\Todo' => 'App\Policies\TodoPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isLP', function($user){
            return $user->role == 'lp';
        });

        Gate::define('isPPD', function($user){
            return $user->role == 'ppd';
        });

        Gate::define('isEjen', function($user){
            return $user->role == 'ejen';
        });
    }
}
