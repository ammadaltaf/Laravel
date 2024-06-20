<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\interfaces\PostInterface;
use App\services\PostService;
use App\Models\User;
use App\Models\Post;
use App\Observers\UserObserver;
use App\Observers\PostObserver;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // For sigle registration
        app()->bind(PostInterface::class, PostService::class);

        // For multi Registrations
        // app()->bind(PostInterface::class,
        //     function($app){
        //         return collect([
        //             'PService' => app(PostService::class)
        //         ]);
        //     }
        // );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        User::observe(UserObserver::class);
        Post::observe(PostObserver::class);
    }
}
