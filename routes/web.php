<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;
use App\Http\Controllers\myappController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    //return view('welcome');
});

Route::get('/', [TodoListController::class, 'index']);
Route::post('/saveItem', [TodoListController::class, 'saveItem'])->name('saveItem');

Route::post('/markAsComplete/{id}', [TodoListController::class, 'markItem']);
*/

Route::get('/', [myappController::class, 'index']);

Route::get('/event', [myappController::class, 'myEvent']);

Route::get('/mycontact', [myappController::class, 'myCont']);

Route::get('/mycv', [myappController::class, 'myCV']);


Route::post('/sendsms', [myappController::class, 'send'])->name('sendsms.send');