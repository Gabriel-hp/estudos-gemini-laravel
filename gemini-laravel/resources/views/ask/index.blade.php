<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça uma pergunta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Pergunte à IA</h1>
        
        <!-- Formulário de perguntas -->
        <form action="{{ route('ask.question') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="question" class="form-label">Faça sua pergunta:</label>
                <input type="text" name="question" class="form-control" id="question" placeholder="Digite sua pergunta aqui" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <!-- Exibe a resposta, se houver -->
        @if (isset($response))
            <div class="mt-4 p-3 bg-light">
                <h5>Resposta da IA:</h5>
                <p>{{ $response }}</p>
            </div>
        @endif

        <!-- Exibe erros de validação -->
        @if ($errors->any())
            <div class="alert alert-danger mt-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</body>
</html>
