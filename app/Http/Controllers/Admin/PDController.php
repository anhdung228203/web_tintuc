<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Post;
use Illuminate\Http\Request;

class PDController extends Controller
{
    //
    public function index()
    {
        $data = Post::with('user')->get();
        return view('admin.PD.index', compact('data'));
    }
    public function update()
    {
        $post_id = $_GET['post_id'];
        $phe_duyet_id = $_GET['phe_duyet'];
        Post::query()->where('id', $post_id)->update([
            'phe_duyet_id' => $phe_duyet_id
        ]);
    }
}
