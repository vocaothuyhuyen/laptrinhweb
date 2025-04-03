<?php

use App\Http\Controllers\EXEController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudUserController;

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

Route::get('dashboard', [CrudUserController::class, 'dashboard']);

Route::get('login', [CrudUserController::class, 'login'])->name('login');
Route::post('login', [CrudUserController::class, 'authUser'])->name('user.authUser');

Route::get('create', [CrudUserController::class, 'createUser'])->name('user.createUser');
Route::post('create', [CrudUserController::class, 'postUser'])->name('user.postUser');

Route::get('read', [CrudUserController::class, 'readUser'])->name('user.readUser');

Route::get('delete', [CrudUserController::class, 'deleteUser'])->name('user.deleteUser');

Route::get('update', [CrudUserController::class, 'updateUser'])->name('user.updateUser');
Route::post('update', [CrudUserController::class, 'postUpdateUser'])->name('user.postUpdateUser');

Route::get('list', [CrudUserController::class, 'listUser'])->name('user.list');

Route::get('signout', [CrudUserController::class, 'signOut'])->name('signout');

/*

Nhúng exe 1 từ đây


*/
Route::get('/', function () {
    return view('exe1/indexexe');
});
Route::get('exeindex', [EXEController::class, 'exeIndex'])->name('exe.index');
Route::get('exelogin', [EXEController::class, 'exeLogin'])->name('exe.login');

Route::get('exeregister', [EXEController::class, 'exeRegister'])->name('exe.register');
Route::post('exelist', [EXEController::class, 'exeList'])->name('exe.list');
Route::get('exeview', [EXEController::class, 'exeView'])->name('exe.view');
Route::get('exeupdate', [EXEController::class, 'exeUpdate'])->name('exe.update');
