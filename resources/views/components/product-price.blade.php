<span class="price" {{ $attributes }}> <br>

    <?php
        $prod = Lunar\Models\Product::where('id', $price->priceable->product_id)->first();

        $prod->collections[0]->translateAttribute('name');
    ?>
    {{ $prod->collections[0]->translateAttribute('name') == 'Decoration jardin' ? 'Precio unidad' : 'Desde' }} {{ $price?->price->formatted() }}
</span>