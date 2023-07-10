@extends('user.layouts.main')
@section('sidebar')
    @include('user.layouts.aside')
@endsection

@section('main')
<br><br>
<h2>Data Staff</h2>
{{-- <a href="{{ route('datacreate') }}"><button class="mx-3 btn btn-primary">Tambah Data</button></a> --}}
<div class="container">
   @if (session()->has('success'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismis="alert"></button>
    </div>
@endif
    <table class="mt-3 table table-dark table-bordered border-primary table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Division</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php $id = 1?>
        @foreach ($users as $user)
        <form action="{{ route('role_update',$user->id)}}" method="post">
          @csrf
          @method('PATCH')
        <tbody>
            <td><?=$id?></td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
              <td>
                {{-- //1. Entertainment, 2.Management, 3.College, 4.Other --}}
                  <select class="form-select" aria-label="Default select example" name="role_penugasan" id="role_penugasan">
                    <option value="1" {{ $user->role_penugasan == '1' ? 'selected' : '' }}>Entertainment</option>
                    <option value="2" {{ $user->role_penugasan == '2' ? 'selected' : '' }}>Management</option>
                    <option value="3" {{ $user->role_penugasan == '3' ? 'selected' : '' }}>College</option>
                    <option value="4" {{ $user->role_penugasan == '4' ? 'selected' : '' }}>Other</option>
                  </select></td>
                    <td><button class="btn btn-warning" type="submit">Change</button></td>
                  
                </form>
                
              {{-- @if ($user->status == 1 )Pending
             @elseif($user->status == 2)Dikirim
             @elseif($user->status == 3)Diproses
            @endif --}}
          
            
            
        </tbody>
        <?php $id++; ?>
        @endforeach
      </table>
</div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
