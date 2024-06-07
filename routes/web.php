<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get("/",[Controllers\AdminController::class,"index"]);

Route::get("/product",[Controllers\AdminController::class,"product"])->name("admin.product");

Route::get("/pelanggan",[Controllers\AdminController::class,"pelanggan"])->name("admin.pelanggan");

Route::get("/penjualan",[Controllers\AdminController::class,"penjualan"])->name("admin.penjualan");

Route::get("/createpelanggan",[Controllers\AdminController::class,"createpelanggan"]);

Route::get("/createpenjualan",[Controllers\AdminController::class,"createpenjualan"]);

Route::get("/createproduct",[Controllers\AdminController::class,"createproduct"]);

Route::get("/viewpenjualan",[Controllers\AdminController::class,"viewpenjualan"]);

Route::get("/viewpelanggan",[Controllers\AdminController::class,"viewpelanggan"]);

Route::get("/viewproduct",[Controllers\AdminController::class,"viewproduct"]);
Route::post("/storeproduct",[Controllers\AdminController::class,"storeproduct"])->name("admin.storeproduct");;
Route::post("/storepenjualan",[Controllers\AdminController::class,"storepenjualan"])->name("admin.storepenjualan");;
Route::post("/storepelanggan",[Controllers\AdminController::class,"storepelanggan"])->name("admin.storepelanggan");

Route::get("/editproduct",[Controllers\AdminController::class,"editproduct"])->name("admin.editproduct");;
Route::get("/editpenjualan",[Controllers\AdminController::class,"editpenjualan"])->name("admin.editpenjualan");;
Route::get("/editpelanggan",[Controllers\AdminController::class,"editpelanggan"])->name("admin.editpelanggan");;

Route::put("/updateproduct",[Controllers\AdminController::class,"updateproduct"])->name("admin.updateproduct");;
Route::put("/updatepenjualan",[Controllers\AdminController::class,"updatepenjualan"])->name("admin.updatepenjualan");;
Route::put("/editpelanggan/updatepelanggan",[Controllers\AdminController::class,"updatepelanggan"])->name("admin.updatepelanggan");;

Route::delete("/deleteproduct",[Controllers\AdminController::class,"deleteproduct"])->name("admin.deleteproduct");
Route::delete("/deletepenjualan",[Controllers\AdminController::class,"deletepenjualan"])->name("admin.deletepenjualan");;
Route::delete("/deletepelanggan",[Controllers\AdminController::class,"deletepelanggan"])->name("admin.deletepelanggan");;

// Route::post("/storepelanggan",[Controllers\AdminController::class,"storepelanggan"]);
// Route::resource('/admin',Controllers\AdminController::class);

Route::get('/sesi',[SessionController::class, 'index']);
Route::POST('/sesi/login',[SessionController::class, 'login']);

Route:: get('/sesi/logout', [SessionController::class, 'logout']);

Route:: get('/sesi/register', [SessionController::class, 'register']);
Route:: post('/sesi/create-pelanggan', [SessionController::class, 'create-pelanggan']);

Route::get('/login', function () {
    return view('login');
});