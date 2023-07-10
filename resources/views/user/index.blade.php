@extends('user.layouts.main')


@section('main')
<header>
  <!-- Intro settings -->
  <style>
     .banner {
    height: 80vh;
    background: url("assets/user/images/bgutama.jpg");
    background-position: center;
     }
     
     .fs-1 {
    font-family: 'Roboto', sans-serif;
    font-size: 48px;
    font-weight: 700;
    color: #333;
    animation: fadeIn 2s ease-in-out;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
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
            </div>
        </div>
    </div>
    <div class="text-center">
        <p class = "fs-6">
        Segala kebutuhan terkait klaim garansi barang, ada kami di sini. Silahkan untuk masuk ke halaman utama dengan menggunakan login
        <p>
    </div>
</section>
  <!-- Background image -->
</header>

@endsection