<?php

use App\Http\Controllers\shortLinkController;
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
Route::get('/home', [shortLinkController::class, 'index']);
Route::get('/create', [shortLinkController::class, 'create']);
Route::get('/created', [shortLinkController::class, 'created']);
Route::put('/store', [shortLinkController::class, 'store']);

Route::get('/{any}', [shortLinkController::class, 'index']);
