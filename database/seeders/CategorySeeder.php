<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($categories=0;$categories<=10;$categories++){
       DB::table('categories')->insert([
           'name'=> Str::random(10),
           'content' => Str::random(10).'@gmail.com',
       ]);
    }

    }
}
