<!DOCTYPE html>
<html lang="en">
    <!--Font Awesome CDN Script-->
    <script src="https://use.fontawesome.com/866945797f.js"></script>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>  @yield('title')  </title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!--<link href="/css/font-awesome.min.css" rel="stylesheet">-->
    <link href="/css/prettyPhoto.css" rel="stylesheet">
    <link href="/css/price-range.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
	<link href="/css/main.css" rel="stylesheet">
	<link href="/css/responsive.css" rel="stylesheet">
    <link type="text/css" href="/css/jquery.bxslider.min.css" rel="stylesheet" >

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="favicon.ico">    
</head><!--/head-->

<body>

    @include('shared.navbar')    
    @yield('section')
    @include('shared.footer')


    <script
            src="https://code.jquery.com/jquery-2.2.4.js"
            integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/jquery.bxslider.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function (e) {
            $('.bxslider').bxSlider({
                mode: 'horizontal',
                auto: true,
            });
        });

    </script>
    {{--<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>--}}
    {{--<script src="js/jquery.js"></script>--}}
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
