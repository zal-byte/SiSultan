<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsahaModel extends Model
{
    use HasFactory;
    protected $table = 'usaha';
    protected $fillabel ['nama_perusahaan','pemilik','kota','kecamatan','desa'];
}
