<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'name' => 'Administrador',
            'email' => 'admin@obdjuv.app',
            'nascimento' => '12/04/1960',
            'bio' => '.',
            'sexo' => 'male',
            'password' => bcrypt('123456'),
            'role_id' => DB::table('roles')->where('nome', '=', 'admin')->first()->id,
            'username' => 'administrador'
        ]);

        DB::table('usuarios')->insert([
            'name' => 'Membro',
            'email' => 'membro@obdjuv.app',
            'nascimento' => '12/04/1960',
            'bio' => '.',
            'sexo' => 'male',
            'password' => bcrypt('123456'),
            'role_id' => DB::table('roles')->where('nome', '=', 'membro')->first()->id,
            'username' => 'membro'
        ]);

        DB::table('usuarios')->insert([
            'name' => 'Autenticado',
            'email' => 'autenticado@obdjuv.app',
            'nascimento' => '12/04/1960',
            'bio' => '.',
            'sexo' => 'male',
            'password' => bcrypt('123456'),
            'role_id' => DB::table('roles')->where('nome', '=', 'autenticado')->first()->id,
            'username' => 'autenticado'
        ]);
    }
}
