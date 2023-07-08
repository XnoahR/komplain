<!DOCTYPE html>
<html lang="en">
  <head>
  	@include('user.layouts.head')
  </head>
  <body>
		@include('user.layouts.nav')
		@yield('main')

        <!-- Page Content  -->

    @include('user.layouts.script')
  </body>
</html>