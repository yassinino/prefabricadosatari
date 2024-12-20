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
            $query->where('lunar_collections.id', 9); //cubre pilar
        })->orderBy('created_at', 'desc')->get();
        return view('livewire.component_gard', ['products' => $products]);
    }
}
