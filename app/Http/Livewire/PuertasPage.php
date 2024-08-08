<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Lunar\Models\Product;

class PuertasPage extends Component
{

    public function getProductsProperty()
    {
        $products = Product::whereHas('collections', function($query){
            $query->where('lunar_collections.id', 6); // get puertas collection
        })->get();

        return $products;
    }

    public function render()
    {
        return view('livewire.puertas');
    }
}
