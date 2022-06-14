@extends('template.main')
@section('content')
	<section class="content-header">
	      <h1>
	        PENDAFTARAN
	        <small>Control panel</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Pendaftaran</li>
	      </ol>
	</section>
	<section class="content">
		 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pendaftaran</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
            	<a href="{{url('/siswa/create')}}" class="btn btn-primary" style="margin:10px;">Tambah Data Pendaftaran</a>
              <table class="table table-striped">
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Nama Panggilan</th>
                  <th>Jenis Kelamin</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <!-- <th>Alamat</th>
                  <th>Agama</th>
                  <th>Kewarganegaraan</th>
                  <th>Nama Ayah</th>
                  <th>Nama Ibu</th>
                  <th>Anak Ke</th>
                  <th>Jumlah Saudara Kandung</th>
                  <th>Jumlah Saudara Tiri</th>
                  <th>Jumlah Saudara Angkat</th>
                  <th>Bahasa Sehari</th>
                  <th>Berat Badan</th>
                  <th>Tinggi Badan</th>
                  <th>Nama Wali</th>
                  <th>Alamat Wali</th>
                  <th>No Telp</th> -->
                  <th>Aksi</th>
                </tr>
                @foreach ($siswa as $data)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$data->nama_lengkap}}</td>
                  <td>{{$data->nama_panggilan}}</td>
                  <td>{{$data->jenis_kelamin}}</td>
                  <td>{{$data->tempat_lahir}}</td>
                  <td>{{$data->tanggal_lahir}}</td>
                  <!-- <td>{{$data->alamat}}</td>
                  <td>{{$data->agama}}</td>
                  <td>{{$data->kewarganegaraan}}</td>
                  <td>{{$data->nama_ayah}}</td>
                  <td>{{$data->nama_ibu}}</td>
                  <td>{{$data->anak_ke}}</td>
                  <td>{{$data->jumlah_saudara_kandung}}</td>
                  <td>{{$data->jumlah_saudara_tiri}}</td>
                  <td>{{$data->jumlah_saudara_angkat}}</td>
                  <td>{{$data->bahasa_sehari}}</td>
                  <td>{{$data->berat_badan}}</td>
                  <td>{{$data->tinggi_badan}}</td>
                  <td>{{$data->nama_wali}}</td>
                  <td>{{$data->alamat_wali}}</td>
                  <td>{{$data->no_telp}}</td> -->
                  <td>
                  	<a href="{{url('/siswa/show/'.$data->id)}}" class="btn btn-sm btn-info">Show</a>
                    <a href="{{url('/siswa/edit/'.$data->id)}}" class="btn btn-sm btn-warning">Edit</a>
                  	<a href="{{url('/siswa/destroy/'.$data->id)}}" class="btn btn-sm btn-danger">Delet</a>
                  </td>
                </tr>
                @endforeach
               </table>
              </div>
            <!-- /.box-body -->
          </div>
	</section>
@endsection