<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\KecamatanModel;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //
        $id_kota = 1;

        $kecamatan = array(
            'bogor barat', //1
            'bogor selatan', //2
            'bogor tengah', //3
            'bogor timur', //4
            'bogor utara', //5
            'tanah sareal', //6
        );

        foreach( $kecamatan as $val ){
            $kec = new KecamatanModel();
            $kec->nama = $val;
            $kec->id_kota = $id_kota;
            $kec->save();
        }
    }
}
