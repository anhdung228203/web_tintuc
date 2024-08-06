<?php

namespace Database\Seeders;

use App\Models\Admin\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'name' => "Chính Trị",
                'mo_ta' => "Các việc liên quan đến chính trị",
            ],
            [
                'name' => "Công Nghệ",
                'mo_ta' => "Các công nghệ mới",
            ],
             [
                'name' => "Kinh Doanh",
                'mo_ta' => "Các việc liên quan đến kinh doanh",
            ], 
            [
                'name' => "Thể Thao",
                'mo_ta' => "Các việc liên quan đến Thể Thao",
            ], 
            [
                'name' => "Khoa Học",
                'mo_ta' => "Các việc liên quan đến Khoa Học",
            ],
        ];
        foreach ($data as  $value) {
            Tag::query()->create($value);
        }
    }
}
