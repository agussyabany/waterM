@extends('layouts.master')

@section('title')
    DAFTAR DEVICE
@endsection


@section('breadcrumb')
@parent
<li class="breadcrumb-item active">DEVICE LIST</li>
@endsection


@section('content')
<div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card">
              <div class="card-header">
                
                <button type="submit" class="badge badge-primary end">TAMBAH</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">No.</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Golongan</th>
                      <th>Meter Cut Off</th>
                      <th>Latitude</th>
                      <th>Longitud</th>
                      <th>Aksi</th>
                      
                    </tr>
                  </thead>

                @foreach ($device as $key => $item)  
                <tbody>
                    <tr>
                      <td width="5%">{{ $key+1 }}</td>
                      <td>{{ $item->nama }}</td>
                      <td>{{ $item->alamat }}</td>
                      <td>{{ $item->gol }}</td>
                      <td>{{ $item->m_cutOff }}</td>
                      <td>{{ $item->lat }}</td>
                      <td>{{ $item->lang }}</td>
                      <td><button class="badge badge-info">Update</button></td>
                    </tr>
                </tbody>
                @endforeach 
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                
              </div>
            </div>
      </div>
@endsection

@push('scripts')
<script>
  $(function(){
    $('body').addClass('sidebar-collapse');


  });
</script>
@endpush