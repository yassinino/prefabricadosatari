<?php

namespace App\Modifiers;

use Lunar\DataTypes\Price;
use Lunar\DataTypes\ShippingOption;
use Lunar\Facades\ShippingManifest;
use Lunar\Models\Cart;
use Lunar\Models\TaxClass;

class ShippingModifier
{
    public function handle(Cart $cart)
    {
        // Get the tax class
        $taxClass = TaxClass::getDefault();

        ShippingManifest::addOption(
            new ShippingOption(
                name: 'Envio España',
                description: 'Envio España',
                identifier: 'BASDEL',
                price: new Price(1500, $cart->currency, 1),
                taxClass: $taxClass
            )
        );

    }
}
