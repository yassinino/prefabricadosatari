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
        $products = Product::where('status', 'published')->take($this->amount)->get();
        return view('livewire.component_gard', ['products' => $products])->section('slot');
    }
}
