<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{

    public function run(): void{
        DB::table('categories')->insert([
            'name' => 'Casa',
            'description' => 'Produtos para casa',
        ]);
        DB::table("brands")->insert([
            "name"  => "Tramontina",
            "photo" => "",
        ]);
        DB::table("products")->insert([
            "name"          => "Panela",
            "description"   => "Panela de pressão",
            "stock"         => 1,
            "price"         => 10,
            "photo"         => "",
            "brand_id"      => 1,
            "category_id" => 1,
        ]);


    }
    
};
