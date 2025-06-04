@extends('layouts.app')

@section('content')
<h2 class="text-2xl font-bold mb-4">Editar Cliente</h2>

@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded mb-4">
        <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('clientes.update', $cliente->id) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')

    <div>
        <label class="block font-semibold">Nome:</label>
        <input type="text" name="nome" value="{{ old('nome', $cliente->nome) }}"
               class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
    </div>

    <div>
        <label class="block font-semibold">Email:</label>
        <input type="email" name="email" value="{{ old('email', $cliente->email) }}"
               class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
    </div>

    <div>
        <label class="block font-semibold">Endereço:</label>
        <input type="text" name="endereco" value="{{ old('endereco', $cliente->endereco) }}"
               class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
    </div>

    <div>
        <label class="block font-semibold">Telefone:</label>
        <input type="text" name="telefone" value="{{ old('telefone', $cliente->telefone) }}"
               class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
    </div>

    <div>
        <label class="block font-semibold">CPF/CNPJ:</label>
        <input type="text" name="cpf_cnpj" value="{{ old('cpf_cnpj', $cliente->cpf_cnpj) }}"
               class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
    </div>

   <div class="flex items-center gap-4 mt-6">
    <button type="submit"
            class="bg-blue-200 hover:bg-blue-300 text-blue-900 px-4 py-2 rounded border border-blue-400">
        Atualizar
    </button>

    <a href="{{ route('clientes.index') }}"
       class="bg-gray-200 hover:bg-gray-300 text-gray-900 px-4 py-2 rounded border border-gray-400 inline-block">
        Voltar à Lista de Clientes
    </a>
</div>


</form>
@endsection
