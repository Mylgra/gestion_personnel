<?php

namespace App\View\Components;

use App\View\LinkItems;
use App\View\Sidebar;
use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
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
                LinkItems::make('Manage Account')
                    ->route('dashboard')
                    ->icon('user')
                    ->children([
                        LinkItems::make('Profile')
                            ->route('dashboard'),
                    ]),
                LinkItems::make('Settings')
                    ->route('dashboard')
                    ->icon('setting')
            ]);
        return view('layouts.guest', compact('sidebar'));
    }
}
