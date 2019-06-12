<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Auth;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        'App\Content' => 'App\Policies\ContentPoliciy',
        'App\Article'=> 'App\Policies\ArticlePoliciy',
        'App\Comment'=> 'App\Policies\CommentPolicy',
        'App\Tag'=> 'App\Policies\TagPolicy',
        'App\Categorie'=> 'App\Policies\CategoriePolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('Admin',function($user) {
            return  Auth::user()->role->name === "Admin";
            });

            Gate::define('Editor',function($user) {
                return  Auth::user()->role->id <= 2;
                });
    }
}
