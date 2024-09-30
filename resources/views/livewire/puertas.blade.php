            <!-- SECTION CONTENT --> 
            <div class="section-full p-t40 p-b50">
                <div class="container-fluid">
                    <div class="row">
                        <div class="wt-box col-xl-4 col-lg-12 col-md-12 m-b30 bg-gray p-t40">
                                <h4>Entregamos vallas llave en mano.</h4>
                                <h1>Puertas metálicas para coches y peatones.</h1>

                                <p class="p-t100">
                                    Con la instalación de la valla, recomendamos instalar los postes metálicos y verter la viga de hormigón armado. 
                                    Luego viene la fabricación de las puertas a las dimensiones de los huecos resultantes y su montaje.
                                </p>


                        </div>
                        <div class="wt-box col-xl-8 col-lg-12 col-md-12 m-b30">
                            
                            <img src="https://www.vallasvalles.com/wp-content/uploads/2019/10/Detalle-nueva-manilla-negra-puerta-hercules.jpg" alt="">
                            
                        </div>
                    </div>

                    <div class="row text-center">

                    @foreach($this->products as $product)

                        <div class="wt-box col-xl-12 col-lg-12 col-md-12 m-b30">
                                @if ($product->thumbnail)
                                        <img src="{{ $product->thumbnail->getUrl() }}"
                                            alt="{{ $product->translateAttribute('name') }}" />
                                @endif
                                <h2 style="margin-top: 10px;">{{ $product->translateAttribute('name') }}</h2>
                                <p>{!! $product->translateAttribute('description') !!}</p>
                        </div>

                    @endforeach

                    </div>
                </div>
            </div>