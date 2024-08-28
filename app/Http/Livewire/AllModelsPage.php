<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Lunar\Models\Product;

class AllModelsPage extends Component
{
    public $amount = 20;


    public function loadMore(){
        $this->amount += 20;
    }


    public function render()
    {
        $products = Product::whereHas('collections', function($query){
            $query->where('lunar_collections.id', '<>' , 6);
        })->where('status', 'published')->take($this->amount)->orderBy('created_at', 'desc')->get();
        return view('livewire.all_models', ['products' => $products])->section('slot');
    }
}
