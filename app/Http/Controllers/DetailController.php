<?php

namespace App\Http\Controllers;

use App\Models\Admin\Comment;
use App\Models\Admin\Post;
use App\Models\Admin\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{

   public function index($id, $slug)
   {

      $postdetail = Post::with('tag', 'user', 'comments')->findOrFail($id);

      $postdetail->views();
      $countcomment = Post::withCount('comments')->findOrFail($id);
      $postdefaut = Post::with('tag')->where([
         ['tag_id', $postdetail->tag_id],
         ['id', '<>', $id]
      ])->get();


      $tags = Tag::withCount('posts')->get();

      $comments = Comment::with('user', 'post', 'replies')->where('post_id', $id)->whereNull('parentcommentID')->orderBy('id', 'desc')->get();
      // dd($comments);
      return view('client.detail.detailPosts', compact(
         'postdetail',
         'tags',
         'postdefaut',

         'comments',
         'countcomment'
      ));
   }
   public function comment(Request $request)
   {

      if (Auth::check()) {
         $request->validate([
            'mo_ta' => 'required',
         ], [
            'mo_ta.required' => 'Bắt buộc phải nhập'
         ]);

         $post = Post::query()->findOrFail($request->input('post_id'));
         $user_id = Auth::user();
         $data = [
            'post_id' => $post->id,
            'user_id' => $user_id->id,

            'mo_ta' => $request->input('mo_ta')
         ];
         if (isset($_POST['reply'])) {
            $reply = $_POST['reply'];
            $data = [
               'post_id' => $post->id,
               'user_id' => $user_id->id,

               'mo_ta' => $request->input('mo_ta'),
               'parentcommentID' => $reply
            ];
            Comment::query()->create($data);
            return back();

            // dd($data);
         }
         // die;
         Comment::query()->create($data);
         return back();
      } else {
         $request->validate(
            [
               'name' => 'required',
               'email' => 'required|email',
               'mo_ta' => 'required',
            ],
            [
               'name.required' => 'tên bắt buộc phải nhập',
               'email.required' => 'email bắt buộc phải nhập',
               'mo_ta.required' => 'mô tả bắt buộc phải nhập',

            ]
         );
         $user = User::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'avatar' => "https://img.lovepik.com/free-png/20211130/lovepik-cartoon-avatar-png-image_401205251_wh1200.png",
            'sdt' => fake()->phoneNumber(),
            'password' => fake()->password(),


         ]);
         // dd()
         $post = Post::query()->findOrFail($request->input('post_id'));
         $data = [
            'post_id' => $post->id,
            'user_id' => $user->id,
            'mo_ta' => $request->input('mo_ta'),

         ];
         Comment::query()->create($data);
         return back();
      }
   }
}
