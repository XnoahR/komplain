<!DOCTYPE html>
<html lang="en">
  <head>
  	@include('user.layouts.head')
  </head>
  <body>
		@include('user.layouts.nav')
		@yield('sidebar')
    <div class="container">
		@yield('main')
  </div>
        <!-- Page Content  -->

    @include('user.layouts.script')
  </body>
</html>