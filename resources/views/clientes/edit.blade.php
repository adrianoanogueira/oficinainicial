@extends('layouts.app')

@section('content')
<h2>Editar Cliente</h2>

@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nome:</label><br>
    <input type="text" name="nome" value="{{ old('nome', $cliente->nome) }}"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="{{ old('email', $cliente->email) }}"><br><br>

    <label>Endereço:</label><br>
    <input type="text" name="endereco" value="{{ old('endereco', $cliente->endereco) }}"><br><br>

    <label>Telefone:</label><br>
    <input type="text" name="telefone" value="{{ old('telefone', $cliente->telefone) }}"><br><br>

    <label>CPF/CNPJ:</label><br>
    <input type="text" name="cpf_cnpj" value="{{ old('cpf_cnpj', $cliente->cpf_cnpj) }}"><br><br>

    <button type="submit">Atualizar</button>
</form>
<a href="{{ route('clientes.index') }}">
    <button type="button" style="padding: 10px 20px; background: gray; color: white; border: none; margin-top: 20px;">
        Voltar à Lista de Clientes
    </button>
</a>

@endsection
