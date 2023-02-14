<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\ItemController;

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

require __DIR__.'/auth.php';

//statische pagina's niet noodzakelijk in controller elkel als er logica aan verbonden is
Route::get('/', [App\Http\Controllers\homeController::class, 'home'])->name('home');

Route::get('shop',[App\Http\Controllers\shopController::class, 'shop'])->name('shop');

Route::get('purchases', function () {
    return view('content.purchases');
})->name('purchases');

//Route::get('saldo', function () {
//    return view('content.saldo');
// })->name('saldo');

// route naar userController voor gebruik van fucktie 'showSaldo'
Route::get('saldo',[App\Http\Controllers\userController::class, 'showSaldo'])->name('saldo');
// route naar userController voor gebruik van fucktie 'addSaldo'
Route::post('addSaldo',[App\Http\Controllers\userController::class, 'addSaldo']);

/////////////////////////////
//////// Admin Routes ///////
/////////////////////////////

Route::get('admin', function () {
    return view('admin.admin');
})->name('admin');

Route::get('addUser', function () {
    return view('admin.addUser');
})->name('addUser');

Route::get('addItem', function () {
    return view('admin.addItem');
})->name('addItem');

// Route::get('itemOverview', function () {
//     return view('admin.itemOverview');
// })->name('itemOverview');

Route::get('itemOverview',[ItemController::class, 'showItem'])->name('itemOverview');

// Route::get('userOverview', function () {
//     return view('admin.userOverview');
// })->name('userOverview');

Route::get('userOverview',[userController::class, 'showUser'])->name('userOverview');

Route::get('overview',[App\Http\Controllers\overviewController::class, 'overview'])->name('overview');

Route::post('addUser',[App\Http\Controllers\userController::class, 'addUser']);

Route::post('addItem',[App\Http\Controllers\addItemController::class, 'addItem']);

Route::post('deleteItem',[App\Http\Controllers\ItemController::class, 'deleteItem']);

Route::post('kopen',[App\Http\Controllers\kopenController::class, 'store']);
