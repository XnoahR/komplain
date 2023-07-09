@extends('user.layouts.main')
@section('sidebar')
    @include('user.layouts.aside')
@endsection

@section('main')
<br><br>

<h2>Data Product</h2>
<a href="{{ route('product_create') }}"><button class="mx-3 btn btn-primary">Add Product</button></a>
<div class="container">
    <table class="mt-3 table table-dark table-bordered border-primary table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Price</th>
                <th>Amount</th>
                <th>Brand</th>
                <th>Warranty</th>
                <th>Buy Date</th>
                <th>Struct</th>
                <th></th>
            </tr>
        </thead>
        <?php $id = 1?>
        @foreach ($products as $product)
        <tbody>
            <td><?=$id?></td>
            <td>{{ $product->name }}</td>
            <td>Rp {{ $product->price }}</td>
            <td>{{ $product->amount }}</td>
            <td>{{ $product->brand }}</td>
            <td>{{ $product->warranty }} days</td>
            <td>{{ $product->buy_date }}</td>
            <td><img class="rounded" src="{{ $product->struct }}" width="100px" alt=""></td>
            <td>
              <a href="{{ route('product_edit',$product->id )}}"><button class="btn btn-success">Edit</button></a>
              <a href="{{ route('product_delete',$product->id) }}"><button class="btn btn-danger">Delete</button></a>
            </td>
        </tbody>
        <?php $id++; ?>
        @endforeach
      </table>
</div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
