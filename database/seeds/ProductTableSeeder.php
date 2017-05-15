<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product1 = new Product();
        $product1->title = "RAM Memory";
        $product1->slug = str_slug($product1->title);
        $product1->price = 2500.99;
        $product1->sold = false;
        $product1->save();

        $product2 = new Product();
        $product2->title = "SSD Hard Drive";
        $product2->slug = str_slug($product2->title);
        $product2->price = 8999.99;
        $product2->sold = false;
        $product2->save();

        $product3 = new Product();
        $product3->title = "32gb USB flash drive";
        $product3->slug = str_slug($product3->title);
        $product3->price = 3500.99;
        $product3->sold = false;
        $product3->save();


    }
}
