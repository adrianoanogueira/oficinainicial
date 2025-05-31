<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Perfil do Usuário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            background-color: #f9f9f9;
        }
        h1 {
            color: #007bff;
        }
        a {
            text-decoration: none;
            color: #007bff;
            margin-top: 15px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Perfil do Usuário</h1>

        <p><strong>Usuário logado:</strong> {{ $usuario }}</p>

        <a href="{{ route('dashboard') }}">← Voltar ao Dashboard</a>
    </div>
</body>
</html>
