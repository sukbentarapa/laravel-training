<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GadgetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gadgets')->truncate();

        $data = [];

        foreach (range(1, 1000) as $key){
            $data[] = [
                'name' =>  fake()->company(),
                'user_id' => rand(1, 100),
                'phone_number' => fake()->mobileNumber(),
                'serial_number' => rand(10000,100000),
                'brand' => fake()->city(),
                'status' => rand(0,1),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        DB::table('gadgets')->insert($data);
    }
}
