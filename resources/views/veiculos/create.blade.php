@extends('layouts.app')

@section('content')
<h2 class="text-2xl font-bold mb-4">Cadastrar Veículo</h2>

@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded mb-4">
        <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('veiculos.store') }}" method="POST" class="space-y-4">
    @csrf
    <div><label class="block font-semibold">Placa:</label><input type="text" name="placa" class="w-full border rounded px-3 py-2"></div>
    <div><label class="block font-semibold">Chassi:</label><input type="text" name="chassi" class="w-full border rounded px-3 py-2"></div>
    <div><label class="block font-semibold">Cor:</label><input type="text" name="cor" class="w-full border rounded px-3 py-2"></div>
    <div><label class="block font-semibold">Marca:</label><input type="text" name="marca" class="w-full border rounded px-3 py-2"></div>
    <div><label class="block font-semibold">Modelo:</label><input type="text" name="modelo" class="w-full border rounded px-3 py-2"></div>
    <div><label class="block font-semibold">Ano:</label><input type="number" name="ano" class="w-full border rounded px-3 py-2"></div>

    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Salvar</button>
</form>

<a href="{{ route('dashboard') }}"
   class="inline-block mt-6 text-blue-600 hover:underline">
   ← Voltar para dashboard
</a>

@endsection
