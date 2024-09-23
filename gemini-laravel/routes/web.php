<?php
use Illuminate\Support\Facades\Route;

// Rota para exibir o formulário (método 'create' no controller)
Route::get("/", "App\Http\Controllers\GeminiImageController@create")->name("gemini-image-create");

// Rota para processar a submissão do formulário (método 'store' no controller)
Route::post("/gemini-image", "App\Http\Controllers\GeminiImageController@store")->name("gemini-image-store");
