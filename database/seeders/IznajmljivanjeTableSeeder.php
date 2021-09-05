<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IznajmljivanjeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('iznajmljivanjes')->insert([
            'Ime' => 'Knjiga5',
            'Prezime' => 'Autor5',
            'Knjiga' => intval('Knjiga')
        ]);
    }
}
