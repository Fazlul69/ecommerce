<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title','Master Page')</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{asset('frontEnd/css/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/colorpicker.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/uniform.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/select2.css') }}" />
    <link rel="stylesheet" href="{{asset('css/fullcalendar.css')}}" />
    <link rel="stylesheet" href="{{asset('css/matrix-style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/matrix-media.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-wysihtml5.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/jquery.gritter.css')}}" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<style>
    .form-horizontal .control-label {
        width: 180px;
        margin-left: 20px;
        margin-top: 3px;
    }
    .form-horizontal .controls {
        margin-left: 200px;
        padding: 0 0 12px 0px;
        padding-top: 0px;
        padding-right: 0px;
        padding-bottom: 12px;
        padding-left: 0px;
        width: 250px;
        margin-top: -20px;
    }
    .btn.btn-danger.btn-mini.deleteRecord {
    margin-top: 15px;
    }
</style>
<body>

@include('backEnd.layouts.header')
@include('backEnd.layouts.nav')

<!--main-container-part-->
<div id="content">
    @yield('content')
</div>
@include('backEnd.layouts.footer')
@yield('jsblock')
 <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
     -->
</body>
</html>
