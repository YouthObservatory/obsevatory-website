<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('roles')->insert([
            'nome' => 'admin',
            'descricao' => 'Administrador',
        ]);

        DB::table('roles')->insert([
            'nome' => 'membro',
            'descricao' => 'Membro da Comissão',
        ]);

        DB::table('roles')->insert([
            'nome' => 'autenticado',
            'descricao' => 'Usuário autenticado',
        ]);
    }
}
