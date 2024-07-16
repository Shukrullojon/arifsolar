<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'video' => 'video.mp4',
                'name' => 'Aziza Usmonova',
                'status' => 1,
            ],
            [
                'video' => 'video.mp4',
                'name' => 'Aziza Usmonova',
                'status' => 1,
            ],
            [
                'video' => 'video.mp4',
                'name' => 'Aziza Usmonova',
                'status' => 1,
            ],
            [
                'video' => 'video.mp4',
                'name' => 'Aziza Usmonova',
                'status' => 1,
            ],
            [
                'video' => 'video.mp4',
                'name' => 'Aziza Usmonova',
                'status' => 1,
            ],
        ];
        foreach ($datas as $data){
            Review::create($data);
        }
    }
}
