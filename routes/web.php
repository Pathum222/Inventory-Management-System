<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/viewItem', 'ItemController@viewItems')->name('viewItem');
Route::get('/viewaddItem', 'ItemController@viewaddItems')->name('viewaddItem');
Route::get('/vieweditItem', 'ItemController@vieweditItems')->name('vieweditItem');
Route::post('/addItem', 'ItemController@addItems')->name('addItem');
Route::post('/editItem/{item_id}', 'ItemController@editItem')->name('edit_item');


Route::get('/viewCustomer', 'Customercontroller@viewCustomers')->name('viewCustomer');
Route::get('/viewaddCustomer', 'Customercontroller@viewaddCustomers')->name('viewaddCustomer');
Route::get('/vieweditCustomer', 'Customercontroller@vieweditCustomers')->name('vieweditCustomer');
Route::post('/addCustomer', 'Customercontroller@addCustomer')->name('addCustomer');

