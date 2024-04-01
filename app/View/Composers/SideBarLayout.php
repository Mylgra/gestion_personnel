<?php

declare(strict_types=1);

namespace App\View\Composers;

use Illuminate\View\View;
use Tresorkasenda\Menus\Links\LinkItems;
use Tresorkasenda\Menus\Sidebar;

class SideBarLayout
{
    public function compose(View $view): void
    {
        $sidebar = Sidebar::make('Administration')
            ->image(image: asset('images/logo.jpg'))
            ->theme('light')
            ->route('dashboard')
            ->icon('menu')
            ->items([
                // Link items
                LinkItems::make('Dashboard')
                    ->route('dashboard')
                    ->icon('dashboard')
            ]);

        $view->with('sidebar', $sidebar);
    }
}
