<span class="price" {{ $attributes }}> <br>

    <?php
        $prod = Lunar\Models\Product::where('id', $price->priceable->product_id)->first();

        $prod->collections[0]->translateAttribute('name');

        $product_collections = $prod->collections->pluck('id');

        $dic_col = \DB::table('lunar_collection_discount')
        ->leftJoin('lunar_discounts', 'lunar_discounts.id', 'lunar_collection_discount.discount_id')
        ->where('lunar_discounts.priority', 10)
        ->whereIn('collection_id', $product_collections)->first();

        if(isset($dic_col)){
            $discount = Lunar\Models\Discount::find($dic_col->discount_id)->toArray();
            $percentage = $discount['data']['percentage'];
            $old_price = $prod->prices->first()->price->decimal();
            $currency = $prod->prices->first()->price->currency->code;



            $locale='en-US'; //browser or user locale
            $fmt = new NumberFormatter( $locale."@currency=$currency", NumberFormatter::CURRENCY );
            $symbol = $fmt->getSymbol(NumberFormatter::CURRENCY_SYMBOL);


            $price = $symbol . $old_price - (($old_price * $percentage) / 100);


        }else{
            $price = $price?->price->formatted();
        }


    ?>
    {{-- {{ $prod->collections[0]->translateAttribute('name') == 'Decoration jardin' ? 'Precio unidad' : 'Desde' }} 
    
    @if(isset($dic_col))

    <span style="text-decoration: line-through;">{{ $symbol . $old_price }}</span> {{ $price }}

    @else

    {{ $price }}

    @endif --}}

</span>