<?php

use App\Http\Controllers\BitcoinController;
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

Route::view('/', 'welcome')->name('home');

Route::get('/', [BitcoinController::class, 'getCurrentBalance']);
//Route::get('/', [BitcoinController::class, 'listUnspent']);

Route::post('/createwallet', [BitcoinController::class, 'createWallet']);
Route::post('/generateblocks', [BitcoinController::class, 'generateBlocksToAddress']);
Route::post('sendtoaddress', [BitcoinController::class, 'sendToAddress']);
