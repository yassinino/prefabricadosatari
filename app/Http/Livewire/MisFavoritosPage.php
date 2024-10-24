<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Lunar\Models\Product;
use Auth;
use App\Models\Wishlist;

class MisFavoritosPage extends Component
{
    public $amount = 20;


    public function loadMore(){
        $this->amount += 20;
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
        $ids = Wishlist::where('user_id', Auth()->user()->id)->pluck('product_id');
        $products = Product::whereIn('id', $ids)->where('status', 'published')->take($this->amount)->orderBy('created_at', 'desc')->get();
        return view('livewire.mis_favoritos', ['products' => $products]);
    }
}
