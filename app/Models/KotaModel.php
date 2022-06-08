<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KotaModel extends Model
{
    use HasFactory;
    protected $table = 'kota';
    protected $fillable = ['kota_nama','kota_gambar', 'kota_tentang'];
}
