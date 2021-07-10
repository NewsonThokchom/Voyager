<?php

use App\Http\Controllers\PharmaProducts;
use App\Http\Controllers\PharmaProductsController;
use App\Models\AboutUs;
use App\Models\PharmaProduct;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
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

Route::get('/', [PharmaProductsController::class, 'index']);
// Route::get('/user', [UserController::class, 'index']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
