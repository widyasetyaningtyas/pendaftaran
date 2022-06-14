@extends('template.main')
@section('content')
<section class="content-header">
      <h1>
        Tampilan Data
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tampilan Data</li>
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
            <form class="form-horizontal" action="{{url('/siswa/store')}}" method="POST">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Lengkap</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" readonly value="{{$siswa->nama_lengkap}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Panggilan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_panggilan" id="nama_panggilan" placeholder="Nama Panggilan" readonly value="{{$siswa->nama_panggilan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jenis Kelamin</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis Kelamin" readonly value="{{$siswa->jenis_kelamin}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tempat Lahir</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" readonly value="{{$siswa->tempat_lahir}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Lahir</label>

                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" readonly value="{{$siswa->tanggal_lahir}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" readonly value="{{$siswa->alamat}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Agama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="agama" id="agama" placeholder="Agama" readonly value="{{$siswa->agama}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kewarganegaraan</label>

                  <div class="col-sm-10">
                    <select name="kewarganegaraan" class="form-control" id="kewarganegaraan" placeholder="kewarganegaraan" readonly value="{{$siswa->kewarganegaraan}}">
                      <option>--pilih--</option>
                      <option value="Indonesia">Indonesia</option>
                      <option value="Thailand">Thailand</option>
                      <option value="Korea">Korea</option>
                      <option value="China">China</option>
                      <option value="Amerika">Amerika</option>
                      <option value="Prancis">Prancis</option>
                      <option value="Rusia">Rusia</option>
                      <option value="Vietnam">Vietnam</option>
                      <option value="Spanyol">Spanyol</option>
                      <option value="Inggris">Inggris</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Ayah</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" placeholder="Nama Ayah" readonly value="{{$siswa->nama_ayah}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Ibu</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu" readonly value="{{$siswa->nama_ibu}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Anak Ke</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="anak_ke" id="anak_ke" placeholder="Anak Ke" readonly value="{{$siswa->anak_ke}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jumlah Saudara Kandung</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlah_saudara_kandung" id="jumlah_saudara_kandung" placeholder="Jumlah Saudara Kandung" readonly value="{{$siswa->jumlah_saudara_kandung}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jumlah Saudara Tiri</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlah_saudara_tiri" id="rayonjumlah_saudara_tiri" placeholder="Jumlah Saudara Tiri" readonly value="{{$siswa->jumlah_saudara_tiri}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jumlah Saudara Angkat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlah_saudara_angkat" id="jumlah_saudara_angkat" placeholder="Jumlah Saudara Angkat" readonly value="{{$siswa->jumlah_saudara_angkat}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Bahasa Sehari</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="bahasa_sehari" id="bahasa_sehari" placeholder="Bahasa Sehari" readonly value="{{$siswa->bahasa_sehari}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Berat Badan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="berat_badan" id="berat_badan" placeholder="Berat Badan" readonly value="{{$siswa->berat_badan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tinggi Badan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tinggi_badan" id="tinggi_badan" placeholder="Tinggi Badan" readonly value="{{$siswa->tinggi_badan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Wali</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_wali" id="nama_wali" placeholder="Nama Wali" readonly value="{{$siswa->nama_wali}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat Wali</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat_wali" id="alamat_wali" placeholder="Alamat Wali" readonly value="{{$siswa->alamat_wali}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">No Telp</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="no_telp" id="no_telp" placeholder="No Telp" readonly value="{{$siswa->no_telp}}">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{url('/siswa')}}" class="btn btn-sm btn-danger">Back</a>
                <a href="{{url('/siswa/edit/'.$siswa->id)}}" class="btn btn-sm btn-warning pull-right">Edit</a>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
</section>
@endsection