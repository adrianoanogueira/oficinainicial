@extends('layouts.app')

@section('content')
    <div class="px-6 py-4">
        <h1 class="text-2xl font-bold mb-4">Bem-vindo, {{ $usuario }}</h1>
        <p class="text-gray-700">Conteúdo do sistema aqui.</p>
    </div>
@endsection
