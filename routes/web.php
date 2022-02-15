<?php

use App\Http\Controllers\shortLinkController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

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



Route::get('/', function () {
    return redirect('/home');
});
Route::get('/home', [shortLinkController::class, 'index']); // main page
Route::get('/create', [shortLinkController::class, 'create']); // show create link form FIXME почему я через гет это сделал
Route::get('/created', [shortLinkController::class, 'created']); // show created link

Route::get('/register', [userController::class, 'index']); // show registration form
Route::post('/create', [userController::class, 'index']); // create user

Route::put('/store', [shortLinkController::class, 'store']); // to put created link in database

Route::get('/{url}', [shortLinkController::class, 'redirect']); // to redirect link // SHOULD ALWAYS BE THE LAST


