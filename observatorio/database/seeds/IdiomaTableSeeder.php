<?php

use Illuminate\Database\Seeder;

class IdiomaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('idiomas')->insert([
            'nome' => 'English',
            'sigla' => 'en',
        ]);

        DB::table('idiomas')->insert([
            'nome' => 'Spanish',
            'sigla' => 'es',
        ]);

        DB::table('idiomas')->insert([
            'nome' => 'Brazilian Portuguese',
            'sigla' => 'pt-BR',
        ]);
    }
}
