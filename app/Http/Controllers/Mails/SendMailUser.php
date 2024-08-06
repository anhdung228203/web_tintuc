<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Mail\SampleMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class SendMailUser extends Controller
{
    //
    public function sendEmail(Request $request)
    {
        $request->validate([
            'email' => 'required'
        ]);

        $user = User::query()->where('email', $request->email)->first();

        if ($user) {
            $passnew = Str::random(10);
            $details = [
                'title' => "Chào $user->name chúng tôi cung cấp lại mật khẩu cho bạn.",
                'body' => "mật khẩu:$passnew"
            ];
            User::query()->where('id', $user->id)->update([
                'password' => Hash::make($passnew)
            ]);


            Mail::to("$user->email")->send(new SampleMail($details));
            return back()->with('message', 'Mật khẩu đã được gửi đến email của bạn');
        } else {
            return back()->with('message', 'email bạn nhập không đúng');
        }


        // return "Email Sent!";
    }
}
