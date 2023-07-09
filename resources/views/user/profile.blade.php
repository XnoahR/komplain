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
    <div class="container mt-1 mb-3">
   
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
                <label for="email">Email</label>
                <input type="text" class="form-control border" name="email" id="email" value="xx">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control border" name="phone" id="phone" value="+62xxxxxx">
            </div>
            <div class="form-group">
                <label for="Born">Born Date</label>
                <input type="date" class="form-control border" name="Born" id="Born" value="">
            </div>
            <div class="form-group">
                <label for="gender" class="form-label">Product Condition</label>
                <select class="form-select" aria-label="Default select example" id="gender">
                  <option selected>Gender</option>
                  <option value="L">Male</option>
                  <option value="P">Female</option>
                </select>
              </div>
            <button type="submit" class="mt-3 mb-5 btn btn-success float-end">Save</button>
            </form>
       
    </div>
@endsection
