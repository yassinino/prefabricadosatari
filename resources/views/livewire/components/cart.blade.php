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
                                                        x {{ $line['unit_price'] }}</span>
                                                        <a href="#" class="nav-cart-item-quantity"
                                                        wire:click.prevent="removeLine('{{ $line['id'] }}')">x</a>
                                                    </div>
                                                </div>
                                            @endforeach

                                            </div>

                                        @else
                                            <p class="py-4 text-sm font-medium text-center text-gray-500">
                                                Your cart is empty
                                            </p>
                                        @endif

                                    <div class="nav-cart-title p-tb10 p-lr15 clearfix">
                                        <h4  class="pull-left m-a0">Subtotal:</h4>
                                        <h5 class="pull-right m-a0">{{ $this->cart->subTotal->formatted() }}</h5>
                                    </div>
                                    @else
                                        <p class="py-4 text-sm font-medium text-center text-gray-500">
                                            Tu Cesta esta vacío
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
                                                Cesta
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div> 
</div> 