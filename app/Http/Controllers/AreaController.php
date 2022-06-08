<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KotaModel;

class AreaController extends Controller
{
    //

    public function show(){
        return view('area.main', ['data'=>KotaModel::paginate(6)]);
    }

    public function page( $area ){
        return view('area.show', ['data'=>KotaModel::where('kota_nama', $area)->first()]);
    }
}
