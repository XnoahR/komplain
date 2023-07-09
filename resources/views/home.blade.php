@extends('layouts.main')

@section('ambil')
@if (session()->has('success'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismis="alert"></button>
    </div>
@endif
<div class="jumbotron">
    <h1 class="display-4">Welcome to Our Website</h1>
  </div>

  <img src="wave.svg" class="wave-background" alt="Wave Background">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection