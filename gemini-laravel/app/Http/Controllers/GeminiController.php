<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini;

class GeminiController extends Controller
{
    // Exibe o formulário de perguntas
    public function index()
    {
        return view('ask.index');
    }

    // Processa a pergunta e exibe a resposta
    public function askQuestion(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
        ]);

        // Chama a API do Gemini AI com a pergunta
        $result = Gemini::geminiPro()->generateContent($request->input('question'));

        // Retorna a resposta
        $response = $result->text();

        // Retorna a view com a resposta
        return view('ask.index', ['response' => $response]);
    }
}
