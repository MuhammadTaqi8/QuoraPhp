<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('products')->insert(
        [
            'name'=>'Iphone 11',
            'price'=>'3100',
            'category'=>'Iphone',
            'description'=>'very perfect Iphone',
            'gallery'=>'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_07-1100-V3.jpg'
        ]);
    }
}
