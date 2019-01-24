<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $param = [
            'name' => 'Hindi letters Tshirts',
            'description' => 'Care Instructions: Gentle Machine Wash Cold; 
                              Tumble Dry Fit Type: Regular Fit 100% Cotton Bio-Washed High Quality Soft Fabric to provide you a fair balance of 
                              comfort and durability Oeko Tex Certified Inks used in the printing. These are high quality inks - vibrant and durable, and highly crack resistant. 
                              Tagless Neck Label to avoid scratchy feeling Gentle Machine Wash Cold; Tumble Dry Made In India',
            'price' => '6',
            'category' => 'clothes',
            'product_image' => 'clothes1.png',
        ];

        DB::table('shops')->insert($param);

        $param = [
            'name' => 'Hindi letters Tshirts',
            'description' => 'This is Hindi letters Tshirts.',
            'price' => '7',
            'category' => 'clothes',
            'product_image' => 'clothes2.png',
        ];

        DB::table('shops')->insert($param);

        $param = [
            'name' => 'Chai Love Tshirts',
            'description' => 'This is chai love Tshirts.',
            'price' => '8',
            'category' => 'clothes',
            'product_image' => 'clothes3.png',
        ];

        DB::table('shops')->insert($param);
    }
}
