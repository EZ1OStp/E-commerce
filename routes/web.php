<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProduitController;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('user', UserController::class);
Route::resource('produit', ProduitController::class);



// Les routes de gestion du panier
Route::get('panier', "PanierController@show")->name('panier.show');
Route::post('panier/add/{product}', "PanierController@add")->name('panier.add');
Route::get('panier/remove/{product}', "PanierController@remove")->name('panier.remove');
Route::get('panier/empty', "PanierController@empty")->name('panier.empty');


require __DIR__.'/auth.php';
