<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.head')
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    @include('admin.layouts.header')
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    @include('admin.layouts.aside')
  </aside><!-- End Sidebar-->

  @yield('container')

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    @include('admin.layouts.footer')
  </footer><!-- End Footer -->

  @include('admin.layouts.script')

</body>

</html>