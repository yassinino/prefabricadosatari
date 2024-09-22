<?php

namespace App\Providers;

use App\Modifiers\ShippingModifier;
use Illuminate\Support\ServiceProvider;
use Lunar\Base\ShippingModifiers;
use Lunar\Hub\Facades\Menu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(ShippingModifiers $shippingModifiers)
    {

        
        $slot = Menu::slot('sidebar');

        $slot->addItem(function ($item) {
            $item
                ->name('Galerie')
                ->handle('hub.galeries')
                ->route('hub.galeries.index')
                ->icon('ticket');
        });

        $shippingModifiers->add(
            ShippingModifier::class
        );
    }
}
