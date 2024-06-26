<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ITInventoryController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\DesktopController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/it-inventory', [ITInventoryController::class, 'index'])->name('it-inventory');

Route::post('/add-link', [NavigationController::class, 'addLink'])->name('add-link');
Route::delete('/delete-link/{id}', [NavigationController::class, 'deleteLink'])->name('delete-link');

Route::get('/asset/{type}', [AssetController::class, 'show'])->name('asset-details');

Route::resource('desktops', DesktopController::class);
Route::resource('laptops', LaptopController::class);

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

Route::get('/admin/register', [AdminController::class, 'showRegistrationForm'])->name('admin.register');
Route::post('/admin/register', [AdminController::class, 'register'])->name('admin.register.store');

require __DIR__ . '/auth.php';
