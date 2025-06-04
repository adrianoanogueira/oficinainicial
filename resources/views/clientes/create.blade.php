@extends('layouts.app')

@section('content')
<h2 class="text-2xl font-semibold mb-4">Cadastrar Cliente</h2>

@if ($errors->any())
    <div class="text-red-600 mb-4">
        <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('clientes.store') }}" method="POST" class="space-y-4">
    @csrf

    <div>
        <label class="block font-medium">Nome:</label>
        <input type="text" name="nome" value="{{ old('nome') }}" class="w-full border border-gray-300 rounded px-3 py-2">
    </div>

    <div>
        <label class="block font-medium">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" class="w-full border border-gray-300 rounded px-3 py-2">
    </div>

    <div>
        <label class="block font-medium">Endereço:</label>
        <input type="text" name="endereco" value="{{ old('endereco') }}" class="w-full border border-gray-300 rounded px-3 py-2">
    </div>

    <div>
        <label class="block font-medium">Telefone:</label>
        <input type="text" name="telefone" value="{{ old('telefone') }}" class="w-full border border-gray-300 rounded px-3 py-2">
    </div>

    <div>
        <label class="block font-medium">CPF/CNPJ:</label>
        <input type="text" name="cpf_cnpj" value="{{ old('cpf_cnpj') }}" class="w-full border border-gray-300 rounded px-3 py-2">
    </div>

    <button type="submit" 
    class="bg-blue-800 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded shadow-md transition-colors duration-300">
    Salvar
</button>

</form>

<a href="{{ route('dashboard') }}"
   class="inline-block mt-6 text-blue-600 hover:underline">
   ← Voltar para dashboard
</a>
@endsection
