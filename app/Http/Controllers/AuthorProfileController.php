<?php

namespace App\Http\Controllers;

use App\Models\Admin\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AuthorProfileController extends Controller
{
    //
    public function show($id){
        $author=User::with('posts')->findOrFail($id);
        // dd($countComment);
        // dd($author);
        return view('client.profile.index',compact('author'));
    }
}
