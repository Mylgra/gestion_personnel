<?php

declare(strict_types=1);

namespace App\Providers;

use App\View\Composers\LayoutComposer;
use App\View\Composers\SideBarLayout;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('layouts.app', LayoutComposer::class);
        view()->composer('layouts.app', SideBarLayout::class);
    }
}
