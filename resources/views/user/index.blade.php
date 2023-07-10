@extends('user.layouts.main')


@section('main')
<header>
  <!-- Intro settings -->
  <style>
     .banner {
    height: 80vh;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgb(21, 23, 53)),url("assets/user/images/venue1.jpg");
    background-position: center;
     }
  </style>


  <!-- Background image -->
  <section id="home">
    <div class="container-fluid banner">
        <div class="container-fluid banner-text col-lg-6">
            <div class="text-center">
                <p class="fs-1">
                    WELCOME TO KOMPLAININ!
                </p>
                <p>
                   <H1>UNDER MAINTENANCE!</H1> 
                </p>
            </div>
        </div>
    </div>
</section>
  <!-- Background image -->
</header>

@endsection