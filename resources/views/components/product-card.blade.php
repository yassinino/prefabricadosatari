@props(['product'])


                        <div class="wt-box wt-product-box">
                            <a href="{{ route('product.view', $product->defaultUrl->slug) }}">
                            <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                @if ($product->thumbnail)
                                
                                    <img src="{{ $product->thumbnail->getUrl('medium') }}"
                                        alt="{{ $product->translateAttribute('name') }}" />
                                @endif
                            </div>
                            </a>

                            <div class="wt-info">
                                <div class="p-a10 bg-white">
                                    <h4 class="wt-title">
                                        <a href="{{ route('product.view', $product->defaultUrl->slug) }}">{{ strlen($product->translateAttribute('name')) > 30 ? substr($product->translateAttribute('name'),0,30)."..." : $product->translateAttribute('name');  }}</a>
                                    </h4>
                                    <hr>
                                    <p>

                                        {!! strlen($product->translateAttribute('description')) > 100 ? substr($product->translateAttribute('description'),0,100)."..." : $product->translateAttribute('description');  !!}

                                    </p>
                                    <x-product-price :product="$product"/>

                                    <div>
                                    <a href="{{ route('product.view', $product->defaultUrl->slug) }}" class="m-b5 mt-3 output-button" type="button">
                                        <span class="site-button-inr ">Ver Detalles</span>
                                    </a>
                                    </div>
                                    
                                </div>
                                <div class="p-t10">
                                   
                                </div>
                            </div>
                        </div>

