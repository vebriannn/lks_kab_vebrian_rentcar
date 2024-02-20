<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Car;



class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::created([
            'name' => 'mobil z',
            'images' => 'www.asjjns.com',
            'brand_name' => 'brand z',
            'price_per_day' => '12',
            'stock' => '40',
        ]);
    }
}
