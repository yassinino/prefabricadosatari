        <!-- FOOTER START -->
        <footer class="site-footer footer-light">
            <!-- COLL-TO ACTION START -->
            <div class="call-to-action-wrap call-to-action-skew site-bg-primary bg-no-repeat" style="background-image:url(images/background/bg-4.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <div class="call-to-action-left p-tb20">
                                <h4 class="text-uppercase m-b10">BOLETIN INFORMATIVO</h4>
                                <p>Mantente al día de novedades y promociones suscribiéndote a nuestra newsletter</p>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-5">
                            <div class="call-to-action-right p-tb30">
                                <a href="{{ route('contact.view') }}" class="site-button-secondry  m-r15 text-uppercase font-weight-600">
                                Contáctenos  <i class="fa fa-angle-double-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
            <!-- FOOTER BLOCKES START -->  
            <div class="footer-top overlay-wraper">
                <div class="overlay-main"></div>
                <div class="container">
                    <div class="row">
                        <!-- USEFUL LINKS -->
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="widget widget_services">
                                <h4 class="widget-title">INFORMACIÓN ÚTIL</h4>
                                <ul>
                                    <li><a href="about-1.html">Sobre nosotros</a></li>
                                    <li><a href="faq-1.html">Información de entrega</a></li>
                                    <li><a href="career.html">Hacer el pago</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="widget widget_services">
                                <h4 class="widget-title">MI CUENTA</h4>
                                <ul>
                                    <li><a href="about-1.html">Mi cuenta</a></li>
                                    <li><a href="faq-1.html">Pedidos</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- NEWSLETTER -->
                        <div class="col-lg-4 col-md-6">
                            <div class="widget widget_newsletter">
                                <h4 class="widget-title">Nuestra newsletter</h4>
                                <div class="newsletter-bx">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                        <input name="news-letter" class="form-control" placeholder="Correo electrónico" type="text">
                                        <span class="input-group-btn">
                                            <button type="submit" class="site-button"><i class="fa fa-paper-plane-o"></i></button>
                                        </span>
                                    </div>
                                     </form>
                                </div>
                            </div>
                            <!-- SOCIAL LINKS -->
                            <div class="widget widget_social_inks">
                                <h4 class="widget-title">Redes sociales</h4>
                                <ul class="social-icons social-square social-darkest">
                                    <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    
                       <div class="col-lg-4 col-md-6 col-sm-6 p-tb20">
                           <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                                <div class="icon-md site-text-primary">
                                    <span class="iconmoon-travel"></span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase m-b0">Oficina</h5>
                                    <p>Av. Ramón d’Olzina, 85 local 6 <br> 43080 VILA-SECA (Tarragona)</p>
                                </div>
                           </div>
                        </div>

                       <div class="col-lg-4 col-md-6 col-sm-6 p-tb20 ">
                           <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix ">
                                <div class="icon-md site-text-primary">
                                    <span class="iconmoon-smartphone-1"></span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase m-b0">Llámanos</h5>
                                    <p class="m-b0">(+34) 977 109 082</p>
                                    <p>(+34) 661 015 962</p>
                                </div>
                           </div>
                       </div>

                       <div class="col-lg-4 col-md-6 col-sm-6 p-tb20">
                           <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                                <div class="icon-md site-text-primary">
                                    <span class="iconmoon-email"></span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase m-b0">Escríbenos</h5>
                                    <p class="m-b0">info@montajesatari.com</p>
                                    <p class="m-b0">info@montajesatari.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom overlay-wraper">
                <div class="overlay-main"></div>
                <div class="constrot-strip"></div>
                <div class="container p-t30">
                    <div class="row">
                        <div class="wt-footer-bot-left">
                            <span class="copyrights-text">© {{ now()->year }} Your Company. All Rights Reserved. Montajesatari.</span>
                        </div>
                        <div class="wt-footer-bot-right">
                            <ul class="copyrights-nav pull-right"> 
                                <li><a href="javascript:void(0);">Aviso Legal</a></li>
                                <li><a href="javascript:void(0);">Política de Privacidad</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->