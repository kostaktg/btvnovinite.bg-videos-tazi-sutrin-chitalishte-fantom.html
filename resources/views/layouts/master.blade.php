<!DOCTYPE html>

<html lang="en">

<head>
   <script type="text/javascript">
       function openinnewTab(urlnew) {
           var win = window.open(urlnew, '_blank');
           win.focus();
       }
   </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>


    <!-- Bootstrap Core CSS -->
    <link href="{{URL::to('css/style.css')}}" rel="stylesheet">

    <!-- FAVICON -->
    <link rel=icon href= {{ URL('img/favicon.png') }} sizes="16x16" type="image/png">

    <script src="{{URL::to('/js/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>


</head>

<body>

  @include('includes.navbar')



    @yield('content')

    @include('includes.footer')


</body>
</html>