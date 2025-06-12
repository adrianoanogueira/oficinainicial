@extends('layouts.app')

@section('content')
<h2 class="text-2xl font-bold mb-4">Editar Veículo</h2>

@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded mb-4">
        <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('veiculos.update', $veiculo->id) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')

    <div>
        <label class="block font-semibold">Placa:</label>
        <input type="text" name="placa" value="{{ old('placa', $veiculo->placa) }}"
               class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
    </div>

    <div>
        <label class="block font-semibold">Chassi:</label>
        <input type="text" name="chassi" value="{{ old('chassi', $veiculo->chassi) }}"
               class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
    </div>

    <div>
        <label class="block font-semibold">Cor:</label>
        <input type="text" name="cor" value="{{ old('cor', $veiculo->cor) }}"
               class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
    </div>

    <div>
        <label class="block font-semibold">Marca:</label>
        <input type="text" name="marca" value="{{ old('marca', $veiculo->marca) }}"
               class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
    </div>

    <div>
        <label class="block font-semibold">Modelo:</label>
        <input type="text" name="modelo" value="{{ old('modelo', $veiculo->modelo) }}"
               class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
    </div>

    <div>
        <label class="block font-semibold">Ano:</label>
        <input type="number" name="ano" value="{{ old('ano', $veiculo->ano) }}"
               class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
    </div>

    <div class="flex items-center gap-4 mt-6">
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
            Salvar
        </button>

        <a href="{{ route('veiculos.index') }}"
           class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded inline-block">
            Voltar à Lista de Veículos
        </a>
    </div>
</form>
@endsection
