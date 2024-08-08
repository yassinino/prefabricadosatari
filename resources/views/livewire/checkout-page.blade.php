<div class="section-full p-t80 p-b50">
            
            <!-- PRODUCT DETAILS -->
            <div class="container woo-entry">
           
                
                <!-- SECTION CONTENT START -->
                <div class="section-content">
                    <div class="row">
                        <!-- FROM STYEL 1 -->
                        <div class="col-md-6 m-b30">
                            <div class="section-head">
                                <h2 class="text-uppercase">Billing Information</h2>
                                <div class="wt-separator-outer">
                                    <div class="wt-separator style-square">
                                        <span class="separator-left site-bg-primary"></span>
                                        <span class="separator-right site-bg-primary"></span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="wt-box">
                                @include('partials.checkout.address', [
                                    'type' => 'shipping',
                                    'step' => $steps['shipping_address'],
                                ])

                                @include('partials.checkout.shipping_option', [
                                    'step' => $steps['shipping_option'],
                                ])

                                @include('partials.checkout.address', [
                                    'type' => 'billing',
                                    'step' => $steps['billing_address'],
                                ])

                                @include('partials.checkout.payment', [
                                    'step' => $steps['payment'],
                                ])
                            </div>                    
                        </div>
                        
                        <!-- FROM STYEL 1 WITH ICON -->
                        <div class="col-md-6 m-b30">
                            <div class="section-head">
                                <h2 class="text-uppercase">Your Order</h2>
                                <div class="wt-separator-outer">
                                    <div class="wt-separator style-square">
                                        <span class="separator-left site-bg-primary"></span>
                                        <span class="separator-right site-bg-primary"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="wt-box your-order-list">
                                <ul>

                                @foreach ($cart->lines as $line)

                                <li wire:key="cart_line_{{ $line->id }}">
                                    <!-- <img class="img thumbnail" src="{{ $line->purchasable->getThumbnail()->getUrl() }}" />  -->
                                {{ $line->purchasable->getDescription() }}
                                    <strong class="pull-right site-text-primary">{{ $line->quantity }} x {{ $line->subTotal->formatted() }}</strong>
                                </li>

                                @endforeach

                                <li><b> Cart Subtotal</b><strong class="pull-right site-text-primary">{{ $cart->subTotal->formatted() }}</strong></li>
                                @if ($this->shippingOption)
                                <li><b> {{ $this->shippingOption->getDescription() }}</b><strong class="pull-right site-text-primary">{{ $this->shippingOption->getPrice()->formatted() }}</strong></li>
                                @endif


                                @foreach ($cart->taxBreakdown->amounts as $tax)
                                <li><b> {{ $tax->description }}</b><strong class="pull-right site-text-primary">{{ $tax->price->formatted() }}</strong></li>
                                @endforeach

                                <li><b> Cart Total</b><strong class="pull-right site-text-primary">{{ $cart->total->formatted() }}</strong></li>

                                </ul>
                            </div>                    
                        </div>
                    </div>
                    
                </div>
                <!-- SECTION CONTENT END -->                    
                
            </div>
            <!-- PRODUCT DETAILS -->	
                
        </div>
        