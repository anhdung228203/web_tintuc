<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ChatboxController extends Controller
{
    //
    public function formchat($id){
        $author=User::query()->where('id',$id)->first();
        return view('client.chatbox.index',compact('author'));
    }
}
