<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'product_id' => 1,
            'product_name' => 'Hanger',
            'product_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s',
            'product_price' => '50',
            'product_inStock' => '20'
        ]);
        Product::create([
            'product_id' => 2,
            'product_name' => 'Collar stand',
            'product_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s',
            'product_price' => '100',
            'product_inStock' => '30'
        ]);
        Product::create([
            'product_id' => 3,
            'product_name' => 'Tag pin',
            'product_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s',
            'product_price' => '40',
            'product_inStock' => '60'
        ]);

    }
}
