<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputDataHasilHutanModel extends Model
{
    use HasFactory;
    protected $table = 'industri_hasil_hutan';
    protected $fillable = ['nama_perusahaan','longtitude', 'latitude', 'alamat','telp_fax','produk','nama_penerbit_fako', 'no_reg', 'masa_berlaku','pemilik','id_kota'];


    
}
