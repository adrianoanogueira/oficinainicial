@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Lista de Veículos</h1>

@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

@if ($veiculos->isEmpty())
    <p class="text-gray-600">Nenhum veículo cadastrado.</p>
@else
    <div class="overflow-x-auto">
        <table class="w-full border-collapse bg-white shadow rounded">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="p-3 border">ID</th>
                    <th class="p-3 border">Placa</th>
                    <th class="p-3 border">Chassi</th>
                    <th class="p-3 border">Marca</th>
                    <th class="p-3 border">Modelo</th>
                    <th class="p-3 border">Ano</th>
                    <th class="p-3 border">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($veiculos as $veiculo)
                    <tr class="hover:bg-gray-50">
                        <td class="p-3 border">{{ $veiculo->id }}</td>
                        <td class="p-3 border">{{ $veiculo->placa }}</td>
                        <td class="p-3 border">{{ $veiculo->chassi }}</td>
                        <td class="p-3 border">{{ $veiculo->marca }}</td>
                        <td class="p-3 border">{{ $veiculo->modelo }}</td>
                        <td class="p-3 border">{{ $veiculo->ano }}</td>
                        <td class="p-3 border space-x-2">
                            <a href="{{ route('veiculos.edit', $veiculo->id) }}" class="text-blue-600 hover:underline">Editar</a>
                            <form action="{{ route('veiculos.destroy', $veiculo->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este veículo?')" class="text-red-600 hover:underline">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif

<div class="mt-6 space-x-4">
    <a href="{{ route('dashboard') }}" class="inline-block bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded">
        ← Voltar ao Início
    </a>
    <a href="{{ route('veiculos.create') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
        + Novo Cadastro
    </a>
</div>
@endsection
