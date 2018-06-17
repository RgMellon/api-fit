<?php

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
        DB::table('planos')->insert([
            'nome' => 'Plano 50 Mb',
            'img_path' => 'imagens/50.png',
        ]);

        DB::table('planos')->insert([
            'nome' => 'Plano 70 Mb',
            'img_path' => 'imagens/70.png',
        ]);
        
        DB::table('planos')->insert([
            'nome' => 'Plano 90 Mb',
            'img_path' => 'imagens/90.png',
        ]);

        DB::table('planos')->insert([
            'nome' => 'Plano 250 Mb',
            'img_path' => 'imagens/250.png',
        ]);
    }
}
