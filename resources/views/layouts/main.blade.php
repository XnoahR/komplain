<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-PJsj/BTMqILvmcej7ulplguok8ag4xFTPryRq8xevL7eBYSmpXKcbNVuy+P0RMgq" crossorigin="anonymous">

    <title>{{ $title }} Page</title>
    <style>
       body {
      position: relative;
      min-height: 100vh;
    }
    .wave-background {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: auto;
      z-index: -1;
    }
    .jumbotron {
      background-color: #ffffff;
      text-align: center;
      margin-top: 150px;
      padding: 50px;
    }
    </style>
  </head>
  <body>
    @include('partials.navbar')
      
  <div class="container">
  @yield('ambil')
  </div>
  </body>
</html>