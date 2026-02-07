<?php

namespace App\Providers;

use App\Models\Page;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if(app()->runningInConsole()) {
            return;
        }
        // Menu Loading Begin //
        $query = Page::where('is_backend_page', 0)
                        ->where('is_in_main_menu', 1)
                        ->where('is_active', 1);

        $menu = (clone $query)
                    ->where('fk_parent_page_id', null)
                    ->get()
                    ->sortBy('order');

        foreach($menu as $page) {
            if($page->has_submenu) {
                $childPages = (clone $query)
                                ->where('fk_parent_page_id', $page->page_id)
                                ->get()
                                ->sortBy('order');
                $page->children = $childPages;
            }
        }
        View::share('menu', $menu);
        // Menu Loading End //

    }
}
