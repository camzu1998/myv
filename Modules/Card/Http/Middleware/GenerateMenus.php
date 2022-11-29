<?php

namespace Modules\Card\Http\Middleware;

use Closure;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /*
         *
         * Module Menu for Admin Backend
         *
         * *********************************************************************
         */
        \Menu::make('admin_sidebar', function ($menu) {

            // comments
            $menu->add('<i class="nav-icon fas fa-file"></i> ' . __('Cards'), [
                'route' => 'backend.cards.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 1,
                    'activematches' => ['admin/cards*'],
                    'permission'    => ['view_cards'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);
        })->sortBy('order');

        return $next($request);
    }
}
