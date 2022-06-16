<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DesaModel;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private function saves( $data, $id_kota, $id_kecamatan){
        foreach($data as $d ){
            $desa = new DesaModel();
            $desa->nama = $d;
            $desa->id_kota = $id_kota;
            $desa->id_kecamatan = $id_kecamatan;
            $desa->save();
        }
    }
    public function run()
    {
        //
        $id_kota = 1;
        $bogor_selatan = array(
            //bogor selatan
            'batutulis',
            'bojongkerta',
            'bondongan',
            'cikaret',
            'cipaku',
            'empang',
            'genteng',
            'harjasari',
            'kertamaya',
            'lawanggintung',
            'muarasari',
            'mulyaharja',
            'pakuan',
            'pamoyanan',
            'rancamaya',
            'ranggamekar'
        );
        $bogor_utara = array(
            //bogor utara
            'bantar jati',
            'cibuluh',
            'ciluar',
            'cimahpar',
            'ciparigi',
            'kedunghalang',
            'tanahbaru',
            'tegalgundil'
        );

        $bogor_tengah = array(
            //bogor tengah
            'babakan',
            'babakanpasar',
            'cibogor',
            'ciwaringin',
            'gudang',
            'kebonkelapa',
            'pabaton',
            'paledang',
            'panaragan',
            'sempur',
            'tegallega'
        );
        $tanah_sareal = array(
            //tanah sareal
            'cibadak',
            'kayumanis',
            'kebonpedes',
            'kedungbadak',
            'kedungjaya',
            'kedungwaringin',
            'kencana',
            'mekarwangi',
            'sukadamai',
            'sukaresmi',
            'tanahsareal'
        );
        $bogor_barat = array(
            //bogor barat
            'balungbangjaya',
            'bubulak',
            'cilendek barat',
            'cilendek timur',
            'curug',
            'curugmekar',
            'gunungbatu',
            'loji',
            'margajaya',
            'menteng',
            'pasirjaya',
            'pasirkuda',
            'pasirmulya',
            'semplak',
            'sindangbarang',
            'situgede'
        );

        $this->saves( $bogor_barat, $id_kota, 1);
        $this->saves( $bogor_selatan, $id_kota, 2);
        $this->saves( $bogor_tengah , $id_kota, 3);
        $this->saves( $tanah_sareal, $id_kota, 4);
        $this->saves( $bogor_utara, $id_kota, 5);


    }
}
