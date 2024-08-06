<?php

namespace App\Http\Controllers;

use App\Models\Admin\Post;
use App\Models\Admin\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller

{
   
    public function index()
    {
    }

    public function login(Request $request)
    {

        //    

        $check = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        if ($check) {

            return redirect()->route('trangchu');
        } else {

            return redirect()->route('formlogin')->with('message', 'Email hoặc mật khẩu không đúng');
        }
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'sdt' => 'required',
            'email' => "required|email",
            'password' => "required|min:5"

        ], [
            'name.required' => 'tên bắt buộc phải nhập',
            'sdt.required' => 'số điện thoại bắt buộc phải nhập',
            'email.required' => 'bắt buộc phải nhập',
            'email.email' => 'email không đúng định dạng',
            'password.required' => 'bắt buộc phải nhập mật khẩu'
        ]);
        // dd($check);

        $url = "";
        if ($request->hasFile('avatar')) {

            $path = Storage::putFile('public/image', $request->avatar);

            $url = Storage::url($path);
        }
        User::query()->create([
            'name' => $request->name,
            'sdt' => $request->sdt,
            'email' => $request->email,
            'password' => $request->password,
            'avatar' => $url,
        ]);
        return redirect()->route('form-dang-ky')->with('message', 'đăng kí thành công');
    }
    public function create()
    {
       


        return view('client.auth.login');
    }
    public function formdangky()
    {
        


        return view('client.auth.dangky');
    }
    public function forgetpassword(){
        return view('client.auth.forgetpassword');

    }
    public function myacount()
    {
        // $posts_new = Post::with('tag')->where('tin_moi', 'like', 'on')->get();
        // $menus = Tag::with('posts')->get();
        // $tags = Tag::withCount('posts')->get();

        if (Auth::user()) {
            $posts_new = Post::with('tag')->where('tin_moi', 'like', 'on')->get();
            $menus = Tag::with('posts')->get();
            $tags = Tag::withCount('posts')->get();
            $user = Auth::user();
            return view('client.auth.myacconut', compact("posts_new", "menus", "tags", "user"));
        } else {
            return redirect()->route('trangchu');
        }
    }
    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
            return redirect()->route('trangchu');
        }
    }
    public function changepassword(Request $request)
    {
        if (Auth::check()) {
            $request->validate(
                // 'name' => $request->name,

                // 'sdt' => $request->sdt,
                // 'password' => $request->changepassword,
                [
                    'name' => 'required',
                    'sdt' => 'required',
                    'changepassword' => 'required'
                ],
                [
                    'name.required' => 'tên bắt buộc phải nhập',
                    'sdt.required' => 'sdt bắt buộc phải nhập',
                    'changepassword.required' => 'mật khẩu bắt buộc phải nhập',

                ]
            );
            User::query()->where('id',Auth::user()->id)->update(
                [
                    'name' => $request->input('name'),
                    'sdt' => $request->input('sdt'),
                    'password' => Hash::make($request->input('changepassword'))
                ]
            );
            return back()->with('message','thay đổi mật khẩu thành công');
        }
    }
}
