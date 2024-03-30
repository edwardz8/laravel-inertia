<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hitter;

class HittersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hitter::truncate();
        $csvData = fopen(base_path('database/csv/2023_Hitters.csv'), 'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 1000, ',')) !== false) {
            if (!$transRow) {
                Hitter::create([
                    'name' => $data['0'],
                    'team' => $data['1'],
                    'games' => $data['2'],
                    'pa' => $data['3'],
                    'atbats' => $data['4'],
                    'hits' => $data['5'],
                    'doubles' => $data['6'],
                    'triples' => $data['7'],
                    'homeruns' => $data['8'],
                    'runs' => $data['9'],
                    'rbi' => $data['10'],
                    'bb' => $data['11'],
                    'strikeouts' => $data['12'],
                    'hbp' => $data['13'],
                    'sb' => $data['14'],
                    'cs' => $data['15'],
                    'avg' => $data['16'],
                    'obp' => $data['17'],
                    'slg' => $data['18'],
                    'ops' => $data['19'],
                    'wOBA' => $data['20'],
                    'wRCplus' => $data['21'],
                    'BsR' => $data['22'],
                    'fld' => $data['23'],
                    'off' => $data['24'],
                    'def' => $data['25'],
                    'war' => $data['26'],
                    'adp' => $data['27'],
                    'id' => $data['28'],
                ]);
            }
            $transRow = false;
        }
        fclose($csvData);
    }
}
