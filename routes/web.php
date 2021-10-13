<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controller\Customercontroller;
use App\Http\Controller\ItemController;

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
Route::get('/dashboard', function () {
    return view('dashboard')->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/viewItem', 'App\Http\Controllers\ItemController@viewItems')->name('viewItem');
Route::get('/viewaddItem', 'App\Http\Controllers\ItemController@viewaddItems')->name('viewaddItem');
Route::get('/vieweditItem/{item_id}', 'App\Http\Controllers\ItemController@vieweditItems')->name('vieweditItem');
Route::post('/addItem', 'App\Http\Controllers\ItemController@addItem')->name('addItem');
Route::post('/editItem/{item_id}', 'App\Http\Controllers\ItemController@editItem')->name('edit_item');
Route::get('/deleteItem/{item_id}', 'App\Http\Controllers\ItemController@deleteItem')->name('delete_item');


Route::get('/viewCustomer', 'App\Http\Controllers\Customercontroller@viewCustomers')->name('viewCustomer');
Route::get('/viewaddCustomer', 'App\Http\Controllers\Customercontroller@viewaddCustomers')->name('viewaddCustomer');
Route::get('/vieweditCustomer/{customer_id}', 'App\Http\Controllers\Customercontroller@vieweditCustomers')->name('vieweditCustomer');
Route::post('/addCustomer', 'App\Http\Controllers\Customercontroller@addCustomer')->name('addCustomer');
Route::post('/editCustomer/{customer_id}', 'App\Http\Controllers\Customercontroller@editCustomer')->name('edit_customer');
Route::get('/deleteCustomer/{customer_id}', 'App\Http\Controllers\Customercontroller@deleteCustomer')->name('delete_item');

