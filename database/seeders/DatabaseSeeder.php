<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{

    public function run(): void{
        DB::table('categories')->insert([
            'name' => 'Banho',
            'description' => 'Produtos para cama e banho',
        ]);
        DB::table("brands")->insert([
            "name"  => "Tramontina banho",
            "photo" => "",
        ]);
    }
}
