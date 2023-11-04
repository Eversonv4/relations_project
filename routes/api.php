<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get("/users", [UserController::class, "index"]);
Route::post("/users", [UserController::class, "create"]);
Route::get("/users/{id}", [UserController::class, "findOne"]);

Route::get("/addresses", [AddressController::class, "index"]);
Route::post("/addresses", [AddressController::class, "create"]);
Route::get("/addresses/{id}", [AddressController::class, "index"]);

Route::get("/invoices", [InvoiceController::class, "index"]);
Route::post("/invoices", [InvoiceController::class, "create"]);
Route::get("/invoices/{id}", [InvoiceController::class, "findOne"]);