<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\IUPHKModel;
use App\Models\KotaModel;

class UsahaModel extends Model
{
    use HasFactory;
    protected $table = 'usaha';
    protected $fillable = ['nama_perusahaan','longtitude', 'latitude', 'alamat','telp_fax','produk','nama_penerbit_fako', 'no_reg', 'masa_berlaku','pemilik','id_kota'];

    public function iuphk(){
        return $this->belongsToMany(IUPHKModel::class,'izin_usaha_iuphk');
    }

    public function kota(){
        return $this->belongsTo(KotaModel::class, 'id_kota');
    }

    
}
