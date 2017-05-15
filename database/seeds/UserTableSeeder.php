<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Product;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Milan Urosevic";
        $user->email = "kobimilan@gmail.com";
        $user->password = bcrypt('password');
        $user->save();
        $product = Product::where('slug', 'ram-memory')->first();
        $user->orders()->attach($product);
    }
}
