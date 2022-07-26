<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>
    @include('layouts.menu')

    @yield('content')

    @include('layouts.footer')
   <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script> 
   <script src="{{asset('popper.min')}}"></script>
   <script src="{{asset('js/bootstrap.min.js')}}"></script> 
   <script src="{{asset('js/custom.js')}}"></script> 
</body>
</html>