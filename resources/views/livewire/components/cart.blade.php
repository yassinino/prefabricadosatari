<div class="extra-cell" x-data="{
         linesVisible: @entangle('linesVisible')
     }">
                           <a href="javascript:;" class="wt-cart cart-btn" title="Your Cart" x-on:click="linesVisible = !linesVisible">
                                <span class="link-inner">
                                    <span class="woo-cart-total"> </span>
                                    <span class="woo-cart-count">
                                        <span class="shopping-bag wcmenucart-count ">{{ count($lines) }}</span>
                                    </span>
                                </span>
                            </a>

                            <div class="cart-dropdown-item-wraper" 
                                x-transition 
                                x-cloak 
                                x-show="linesVisible" 
                                x-on:click.away="linesVisible = false">
                                <div class="nav-cart-content">

                                @if ($this->cart)
                                        @if ($lines)

                                            <div class="nav-cart-items p-a15">

                                            @foreach ($lines as $index => $line)
                                                <div class="nav-cart-item clearfix" wire:key="line_{{ $line['id'] }}">
                                                    <div class="nav-cart-item-image">
                                                        <a href="#"><img src="{{ $line['thumbnail'] }}" alt="p-1"></a>
                                                    </div>
                                                    <div class="nav-cart-item-desc">
                                                        <a href="#">{{ $line['description'] }}</a> <br>
                                                        <small>{{ $line['identifier'] }} / {{ $line['options'] }}</small>
                                                        <span class="nav-cart-item-price">
                                                        <input id="demo_vertical2" class="form-control" type="number" wire:model="lines.{{ $index }}.quantity" />
                                                        x 

                                                        <?php
                                                            $prod = Lunar\Models\ProductVariant::where('sku', $line['identifier'])->first()->product;

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

                                                                $price = $symbol .$old_price - (($old_price * $percentage) / 100);

                                                            }else{
                                                               $price = $line['unit_price'];
                                                            }
                                                        ?>
                                                        
                                                        @if(isset($dic_col))

                                                        <span style="text-decoration: line-through;">{{ $symbol . $old_price }}</span> {{ $price }}

                                                        @else

                                                        {{ $price }}

                                                        @endif
                                                    
                                                        </span>
                                                        <a href="#" class="nav-cart-item-quantity"
                                                        wire:click.prevent="removeLine('{{ $line['id'] }}')">x</a>
                                                    </div>
                                                </div>
                                            @endforeach

                                            </div>

                                        @else
                                            <p class="py-4 text-sm font-medium text-center text-gray-500">
                                                El carrito está vacío
                                            </p>
                                        @endif

                                        @if( count($this->cart->discounts) > 0)
                                        <div class="nav-cart-title p-tb10 p-lr15 clearfix">
                                            <h4  class="pull-left m-a0">Subtotal:</h4>
                                            <h5 class="pull-right m-a0">{{ $this->cart->subTotalDiscounted->formatted() }}</h5>
                                        </div>
                                        @else

                                        <div class="nav-cart-title p-tb10 p-lr15 clearfix">
                                            <h4  class="pull-left m-a0">Subtotal:</h4>
                                            <h5 class="pull-right m-a0">{{ $this->cart->subTotal->formatted() }}</h5>
                                        </div>

                                        @endif

                                    @else
                                        <p class="py-4 text-sm font-medium text-center text-gray-500">
                                            El carrito está vacío
                                        </p>
                                    @endif

                                    @if ($this->cart)
                                        <div class="nav-cart-action p-a15 clearfix">
                                            <button class="site-button  btn-block m-b15"
                                                    type="button"
                                                    wire:click="updateLines">
                                                Actualización
                                            </button>

                                            <a class="site-button  btn-block"
                                            href="{{ route('checkout.view') }}">
                                                Carrito
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div> 
</div> 