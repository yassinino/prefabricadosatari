<header class="site-header header-style-1 mobile-sider-drawer-menu">
    
        <div class="top-bar">
                <div class="container">
                    <div class="wt-topbar-right">
                        <ul class="list-unstyled e-p-bx">
                            <li><a href="https://www.google.com/maps/place/Granja+Font/@41.1320348,1.0400413,18.52z/data=!4m6!3m5!1s0x12a14feb3eaaaaab:0xca4556e76157159b!8m2!3d41.1319952!4d1.040361!16s%2Fg%2F11txv20n9t?entry=ttu&g_ep=EgoyMDI0MTAwOC4wIKXMDSoASAFQAw%3D%3D" target="_blank"><i class="fa fa-map-marker"></i>Cami dels Catalans N:4, 43330 Riudoms, Tarragona</a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=34661015962" target="_blank"><i class="fa fa-phone"></i>(+34) 661 015 962</a></li>
                            <li><a href="mailto:contact@prefabricadosatari.com" target="_blank"><i class="fa fa-envelope"></i>contact@prefabricadosatari.com</a></li>
                            
                        </ul>
                        <ul class="social-bx list-inline">
                            <li><a href="https://www.facebook.com/prefabricadosatari24" target="_blank" class="fa fa-facebook"></a></li>
                            <li><a href="https://www.instagram.com/prefabricadosatari2022" target="_blank" class="fa fa-instagram"></a></li>
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

                                @guest



                                    <li>
                                        <a href="/login" wire:navigate>Iniciar sesión</a>
                                    </li>

                                @else  
                                
                                <li>
                                            <a href="javascript:;">{{Auth()->user()->name}}</a>
                                            <ul class="sub-menu">
                                                <li><a href="/mis-favoritos">Mis favoritos</a></li>
                                                <li><a href="/logout" wire:navigate>Cerrar sesión</a></li>
                                            </ul>
                                </li>

                                @endguest


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

