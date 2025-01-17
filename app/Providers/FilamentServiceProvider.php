<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Filament\Facades\Filament;

class FilamentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        // Filament::navigation(function () {
        //     return [
        //         NavigationGroup::make()
        //             ->items([
        //                 NavigationItem::make('Desa')
        //                     ->url('/') // Arahkan ke halaman utama
        //                     ->icon('heroicon-o-home'), // Tambahkan ikon jika diperlukan
        //             ]),
        //     ];
        // });
    }
}
