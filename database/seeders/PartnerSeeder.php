<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                "name" => "abc",
                'image' => "3.png",
                'status' => 1,
            ],
            [
                "name" => "abc",
                'image' => "3.png",
                'status' => 1,
            ],
            [
                "name" => "abc",
                'image' => "3.png",
                'status' => 1,
            ],
            [
                "name" => "abc",
                'image' => "3.png",
                'status' => 1,
            ],
            [
                "name" => "abc",
                'image' => "3.png",
                'status' => 1,
            ],
            [
                "name" => "abc",
                'image' => "3.png",
                'status' => 1,
            ],
            [
                "name" => "abc",
                'image' => "3.png",
                'status' => 1,
            ],
            [
                "name" => "abc",
                'image' => "3.png",
                'status' => 1,
            ],
            [
                "name" => "abc",
                'image' => "3.png",
                'status' => 1,
            ],
            [
                "name" => "abc",
                'image' => "3.png",
                'status' => 1,
            ],
        ];
        foreach ($datas as $data){
            Partner::create($data);
        }
    }
}
