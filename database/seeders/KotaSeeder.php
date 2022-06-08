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

        $city = array("Bandung","Bogor","Karawang");
        foreach($city as $name)
        {
            $kota = new KotaModel();
            $kota->kota_nama = $name;
            $kota->kota_tentang = $faker->text();
            $kota->kota_gambar = strtolower($name) . ".jpg";
            $kota->save();
        }
    }
}
