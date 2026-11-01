<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Categories;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceOptionsController;
use App\Http\Controllers\AndressesController;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\DashboardController;

// Página Inicial (Pública)
Route::get('/', function () {
    $categories = Categories::all();
    return view('welcome', compact('categories'));
})->name('welcome');


// Bloco de Rotas Protegidas: OBRIGATÓRIO estar Logado E com E-mail Verificado
Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard do Cliente (Chama o método 'show' que você já possui)
    Route::get('/dashboard', [DashboardController::class, 'show'])
        ->middleware('User_login')
        ->name('dashboard');

    // Dashboard do Eletricista
    Route::get('/dashboard/eletricista', function () {
        return view('eletricista');
    })
        ->middleware('Electrician_login')
        ->name('dashboard.eletricista');

    // Perfil do Usuário
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Categorias e Serviços
    Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('service.show');
    Route::get('/service/{slug}', [ServiceController::class, 'show'])->name('service_detail.show');

    // Endereços
    Route::get('register/address/{id}', [ServiceOptionsController::class, 'redirect'])->name('address.join');
    Route::post('register/address/{id}', [AndressesController::class, 'store'])->name('address.store');

    // Agendamentos
    Route::get('agendamento/{id}', [AppointmentsController::class, 'create'])->name('agendamento');
    Route::post('agendamento/salvar/{id}', [AppointmentsController::class, 'store'])->name('agendamento.save');
});

require __DIR__ . '/auth.php';
