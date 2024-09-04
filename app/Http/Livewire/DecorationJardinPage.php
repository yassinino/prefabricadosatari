<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Lunar\Models\Product;

class DecorationJardinPage extends Component
{
    public $amount = 10;


    public function loadMore(){
        $this->amount += 10;
    }


    public function render()
    {

        $products = Product::whereHas('collections', function($query){
            $query->whereIn('lunar_collections.id', 10); //deco jardin
        })->orderBy('created_at', 'desc')->get();
        return view('livewire.decoration_jardin', ['products' => $products]);
    }
}
