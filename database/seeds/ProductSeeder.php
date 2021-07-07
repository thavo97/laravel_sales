<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'code'=>'0000000000001',
            'name'=>'lacteo',
            'stock'=>'120',
            'expiration'=>'2021-10-02',
            'sell_price'=>'10',
            'purchase_price'=>'8',
            'category_id'=>'1',
            'provider_id'=>'1',
            
        ]);
    }
}
