<?php

namespace Database\Seeders;

use Dflydev\DotAccessData\Data;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            DistrictSeeder::class,
            DivisionalSecretariatSeeder::class,
            GramaNiladariDivisionSeeder::class,
            LGDSeeder::class,
            GNDHasLGDSeeder::class,
            PDSeeder::class,
            PDHasGNDSeeder::class,
            UserSeeder::class,
        ]);

    }
}