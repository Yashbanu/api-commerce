<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Display Data 
Route::get('display/{id?}',[ProductController::class,"display"] );

//Insert Data
Route::post("add",[ProductController::class,"addProduct"] );

//Update Data
Route::put("update",[ProductController::class,"updateProduct"]);

//Search Data
Route::get("search/{id}",[ProductController::class,"searchProduct"]);

//Delete Data
Route::delete("delete/{id}",[ProductController::class,"deleteProduct"]);
