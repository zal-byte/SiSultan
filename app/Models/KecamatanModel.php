<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\KotaModel;
use App\Models\DesaModel;

class KecamatanModel extends Model
{
    use HasFactory;
    protected $table = 'kecamatan';
    protected $fillable = ['nama','id_kota'];

    public function desa()
    {
        return $this->hasMany(DesaModel::class,'id_kecamatan');
    }

    public function kota(){
        return $this->belongsTo(KotaModel::class, 'id_kota','id');
    }

    
}
