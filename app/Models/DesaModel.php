<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\KotaModel;
use App\Models\KecamatanModel;

class DesaModel extends Model
{
    use HasFactory;
    protected $table = 'desa';

    protected $fillable = ['nama','id_kecamatan','id_kota'];

    public function kecamatan(){
        return $this->belongsTo(KecamatanModel::class, 'id_kecamatan','id');
    }

    public function kota(){
        return $this->belongsTo(KotaModel::class, 'id_kota', 'id');
    }
}
