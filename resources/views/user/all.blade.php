@extends('user.layouts.main')
@section('sidebar')
    @include('user.layouts.aside')
@endsection

@section('main')
<br><br>
<h2>Data Komplain</h2>
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
                <th>Subject</th>
                <th>Product</th>
                <th>Complaint Type</th>
                <th>Date</th>
                <th>Desc</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php $id = 1?>
        @foreach ($complaint as $cp)
        <form action="{{ route('all_update',$cp->id)}}" method="post">
          @csrf
          @method('PATCH')
        <tbody>
            <td><?=$id?></td>
            <td>{{ $cp->subject }}</td>
            <td>{{ $products[$id-1] }}</td>
            <td>@if ($cp->complaint_type == 1 )Entertainment
             @elseif($cp->complaint_type == 2)Management
             @elseif($cp->complaint_type == 3)College
             @elseif($cp->complaint_type == 4)Other
            @endif</td>
            <td>{{$cp->date_send}}</td>
            <td><button class="btn btn-primary" data-toggle="modal" data-target="#description{{ $cp->id }}">Details</button></td>
            <div class="modal fade" id="description{{ $cp->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                      </button>
                    </div>
                    <div class="modal-body">
                      {{ $cp->description }}
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" data-dismiss="modal">Okay</button>
                    </div>
                  </div>
                </div>
              </div>
              <td>
               
                  <select class="form-select" aria-label="Default select example" name="status" id="status">
                    <option value="1" {{ $cp->status == '1' ? 'selected' : '' }}>Pending</option>
                    <option value="2" {{ $cp->status == '2' ? 'selected' : '' }}>Dikirim</option>
                    <option value="3" {{ $cp->status == '3' ? 'selected' : '' }}>Diproses</option>
                    <option value="4" {{ $cp->status == '4' ? 'selected' : '' }}>Ditolak</option>
                    <option value="5" {{ $cp->status == '5' ? 'selected' : '' }}>Disetujui</option>
                  </select>
                    <td><button class="btn btn-warning" type="submit">Change</button></td>
                  
                </form>
                
              {{-- @if ($cp->status == 1 )Pending
             @elseif($cp->status == 2)Dikirim
             @elseif($cp->status == 3)Diproses
            @endif --}}
          </td>
            
            
        </tbody>
        <?php $id++; ?>
        @endforeach
      </table>
</div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
