@extends('user.layouts.main')
@section('sidebar')
    @include('user.layouts.aside')
@endsection

@section('main')
    <br><br><br><br>
    {{-- Tanpa menggunakan define/naming route --}}

    {{-- <form action="{{ route('dataupdate',$users->id)}}" method="POST" enctype="multipart/form-data"> --}}

    @csrf
    @method('PATCH')
    <div class="container mt-3 mb-3">
   
        <div class="form-group">
            <img src="{{ asset('assets/login/images/bg-1.png') }}" alt="" width="200px">
            <label for="foto_profil"></label>
            <input type="file" class="form-control" name="foto_profil" id="foto_profil"><br>
        </div>
            <div class="form-group">
                <label for="name">name</label>
                <input type="text" class="form-control border" name="name" id="name" value="unknown">
            </div>
            <div class="form-group">
                <label for="nohp">Phone Number</label>
                <input type="text" class="form-control border" name="nohp" id="nohp" value="+62xxxxxx">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control border" name="email" id="email" value="xx">
            </div>
         
            <button type="submit" class="mt-3 btn btn-success float-end">Submit</button>
            </form>
       
    </div>
@endsection
