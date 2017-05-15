<?php

use Illuminate\Database\Seeder;
use App\Company;
use App\Product;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company1 = new Company();
        $company1->name = "INTEL";
        $company1->slug = str_slug($company1->name);
        $company1->pib = "111111111";
        $company1->password = bcrypt('password');
        $company1->email = "intel@gmail.com";
        $company1->address = "Vojvodjanska 10";
        $company1->telephone_num = "0651111111";
        $company1->save();
        $product1 = Product::where('title', 'RAM Memory')->first();
        $company1->products()->save($product1);

        $company2 = new Company();
        $company2->name = "AMD";
        $company2->slug = str_slug($company2->name);
        $company2->pib = "111111111";
        $company2->password = bcrypt('password');
        $company2->email = "amd@gmail.com";
        $company2->address = "Aleksandra Medvedeva 1";
        $company2->telephone_num = "0651111111";
        $company2->save();
        $product2 = Product::where('title', 'SSD Hard Drive')->first();
        $company2->products()->save($product2);

        $company3 = new Company();
        $company3->name = "WINWIN";
        $company3->slug = str_slug($company3->name);
        $company3->pib = "111111111";
        $company3->password = bcrypt('password');
        $company3->email = "winwin@gmail.com";
        $company3->address = "Buleval nemanjica 1";
        $company3->telephone_num = "0651111111";
        $company3->save();
        $product3 = Product::where('title', '32gb USB flash drive')->first();
        $company3->products()->save($product3);


    }
}
