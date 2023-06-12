@extends('layouts.main')

@section('ambil')
<a href="{{ route('user.create') }}"><button class="btn btn-primary mb-3 mt-3"> Tambah</button></a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Nomor HP</th>
        <th scope="col">Gender</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Roles</th>
      </tr>
    </thead>
    <tbody>
        <?php $id = 1;?>
        @foreach ($users as $user)
        <tr>
            <th scope="row"><?=$id?></th>
            <td scope="col">{{ $user->nama }}</td>
            <td scope="col">{{ $user->email }}</td>
            <td scope="col">{{ $user->nohp }}</td>
            <td scope="col">{{ $user->jenis_kelamin }}</td>
            <td scope="col">{{ $user->tgl_lahir }}</td>
            <td scope="col">{{ $user->roles }}</td>
          </tr>
          <?php $id++;?>
        @endforeach
    </tbody>
  </table>
@endsection