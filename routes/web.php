<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Categories;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceOptionsController;
use App\Http\Controllers\AndressesController;
use App\Http\Controllers\AppointmentsController;

Route::get('/', function () {
    $categories = Categories::all();
    return view('welcome', compact('categories'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'User_login'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //dashboard dos eletricistas
    Route::get('/dashboard/eletricista', function () {
        return view('eletricista');
    })
    ->middleware('Electrician_login')
    ->name('dashboard.eletricista');
    //Rota das categorias
    Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('service.show');
    //rota do service
    Route::get('/service/{slug}', [ServiceController::class, 'show'])->name('service_detail.show');
    //rota para ir para o local de cadastro de endereço
    Route::get('register/address/{id}', [ServiceOptionsController::class, 'redirect'])->name('address.join');
    //rota do cadastro de endereço
    Route::post('register/address/{id}', [AndressesController::class, 'store'])->name('address.store');
    //rota para entrar nos agendamentos
    Route::get('agendamento/{id}', [AppointmentsController::class, 'create'])->name('agendamento');
    //rota para salvar o agendamento
    Route::post('agendamento/salvar/{id}', [AppointmentsController::class, 'store'])->name('agendamento.save');
});

require __DIR__ . '/auth.php';
