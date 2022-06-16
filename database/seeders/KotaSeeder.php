<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KotaModel;

use Faker;
class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();

        $luas = array(
            "bogor"=>"2.710,62",
            "sukabumi"=>"4.145,70",
            "cianjur"=>"3.840,16",
            "bandung"=>"1.767,96",
            "garut"=>"3.074,07",
            "tasikmalaya"=>"2.551,19",
            "ciamis"=>"1.414,71",
            "kuningan"=>"1.110,56",
            "cirebon"=>"984,52",
            "majalengka"=>"1.204,24",
            "sumedang"=>"1.518,33",
            "indramayu"=>"2.040,11",
            "subang"=>"1.893,95",
            "purwakarta"=>"825,74",
            "karawang"=>"1.652,20",
            "bekasi"=>"1.224,88"
        );


        foreach( $luas as $key=> $value ){
            $kota = new KotaModel();
            $kota->nama = $key;
            if($key=='bogor'){
                $kota->gambar = 'bogor.jpg';
            }else if($key=='bandung'){
                $kota->gambar='bandung.jpg';
            }else if($key=='karawang'){
                $kota->gambar = 'karawang.jpg';
            }else if($key=='bekasi'){
                $kota->gambar='bekasi.jpg';
            }

            $kota->luas = (string) $value;
            $kota->save();
        }
        
    }
}
