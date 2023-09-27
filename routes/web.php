<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
Route::get('usdemo',function(){
    $user = new User();
    $user->name = 'abderahamn';
    $user->email = 'electronicabdo5@gmail.com';
    $user->password = Hash::make('12345678');
    $user->save();
    return $user;
});
Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'index'])->name('admin.index');
    Route::resource('users',UserController::class);
    Route::resource('cards',CardController::class);
    Route::get('usersdata',[UserController::class,'users'])->name('users.users');
    Route::get('cardsdata',[CardController::class,'cards'])->name('cards.cards');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
