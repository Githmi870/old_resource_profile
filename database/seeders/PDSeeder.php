<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PDSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pdLines = "
            061 බෙන්තර-ඇල්පිටිය
            058 බලපිටිය
            060 කරන්දෙනිය
            062 හිනිදුම
            063 බද්දේගම
            059 අම්බලන්ගොඩ
            064 රත්ගම
            065 ගාල්ල
            066 අක්මීමාන
            067 හබරදූව
            068 දෙණියාය
            069 හක්මන
            070 අකුරැස්ස
            074 වැලිගම
            071 කඹුරුපිටිය
            073 මාතර
            072 දෙවිනුවර
            078 තිස්සමහාරාම
            077 තංගල්ල
            075 මුල්කිරිගල
            076 බෙලියත්ත
            077 තංගල්ල
        ";

        $pdLines = explode("\n", trim($pdLines));
        foreach ($pdLines as $line) {
            $line = trim($line);
            if ($line === '') {
                continue;
            }
            // split on any whitespace (spaces, tabs, etc.)
            $parts = preg_split('/\s+/', $line);
            if (count($parts) >= 2) {
                try {
                    // use insertOrIgnore to skip duplicate-key errors when available
                    DB::table('polling_divisions')->insertOrIgnore([
                        'pd_code' => $parts[0],
                        'pd_name' => $parts[1],
                    ]);
                } catch (\Throwable $e) {
                    // ignore malformed lines or DB errors and continue
                }
            }
        }
    }
}
