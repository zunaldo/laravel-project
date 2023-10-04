<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Product::create([
        'name'=>'Garnier',
        'code'=>'Howomoro',
        'price'=>23500,

       ]);
       Product::create([
        'name'=>'Indomilk',
        'code'=>'Sugura23',
        'price'=>3500,

       ]);
       Product::create([
        'name'=>'Indomie Goreng',
        'code'=>'inaka45',
        'price'=>3700,
        
       ]);
       Product::create([
        'name'=>'Kanzler',
        'code'=>'btgcklt87',
        'price'=>7500,
        
       ]);

       Product::create([
        'name'=>'Kis',
        'code'=>'btgcgdte',
        'price'=>6500,
        
       ]);
    }
}
