<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table='pendaftaran';
    protected $primarykey='id';
    public  $timestamps = false;
    protected $fillable=array('nama_lengkap','nama_panggilan','jenis_kelamin','tempat_lahir','tanggal_lahir','alamat','agama','kewarganegaraan','nama_ayah','nama_ibu','anak_ke','jumlah_saudara_kandung','jumlah_saudara_tiri','jumlah_saudara_angkat','bahasa_sehari','berat_badan','tinggi_badan','nama_wali','alamat_wali','no_telp');
}
