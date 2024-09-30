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


// Route::get('/home', function () {
//     return view('home');
// })->middleware(['auth', 'verified'])->name('home');

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('/home', [ClientController::class, 'dashboard'])->name('home.dashboard');
//     Route::get('/home', [ClientController::class, 'getClientData'])->name('home.client');

// })->name('home');

Route::get('/home', [ClientController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('home'); 

Route::get('/clients-data', [ClientController::class, 'getClientData'])
    ->middleware(['auth', 'verified']);

    // Route::get('/clients/new', [ClientController::class, 'showNewClients'])->name('clients.new');
    // Route::get('/clients/{id}', [ClientController::class, 'show'])->name('clients.show');
    // Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');

Route::middleware('auth')->group(function () {
    Route::get('clients/export', [ClientController::class, 'exportToCsv'])->name('clients.export');
    Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');  
    Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');  
    Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');  
    Route::get('/clients/{client}', [ClientController::class, 'show'])->name('clients.show');
    Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit'); 
    Route::post('/clients/{id}', [ClientController::class, 'update'])->name('clients.update');
    Route::delete('/clients/{client}', [ClientController::class, 'destroy'])->name('clients.destroy');
}); 

Route::post('import-csv', [ImportController::class, 'importCSV'])->name('import');

Route::post('/notes/store', [ClientController::class, 'storeNote'])
    ->name('clients.storeNote')
    ->middleware('auth'); // Ensure this matches your authentication setup
    
Route::put('/notes/{id}', [ClientController::class, 'updateNote'])->name('clients.updateNote'); 
Route::delete('/notes/{id}', [ClientController::class, 'deleteNote'])->name('clients.deleteNote');
Route::get('/notes/{id}', [ClientController::class, 'fetchNoteDetails']);


Route::get('/mycompany', function () {
    return view('mycompany');
})->middleware(['auth', 'verified'])->name('mycompany');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); 




require __DIR__.'/auth.php';
