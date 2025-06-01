@extends('layouts.app')

@section('content')
<h2>Cadastrar Cliente</h2>

@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('clientes.store') }}" method="POST">
    @csrf
    <label>Nome:</label><br>
    <input type="text" name="nome" value="{{ old('nome') }}"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="{{ old('email') }}"><br><br>

    <label>Endereço:</label><br>
    <input type="text" name="endereco" value="{{ old('endereco') }}"><br><br>

    <label>Telefone:</label><br>
    <input type="text" name="telefone" value="{{ old('telefone') }}"><br><br>

    <label>CPF/CNPJ:</label><br>
    <input type="text" name="cpf_cnpj" value="{{ old('cpf_cnpj') }}"><br><br>

    <button type="submit">Salvar</button>
</form>

<a href="{{ route('dashboard') }}" 
   style="display: inline-block; margin-top: 20px; padding: 10px 15px; background-color: #007bff; color: white; text-decoration: none; border-radius: 4px;">
   ← Voltar para dashboard
</a>

@endsection
