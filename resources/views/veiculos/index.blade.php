@extends('layouts.app')

@section('content')
<h2 class="text-2xl font-bold mb-4">Consulta de Veículos</h2>

@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<table class="min-w-full bg-white border">
    <thead class="bg-gray-100">
        <tr>
            <th class="py-2 px-4 border">Placa</th>
            <th class="py-2 px-4 border">Marca</th>
            <th class="py-2 px-4 border">Modelo</th>
            <th class="py-2 px-4 border">Ano</th>
            <th class="py-2 px-4 border">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($veiculos as $veiculo)
            <tr class="text-center">
                <td class="py-2 px-4 border">{{ $veiculo->placa }}</td>
                <td class="py-2 px-4 border">{{ $veiculo->marca }}</td>
                <td class="py-2 px-4 border">{{ $veiculo->modelo }}</td>
                <td class="py-2 px-4 border">{{ $veiculo->ano }}</td>
                <td class="py-2 px-4 border">
                    <a href="{{ route('veiculos.edit', $veiculo->id) }}" class="text-blue-600 hover:underline">Editar</a>
                    <form action="{{ route('veiculos.destroy', $veiculo->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline ml-2">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
