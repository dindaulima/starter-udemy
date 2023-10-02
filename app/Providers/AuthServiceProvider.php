<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    public static $permission = [
        // user management
        'dashboard' => ['admin','user'],
        'index-user' => ['admin'],


    ];
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
        $this->registerPolicies();

        // permisson super admin
        Gate::before(
            function(User $user){
                return true;
            }
        );
        
        foreach(self::$permission as $action=>$roles){
            Gate::define($action, function(User $user) use ($roles){
                if(in_array($user->role,$roles)){
                    return true;
                }
            });
        }
    }
}
