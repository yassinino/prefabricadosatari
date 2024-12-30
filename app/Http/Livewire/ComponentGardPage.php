<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Lunar\Models\Product;
use App\Models\Wishlist;
use Auth;

class ComponentGardPage extends Component
{
    public $amount = 10;


    public function loadMore(){
        $this->amount += 10;
    }


    public function addToFavorite($product_id){
        if(Auth::check()){

            if(Wishlist::where('user_id', Auth()->user()->id)->where('product_id', $product_id)->first()){

                Wishlist::where('user_id', Auth()->user()->id)->where('product_id', $product_id)->delete();

            }else{

                Wishlist::create([
                    'user_id' => Auth()->user()->id,
                    'product_id' => $product_id,
                ]);

                
            }
            
        }else{
            return redirect()->to('/login');
        }
    }

    public function render()
    {

        $products = Product::whereHas('collections', function($query){
            $query->where('lunar_collections.id', 9); //cubre pilar
        })->orderBy('created_at', 'desc')->get();
        return view('livewire.component_gard', ['products' => $products]);
    }
}
