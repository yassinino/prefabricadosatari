<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Lunar\Models\Product;
use App\Models\Wishlist;
use Auth;
class PromoPage extends Component
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
            $products = Product::whereHas('collections', function($query){
                $query->where('lunar_collections.id', '<>' , 6);
            })->where('status', 'published')->take($this->amount)->orderBy('created_at', 'desc')->get();

            return view('livewire.promo', ['products' => $products]);
        }
    
}
