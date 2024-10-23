<?php

namespace App\Http\Livewire;

use App\Traits\FetchesUrls;
use Livewire\Component;
use Livewire\ComponentConcerns\PerformsRedirects;
use Lunar\Models\Collection;
use App\Models\Wishlist;
use Auth;

class VallasPage extends Component
{
    use PerformsRedirects,
        FetchesUrls;

    /**
     * {@inheritDoc}
     *
     * @param  string  $slug
     * @return void
     *
     * @throws \Http\Client\Exception\HttpException
     */
    public function mount($slug)
    {
        $this->url = $this->fetchUrl(
            $slug,
            Collection::class,
            [
                'element.thumbnail',
                'element.products.variants.basePrices',
                'element.products.defaultUrl',
            ]
        );

        if (! $this->url) {
            abort(404);
        }
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

    /**
     * Computed property to return the collection.
     *
     * @return \Lunar\Models\Collection
     */
    public function getCollectionProperty()
    {
        return $this->url->element;
    }

    /**
     * {@inheritDoc}
     */
    public function render()
    {
        return view('livewire.vallas');
    }
}
