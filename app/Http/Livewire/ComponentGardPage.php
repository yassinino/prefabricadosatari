<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Lunar\Models\Product;

class ComponentGardPage extends Component
{
    public $amount = 10;


    public function loadMore(){
        $this->amount += 10;
    }


    public function render()
    {

        $products = Product::whereHas('collections', function($query){
            $query->whereIn('lunar_collections.id', [7, 8]); //pilares - cubre pilar
        })->get();
        return view('livewire.component_gard', ['products' => $products]);
    }
}
