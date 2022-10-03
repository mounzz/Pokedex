<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            [
                'type' => "normal"
            ],
            [
                'type' => "combat"
            ],
            [
                'type' => "vol"
            ],
            [
                'type' => "poison"
            ],
            [
                'type' => "sol"
            ],
            [
                'type' => "roche"
            ],
            [
                'type' => "insecte"
            ],
            [
                'type' => "spectre"
            ],
            [
                'type' => "acier"
            ],
            [
                'type' => "feu"
            ],
            [
                'type' => "plante"
            ],
            [
                'type' => "electrique"
            ],
            [
                'type' => "psy"
            ],
            [
                'type' => "glace"
            ],
            [
                'type' => "dragon"
            ],
            [
                'type' => "tenebres"
            ],
            [
                'type' => "fee"
            ],
            [
                'type' => "eau"
            ]

        ]);
    }
}
