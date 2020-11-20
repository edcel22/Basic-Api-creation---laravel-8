<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('sample', [PracticeController::class, 'testnew'] );
Route::get('test/{name?}', [PracticeController::class, 'test']);
Route::get('list/{id?}', [PracticeController::class, 'list']);
// Route::get('list/{id}', [DeviceController::class, 'item']);

/*
***Send data from frontend to backend
*/
Route::post('add', [ProductController::class, 'add']);

/*Update the data from db*/
Route::put('update', [ProductController::class, 'update']);

/*Search */
Route::get('search/{name}', [ProductController::class, 'search']);

/*Delete Method api*/
Route::get("delete/{id}", [ProductController::class, 'delete']);