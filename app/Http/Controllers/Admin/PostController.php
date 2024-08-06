<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Post;
use App\Models\Admin\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use function Laravel\Prompts\alert;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::join('tags', 'posts.tag_id', 'tags.id')->select('tags.name', 'posts.*')->get();
        // Post::query()->latest()
        if (Auth::user()->role == 2) {
            $data = Post::join('tags', 'posts.tag_id', 'tags.id')->select('tags.name', 'posts.*')->where([
                [
                    'user_id', Auth::id()
                ],
                [
                    'phe_duyet_id', 2
                ]
            ])->get();
            // dd($data);

        }
        if (Auth::user()->role == 3) {
            $data = Post::join('tags', 'posts.tag_id', 'tags.id')->select('tags.name', 'posts.*')->where('phe_duyet_id', 2)->get();
        }
        // dd($data);
        return view('admin.post.index', compact('data'));
        // dd($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $danhmuc = Tag::query()->get();
        return view('admin.post.create', compact('danhmuc'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tieu_de' => 'required',
            'anh_dai_dien' => 'required',
            'tag_id' => 'required',
            'mo_ta' => 'required',
            'mo_ta_ngan' => 'required',


        ]);
        $url = '';
        if ($request->hasFile('anh_dai_dien')) {
            $path = Storage::putFile('public/image', $request->anh_dai_dien);
            $url = Storage::url($path);
        }
        // dd($request->has('is_show_home')?'on':'off');
        Post::query()->create([
            'tieu_de' => $request->input('tieu_de'),
            'anh_dai_dien' => $url,
            'tag_id' => $request->input('tag_id'),
            'mo_ta' => $request->input('mo_ta'),
            'mo_ta_ngan' => $request->input('mo_ta_ngan'),
            'tin_noi_bat' => $request->has('tin_noi_bat') ? 'on' : 'off',
            'tin_moi' => $request->has('tin_moi') ? 'on' : 'off',
            'is_show_home' => $request->has('is_show_home') ? 'on' : 'off',
            'user_id' => Auth::id(),
            'phe_duyet_id' => 1,
        ]);
        return redirect()->route('admin.post.index');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $danhmuc = Tag::query()->get();
        $post = Post::query()->findOrFail($id);
        return view('admin.post.edt', compact('danhmuc', 'post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $post = Post::query()->findOrFail($id);
        // dd($request->all());
        $request->validate([
            'tieu_de' => 'required',

            'tag_id' => 'required',
            'mo_ta' => 'required',
            'mo_ta_ngan' => 'required',


        ]);

        if ($request->hasFile('anh_dai_dien')) {
            $path = Storage::putFile('public/image', $request->anh_dai_dien);
            $url = Storage::url($path);
            Post::query()->where('id', $id)->update([
                'tieu_de' => $request->input('tieu_de'),
                'anh_dai_dien' => $url,
                'tag_id' => $request->input('tag_id'),
                'mo_ta' => $request->input('mo_ta'),
                'mo_ta_ngan' => $request->input('mo_ta_ngan'),
                'tin_noi_bat' => $request->has('tin_noi_bat') ? 'on' : 'off',
                'tin_moi' => $request->has('tin_moi') ? 'on' : 'off',
                'is_show_home' => $request->has('is_show_home') ? 'on' : 'off',
                'user_id' => Auth::id(),
            ]);
            $path = str_replace(Storage::url(''), 'public/', $post->anh_dai_dien);
            Storage::delete($path);
            return redirect()->route('admin.post.index');
        } else {

            Post::query()->where('id', $id)->update([
                'tieu_de' => $request->input('tieu_de'),
                'anh_dai_dien' =>  $post->anh_dai_dien,
                'tag_id' => $request->input('tag_id'),
                'mo_ta' => $request->input('mo_ta'),
                'mo_ta_ngan' => $request->input('mo_ta_ngan'),
                'tin_noi_bat' => $request->has('tin_noi_bat') ? 'on' : 'off',
                'tin_moi' => $request->has('tin_moi') ? 'on' : 'off',
                'is_show_home' => $request->has('is_show_home') ? 'on' : 'off',
                'user_id' => Auth::id(),
            ]);
            return redirect()->route('admin.post.index');
        }

        // if (!empty($post->anh_dai_dien)) {
        //     $path = str_replace(Storage::url(''), 'public/', $post->anh_dai_dien);
        //     Storage::delete($path);
        // }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $post = Post::query()->findOrFail($id);
        if (!empty($post->anh_dai_dien)) {
            $path = str_replace(Storage::url(''), 'public/', $post->anh_dai_dien);
            Storage::delete($path);
        }
        Post::query()->where('id', $id)->delete();
        return back()->with('message', 'xóa thành công');
    }
    public function choxuly()
    {

        $data = Post::query()->where([
            [
                'phe_duyet_id', 1
            ],
            [
                'user_id', AUth::id()
            ]
        ])->get();
        // dd($data);
        return view('admin.post.cho_xu_ly', compact('data'));
    }
    public function refuse()
    {
        $data = Post::query()->where([
            [
                'phe_duyet_id', 3
            ],
            [
                'user_id', AUth::id()
            ]
        ])->get();
        // dd($data);
        return view('admin.post.refuse', compact('data'));
    }
}
