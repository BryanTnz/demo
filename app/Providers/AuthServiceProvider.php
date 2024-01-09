<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    

    // Registrar Policies
    // https://laravel.com/docs/9.x/authorization#registering-policies
    protected $policies = [
        Report::class => ReportPolicy::class,
    ];
    
    
    

    // Gate
    public function boot(): void
    {
        $this->registerPolicies();
        // https://laravel.com/docs/9.x/authorization#writing-gates

        // El usuario con perfil admin solo puede realizar la
        // gestión (CRUD) de directores
        Gate::define('manage-directors', function (User $user)
        {
            return $user->role->slug === "admin";
        });
        // El usuario con perfil admin solo puede realizar la
        // gestión (CRUD) de guardias
        Gate::define('manage-guards', function (User $user)
        {
            return $user->role->slug === "admin";
        });
        // El usuario con perfil admin solo puede realizar la
        // gestión (CRUD) de prisioneros
        Gate::define('manage-prisoners', function (User $user)
        {
            return $user->role->slug === "admin";
        });


        // El usuario con perfil director solo puede realizar la
        // gestión (CRUD) de pabellones
        Gate::define('manage-wards', function (User $user) {
            return $user->role->slug === "director";
        });

        // El usuario con perfil director solo puede realizar la
        // gestión (CRUD) de cárceles
        Gate::define('manage-jails', function (User $user) {
            return $user->role->slug === "director";
        });

        // El usuario con perfil director solo puede realizar la
        // asignación de prisioneros a las cárceles
        Gate::define('manage-jails', function (User $user) {
            return $user->role->slug === "director";
        });

        // El usuario con perfil director solo puede realizar la
        // asignación de guardias a pabellones
        Gate::define('manage-assignment', function (User $user) {
            return $user->role->slug === "director";
        });






    }
}
