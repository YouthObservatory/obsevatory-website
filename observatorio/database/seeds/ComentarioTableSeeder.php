<?php

use Illuminate\Database\Seeder;

class ComentarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('comentarios')->insert([
            'usuario_id' => 1,
            'publicacao_id' => 1,
            'texto' => 'Lorem ipsum dolor sit amet.',
            'created_at' => '2016-06-26 04:45:03',
        ]);

        DB::table('comentarios')->insert([
            'usuario_id' => 2,
            'publicacao_id' => 1,
            'parent_id' => 1,
            'texto' => 'Lorem ipsum dolor sit amet.',
            'created_at' => '2016-06-26 04:45:03',
        ]);

        DB::table('comentarios')->insert([
            'usuario_id' => 1,
            'publicacao_id' => 1,
            'parent_id' => 1,
            'texto' => 'Lorem ipsum dolor sit amet.',
            'created_at' => '2016-06-26 04:45:03',
        ]);

        DB::table('comentarios')->insert([
            'usuario_id' => 1,
            'publicacao_id' => 2,
            'texto' => 'Lorem ipsum dolor sit amet.',
            'created_at' => '2016-06-26 04:45:03',
        ]);
    }
}
