<!DOCTYPE html>
<html lang="en">

<head>
  <title>Laravel Ecommerce</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/9950c280dd.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>

  @include('partials.navigation')

  @yield('content')

  @include('partials.footer')

  @include('partials.scripts')

</body>

</html>