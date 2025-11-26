<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NaturalDisaster;

class NDSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nd_list = [
            "ගංවතුර",
            "නියඟය",
            "නායයෑම්",
            "වන විනාශය",
            "ජල මූලාශ්‍ර සිඳී යාම",
            "අක්‍රමවත් පහත් බිම් ගොඩ කිරීම",
            "කැලිකසළ",
            "වන අලි",
        ];

        $data = array_map(fn($item) => ['nd_name' => $item], $nd_list);

        NaturalDisaster::insert($data);
    }
}
