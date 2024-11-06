<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Lunar\Models\Product;

class PilaresPage extends Component
{
    public $amount = 10;


    public function loadMore(){
        $this->amount += 10;
    }


    public function render()
    {

        $products = Product::whereHas('collections', function($query){
            $query->where('lunar_collections.id', 7); //pilares
        })->orderBy('created_at', 'desc')->get();
        return view('livewire.pilares', ['products' => $products]);
    }
}
