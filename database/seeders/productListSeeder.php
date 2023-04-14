<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class productListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productlist')->insert([
            'code_product'=>'PRD006',
            'name_product'=>'Better',
            'category_product'=>'Foods',
            'price_product'=>2000,
            'stoq_product'=>150
        ]);

        DB::table('productlist')->insert([
            'code_product'=>'PRD007',
            'name_product'=>'Beng-Beng',
            'category_product'=>'Foods',
            'price_product'=>2000,
            'stoq_product'=>85
        ]);

        DB::table('productlist')->insert([
            'code_product'=>'PRD008',
            'name_product'=>'Super Bubur',
            'category_product'=>'Foods',
            'price_product'=>4000,
            'stoq_product'=>125
        ]);

        DB::table('productlist')->insert([
            'code_product'=>'PRD009',
            'name_product'=>'La Pasta',
            'category_product'=>'Foods',
            'price_product'=>5000,
            'stoq_product'=>110
        ]);

        DB::table('productlist')->insert([
            'code_product'=>'PRD010',
            'name_product'=>'Sari Roti',
            'category_product'=>'Foods',
            'price_product'=>4500,
            'stoq_product'=>198
        ]);

        DB::table('productlist')->insert([
            'code_product'=>'PRD011',
            'name_product'=>'Tas Backpack Eiger',
            'category_product'=>'Bag',
            'price_product'=>650000,
            'stoq_product'=>50
        ]);

        DB::table('productlist')->insert([
            'code_product'=>'PRD012',
            'name_product'=>'Tas Backpack Arei',
            'category_product'=>'Bag',
            'price_product'=>450000,
            'stoq_product'=>50
        ]);

        DB::table('productlist')->insert([
            'code_product'=>'PRD013',
            'name_product'=>'Tas Backpack Pollo',
            'category_product'=>'Bag',
            'price_product'=>550000,
            'stoq_product'=>50
        ]);

        DB::table('productlist')->insert([
            'code_product'=>'PRD014',
            'name_product'=>'Tas Les Castino',
            'category_product'=>'Bag',
            'price_product'=>950000,
            'stoq_product'=>50
        ]);

        DB::table('productlist')->insert([
            'code_product'=>'PRD015',
            'name_product'=>'Tas Purotti',
            'category_product'=>'Bag',
            'price_product'=>4500,
            'stoq_product'=>198
        ]);

        DB::table('productlist')->insert([
            'code_product'=>'PRD016',
            'name_product'=>'Sepatu Eiger',
            'category_product'=>'Shoe',
            'price_product'=>755000,
            'stoq_product'=>75
        ]);


        DB::table('productlist')->insert([
            'code_product'=>'PRD017',
            'name_product'=>'Sepatu Arei',
            'category_product'=>'Shoe',
            'price_product'=>350000,
            'stoq_product'=>75
        ]);

        DB::table('productlist')->insert([
            'code_product'=>'PRD018',
            'name_product'=>'Sepatu Patrobas',
            'category_product'=>'Shoe',
            'price_product'=>250000,
            'stoq_product'=>75
        ]);

        DB::table('productlist')->insert([
            'code_product'=>'PRD019',
            'name_product'=>'Sepatu New Balance Girl',
            'category_product'=>'Shoe',
            'price_product'=>575000,
            'stoq_product'=>95
        ]);

        DB::table('productlist')->insert([
            'code_product'=>'PRD020',
            'name_product'=>'Sepatu Nike',
            'category_product'=>'Sepatu',
            'price_product'=>450000,
            'stoq_product'=>100
        ]);

        DB::table('productlist')->insert([
            'code_product'=>'PRD021',
            'name_product'=>'Coca-Cola',
            'category_product'=>'Drink',
            'price_product'=>9500,
            'stoq_product'=>250
        ]);

        DB::table('productlist')->insert([
            'code_product'=>'PRD022',
            'name_product'=>'Pepsi',
            'category_product'=>'Drink',
            'price_product'=>8750,
            'stoq_product'=>125
        ]);

        DB::table('productlist')->insert([
            'code_product'=>'PRD023',
            'name_product'=>'Mountain Dew',
            'category_product'=>'Drink',
            'price_product'=>12000,
            'stoq_product'=>265
        ]);

        DB::table('productlist')->insert([
            'code_product'=>'PRD024',
            'name_product'=>'Mie Samyang',
            'category_product'=>'Foods',
            'price_product'=>19500,
            'stoq_product'=>300
        ]);

        DB::table('productlist')->insert([
            'code_product'=>'PRD025',
            'name_product'=>'Buburia',
            'category_product'=>'Foods',
            'price_product'=>4500,
            'stoq_product'=>245
        ]);
    }
}
