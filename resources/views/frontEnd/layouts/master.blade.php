<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title','Master Page')</title>
    <link href="{{asset('frontEnd/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('frontEnd/js/html5shiv.js')}}"></script>
    <script src="{{asset('frontEnd/js/respond.min.js')}}"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{asset('easyzoom/css/easyzoom.css')}}" />
</head><!--/head-->
<body>
@include('frontEnd.layouts.header')
@section('slider')
    @include('frontEnd.layouts.slider')
@show

@yield('content')
<!-- @include('frontEnd.layouts.footer') -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
<script src="{{asset('frontEnd/js/bootstrap.js')}}"></script>
<script src="{{asset('frontEnd/js/jquery.js')}}"></script>
<script src="{{asset('frontEnd/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontEnd/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('frontEnd/js/price-range.js')}}"></script>
<script src="{{asset('frontEnd/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('frontEnd/js/main.js')}}"></script>
<script src="{{asset('easyzoom/dist/easyzoom.js')}}"></script>
<script>
    // Instantiate EasyZoom instances
    var $easyzoom = $('.easyzoom').easyZoom();

    // Setup thumbnails example
    var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

    $('.thumbnails').on('click', 'a', function(e) {
        var $this = $(this);

        e.preventDefault();

        // Use EasyZoom's `swap` method
        api1.swap($this.data('standard'), $this.attr('href'));
    });

    // Setup toggles example
    var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');

    $('.toggle').on('click', function() {
        var $this = $(this);

        if ($this.data("active") === true) {
            $this.text("Switch on").data("active", false);
            api2.teardown();
        } else {
            $this.text("Switch off").data("active", true);
            api2._init();
        }
    });
</script>
</body>
</html>