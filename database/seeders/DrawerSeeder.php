<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrawerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drawers')->insert([
            [
                'name' => 'Albert Uderzo',
                'birth_year' => 1927,
                'nationality' => 'Français'
            ],
            [
                'name' => 'Didier Tarquin',
                'birth_year' => 1967,
                'nationality' => 'Français'
            ],
            [
                'name' => 'Jean-Richard Geurts',
                'birth_year' => 1957,
                'nationality' => 'Belge'
            ]
            ]);
    }
}
