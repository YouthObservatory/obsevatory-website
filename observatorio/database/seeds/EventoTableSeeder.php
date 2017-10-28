<?php

use Illuminate\Database\Seeder;

class EventoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('eventos')->insert([
            'autor_id' => 1,
            'data_inicio' => '2017-04-05',
            'data_fim' => '2017-04-07',
            'titulo' => 'Evento 1',
            'pais_sigla' => 'BR',
            'localizacao' => 'Igaci, Alagoas, Brazil',
            'url' => 'http://evento1.com.br',
            'lat' => '-9.5362021',
            'long' => '-36.6316797',
            'online' => 0,
            'created_at' => '2016-06-26 04:45:03',
            'updated_at' => '2016-06-26 04:45:03',
        ]);

        DB::table('eventos')->insert([
            'autor_id' => 2,
            'data_inicio' => '2017-04-05',
            'data_fim' => '2017-04-07',
            'titulo' => 'Evento 2',
            'pais_sigla' => 'BR',
            'localizacao' => 'Palmeira dos Índios, Alagoas, Brazil',
            'url' => 'http://evento2.com.br',
            'lat' => '-9.409017',
            'long' => '-36.636657',
            'online' => 0,
            'created_at' => '2016-06-26 04:45:03',
            'updated_at' => '2016-06-26 04:45:03',
        ]);

        DB::table('eventos')->insert([
            'autor_id' => 2,
            'data_inicio' => '2016-08-13',
            'data_fim' => '2016-09-07',
            'titulo' => 'Evento 3',
            'url' => 'http://evento3.com.br',
            'online' => 1,
            'created_at' => '2016-06-26 04:45:03',
            'updated_at' => '2016-06-26 04:45:03',
        ]);

        DB::table('eventos')->insert([
            'autor_id' => 2,
            'data_inicio' => '2017-08-12',
            'data_fim' => '2017-04-12',
            'titulo' => 'Evento 4',
            'url' => 'http://evento3.com.br',
            'online' => 1,
            'created_at' => '2016-06-26 04:45:03',
            'updated_at' => '2016-06-26 04:45:03',
        ]);

        DB::table('eventos')->insert([
            'autor_id' => 2,
            'data_inicio' => '2017-04-05',
            'data_fim' => '2017-04-07',
            'titulo' => 'Evento 5',
            'pais_sigla' => 'BR',
            'localizacao' => 'Palmeira dos Índios, Alagoas, Brazil',
            'url' => 'http://evento2.com.br',
            'lat' => '-9.409017',
            'long' => '-36.636657',
            'online' => 0,
            'created_at' => '2016-06-26 04:45:03',
            'updated_at' => '2016-06-26 04:45:03',
        ]);
    }
}
