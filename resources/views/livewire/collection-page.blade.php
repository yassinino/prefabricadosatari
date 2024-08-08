            <!-- BREADCRUMB ROW -->                            
            <div class="bg-gray-light p-tb20">
            	<div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                        <li>{{ $this->collection->translateAttribute('name') }}</li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END -->
            
            <!-- SECTION CONTENT START -->
            <div class="section-full p-t40 p-b50">
                <div class="container">
                    <div class="section-content">
                    	<div class="row">
                            <!-- SIDE BAR START -->
                            <div class="col-lg-4 col-md-12">
                            
                                <aside  class="side-bar">
                                
                                    <!-- 13. SEARCH -->
                                    <div class="widget bg-white ">
                                        <h4 class="widget-title">Search</h4>
                                        <div class="search-bx">
                                            <form role="search" method="post">
                                                <div class="input-group">
                                                    <input name="news-letter" type="text" class="form-control" placeholder="Write your text">
                                                    <span class="input-group-btn">
                                                        <button type="submit" class="site-button"><i class="fa fa-search"></i></button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div> 
                                    
                                    <!-- 7. OUR CLIENT -->
 
                                    
                                    <!-- 6. NEWSLETTER -->

                                    
                                    <!-- 4. OUR GALLERY  -->
                                    <div class="widget widget_gallery mfp-gallery">
                                        <h4 class="widget-title">Our Gallery</h4>
                                        <ul>
                                            <li>
                                                <div class="wt-post-thum">
                                                    <a href="images/gallery/pic1.jpg" class="mfp-link" ><img src="images/gallery/thumb/pic1.jpg" alt=""></a>
                                                </div>
                                            </li>
                                            
                                            <li>
                                                <div class="wt-post-thum ">
                                                    <a href="images/gallery/pic2.jpg" class="mfp-link"><img src="images/gallery/thumb/pic2.jpg" alt=""></a>
                                                </div>
                                            </li>
                                            
                                            <li>
                                                <div class="wt-post-thum  ">
                                                    <a href="images/gallery/pic3.jpg" class="mfp-link"><img src="images/gallery/thumb/pic3.jpg" alt=""></a>
                                                </div>
                                            </li>
                                            
                                            <li>
                                                <div class="wt-post-thum ">
                                                    <a href="images/gallery/pic4.jpg" class="mfp-link"><img src="images/gallery/thumb/pic4.jpg" alt=""></a>
                                                </div>
                                            </li>
                                            
                                            <li>
                                                <div class="wt-post-thum ">
                                                    <a href="images/gallery/pic5.jpg" class="mfp-link"><img src="images/gallery/thumb/pic5.jpg" alt=""></a>
                                                </div>
                                            </li>
                                            
                                            <li>
                                                <div class="wt-post-thum ">
                                                    <a href="images/gallery/pic6.jpg" class="mfp-link"><img src="images/gallery/thumb/pic6.jpg" alt=""></a>
                                                </div>
                                            </li>
                                            
                                            <li>
                                                <div class="wt-post-thum">
                                                    <a href="images/gallery/pic7.jpg" class="mfp-link" ><img src="images/gallery/thumb/pic7.jpg" alt=""></a>
                                                </div>
                                            </li>
                                            
                                            <li>
                                                <div class="wt-post-thum ">
                                                    <a href="images/gallery/pic8.jpg" class="mfp-link"><img src="images/gallery/thumb/pic8.jpg" alt=""></a>
                                                </div>
                                            </li>
                                            
                                            <li>
                                                <div class="wt-post-thum  ">
                                                    <a href="images/gallery/pic7.jpg" class="mfp-link"><img src="images/gallery/thumb/pic7.jpg" alt=""></a>
                                                </div>
                                            </li>
                                            
                                            <li>
                                                <div class="wt-post-thum ">
                                                    <a href="images/gallery/pic6.jpg" class="mfp-link"><img src="images/gallery/thumb/pic6.jpg" alt=""></a>
                                                </div>
                                            </li>
                                            
                                            <li>
                                                <div class="wt-post-thum ">
                                                    <a href="images/gallery/pic5.jpg" class="mfp-link"><img src="images/gallery/thumb/pic5.jpg" alt=""></a>
                                                </div>
                                            </li>
                                            
                                            <li>
                                                <div class="wt-post-thum ">
                                                    <a href="images/gallery/pic4.jpg" class="mfp-link"><img src="images/gallery/thumb/pic4.jpg" alt=""></a>
                                                </div>
                                            </li>
                                        </ul>
                                        
                                    </div> 
                                
                                </aside>
        
                            </div>
                            <!-- SIDE BAR END --> 
                            <div class="col-lg-8 col-md-12"> 
                        
                                              
                                <!-- TITLE START -->
                                <div class="p-b10">
                                    <h2 class="text-uppercase">{{ $this->collection->translateAttribute('name') }}</h2>
                                    <div class="wt-separator-outer m-b30">
                                        <div class="wt-separator style-square">
                                            <span class="separator-left site-bg-primary"></span>
                                            <span class="separator-right site-bg-primary"></span>
                                        </div>
                                    </div>
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
                                
                                <!-- TITLE START -->
                                <div class="p-b10">
                                    <h2 class="text-uppercase">Featured products</h2>
                                    <div class="wt-separator-outer  m-b30">
                                        <div class="wt-separator style-square">
                                            <span class="separator-left site-bg-primary"></span>
                                            <span class="separator-right site-bg-primary"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- TITLE END -->
                            
                                <div class="row">
                                
                                    <!-- COLUMNS 1 -->
                                    <div class="col-lg-4 col-md-6 m-b30">
            
                                    </div>
                                   
                                    
                                   
                                </div>
                            </div>
                       </div> 
                   </div>
                 </div>
             </div>
