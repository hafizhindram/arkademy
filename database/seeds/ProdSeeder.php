<?php

use Illuminate\Database\Seeder;
use App\Category;

class ProdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c1 = new Category;
        $c1->name('Sabun Wangi');
        $c1->category_id('1');
        $c1->save();

        $c2 = new Category;
        $c2->name('Minuman Cola');
        $c2->category_id('2');
        $c2->save();

        $c3 = new Category;
        $c3->name('Prenagon Gold');
        $c3->category_id('3');
        $c3->save();

        $c4 = new Category;
        $c4->name('Aquaa');
        $c4->category_id('2');
        $c4->save();

        $c5 = new Category;
        $c5->name('The Botol');
        $c5->category_id('2');
        $c5->save();

        $c6 = new Category;
        $c6->name('Sampo');
        $c6->category_id('1');
        $c6->save();
    }
}
