<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\IUPHKModel;

class UsahaModel extends Model
{
    use HasFactory;
    protected $table = 'usaha';
    protected $fillable = ['nama_perusahaan','pemilik','kota','kecamatan','desa'];

    public function iuphk(){
        return $this->belongsToMany(IUPHKModel::class,'izin_usaha_iuphk');
    }
}
