<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('clients/export', [ClientController::class, 'exportToCsv'])->name('clients.export');
    Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');  
    Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');  
    Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');  
    Route::get('/clients/{client}', [ClientController::class, 'show'])->name('clients.show');  
    Route::get('/clients/{client}/edit', [ClientController::class, 'edit'])->name('clients.edit'); 
    Route::put('/clients/{client}', [ClientController::class, 'update'])->name('clients.update');
    Route::delete('/clients/{client}', [ClientController::class, 'destroy'])->name('clients.destroy');
}); 

Route::post('import-csv', [ImportController::class, 'importCSV'])->name('import');

Route::get('/mycompany', function () {
    return view('mycompany');
})->middleware(['auth', 'verified'])->name('mycompany');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); 

require __DIR__.'/auth.php';
