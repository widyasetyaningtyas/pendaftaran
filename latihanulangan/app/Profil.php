<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table='profil';
    protected $primarykey='id';
    public  $timestamps = false;
    protected $fillable=array('nama','jenis_kelamin','tanggal_lahir','umur');
}
