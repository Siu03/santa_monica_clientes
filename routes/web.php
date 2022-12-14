<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TodoController;

use App\Exports\TodosExport;

use Maatwebsite\Excel\Facades\Excel;

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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/todos',[TodoController::class, 'index'])->middleware(['auth', 'verified'])->name('todos');

Route::get('/todos/export', function () {
    return Excel::download(new TodosExport, 'clientes_santa_monica.xlsx');
})->middleware(['auth', 'verified'])->name('todos/export');

require __DIR__.'/auth.php';
