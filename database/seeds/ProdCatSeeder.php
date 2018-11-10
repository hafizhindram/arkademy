<?php

use Illuminate\Database\Seeder;
use App\ProductCategory;

class ProdCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pc1 = new ProductCategory;
        $pc1->name('Peralatan Mandi');
        $pc1->save();

        $pc2 = new ProductCategory;
        $pc2->name('Minuman Kemasan');
        $pc2->save();

        $pc3 = new ProductCategory;
        $pc3->name('Produk Susu');
        $pc3->save();
    }
}
