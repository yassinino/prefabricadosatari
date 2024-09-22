<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Lunar\Base\Purchasable;
use Lunar\Facades\CartSession;
use Lunar\Facades\Discounts;
class AddToCart extends Component
{
    /**
     * The purchasable model we want to add to the cart.
     *
     * @var Purchasable
     */
    public ?Purchasable $purchasable = null;

    /**
     * The quantity to add to cart.
     *
     * @var int
     */
    public $quantity = 1;

    /**
     * {@inheritDoc}
     */
    public function rules()
    {
        return [
            'quantity' => 'required|numeric|min:1|max:10000',
        ];
    }

    public function addToCart()
    {
        $this->validate();

        if ($this->purchasable->stock < $this->quantity) {
            $this->addError('quantity', 'La cantidad excede el stock disponible.');
            return;
        }

        CartSession::manager()->add($this->purchasable, $this->quantity);


        $cart = CartSession::current();
        $discount = 'promo';


        if (Discounts::validateCoupon($discount)) {

                $cart->coupon_code = $discount;
                $cart->save();
                $cart->calculate();

            Discounts::resetDiscounts();

        }


        $this->emit('add-to-cart');
    }

    public function render()
    {
        return view('livewire.components.add-to-cart');
    }
}
