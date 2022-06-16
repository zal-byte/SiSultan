<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UsahaModel;

class IUPHKModel extends Model
{
    use HasFactory;
    protected $table = 'iuphk';

    public function usaha(){
        return $this->belongsToMany(UsahaModel::class, 'izin_usaha_iuphk');
    }
}
