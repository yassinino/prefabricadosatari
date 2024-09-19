<?php

namespace App\Http\Livewire;

use App\Traits\FetchesUrls;
use Livewire\Component;
use Livewire\ComponentConcerns\PerformsRedirects;
use Lunar\Models\Product;
use Lunar\Models\Discount;

class ProductPage extends Component
{
    use FetchesUrls, PerformsRedirects;

    /**
     * The selected option values.
     *
     * @var array
     */
    public $selectedOptionValues = [];

    /**
     * {@inheritDoc}
     *
     * @param  string  $slug
     * @return void
     */
    public function mount($slug)
    {
        $this->url = $this->fetchUrl(
            $slug,
            Product::class,
            [
                'element.media',
                'element.variants.basePrices.currency',
                'element.variants.basePrices.priceable',
                'element.variants.values.option',
            ]
        );

        $this->selectedOptionValues = $this->productOptions->mapWithKeys(function ($data) {
            return [$data['option']->id => $data['values']->first()->id];
        })->toArray();


        if (! $this->variant) {
            abort(404);
        }
    }

    /**
     * Computed property to get variant.
     *
     * @return \Lunar\Models\ProductVariant
     */
    public function getVariantProperty()
    {
        return $this->product->variants->first(function ($variant) {
            return ! $variant->values->pluck('id')
                ->diff(
                    collect($this->selectedOptionValues)->values()
                )->count();
        });
    }

    /**
     * Computed property to return all available option values.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getProductOptionValuesProperty()
    {
        return $this->product->variants->pluck('values')->flatten();
    }

    /**
     * Computed propert to get available product options with values.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getProductOptionsProperty()
    {
        return $this->productOptionValues->sortBy('id')->unique('id')->groupBy('product_option_id')
            ->map(function ($values) {
                return [
                    'option' => $values->first()->option,
                    'values' => $values,
                ];
            })->values();
    }

    /**
     * Computed property to return product.
     *
     * @return \Lunar\Models\Product
     */
    public function getProductProperty()
    {
        return $this->url->element;
    }


    /**
     * Computed property to return product.
     *
     * @return \Lunar\Models\Product
     */
    public function getSimilarProductsProperty()
    {
        $ids = $this->url->element->collections->pluck('id');

        $products = Product::whereHas('collections', function($query) use($ids){
            $query->whereIn('lunar_collections.id', $ids);
        })->whereNot('id', $this->url->element->id)->where('status', 'published')->take(4)->get();

        return $products;
    }

    /**
     * Return all images for the product.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getImagesProperty()
    {
        // dd($this->product->media);
        if(count($this->variant->images) > 0){
            return $this->variant->images;
        }
        return $this->product->media;
    }

    /**
     * Computed property to return current image.
     *
     * @return string
     */
    public function getImageProperty()
    {
        if (count($this->variant->images)) {
            return $this->variant->images->first();
        }

        if ($primary = $this->images->first(fn ($media) => $media->getCustomProperty('primary'))) {
            return $primary;
        }

        return $this->images->first();
    }

    public function getDimensionProperty()
    {
        return $this->variant->values->first();
    }


    public function getMycollectionsProperty(){
        $m_arrays = [];
        $arrays = $this->product->collections;

        foreach ($arrays as $key => $collection) {
            $m_arrays[$key] = $collection->translateAttribute('name');
        }

        return $m_arrays;

    }


    /**
     * {@inheritDoc}
     */
    public function render()
    {

        return view('livewire.product-page');
    }
}
