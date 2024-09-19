            <!-- SECTION CONTENT --> 
            <div class="section-full p-t40 p-b50">
                <div class="container-fluid">
                    <div class="row">
                        <div class="wt-box col-xl-12 col-lg-12 col-md-12 m-b30 p-t40 mt-40">
                                <h4 style="font-size : 30px; text-align:center;line-height: 2em; ">DURANTE EL MES DE SETEMBRE / OCTOBRE TODOS NUESTROS PRODUCTOS TENEN 50% DE DESCUENTO.</h4>
                        </div>
 
                    </div>

                    <div class="row">
                            <div class="col-lg-12 col-md-12"> 

                                <div class="p-b40">
                                    <h1 class="text-center">Vallas / Todo los modelos</h1>
                                </div>
                                
                                <div class="row product-detail">

                                    @foreach($products as $product)

                                    <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                                        <x-product-card :product="$product" :type="$product->collections[0]->translateAttribute('name')"/>
                                    </div>

                                    @endforeach



                                    <button class="btn" wire:click="loadMore">Cargar más</button>
                                   
                                </div>
                                
                            </div>
                    </div>


                </div>
            </div>