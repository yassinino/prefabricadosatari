            <!-- SECTION CONTENT START -->
            <div class="section-full p-t40 p-b50">
                <div class="container">


                <div class="p-b40">
                                    <h1 class="text-center">Galería</h1>
                </div>
                                

                
                    <!-- PAGINATION TOP START -->
                    <!-- <div class="filter-wrap p-tb15">
                        <ul class="masonry-filter link-style  text-uppercase">
                            <li class="active"><a data-filter="*" href="#">All</a></li>
                            <li><a data-filter=".cat-1" href="#">House</a></li>
                            <li><a data-filter=".cat-2" href="#">Building</a></li>
                            <li><a data-filter=".cat-3" href="#">Office</a></li>
                            <li><a data-filter=".cat-4" href="#">Garden</a></li>
                            <li><a data-filter=".cat-5" href="#">Interior</a></li>
                        </ul>
                    </div> -->
                    <!-- PAGINATION END -->
                    
                    <!-- GALLERY CONTENT START -->
                    
                    <div class="portfolio-wrap mfp-gallery no-col-gap row">
                    
                    @for($i = 1; $i <= 51 ; $i++)
                        <div class="masonry-item cat-1 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="wt-gallery-bx p-a15">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="portfolio-detail.html">
                                        @if($i <= 14)
                                        <img src="{{ url('images/galeries/image_'.$i.'.jpeg') }}"  alt="" style="height: 350px!important;">
                                        @else
                                        <img src="{{ url('images/galeries/image_'.$i.'.jpg') }}"  alt="" style="height: 350px!important;">

                                        @endif
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                        @if($i <= 14)
                                            <a href="{{ url('images/galeries/image_'.$i.'.jpeg') }}" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                            @else
                                            <a href="{{ url('images/galeries/image_'.$i.'.jpg') }}" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                            @endif
                                        </div>
                                        

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor

                        
                    
                    </div>
                  
                    
                </div>
            </div>