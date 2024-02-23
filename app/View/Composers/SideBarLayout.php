<?php

namespace App\View\Composers;

use App\View\TallFlex\Menus\Links\LinkItems;
use App\View\TallFlex\Menus\Sidebar;
use Illuminate\View\View;

class SideBarLayout
{
    public function compose(View $view): void
    {
        $sidebar = Sidebar::make('Dashboard')
            ->logo('images/profile.jpg')
            ->theme('light')
            ->route('home')
            ->icon('menu')
            ->items([
                LinkItems::make('Dashboard')
                    ->route('home')
                    ->icon('grid'),
                LinkItems::make('agents')
                    ->route('agents')
                    ->icon('user-c'),
            ]);

        $view->with('sidebar', $sidebar);
    }
}
