<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class QLTKController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $user=User::query()->paginate(7);
        $user = User::query()->get();

        return view('admin.user.index', compact('user'));
    }






    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $user = User::query()->findOrFail($id);
        return view();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        if (isset($_GET['user_id'])) {

            $id = $_GET['user_id'];
            $role = $_GET['role'];
            // echo $id; die;
            User::query()->where('id', $id)->update([
                'role' => $role
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::query()->where('id',$id)->delete();
        return back()->with('message','xóa thành công');
    }
    
}
