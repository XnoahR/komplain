@extends('user.layouts.main')
@section('sidebar')
    @include('user.layouts.aside')
@endsection

@section('main')
<br><br>
<h2>Data Komplain</h2>
{{-- <a href="{{ route('datacreate') }}"><button class="mx-3 btn btn-primary">Tambah Data</button></a> --}}
<div class="container">
    <table class="mt-3 table table-dark table-bordered border-primary table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Subject</th>
                <th>Complaint Type</th>
                <th>Date</th>
                <th>Desc</th>
                <th>Status</th>
                <th>Action</th>
                <th></th>
            </tr>
        </thead>
        <?php $id = 1?>
        {{-- @foreach ($users as $user) --}}
        <tbody>
            <td><?=$id?></td>
            <td>Ray</td>
            <td>F</td>
            <td>xxxx</td>
            <td>today</td>
            <td><a href="{{ route('unsolved') }}"><button class="btn btn-primary">Details</button> </a></td>
            <td>Pending</td>
            <td>
                <select class="form-select" aria-label="Default select example" id="choice2">
                    <option selected>Pending</option>
                    <option value="1">Dikirim</option>
                    <option value="2">DIproses</option>
                    <option value="3">Ditolak</option>
                    <option value="4">Disetujui</option>
                  </select>
            </td>
            <td><a href=""{{ route('unsolved') }}"><button class="btn btn-success">Submit</button></a></td>
        </tbody>
        <?php $id++; ?>
        {{-- @endforeach --}}
      </table>
</div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
