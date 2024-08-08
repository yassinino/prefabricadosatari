
            <!-- SECTION CONTENT START -->
            <div class="section-full p-t40 p-b50">
                <div class="container">
                    <div class="section-content">
                    	<div class="row">
                            <!-- SIDE BAR START -->
                            

                            <!-- SIDE BAR END --> 
                            <div class="col-lg-12 col-md-12"> 
                        
                                              
                                <!-- TITLE START -->
                                <div class="p-b40">
                                    <h1 class="text-center">Vallas / {{ $this->collection->translateAttribute('name') }}</h1>
                                </div>
                                <!-- TITLE END -->
                                
                                <div class="row product-detail">

                                    <!-- COLUMNS 1 -->
                                    @forelse($this->collection->products as $product)

                                    <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                                        <x-product-card :product="$product" />
                                    </div>

                                    @empty
                                    @endforelse
                                   
                                </div>
                                
                            </div>
                       </div> 
                   </div>
                 </div>
             </div>
