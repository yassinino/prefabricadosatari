<div class="section-full p-t40 p-b50">
                <div class="container">
                    <div class="section-content">
                    	<div class="row">
                            <div class="col-lg-12 col-md-12"> 

                                <div class="p-b40">
                                    <h1 class="text-center">Mis favoritos</h1>
                                    <p>Mira los productos favoritos que has guardado en tu lista de favoritos.</p>
                                </div>
                                
                                <div class="row product-detail">

                                    @forelse($products as $product)

                                    <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                                        <x-product-card :product="$product" :type="$product->collections[0]->translateAttribute('name')"/>
                                    </div>

                                    <button class="btn" wire:click="loadMore">Cargar más</button>


                                    
                                    @empty

                                    <h2>No agregaste ningún producto.</h2>



                                    @endforelse
                                   
                                </div>
                                
                            </div>
                       </div> 
                   </div>
                 </div>
</div>

