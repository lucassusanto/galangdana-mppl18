<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
        <meta name="author" content="htmlcoder.me">

        <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicon -->
        <link rel="shortcut icon" href="images/icon.png">

        <!-- Web Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


        <!-- Font Awesome CSS -->
        <link href="{{ asset('fonts/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

        <!-- Plugins -->
        <link href="{{ asset('css/animations.css') }}" rel="stylesheet">

        <!-- Worthy core CSS file -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- Custom css --> 
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        
    </head>
    <body class="no-trans">
        @include('include.navigation')
        @yield('content')
        @include('include.footer')
        <!-- JavaScript files placed at the end of the document so the pages load faster
    ================================================== -->
    <!-- Jquery and Bootstap core js files -->
    <script type="text/javascript" src="{{ asset('plugins/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Modernizr javascript -->
    <script type="text/javascript" src="{{ asset('plugins/modernizr.js') }}"></script>

    <!-- Isotope javascript -->
    <script type="text/javascript" src="{{ asset('plugins/isotope/isotope.pkgd.min.js') }}"></script>
    
    <!-- Backstretch javascript -->
    <script type="text/javascript" src="{{ asset('plugins/jquery.backstretch.min.js') }}"></script>

    <!-- Appear javascript -->
    <script type="text/javascript" src="{{ asset('plugins/jquery.appear.js') }}"></script>

    <!-- Initialization of Plugins -->
    <script type="text/javascript" src="{{ asset('js/template.js') }}"></script>

    <!-- Custom Scripts -->
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

    @yield('custom-script')
</body>