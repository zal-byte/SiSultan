<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;

use App\Models\InputDataHasilHutanModel;

class AdminController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function dashboard(){
        return view('dashboard');
    }
    public function input_data_hasil_hutan(){
        return view('admin.input_data_hasil_hutan');
    }
    public function postInput_data_hasil_hutan(Request $request){
        $validate = Validator::make($request->all(),[
            'alamat'=>'required',
            'longtitude'=>'required',
            'latitude'=>'required',
            'telp_fax'=>'required',
            'kapasitas'=>'required',
            'nama_penerbit'=>'required',
            'no_reg'=>'required',
            'masa_berlaku'=>'required',
            'pemilik'=>'required',
            'wilayah'=>'required',
            'nama_perusahaan'=>'required'
        ]);

        if($validate->fails()){
            return back()->withErrors($validate)->withInput();
        }

        $hasil_hutan = new InputDataHasilHutanModel();
        $hasil_hutan->nama_perusahaan = $request->nama_perusahaan;
        $hasil_hutan->alamat = $request->alamat;
        $hasil_hutan->longtitude = $request->longtitude;
        $hasil_hutan->latitude = $request->latitude;
        $hasil_hutan->telp_fax = $request->telp_fax;
        $hasil_hutan->kapasitas = $request->kapasitas;
        $hasil_hutan->nama_penerbit_fako = $request->nama_penerbit;
        $hasil_hutan->no_reg = $request->no_reg;
        $hasil_hutan->masa_berlaku = $request->masa_berlaku;
        $hasil_hutan->pemilik = $request->pemilik;
        $hasil_hutan->id_kota = $request->wilayah;
        $hasil_hutan->produk = $request->produk;
        
        if($hasil_hutan->save()){
            return back()->with('success', 'Data berhasil ditambahkan');
        }else{
            return back()->with('error', 'Data gagal ditambahkan');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
