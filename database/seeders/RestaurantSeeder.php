<?php

namespace Database\Seeders;

use Faker\Provider\ar_JO\Address as Ar_JOAddress;
use Faker\Provider\de_DE\Address;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('restaurants')->insert([
            'name' => Str::random(15),
            'address' => 'Jl. Pintu Senayan, Gelora, Kota Jakarta Pusat',
            'phone_num' => '08550917758'
        ]);
    }
}
