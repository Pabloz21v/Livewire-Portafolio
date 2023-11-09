<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\CreateVaucher;
use App\Livewire\ListVaucher;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    Route::prefix('vaucher')->group(function () {
        Route::get('list', ListVaucher::class)->name('vaucher.list');
        Route::get('create', CreateVaucher::class)->name('vaucher.create');
        // Route::get('edit/{id}', CreateVaucher::class)->name('vaucher.edit');
        Route::get('edit/{user}', CreateVaucher::class)->name('vaucher.edit');
    });
});

require __DIR__ . '/auth.php';
