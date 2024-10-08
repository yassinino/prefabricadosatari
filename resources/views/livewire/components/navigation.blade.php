<header class="site-header header-style-1 mobile-sider-drawer-menu">
    
        <div class="top-bar">
                <div class="container">
                    <div class="wt-topbar-right">
                        <ul class="list-unstyled e-p-bx">
                            <li><a href="https://www.google.com/maps/place/Cam%C3%AD+dels+Catalans,+13,+43330+Riudoms,+Tarragona,+Spain/@41.1316651,1.0347868,17z/data=!3m1!4b1!4m14!1m7!3m6!1s0x12a14f940156dfeb:0x8cfab4cb63b0fe77!2sCam%C3%AD+dels+Catalans,+4,+43330+Riudoms,+Tarragona,+Spain!3b1!8m2!3d41.1303569!4d1.0347174!3m5!1s0x12a14f3ee8de41ed:0xbf07ee3264c9f78f!8m2!3d41.1316619!4d1.0387237!16s%2Fg%2F11kbsxr4l9?entry=ttu&g_ep=EgoyMDI0MTAwMi4xIKXMDSoASAFQAw%3D%3D" target="_blank"><i class="fa fa-map-marker"></i>Cami dels Catalans N:4, 43330 Riudoms, Tarragona</a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=34661015962" target="_blank"><i class="fa fa-phone"></i>(+34) 661 015 962</a></li>
                            <li><a href="mailto:contact@prefabricadosatari.com" target="_blank"><i class="fa fa-envelope"></i>contact@prefabricadosatari.com</a></li>
                            
                        </ul>
                        <ul class="social-bx list-inline">
                            <li><a href="https://www.facebook.com/prefabricadosatari" target="_blank" class="fa fa-facebook"></a></li>
                            <li><a href="https://www.instagram.com/prefabricadosatari" target="_blank" class="fa fa-instagram"></a></li>
                            <li><a href="https://x.com/Pefabricados24" target="_blank" class="fa fa-twitter"></a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=34661015962" target="_blank" class="fa fa-whatsapp"></a></li>
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
                                            <a href="/all-models">Todos los modelos</a>
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
                                            <a href="/component-gard">Componentes de valla</a>
                                        </li>
                                        <li>
                                            <a href="/vallas/paneles-medida-especial">Paneles medida especial</a>
                                        </li>
                                        <li>
                                            <a href="/vallas/doble-cara">Valla a doble cara</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/promo">Promo</a>
                                </li>

                                <li>
                                    <a href="/puertas">Puertas</a>
                                </li>

                                <li>
                                    <a href="/decoration-jardin">Decoración de jardín</a>
                                </li>

                                <li>
                                    <a href="/info">Info</a>
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
                                <a href="#search" class="site-search-btn"><i class="fa fa-search"></i></a>
                            </div>

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
                                    <input value="" name="term" type="search" placeholder="Buscar...">
                                    <span class="input-group-btn"><button type="submit" class="search-btn"><i class="fa fa-search"></i></button></span>
                                </div>   
                            </form>
                        </div>
                    </div>
                </div>
            </div>
      
        
    </header>
    <!-- HEADER END -->

