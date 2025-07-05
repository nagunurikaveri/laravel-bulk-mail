<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\BulkEmailController;

Route::get('/bulk-email', [BulkEmailController::class, 'showForm']);
Route::post('/bulk-email/send', [BulkEmailController::class, 'sendEmails'])->name('bulk.email.send');

