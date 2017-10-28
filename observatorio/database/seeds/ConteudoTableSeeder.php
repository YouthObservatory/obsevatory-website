<?php

use Illuminate\Database\Seeder;

class ConteudoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('conteudos')->insert([
            'publicacao_id' => 1,
            'idioma_id' => 1,
            'titulo' => 'Lorem ipsum dolor sit amet.',
            'olho' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque imperdiet urna eu quam euismod tincidunt.',
            'texto' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque imperdiet urna eu quam euismod tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec congue.',
        ]);

        DB::table('conteudos')->insert([
            'publicacao_id' => 1,
            'idioma_id' => 2,
            'titulo' => 'Lorem ipsum dolor sit amet.',
            'olho' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque imperdiet urna eu quam euismod tincidunt.',
            'texto' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque imperdiet urna eu quam euismod tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec congue.',
        ]);

        DB::table('conteudos')->insert([
            'publicacao_id' => 2,
            'idioma_id' => 1,
            'titulo' => 'Lorem ipsum dolor sit amet.',
            'olho' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque imperdiet urna eu quam euismod tincidunt.',
            'texto' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque imperdiet urna eu quam euismod tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec congue.',
        ]);

        DB::table('conteudos')->insert([
            'publicacao_id' => 3,
            'idioma_id' => 1,
            'titulo' => 'Lorem ipsum dolor sit amet.',
            'olho' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque imperdiet urna eu quam euismod tincidunt.',
            'texto' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque imperdiet urna eu quam euismod tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec congue.',
        ]);
    }
}
