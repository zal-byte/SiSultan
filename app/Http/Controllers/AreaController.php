<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KotaModel;
use App\Models\KecamatanModel;

class AreaController extends Controller
{
    //

    public function show(){
        return view('area.main', ['data'=>KotaModel::all()]);
    }

    public function page( $area ){
        $data = KotaModel::where('nama','=', $area)->first();

        
        return view('area.show', ['data'=>$data]);
    }


    
}
