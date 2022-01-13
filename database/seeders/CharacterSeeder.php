<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            [
                'name' => 'Ordralfabetix',
                'creation_year' => 1959,
                'comic_name' => 'Astérix',
                'drawer_id' => 1
            ],
            [
                'name' => 'Lanfeust',
                'creation_year' => 1994,
                'comic_name' => 'Lanfeust de Troy',
                'drawer_id' => 2
            ],
            [
                'name' => 'Désiré Mégot',
                'creation_year' => 1985,
                'comic_name' => 'Le petit Spirou',
                'drawer_id' => 3
            ]
            ]);
    }
}
