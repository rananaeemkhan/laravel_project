<?php
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// homepage
Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('newtable', [UserController::class, 'index']);

Route::get('create_record', [UserController::class, 'create']);

Route::post('user_store', [UserController::class, 'store']);

Route::get('user_show-{id}', [UserController::class, 'show']);

Route::get('user_edit-{id}', [UserController::class, 'edit']);

Route::put('user_update-{id}', [UserController::class, 'update']);

Route::get('user_delete-{id}', [UserController::class, 'destory']);
