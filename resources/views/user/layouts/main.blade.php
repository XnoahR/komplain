<!DOCTYPE html>
<html lang="en">

<head>
 @include('user.layouts.head')
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
   @include('user.layouts.header')
  </header>
  <!-- End Header -->

  @yield('main')
 
  <!-- ======= Footer ======= -->
  <footer id="footer">
 @include('user.layouts.footer')
  </footer>
  <!-- End Footer -->

 @include('user.layouts.script')

</body>

</html>