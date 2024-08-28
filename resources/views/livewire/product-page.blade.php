<div class="page-content">
        

        <!-- BREADCRUMB ROW END -->                   
        
        <!-- SECTION CONTENT START -->
        <div class="section-full p-t40 p-b50">
        
            <!-- PRODUCT DETAILS -->
            <div class="container woo-entry">
            
                <div class="row m-b30">
                
                    <div class="col-lg-4 col-md-8 m-b30">
                        <div class="wt-box wt-product-gallery on-show-slider"> 
                        
                            <div id="sync1" class="owl-carousel owl-theme owl-btn-vertical-center m-b5">
                                
                            @foreach ($this->images as $image)
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
                                @foreach ($this->images as $image)
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
                            <h3 class="post-title"><a href="javascript:void(0);">{{ $this->product->translateAttribute('name') }}</a></h3>
                            <p>{{ $this->variant->sku }}</p>
                        </div>
                        <h2 class="m-tb10">
                            <x-product-price class="ml-4 font-medium"
                                     :variant="$this->variant" />
                        </h2>
                        
                        <p style="margin-bottom : 0px!important;">
                        <b>Moderno, duradero y sin mantenimiento.</b> <br>
                            * Peso 70 kilos <br>
                            * Dimensiones 200 × 50 × 4 cm <br>
                            Ejemplar​ : <br>
                            * Aspecto especial ● Reforzado ● Junta simple ● Una cara <br>

                            * Descripción {!! $this->product->translateAttribute('description') !!}

                        </p>

                        
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
                
                <!-- TITLE START -->
                    <div class="p-b10">
                        <h2 class="text-uppercase">PRODUCTOS SIMILARES</h2>
                        <div class="wt-separator-outer  m-b30">
                            <div class="wt-separator style-square">
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                    </div>
                <!-- TITLE END -->
                
                <div class="row m-b30">

                @foreach($this->similarProducts as $product)
                    <!-- COLUMNS 1 -->
                    <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                        <x-product-card :product="$product" />
                    </div>
                @endforeach

               
                </div>
                    

            </div>
            <!-- PRODUCT DETAILS -->
                
        </div>
        <!-- CONTENT CONTENT END -->
    
    
    </div>
    <!-- CONTENT END -->
