<?php

use App\Http\Controllers\Admin\ChatboxController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PDController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\QLTKController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\AuthorProfileController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\Mails\SendMailUser;
use App\Http\Controllers\TrangChuController;
use App\Http\Controllers\UserController;
use App\Models\Admin\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TrangChuController::class, 'index'])->name('trangchu');
Route::get('/find', [TrangChuController::class, 'find'])->name('find');
Route::get('tag/{id}', [TrangChuController::class, 'tag'])->name('tag');

Route::get('form-dang-ky', [UserController::class, 'formdangky'])->name('form-dang-ky');
Route::post('dang-ky', [UserController::class, 'store'])->name('dang-ky');

Route::post('login', [UserController::class, 'login'])->name('login');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
Route::post('changpassword', [UserController::class, 'changepassword'])->name('changpassword');


Route::get('my-acount', [UserController::class, 'myacount'])->name('myacount');


Route::get('formlogin', [UserController::class, 'create'])->name('formlogin');
Route::get('forgetpassword', [UserController::class, 'forgetpassword'])->name('forgetpassword');
Route::post('sendEmail', [SendMailUser::class, 'sendEmail'])->name('sendEmail');


Route::get('profile/{id}', [AuthorProfileController::class, 'show'])->name('profile');



Route::get('detail/{id}/{slug}', [DetailController::class, 'index'])->name('detail');
Route::post('comment', [DetailController::class, 'comment'])->name('comment');
Route::get('showform')->name('showform');
// Route::get('admin', function () {
// });
Route::prefix('admin')->middleware('authadmin')
    ->as('admin.')
    ->group(function () {
        Route::get("/", [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('tag', TagController::class);
        Route::resource('post', PostController::class);
        Route::get('choxuly', [PostController::class, 'choxuly'])->name('post.choxuly');
        Route::get('refuse', [PostController::class, 'refuse'])->name('post.refuse');


        Route::get('user', [QLTKController::class, 'index'])->name('user');
        Route::get('user/update', [QLTKController::class, 'update']);
        Route::get('user/destroy/{id}', [QLTKController::class, 'destroy'])->name('user.destroy');
        Route::get('pd', [PDController::class, 'index'])->name('pd');
        Route::get('pd/update', [PDController::class, 'update']);
    });
    Route::get('chatbox/{id}',[ChatboxController::class,'formchat'])->name('chatbox');
    // Route::get('post/choxuly', [PostController::class, 'test'])->name('admin.post.cho_xu_ly');

