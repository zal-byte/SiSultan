<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KotaModel;
use App\Models\KecamatanModel;
use App\Models\UsahaModel;

class AreaController extends Controller
{
    //

    public function show(){
        $bekasi = UsahaModel::where('id_kota', '=', '16')->get();
        $bogor = UsahaModel::where('id_kota','=','1')->get();

        $collection = $bekasi->concat($bogor);

        return view('area.main', ['data'=>$collection]);
    }

    public function page( $area ){
        $id_kota = KotaModel::where('nama', '=', $area)->firstOrFail();
        $data = UsahaModel::where('id_kota', '=', $id_kota['id'])->paginate(10);
        
        return view('area.show', ['data'=>$data]);
    }



    
}
