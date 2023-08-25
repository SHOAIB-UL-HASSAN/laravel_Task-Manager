<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
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
    return "welcome";
});
Route::get('/Tasks',['TaskController'::class ,'index']);
//Route::get('/Tasks',['TaskController'::class,'singleUser']);
Route::post('/Tasks',['TaskController'::class ,'store']);
//Route::get('/Tasks/{task}',[ 'TaskController'::class,'show']);
Route::put('/Tasks/{id}', ['TaskController'::class,'update']);




require __DIR__.'/auth.php';
