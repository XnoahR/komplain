@extends('user.layouts.main')
@section('sidebar')
    @include('user.layouts.aside')
@endsection

@section('main')
<br><br><br><br>
    {{-- Tanpa menggunakan define/naming route --}}
    @if (session()->has('success'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismis="alert"></button>
    </div>
@endif
@if ($errors->any()) 
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        {{ $error }}
      </div>
    @endforeach
@endif
    <form action="{{ route('profile_update',$user->id)}}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PATCH')
    <div class="container mt-1 mb-3">
   
        <div class="form-group">
            @if ($user->profile_picture == null)
                <img src="{{ asset('assets/login/images/bg-1.png') }}" alt="" width="200px">
            @else
                <img src="{{$user->profile_picture}}" alt="" width="200px">
            @endif
            <label for="profile_picture"></label>
            <input type="file" class="form-control" name="profile_picture" id="profile_picture"><br>
        </div>
            <div class="form-group">
                <label for="name">name</label>
                <input type="text" class="form-control border" name="name" id="name" value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control border" name="email" id="email" value="{{ $user->email }}">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control border" name="phone" id="phone" value="{{ $user->phone }}">
            </div>
            <div class="form-group">
                <label for="born">Born Date</label>
                <input type="date" class="form-control border" name="born" id="born" value="{{ $user->born }}">
            </div>
            <div class="form-group">
                <label for="gender" class="form-label">Product Condition</label>
                <select class="form-select" aria-label="Default select example" name ="gender" id="gender">
                  <option value ="">Gender</option>
                  <option value="L" {{ $user->gender == 'L' ? 'selected' : '' }}>Male</option>
                  <option value="P" {{ $user->gender == 'P' ? 'selected' : '' }}>Female</option>
                </select>
              </div>
            <button type="submit" class="mt-3 mb-5 btn btn-success float-end">Save</button>
            </form>
       
    </div>
@endsection
