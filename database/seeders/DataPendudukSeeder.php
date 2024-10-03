<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class DataPendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID'); // Menggunakan locale Indonesia

        for ($i = 0; $i < 10; $i++) { // Membuat 10 data dummy
            DB::table('data_penduduk')->insert([
                'nama' => $faker->name,
                'nik' => $faker->unique()->numerify('################'),
                'alamat' => $faker->address,
                'telepon' => $faker->phoneNumber,
                'tanggal_lahir' => $faker->date(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
