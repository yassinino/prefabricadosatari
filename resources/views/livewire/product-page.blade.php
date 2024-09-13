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
                                            <div class="wt-thum-bx wt-img-overlay1" wire:key="image_{{ $image->id }}">
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
                            <p>
                                @foreach($this->mycollections as $col)
                                - {{  $col }}
                                @endforeach
                            </p>
                        </div>
                        <h2 class="m-tb10">
                            <x-product-price class="ml-4 font-medium"
                                     :variant="$this->variant" 
                                     :type="$this->product->collections[0]->translateAttribute('name')"/>
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
                                    

                                        <select class="form-control arrow" wire:model="selectedOptionValues.{{ $option['option']->id }}">

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

                        @elseif(in_array('Doble cara', $this->mycollections))


                        <p style="margin-bottom : 0px!important;">
                        <b>Moderno, duradero y sin mantenimiento.</b> <br>
                            * Peso 50 Kg <br>
                            * Dimensiones 200 × 30 × 4 cm <br>
                            Ejemplar​ : <br>
                            * Aspecto especial ● Reforzado ● Junta simple ● @if(isset($this->dimension))  {{  $this->dimension->translate('name') }} <br> @endif

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

                        @elseif($this->product->collections[0]->translateAttribute('name') == 'Decoration jardin')

                        <p style="margin-bottom : 0px!important;">
                        <b>Moderno, duradero y sin mantenimiento.</b> <br>

                            @if($this->product->translateAttribute('dimension') != '')
                            * Dimensiones {{  $this->product->translateAttribute('dimension') }} <br> 
                            @endif

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

    <script>
    document.addEventListener('livewire:load', function () {
        // Function to initialize the charts
        function initCharts() {

            var sync1 = $("#sync1");
            var sync2 = $("#sync2");
            var slidesPerPage = 4; //globaly define number of elements per page
            var syncedSecondary = true;

            sync1.trigger('destroy.owl.carousel');

            sync1.owlCarousel({
                items : 1,
                slideSpeed : 2000,
                nav: true,
                autoplay: false,
                dots: false,
                loop: true,
                responsiveRefreshRate : 200,
                navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
            }).on('changed.owl.carousel', syncPosition);


            sync2.trigger('destroy.owl.carousel');


            sync2
                .on('initialized.owl.carousel', function () {
                sync2.find(".owl-item").eq(0).addClass("current");
                })
                .owlCarousel({
                items : slidesPerPage,
                dots: false,
                nav: false,
                margin:5,
                smartSpeed: 200,
                slideSpeed : 500,
                slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
                responsiveRefreshRate : 100
            }).on('changed.owl.carousel', syncPosition2);


            function syncPosition(el) {
                //if you set loop to false, you have to restore this next line
                //var current = el.item.index;
                
                //if you disable loop you have to comment this block
                var count = el.item.count-1;
                var current = Math.round(el.item.index - (el.item.count/2) - .5);
                
                if(current < 0) {
                current = count;
                }
                if(current > count) {
                current = 0;
                }
                
                //end block

                sync2
                .find(".owl-item")
                .removeClass("current")
                .eq(current)
                .addClass("current");
                var onscreen = sync2.find('.owl-item.active').length - 1;
                var start = sync2.find('.owl-item.active').first().index();
                var end = sync2.find('.owl-item.active').last().index();
                
                if (current > end) {
                sync2.data('owl.carousel').to(current, 100, true);
                }
                if (current < start) {
                sync2.data('owl.carousel').to(current - onscreen, 100, true);
                }
            }
            
            function syncPosition2(el) {
                if(syncedSecondary) {
                var number = el.item.index;
                sync1.data('owl.carousel').to(number, 100, true);
                }
            }
            
            sync2.on("click", ".owl-item", function(e){
                e.preventDefault();
                var number = $(this).index();
                sync1.data('owl.carousel').to(number, 300, true);
            });




        }

        // Initialize the charts on page load
        initCharts();


        // Reinitialize the charts after Livewire updates
        Livewire.hook('message.processed', (message, component) => {
            initCharts();
        });
    });
</script>
