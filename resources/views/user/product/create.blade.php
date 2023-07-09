@extends('user.layouts.main')
@section('sidebar')
    @include('user.layouts.aside')
@endsection

@section('main')
    <br><br>
    @if ($errors->any()) 
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        {{ $error }}
      </div>
    @endforeach
@endif
    <a href="{{ route('product') }}"><button class="btn btn-warning mt-3">Kembali</button></a>
    <form action="{{ route('product_store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card mt-3 mb-3">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control border" name="name" id="name" placeholder="Deez">
                </div>
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="text" class="form-control border" name="brand" id="brand" placeholder="Deez">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control border" name="price" id="price" placeholder="in Rupiah">
                </div>
                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="number" class="form-control border" name="amount" id="amount" placeholder="5">
                </div>
                <div class="form-group">
                    <label for="warranty">Product Warranty (days)</label>
                    <input type="number" class="form-control border" name="warranty" id="warranty" placeholder="5">
                </div>
                <div class="form-group">
                    <label for="buy_date">Buy Date</label>
                    <input type="date" class="form-control border" name="buy_date" id="buy_date" placeholder="">
                </div>
                <div class="form-group">
                    <label for="struct">Product Struct</label>
                    <input type="file" class="form-control border" name="struct" id="struct" placeholder="">
                </div>
                <button type="submit" class="mt-3 btn btn-success float-end">Submit</button>
            </div>
        </div>
    </form>
    
    <br><br><br><br> <br><br><br><br>
@endsection
