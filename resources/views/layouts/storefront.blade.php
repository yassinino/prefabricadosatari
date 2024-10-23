<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <title>Prefabricadosatari</title>
    <meta
        name="description"
        content="Prefabricados Atari sl es una empresa con la actividad de producir vallas prefabricadas de hormigón, revestimientos y decoración de jardin, puertas y vallas metálicas."
    >
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}"><!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/fontawesome/css/font-awesome.min.css') }}"><!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/flaticon.min.css') }}"><!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/animate.min.css') }}"><!-- ANIMATE STYLE SHEET --> 
    <link rel="stylesheet" type="text/css" href="{{ url('css/owl.carousel.min.css') }}"><!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap-select.min.css') }}"><!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/magnific-popup.min.css') }}"><!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/loader.min.css') }}"><!-- LOADER STYLE SHEET -->   
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}"><!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" class="skin" href="{{ url('css/skin/skin-5.css') }}"><!-- THEME COLOR CHANGE STYLE SHEET -->
    <!-- Alpine Plugins -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Alpine Core -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('plugins/revolution/revolution/css/settings.css') }}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ url('plugins/revolution/revolution/css/navigation.css') }}">
    
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,800,700italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Crete+Round:400,400i&amp;subset=latin-ext" rel="stylesheet">
    
    <link
        rel="icon"
        href="{{ asset('favicon.ico') }}"
    >
    @livewireStyles
</head>

<body id="bg">

    <div class="page-wraper"> 
        @livewire('components.navigation')

        <main style="padding-top: 120px;">

            @if (session()->has('message'))
                <div class="row justify-content-center text-center mt-3">
                    <div class="col-md-8">
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    </div>
                </div>
            @endif
        

            {{ $slot }}
        </main>

        <x-footer />

        @livewireScripts
    </div>

    <!-- JAVASCRIPT  FILES ========================================= --> 
<script   src="{{ url('js/jquery-3.6.1.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script   src="{{ url('js/popper.min.js') }}"></script><!-- POPPER.MIN JS -->
<script   src="{{ url('js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script   src="{{ url('js/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
<script   src="{{ url('js/jquery.bootstrap-touchspin.min.js') }}"></script><!-- FORM JS -->
<script   src="{{ url('js/magnific-popup.min.js') }}"></script><!-- MAGNIFIC-POPUP JS -->
<script   src="{{ url('js/waypoints.min.js') }}"></script><!-- WAYPOINTS JS -->
<script   src="{{ url('js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script   src="{{ url('js/waypoints-sticky.min.js') }}"></script><!-- COUNTERUP JS -->
<script   src="{{ url('js/isotope.pkgd.min.js') }}"></script><!-- MASONRY  -->
<script   src="{{ url('js/imagesloaded.pkgd.min.js') }}"></script><!-- MASONRY  -->
<script   src="{{ url('js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->
<script   src="{{ url('js/scrolla.min.js') }}"></script><!-- ON SCROLL CONTENT ANIMTE   --> 
<script   src="{{ url('js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script   src="{{ url('js/shortcode.js') }}"></script><!-- SHORTCODE FUCTIONS  -->


<!-- SLIDER REVOLUTION -->
<script  src="{{ url('plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script  src="{{ url('plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script  src="{{ url('plugins/revolution/revolution/js/extensions/revolution-plugin.js') }}"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script  src="{{ url('js/rev-script-4.js') }}"></script>




</body>

</html>
