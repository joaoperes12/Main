<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        $nomes_cat = ['Nutri', 'Exercicio'];

        foreach ($nomes_cat as $um_nome) {

            $c = new \App\Models\Category();
            $c -> name= $um_nome;
            $c->save();
        }

        $this->call(CategorySeeder::class);

        #for($posts=0;$posts<=10;$posts++) {
         #   DB::table('posts')->insert([
          #      'title' => str_random(10),
           #     'content' => str_random(100)
            #]);
        #}

    }
}
