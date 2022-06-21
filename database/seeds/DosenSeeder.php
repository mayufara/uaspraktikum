<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i= 1; $i <=100; $i++)
        {
            DB::table('dosen') -> insert
            ([ 
                'nidn' => $faker->nik(),
                'nama' => $faker->name(),
                'status'=> $faker->suffix(),
                'jafung'=> $faker->title(),
                'pakar'=> $faker->jobTitle()
                ]);
            }
    }
}
