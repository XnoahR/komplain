@extends('user.layouts.main')
@section('sidebar')
    @include('user.layouts.aside')
@endsection

@section('main')
<br><br><br><br>
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
<form action="{{ route('complaint_store') }}" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="mb-3">
      <label for="subject" class="form-label">Subject</label>
      <input type="text" class="form-control border" id="subject" name="subject" aria-describedby="emailHelp" value="playstation">
    </div>
    {{-- id staff --}}
    <div class="mb-3"> 
      <label for="complaint_type" class="form-label">Type of Complaint</label>
      <select class="form-select" aria-label="Default select example" name="complaint_type" id="complaint_type">
        <option selected>Select Complaint Type</option>
        <option value="2">Entertainment</option>
        <option value="3">Management</option>
        <option value="4">College</option>
        <option value="4">Other</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="product" class="form-label">Product</label>
      <select class="form-select" aria-label="Default select example" name="product" id="product">
        <option selected>Select Your Product</option>
        @foreach ($product as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="description">Description (255 letters)</label>
      <input type="text" class="form-control border" id="description" name="description" placeholder="Enter your description here">
  </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <br><br><br><br> <br><br><br><br> 
@endsection
