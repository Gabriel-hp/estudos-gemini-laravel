<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise de Imagem</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Análise de Imagem</h1>

        <!-- Exibe mensagem de sucesso ou erro -->
        @if(session('message'))
            <div class="alert alert-info text-center">
                {{ session('message') }}
            </div>
        @endif

        <!-- Formulário para enviar a URL da imagem -->
        <form action="{{ route('gemini-image-store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="image_url">URL da Imagem:</label>
                <input type="text" name="image_url" id="image_url" class="form-control" placeholder="Digite a URL da imagem" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Analisar Imagem</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
