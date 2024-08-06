<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Tag;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Validator;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Tag::query()->get();
        return view('admin.tag.index', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create()
    {
        //
        return view('admin.Tag.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => "required",
            'mo_ta' => "required",
            'hinh_anh' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ], [
            "name.required" => "bắt buộc phải nhập tên",
            "mo_ta.required" => "bắt buộc phải nhập mô tả",
            "hinh_anh.required" => "bắt buộc phải nhập hình ảnh",

        ]);

        $path = Storage::put('public/image', $request->hinh_anh);

        $url = Storage::url($path);

        Tag::query()->create([
            'name' => $request->name,
            'mo_ta' => $request->mo_ta,
            'hinh_anh' => $url,

        ]);
        return redirect()->route('admin.tag.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = Tag::query()->find($id);
        // dd($data);
        return view('admin.Tag.show', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $request->validate([
            'name' => "required",
            'mo_ta' => "required",
            'hinh_anh' => 'image|mimes:jpeg,png,jpg,gif|max:2048',


        ], [
            "name.required" => "bắt buộc phải nhập tên",
            "mo_ta.required" => "bắt buộc phải nhập mô tả",


        ]);

        if (!$request->hasFile('hinh_anh')) {
            Tag::query()->where('id', $id)->update([
                'name' => $request->name,
                'mo_ta' => $request->mo_ta,
            ]);
        } else {
            $anhold = Tag::query()->where('id', $id)->first(['hinh_anh'])->hinh_anh;
            
            $anh = Storage::putFile('public/image', $request->hinh_anh);
            $url = Storage::url($anh);
           
            Tag::query()->where('id', $id)->update([
                'name' => $request->name,
                'mo_ta' => $request->mo_ta,
                'hinh_anh' => $url

            ]);

            if (!empty($anhold)) {
                $path = str_replace(Storage::url(''), 'public/', $anhold);
                Storage::delete($path);
            }
        }
        return redirect()->route('admin.tag.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $find = Tag::query()->where('id', $id)->first();
        $path = str_replace(Storage::url(''), 'public/', $find->hinh_anh);
        Storage::delete($path);
        Tag::query()->where('id', $id)->delete();
        return redirect()->route('admin.tag.index');
    }
}
