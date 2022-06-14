@extends('template.main')
@section('content')
<section class="content-header">
      <h1>
        Tambah Data Pendaftaran
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Data Pendaftaran</li>
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
                    <input type="text" class="form-control" onkeyup="validationhuruf()" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Panggilan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_panggilan" id="nama_panggilan" placeholder="Nama Panggilan">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jenis Kelamin</label>

                  <div class="col-sm-10">
                    <td class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis Kelamin">
                      <input type="radio" name="jenis_kelamin" value="laki-laki">laki-laki
                      <input type="radio" name="jenis_kelamin" value="perempuan">perempuan
                    </td>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tempat Lahir</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Lahir</label>

                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Agama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="agama" id="agama" placeholder="Agama">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kewarganegaraan</label>

                  <div class="col-sm-10">
                    <select name="kewarganegaraan" class="form-control" name="kewarganegaraan" id="kewarganegaraan" placeholder="Kewarganegaraan">
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
                    <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" placeholder="Nama Ayah">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Ibu</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Anak Ke</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" onkeyup="validationangka()" name="anak_ke" id="anak_ke" placeholder="Anak Ke">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jumlah Saudara Kandung</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlah_saudara_kandung" id="jumlah_saudara_kandung" placeholder="Jumlah Saudara Kandung">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jumlah Saudara Tiri</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlah_saudara_tiri" id="rayonjumlah_saudara_tiri" placeholder="Jumlah Saudara Tiri">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jumlah Saudara Angkat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlah_saudara_angkat" id="jumlah_saudara_angkat" placeholder="Jumlah Saudara Angkat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Bahasa Sehari</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="bahasa_sehari" id="bahasa_sehari" placeholder="Bahasa Sehari">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Berat Badan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="berat_badan" id="berat_badan" placeholder="Berat Badan">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tinggi Badan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tinggi_badan" id="tinggi_badan" placeholder="Tinggi Badan">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Wali</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_wali" id="nama_wali" placeholder="Nama Wali">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat Wali</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat_wali" id="alamat_wali" placeholder="Alamat Wali">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">No Telp</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="no_telp" id="no_telp" placeholder="No Telp">
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
            <button onclick="tampilkan_nama()">KLIK SAYA</button>
 
            <!-- id hasil -->
              <div id="hasil"></div>
          </div>
</section>
<script>    
  function validationhuruf(){
    var validasiHuruf = /^[a-zA-Z]+$/;
    var nama_lengkap = document.getElementById("nama_lengkap");
    if (nama_lengkap.value.match(validasiHuruf)) {

    } else {
      alert("Format wajib huruf");
      nama.value="";
      nama.focus();
      return false;
    }
  }    
  function validationangka(){
    var validasiAngka = /^[0-9]+$/;
    var anak_ke = document.getElementById("anak_ke");
    if (anak_ke.value.match(validasiAngka)) {

    } else {
      alert("Format wajib Angka");
      nama.value="";
      nama.focus();
      return false;
    }
  }
</script>
@endsection