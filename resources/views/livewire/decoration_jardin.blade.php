<div class="section-full p-t40 p-b50">
                <div class="container">
                    <div class="section-content">
                    	<div class="row">
                            <div class="col-lg-12 col-md-12"> 

                                <div class="p-b40">
                                    <h1 class="text-center">Decoratión de jardín</h1>
                                </div>
                                
                                <div class="row product-detail">

                                    @foreach($products as $product)

                                    <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                                        <x-product-card :product="$product" />
                                    </div>

                                    @endforeach

                                   
                                </div>
                                
                            </div>
                       </div> 
                   </div>
                 </div>
</div>

