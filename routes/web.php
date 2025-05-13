<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\UnidadeController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\ProfessorController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

 Route::view('aluno', 'alunos.aluno')
    ->middleware(['auth', 'verified'])
    ->name('aluno');


Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

Route::resource('alunos', AlunoController::class)
    ->only(['index','create', 'store', 'show', 'edit', 'update', 'destroy']);
Route::resource('professores', ProfessorController::class)
    ->only(['index','create', 'store', 'show', 'edit', 'update', 'destroy']);
Route::resource('unidades', UnidadeController::class)
    ->only(['index','create', 'store', 'show', 'edit', 'update', 'destroy']);
Route::resource('turmas', TurmaController::class)
    ->only(['index','create', 'store', 'show', 'edit', 'update', 'destroy']);
require __DIR__.'/auth.php';
