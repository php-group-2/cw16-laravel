<?php

use App\Http\Controllers\BookController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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

Route::get('books/delete', [BookController::class, 'delete']);

Route::put('books/{book}/restore', [BookController::class, 'restore']);

Route::delete('books/{book}/force', [BookController::class, 'forceDestroy']);

Route::resource('books', BookController::class)
    ->missing(function (Request $request) {
        return Redirect::route('books.index');
    });

Route::get('/', function () {
    return view('welcome');
});
