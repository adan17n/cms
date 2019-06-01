<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\menu;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=1; $i <= 20; $i++) {
            DB::table('menus')->insert([
                'nama' => $faker->name,
                'harga' => random_int(12300,432400)
            ]);
        }
    }
}
