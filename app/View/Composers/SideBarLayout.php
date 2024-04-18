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
        $sidebar = Sidebar::make('Dashboard')
            ->image('')
            ->theme('dark')
            ->route('dashboard')
            ->icon('menu')
            ->items([
                LinkItems::make('Events')
                    ->route('events')
                    ->icon('list')
            ]);

        $view->with('sidebar', $sidebar);
    }
}
