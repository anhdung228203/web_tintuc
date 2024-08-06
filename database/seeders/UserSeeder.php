<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [];
        for ($i = 1; $i < 13; $i++) {
            $data[] = [
                'name' => fake()->name(),
                'email' => fake()->email(),
                'password' => fake()->password(),
                'sdt' => "098765432" . $i,
                'avatar' => fake()->image()
            ];
        }
        User::query()->insert($data);
    }
}
