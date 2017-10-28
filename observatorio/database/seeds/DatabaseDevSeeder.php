<?php

use Illuminate\Database\Seeder;

class DatabaseDevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $this->call(IdiomaTableSeeder::class);
        $this->call(RoleTableSeeder::class);

        $this->call(UsuarioTableSeeder::class);

        $this->call(PublicacaoTableSeeder::class);
        $this->call(ConteudoTableSeeder::class);
        $this->call(ComentarioTableSeeder::class);

        $this->call(EventoTableSeeder::class);
    }
}
