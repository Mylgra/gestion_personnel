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
        $sidebar = Sidebar::make()
            ->image('images/profile.jpg')
            ->theme('dark')
            ->route('home')
            ->icon('menu')
            ->items([
                // Link items
                LinkItems::make('Dashboard')
                    ->route('dashboard')
                    ->icon('home')
            ]);

        $view->with('sidebar', $sidebar);
    }
}
