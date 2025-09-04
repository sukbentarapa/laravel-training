<?php

use App\Http\Controllers\GadgetController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HomeController;
use App\Models\Gadget;
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

Route::get('/index', function () {
    return view('index');
});

Route::get('/calc/{number}/{to?}', function ($number, $to = 12) {
    $number = request()->input('number', $number);
    $to = request()->input('to', $to);
    return view('calculator.calc', compact('number', 'to'));
})->name('calculator');

/**
 * Hello view file
 * */
Route::get('/hello', function () {
    return view('hello', [
        'name' => 'Fizah & Fazlin',
        'listName' => ['Fizah', 'Fazlin', 'Fiqah'],
        'status' => 'fail'
    ]);
});

Route::get('/contacts', function (){
    return "<h1>All Contacts. Apa sahaja return semua</h1>";
});

Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/history', [HomeController::class, 'history'])->name('history');

/**
 * Ini nak pakai controller
 */
Route::get('/salam', [HelloController::class, 'index'])->name('salam.index');


// buat route dulu
Route::get('/gadgets', function(){
    return view('home.gadgets',[
        'total' => Gadget::count(),
        'active' => Gadget::where('status', 1)->count(),
        'passive' => Gadget::where('status', 0)->count(),
    ]);
});

Route::get('/gadgets/view', [GadgetController::class, 'view'])->name('gadgets.view');




