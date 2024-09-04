<div class="page-content">
        <div class="section-full p-t40 p-b50">
            <div class="container woo-entry">
                <div class="row m-b30">
                
                    <div class="col-lg-4 col-md-8 m-b30">
                        <div class="wt-box wt-product-gallery on-show-slider"> 
                        
                            <div id="sync1" class="owl-carousel owl-theme owl-btn-vertical-center m-b5">
                                
                            @foreach($this->images as $image)
                            <div class="item">
                                    <div class="mfp-gallery">
                                        <div class="wt-box">
                                            <div class="wt-thum-bx wt-img-overlay1 " wire:key="image_{{ $image->id }}">
                                                <img src="{{ $image->getUrl('large') }}" alt="{{ $this->product->translateAttribute('name') }}">
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon">
                                                        <a class="mfp-link" href="{{ $image->getUrl('large') }}">
                                                            <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                            </div>
                            
                            <div id="sync2" class="owl-carousel owl-theme">
                                @foreach($this->images as $image)
                                <div class="item">
                                    <div class="wt-media" wire:key="image_{{ $image->id }}">
                                        <img src="{{ $image->getUrl('small') }}" alt="{{ $this->product->translateAttribute('name') }}">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-8 col-md-12">
                        <div class="wt-post-title ">
                            <h3 class="post-title"><a href="javascript:void(0);">{{ $this->product->translateAttribute('name') }}
                            
                            @if($this->product->collections[0]->translateAttribute('name') == 'Cubre pilar')
                            - {{ $this->variant->sku }}
                            @endif
                        
                        </a></h3>
                            <p>{{  $this->product->collections[0]->translateAttribute('name') }}</p>
                        </div>
                        <h2 class="m-tb10">
                            <x-product-price class="ml-4 font-medium"
                                     :variant="$this->variant" />
                        </h2>


                        <form class="mt-4">
                    <div class="space-y-4 mb-3">
                        @foreach ($this->productOptions as $option)
                            <fieldset>
                                <legend class="text-xs font-medium text-gray-700">
                                    {{ $option['option']->translate('name') }}
                                </legend>

                                <div class="flex flex-wrap gap-2 mt-2 text-xs tracking-wide uppercase"
                                     x-data="{
                                         selectedOption: @entangle('selectedOptionValues'),
                                         selectedValues: [],
                                     }"
                                     x-init="selectedValues = Object.values(selectedOption);
                                     $watch('selectedOption', value =>
                                         selectedValues = Object.values(selectedOption)
                                     )"
                                     >
                                    

                                        <select class="form-control" wire:model="selectedOptionValues.{{ $option['option']->id }}">

                                            @foreach ($option['values'] as $key => $value)
                                            <option value="{{ $value->id }}" wire:key="{{ $key }}">{{ $value->translate('name') }}</option>
                                            @endforeach

                                        </select>

                                </div>
                            </fieldset>
                        @endforeach
                    </div>

                    <div class="max-w-xs mt-8">
                        <livewire:components.add-to-cart :purchasable="$this->variant"
                                                         :wire:key="$this->variant->id">
                    </div>
                </form>


                        @if($this->product->collections[0]->translateAttribute('name') == 'Pilares')
                        
                        <p style="margin-bottom : 0px!important;">
                        <b>Moderno, duradero y sin mantenimiento.</b> <br>
                            * Peso 98 Kg <br>
                            * Dimensiones 2850 x 130 x 130 mm <br>
                            Ejemplar​ : <br>
                            * Aspecto especial ● Reforzado ● Junta simple ● Una cara <br>

                            * Descripción {!! $this->product->translateAttribute('description') !!}

                        </p>

                      
                        @elseif(in_array(8, $this->product->collections->pluck('id')->toArray()))

                        <p style="margin-bottom : 0px!important;">
                        <b>Moderno, duradero y sin mantenimiento.</b> <br>
                            * Peso 50 Kg <br>
                            * Dimensiones 200 × 30 × 4 cm <br>
                            Ejemplar​ : <br>
                            * Aspecto especial ● Reforzado ● Junta simple ● Una cara <br>

                            * Descripción {!! $this->product->translateAttribute('description') !!}

                        </p>


                        @elseif($this->product->collections[0]->translateAttribute('name') == 'Cubre pilar')


                        <p style="margin-bottom : 0px!important;">
                        <b>Moderno, duradero y sin mantenimiento.</b> <br>
                            @if(isset($this->dimension)) * Dimensiones {{  $this->dimension->translate('name') }} <br> @endif
                            Ejemplar​ : <br>
                            * Aspecto especial ● Reforzado ● Junta simple ● Una cara <br>

                            * Descripción {!! $this->product->translateAttribute('description') !!}

                        </p>

                        @else

                        <p style="margin-bottom : 0px!important;">
                        <b>Moderno, duradero y sin mantenimiento.</b> <br>
                            * Peso 70 Kg <br>
                            * Dimensiones 200 × 50 × 4 cm <br>
                            Ejemplar​ : <br>
                            * Aspecto especial ● Reforzado ● Junta simple ● Una cara <br>

                            * Descripción {!! $this->product->translateAttribute('description') !!}

                        </p>


                        @endif

                        
                        <p>
                        <b>Vallas prefabricadas de hormigón o mármol recompuesto.</b> <br>
                            Vallas prefabricadas de hormigón de la marca Prefabricados Atari SL, que destacan por su depurado diseño, de líneas claras y limpias.
                            <br>Paneles con armoniosas formas geométricas o estampados en madera, piedra o ladrillo. 
                            <br>Nuestros paneles se distinguen por su apariencia, textura fina y calidad de producción.
                        </p>
                       
                        <livewire:components.add-to-cart :purchasable="$this->variant"
                                                         :wire:key="$this->variant->id">
                    </div>

                </div>
                
                    <div class="p-b10">
                        <h2 class="text-uppercase">PRODUCTOS SIMILARES</h2>
                        <div class="wt-separator-outer  m-b30">
                            <div class="wt-separator style-square">
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                    </div>
                
                <div class="row m-b30">

                @foreach($this->similarProducts as $product)
                    <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                        <x-product-card :product="$product" />
                    </div>
                @endforeach




               
                </div>
                    
            </div>
        </div>
    </div>

