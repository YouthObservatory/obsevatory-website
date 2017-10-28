<?php

use Illuminate\Database\Seeder;
use Intervention\Image\ImageManagerStatic as Image;

class PublicacaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Image::configure(['driver' => 'gd']);

        DB::table('publicacoes')->insert([
            'autor_id' => 1,
            'publicada' => 1,
            'created_at' => '2016-06-26 04:45:03',
            'updated_at' => '2016-06-26 04:45:03',
            'slug' => 'lorem-ipsum',
            'cover' => Image::make(__DIR__.'/assets/1.jpg')->encode('jpeg')
        ]);

        DB::table('publicacoes')->insert([
            'autor_id' => 3,
            'publicada' => 1,
            'created_at' => '2016-06-26 04:45:03',
            'updated_at' => '2016-06-26 04:45:03',
            'slug' => 'lorem-ipsum-1',
            'cover' => Image::make(__DIR__.'/assets/2.jpg')->encode('jpeg')
        ]);

        DB::table('publicacoes')->insert([
            'autor_id' => 2,
            'publicada' => 1,
            'created_at' => '2016-06-26 04:45:03',
            'updated_at' => '2016-06-26 04:45:03',
            'slug' => 'lorem-ipsum-2',
            'cover' => Image::make(__DIR__.'/assets/3.jpg')->encode('jpeg')
        ]);
    }
}
