<div class="section-full p-t40 p-b50">
                <div class="container">
                    <div class="section-content">
                    	<div class="row">
                            <div class="col-lg-12 col-md-12"> 

                                <div class="p-b40">
                                    <h1 class="text-center">Search Results
                                        @if (isset($term))
                                            for <u>{{ $term }}</u>
                                        @endif
                                    </h1>
                                </div>
                                

                                <div class="row product-detail">

                                    @foreach($this->results as $result)

                                    <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                                        <x-product-card :product="$result"/>
                                    </div>

                                    @endforeach


                                   
                                </div>
                                
                            </div>
                       </div> 
                   </div>
                 </div>
</div>


