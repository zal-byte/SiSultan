<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\KecamatanModel;
use App\Models\DesaModel;
use App\Models\UserModel;
use App\Models\UsahaModel;

class KotaModel extends Model
{
    use HasFactory;
    protected $table = 'kota';
    protected $fillable = ['nama','luas','gambar'];

    public function kecamatan(){
        return $this->hasMany(KecamatanModel::class, 'id_kota');
    }
    public function kota(){
        return $this->hasMany(DesaModel::class);
    }
    public function user(){
        return $this->belongsTo(UserModel::class);
    }

    public function usaha(){
        return $this->hasMany(UsahaModel::class, 'id_kota');
    }
}
