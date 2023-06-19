@extends('layouts.main')

@section('ambil')
<a href="{{ route('user.index') }}"><button class="btn btn-danger mt-3">Kembali</button></a>
<form action="{{ route('user.update', ['user' => $users->id_user]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="card mt-3 mb-3">
        <div class="card-body">
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" name ="nama" id="nama"  value="{{ $users->nama }}">
    </div>
    <div class="form-group">
      <label for="password">password</label>
      <input type="password" class="form-control" name ="password"  id="password"  value="{{ $users->password }}" >
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" name ="email" id="email"  value="{{ $users->email }}">
    </div>
    <div class="form-group">
      <label for="nohp">noHP</label>
      <input type="text" class="form-control" name ="nohp" id="nohp"  value="{{ $users->nohp }}">
    </div>
    <div class="form-group">
      <label for="jenis_kelamin">Jenis Kelamin</label>
      <input type="text" class="form-control" name ="jenis_kelamin" id="jenis_kelamin"  value="{{ $users->jenis_kelamin }}">
    </div>
    <div class="form-group">
      <label for="tgl_lahir">Tanggal Lahir</label>
      <input type="date" class="form-control" name ="tgl_lahir" id="tgl_lahir" value="{{ $users->tgl_lahir }}">
    </div>
    <button type="submit" class="mt-3 float-end btn btn-success ">Save</button>
  </form>
</div>
</div>

@endsection