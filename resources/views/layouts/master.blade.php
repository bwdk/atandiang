<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <!--main style-->
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap.css') }}" />
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/style.css') }}"  />
        <!--background slider style-->
        <link rel="stylesheet" type="text/css" href="css/slideshow.css" />
        <!-- Project slider style-->
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}" /> --}}
		    <link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/component.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/coverflow.css') }}" />
        <!--google font style-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,800,300|Dancing+Script|Delius' rel='stylesheet' type='text/css'>
        <!--font-family: 'Open Sans', sans-serif;-->
        <!-- font css style-->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" />
        <!--for slider style-->
        <noscript>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/fallback.css') }}" />
        </noscript>

        <!--[if lt IE 9]>
			<link rel="stylesheet" type="text/css" href="css/fallback.css" />
        <![endif]-->  
        
        <title>{{ setting('site.title') }}</title>

    </head>

    <body>
    <!--wrapper start-->
    <div class="wrapper" id="wrapper">

        @yield('content')

     
    </div>
    <!--wrapper end-->
    <!--modernizr js-->
    <script type="text/javascript" src="{{ URL::asset('js/modernizr.custom.26633.js') }}"></script>
    <!--jquery min js-->
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.gridrotator.js') }}"></script>
    <!--for custom jquary-->
    <script src="{{ URL::asset('js/custom.js') }}"></script>
    <!--for placeholder jquery-->
    <script type="text/javascript" src="{{ URL::asset('js/jquery.placeholder.js') }}"></script>
    <!--for menu jquery-->
    <script type="text/javascript" src="{{ URL::asset('js/stickUp.js') }}"></script>
    <script type="text/javascript">
    jQuery(function($) {
    $(document).ready( function() {
      //enabling stickUp on the '.navbar-wrapper' class
      $('.navbar-wrapper').stickUp({
                    parts: {
                      0: 'banner',
                      /*1: 'aboutme',*/
                      1: 'technical',
                      2: 'experience',
                      3: 'realize',
                      4: 'projects',
                      5: 'education',
                      6: 'portfolio',
                      7: 'contact'
                    },
                    itemClass: 'menuItem',
                    itemHover: 'active',
                    topMargin: 'auto'
                  });
    });
    
    $( ".navbar.navbar-inverse.navbar-static-top a" ).click(function() {
      $( ".navbar-collapse" ).addClass( "hideClass" );
    });
    
    
    $( ".navbar.navbar-inverse.navbar-static-top a" ).click(function() {
      $( ".navbar-collapse" ).addClass( "collapse" );
    });
    
    
    $( ".navbar.navbar-inverse.navbar-static-top a" ).click(function() {
      $( ".navbar-collapse" ).removeClass( "in" );
    });
    
    $( ".navbar-toggle" ).click(function() {
      $( ".navbar-collapse" ).removeClass( "hideClass" );
    });
    
    
    });
    </script>
    <!--for portfolio filter jquery-->
    <script src="{{ asset('js/jquery.isotope.js') }}" type="text/javascript"></script>
    <!--for portfolio lightbox -->
    <link type="text/css" rel="stylesheet" id="theme" href="{{ asset('css/jquery-ui-1.8.16.custom.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/lightbox.min.css') }}" />
    <script type="text/javascript" src="{{ asset('js/jquery.ui.widget.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.ui.rlightbox.js') }}"></script>
    <!--for skill chat jquary-->
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easypiechart.js') }}"></script>
    <!-- JS Project Slider -->
    <script type="text/javascript" src="{{ asset('js/utils/rAF.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/utils/easing.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/PrismSlider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/slideshow1.js') }}"></script>
    <!-- Coverslide JS -->
    <script type="text/javascript" src="{{ asset('js/coverflow.js') }}"></script>
    <!--contact form js-->
    <script type="text/javascript" src="{{ asset('js/jquery.contact.js') }}"></script>

    </body>
</html>