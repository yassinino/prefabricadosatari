<header class="site-header header-style-1 mobile-sider-drawer-menu">
    
        <div class="top-bar">
                <div class="container">
                    <div class="wt-topbar-right">
                        <ul class="list-unstyled e-p-bx">
                            <li><i class="fa fa-map-marker"></i>Cami dels Catalans N:4, 43330 Riudoms, Tarragona</li>
                            <li><i class="fa fa-phone"></i>(+34) 661 015 962</li>
                            <li><i class="fa fa-envelope"></i>pfdatari@gmail.com</li>
                            
                        </ul>
                        <ul class="social-bx list-inline">
                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-whatsapp"></a></li>
                        </ul>
                    </div>
                </div>
        </div>

        <div class="sticky-header main-bar-wraper" style="height:0px;">
                <div class="main-bar bg-white">
                    <div class="container">
                        <div class="logo-header">
                            <a href="{{ url('/') }}">
                                <img src="{{ url('images/logo_text.png') }}" width="171" height="49" alt="" >
                            </a>
                        </div>
                        
                        <!-- MAIN Vav -->
                        <div class="header-nav navbar-collapse collapse ">
                            <ul class=" nav navbar-nav">
                                <li>
                                    <a href="{{ url('/') }}"><i class="fa fa-home" style="font-size: 20px;"></i></a>
                                </li>

                                <li>
                                    <a href="{{ url('/') }}">Vallas <i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="/all-models">Todo Los Modelos</a>
                                        </li>
                                        <li>
                                            <a href="/vallas/modern-line">Modern Line</a>
                                        </li>
                                        <li>
                                            <a href="/vallas/simple-line">Simple Line</a>
                                        </li>
                                        <li>
                                            <a href="/vallas/aero-line">Aero Line</a>
                                        </li>
                                        <li>
                                            <a href="/vallas/nature-line">Nature Line</a>
                                        </li>
                                        <li>
                                            <a href="/component-gard">Componentes De Valla</a>
                                        </li>
                                        <li>
                                            <a href="/medida-especial">Paneles Medida Especial</a>
                                        </li>
                                        <li>
                                            <a href="/double-cara">VALLA A DOBLE CARA</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}">Promo</a>
                                </li>

                                <li>
                                    <a href="{{ url('/puertas') }}">Puertas</a>
                                </li>

                                <li>
                                    <a href="{{ url('/') }}">Decoración de jardín</a>
                                </li>


                                <li>
                                    <a href="{{ url('/') }}">Info</a>
                                </li>

                                <li>
                                    <a href="{{ url('/galerie') }}">Galería</a>
                                </li>

                                <li>
                                    <a href="{{ url('/about-us') }}">Sobre nosotros</a>
                                </li>



                                <!-- @foreach ($this->collections as $collection)

                                    <li>
                                        <a href="{{ route('collection.view', $collection->defaultUrl->slug) }}">{{ $collection->translateAttribute('name') }}</a>
                                    </li>

                                @endforeach -->

                            </ul>
                        </div>

                        <!-- ETRA Nav -->
                        <div class="extra-nav">
                        @livewire('components.cart')

                            <div class="extra-cell">
                                 <a href="{{ url('/contact') }}" class="contact-button">Contacto</a>
                            </div>
                         </div>
                         <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button>
                        <!-- SITE Search -->
                        <div id="search"> 
                            <span class="close"></span>
                            <form role="search" id="searchform" action="/search" method="get" class="radius-xl">
                                <div class="input-group">
                                    <input value="" name="q" type="search" placeholder="Type to search">
                                    <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search"></i></button></span>
                                </div>   
                            </form>
                        </div>
                    </div>
                </div>
            </div>
      
        
    </header>
    <!-- HEADER END -->

