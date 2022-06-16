<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserModel;
use Illuminate\Support\Facades\Crypt;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $user = new UserModel();
        $user->email = "reichkarl@yahoo.com";
        $user->password = bcrypt('reichkarl');
        $user->name = "Reich Karl";
        // $user->id_kota = 1;
        $user->save();
    }
}
