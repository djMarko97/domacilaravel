<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class KnjigaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('knjigas')->insert([
            'Naziv' => 'Knjiga5',
            'Autor' => 'Autor5',
            'Broj strana' => '542',
            'Izdavac' => 'Izdavac5',
            'Zanr' => 'Zanr5'
        ]);


    }
}
