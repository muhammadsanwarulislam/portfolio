<?php 
namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Gate;

class AuthorizationService
{
    public static function registerGatesAndPolicies()
    {
        Gate::define('add', function (User $user, $model) {
            return $user->hasAccess("view_{$model}");
        });

        Gate::define('view', function (User $user, $model) {
            return $user->hasAccess("view_{$model}");
        });

        Gate::define('edit', function (User $user, $model) {
            return $user->hasAccess("edit_{$model}");
        });

        Gate::define('delete', function (User $user, $model) {
            return $user->hasAccess("delete_{$model}");
        });
    }
}
