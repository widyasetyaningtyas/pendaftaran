@extends('template.main')
@section('content')
<section class="content-header">
      <h1>
        Edit Data Pendaftaran
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Data Pendaftaran</li>
      </ol>
</section>
<section class="content">
	<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
              <h1><center>Formulir Pendaftaran Peserta Didik Baru</center></h1>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{url('/siswa/update/'.$siswa->id)}}" method="POST">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Lengkap</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" value="{{$siswa->nama_lengkap}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Panggilan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_panggilan" id="nama_panggilan" placeholder="Nama Panggilan" value="{{$siswa->nama_panggilan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jenis Kelamin</label>

                  <div class="col-sm-10">
                    <td class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis Kelamin" value="{{$siswa->jenis_kelamin}}">
                      <input type="radio" name="jenis_kelamin" value="laki-laki">laki-laki
                      <input type="radio" name="jenis_kelamin" value="perempuan">perempuan
                    </td>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tempat Lahir</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="{{$siswa->tempat_lahir}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Lahir</label>

                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" value="{{$siswa->tanggal_lahir}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="{{$siswa->alamat}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Agama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="agama" id="agama" placeholder="Agama" value="{{$siswa->agama}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kewarganegaraan</label>

                  <div class="col-sm-10">
                    <select name="kewarganegaraan" class="form-control" id="kewarganegaraan" placeholder="kewarganegaraan" value="{{$siswa->kewarganegaraan}}">
                      <option>--pilih--</option>
                      <option value="indonesia">Indonesia</option>
                      <option value="thailand">Thailand</option>
                      <option value="korea">Korea</option>
                      <option value="china">China</option>
                      <option value="amerika">Amerika</option>
                      <option value="prancis">Prancis</option>
                      <option value="rusia">Rusia</option>
                      <option value="vietnam">Vietnam</option>
                      <option value="spanyol">Spanyol</option>
                      <option value="inggris">Inggris</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Ayah</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" placeholder="Nama Ayah" value="{{$siswa->nama_ayah}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Ibu</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu" value="{{$siswa->nama_ibu}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Anak Ke</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="anak_ke" id="anak_ke" placeholder="Anak Ke" value="{{$siswa->anak_ke}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jumlah Saudara Kandung</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlah_saudara_kandung" id="jumlah_saudara_kandung" placeholder="Jumlah Saudara Kandung" value="{{$siswa->jumlah_saudara_kandung}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jumlah Saudara Tiri</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlah_saudara_tiri" id="rayonjumlah_saudara_tiri" placeholder="Jumlah Saudara Tiri" value="{{$siswa->jumlah_saudara_tiri}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jumlah Saudara Angkat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlah_saudara_angkat" id="jumlah_saudara_angkat" placeholder="Jumlah Saudara Angkat" value="{{$siswa->jumlah_saudara_angkat}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Bahasa Sehari</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="bahasa_sehari" id="bahasa_sehari" placeholder="Bahasa Sehari" value="{{$siswa->bahasa_sehari}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Berat Badan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="berat_badan" id="berat_badan" placeholder="Berat Badan" value="{{$siswa->berat_badan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tinggi Badan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tinggi_badan" id="tinggi_badan" placeholder="Tinggi Badan" value="{{$siswa->tinggi_badan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Wali</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_wali" id="nama_wali" placeholder="Nama Wali" value="{{$siswa->nama_wali}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat Wali</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat_wali" id="alamat_wali" placeholder="Alamat Wali" value="{{$siswa->alamat_wali}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">No Telp</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="no_telp" id="no_telp" placeholder="No Telp" value="{{$siswa->no_telp}}">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Batal</button>
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
</section>
@endsection