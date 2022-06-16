<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KotaModel;
use App\Models\KecamatanModel;
use App\Models\UserModel;
use App\Models\UsahaModel;

class TestController extends Controller
{
    //
    public function get_kota( $kota ){
        $data = KotaModel::where('nama','=',$kota)->firstOrFail();
        echo "<pre>";
        foreach($data->kecamatan as $kecamatan){
            $kec = KecamatanModel::where('nama','=', $kecamatan['nama'])->firstOrFail();

            foreach( $kec->desa as $desa ){
                echo $desa . "<br>";
            }
        }
        echo "</pre>";
    }

    public function get_usaha( $val ){
        $usaha = UsahaModel::find(1)->firstOrFail();
        echo $usaha;
    }

    public function get_user_kota( $email ){
        $usr = UserModel::where('email','=',$email)->first();

        echo $usr->kota;
    }
}
