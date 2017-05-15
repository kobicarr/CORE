<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Product;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat = new Category();
        $cat->title = "HARD DRIVES";
        $cat->slug = str_slug($cat->title);
        $cat->save();
        $product1 = Product::where('title', 'RAM Memory')->first();
        $cat->products()->save($product1);

        $cat1 = new Category();
        $cat1->title = "USB DRIVES";
        $cat1->slug = str_slug($cat1->title);
        $cat1->save();
        $product2 = Product::where('title', 'SSD Hard Drive')->first();
        $cat1->products()->save($product2);

        $cat2 = new Category();
        $cat2->title = "MEMORY COMPONENTS";
        $cat2->slug = str_slug($cat2->title);
        $cat2->save();
        $product3 = Product::where('title', '32gb USB flash drive')->first();
        $cat2->products()->save($product3);
    }
}
