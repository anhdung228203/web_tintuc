<?php

namespace App\Http\Controllers;

use App\Models\Admin\Post;
use App\Models\Admin\Tag;
use Illuminate\Http\Request;

class TrangChuController extends Controller
{
    //
    public function index()
    {
        $tags = Tag::withCount('posts')->get();
        $posts = Post::with('tag', 'user','comments')->where('phe_duyet_id',2)->latest('id')->get();
        $post_tin = Post::query()->where([
            ['tin_noi_bat', 'like', 'on'],
            ['tin_moi', 'like', 'on']

        ])->get();
        $tagslimit=Tag::query()->latest('id')->paginate(2);
        
        return view('index', compact( 'posts', 'post_tin','tags','tagslimit'));
    }
    public function find()
    {
        
        if (isset($_GET['name'])) {
            $name = $_GET['name'];
            $findpost = Post::query()->with('tag', 'user')->where('tieu_de', 'like', "%$name%")->get();
            $ket_qua='kết quả bạn tìm được';
            return view('client.find.find', compact('findpost','ket_qua'));
        }
    }
    public function tag($id){
       $data=Post::with('tag')->where('tag_id',$id)->get();
       $ket_qua='Danh Mục';
        return view('client.tag.index',compact('data','ket_qua'));
    }
}
