<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeminiController;

Route::get('/ask', [GeminiController::class, 'index'])->name('ask.index');
Route::post('/ask', [GeminiController::class, 'askQuestion'])->name('ask.question');
