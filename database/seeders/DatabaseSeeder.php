<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\admin\Decentralization;
use App\Models\admin\PheDuyet;
use App\Models\Admin\Post;
use App\Models\Admin\Tag;
use Illuminate\Database\Seeder;
use Nette\Utils\Random;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Decentralization::query()->create([
            'chuc_vu'=>'user',
        ]);
        Decentralization::query()->create([
            'chuc_vu'=>'tác giả',
        ]);
        Decentralization::query()->create([
            'chuc_vu'=>'admin',
        ]);
        PheDuyet::query()->create([
            'ten'=>'chờ xử lý'
          

        ]);
        PheDuyet::query()->create([
            'ten'=>'đã duyệt bài'
          

        ]);
        Post::query()->create([
        'tag_id'=>rand(1,5),
        'user_id'=>rand(1,2),
        'phe_duyet_id'=>1,
        'tieu_de'=>'Đây là bằng chứng cho thấy các chiến lược động lực có hiệu quả',
        'mo_ta_ngan'=>Str::random(20),
        'mo_ta'=>Str::random(200),
        'luot_xem'=>0,
        'anh_dai_dien'=>"https://webredox.net/demo/wp/gmag/wp-content/uploads/2022/06/55.jpg",
        
        'is_show_home'=>1,
        ]);
    }
}
