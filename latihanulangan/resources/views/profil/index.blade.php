@extends('template.main')
@section('content')
<section class="content-header">
      <h1>
        Simple Tables
        <small>preview of simple tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
      </ol>
 </section>
 <section class="content">
     <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Diri</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <a href="{{url('/profil/create')}}" class="btn btn-primary" style="margin:10px;">Tambah Data Diri</a>
              <table class="table table-striped">
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Tanggal Lahir</th>
                  <th>Umur</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($profil as $data)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$data->nama}}</td>
                  <td>{{$data->jenis_kelamin}}</td>
                  <td>{{$data->tanggal_lahir}}</td>
                  <td>{{$data->umur}}</td>
                  <td>
                    <a href="{{url('/profil/edit/'.$data->id)}}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{url('/profil/destroy/'.$data->id)}}" class="btn btn-sm btn-danger">Hapus</a>
                  </td>
                </tr>
                @endforeach
               </table>
              </div>
            <!-- /.box-body -->
          </div>
  </section>
@endsection