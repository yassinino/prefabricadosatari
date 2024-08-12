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
        content="Example of an ecommerce storefront built with Lunar."
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
    <script
        defer
        src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>

    
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


<script>
$(document).ready(function() {

  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
  var slidesPerPage = 4; //globaly define number of elements per page
  var syncedSecondary = true;

	  sync1.owlCarousel({
		items : 1,
		slideSpeed : 2000,
		nav: true,
		autoplay: false,
		dots: false,
		loop: true,
		responsiveRefreshRate : 200,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
	  }).on('changed.owl.carousel', syncPosition);

	  sync2
		.on('initialized.owl.carousel', function () {
		  sync2.find(".owl-item").eq(0).addClass("current");
		})
		.owlCarousel({
		items : slidesPerPage,
		dots: false,
		nav: false,
		margin:5,
		smartSpeed: 200,
		slideSpeed : 500,
		slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
		responsiveRefreshRate : 100
	  }).on('changed.owl.carousel', syncPosition2);

  function syncPosition(el) {
    //if you set loop to false, you have to restore this next line
    //var current = el.item.index;
    
    //if you disable loop you have to comment this block
    var count = el.item.count-1;
    var current = Math.round(el.item.index - (el.item.count/2) - .5);
    
    if(current < 0) {
      current = count;
    }
    if(current > count) {
      current = 0;
    }
    
    //end block

    sync2
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = sync2.find('.owl-item.active').length - 1;
    var start = sync2.find('.owl-item.active').first().index();
    var end = sync2.find('.owl-item.active').last().index();
    
    if (current > end) {
      sync2.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
      sync2.data('owl.carousel').to(current - onscreen, 100, true);
    }
  }
  
  function syncPosition2(el) {
    if(syncedSecondary) {
      var number = el.item.index;
      sync1.data('owl.carousel').to(number, 100, true);
    }
  }
  
  sync2.on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).index();
    sync1.data('owl.carousel').to(number, 300, true);
  });
});
</script>

</body>

</html>
