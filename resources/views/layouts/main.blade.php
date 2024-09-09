<!DOCTYPE html>
<html lang="en">

<head>
 @include('layouts.partials.css')
 @yield('css')
</head>

<body>
  <!----Nav Bar section---->
  @include('layouts.partials.header')

  @yield('content')


   <!----Footer section---->
   @include('layouts.partials.footer')

  <!----JQuery  CDN---->
  @include('layouts.partials.js')
  @yield('js')

  
</body>

</html>