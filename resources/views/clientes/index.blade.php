<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h1>Lista de Clientes</h1>
    @if (session('success'))
    <div style="color: green; margin-top: 10px;">
        {{ session('success') }}
    </div>
    @endif


    @if($clientes->isEmpty())
        <p>Nenhum cliente cadastrado.</p>
    @else
        <table>
            <th>Ações</th>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data de Criação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->id }}</td>
                        <td>{{ $cliente->nome }}</td>
                        <td>{{ $cliente->email }}</td>
                        <td>{{ $cliente->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                    <td>
    <a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a> |
    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este cliente?')">Excluir</button>
    </form>
</td>

                @endforeach
            </tbody>
        </table>
    @endif

    <div style="margin-top: 30px;">
    <a href="{{ route('dashboard') }}"
       style="display: inline-block; margin-right: 15px; padding: 10px 20px; background-color: #6c757d; color: white; text-decoration: none; border-radius: 5px;">
        ← Voltar ao Início
    </a>

    <a href="{{ route('clientes.create') }}"
       style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px;">
        + Novo Cadastro
    </a>
    </div>

</body>
</html>
