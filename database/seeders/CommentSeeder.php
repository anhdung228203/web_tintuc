<?php

namespace Database\Seeders;

use App\Models\Admin\Comment;
use App\Models\Admin\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        $post=Post::with('user')->get();
//        $user=User::with('posts')->get();
// dd($user);
        $data=[];
        foreach ($post as $key => $item) {
            $data[]=[
                'post_id'=>$item->id,
                'user_id'=>$item->user->id,
               
                'mo_ta'=>fake()->text(200)
            ];   
        
        }
        Comment::query()->insert($data);
        
    }
}
