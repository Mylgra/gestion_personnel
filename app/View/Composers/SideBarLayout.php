<?php

declare(strict_types=1);

namespace App\View\Composers;

use App\View\TallFlex\Menus\Links\LinkItems;
use App\View\TallFlex\Menus\Sidebar;
use Illuminate\View\View;

class SideBarLayout
{
    public function compose(View $view): void
    {
        $sidebar = Sidebar::make()
            ->logo('images/profile.jpg')
            ->theme('dark')
            ->route('home')
            ->icon('menu')
            ->items([
                LinkItems::make('Menu Principal')
                    ->route('home')
                    ->icon('home'),
                LinkItems::make('Gestion Service')
                    ->route('home')
                    ->icon('folder-list')
                    ->children([
                        LinkItems::make('Services')
                            ->route('services')
                            ->children([
                                LinkItems::make('Grades')
                                    ->route('grades'),
                                LinkItems::make('Fonctions')
                                    ->route('fonctions'),
                            ]),

                    ])
            ]);

        $view->with('sidebar', $sidebar);
    }
}
