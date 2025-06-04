@extends('layouts.app')

@section('content')
    <div class="max-w-xl mx-auto bg-gray-100 p-6 rounded-md shadow mt-6">
        <h1 class="text-2xl font-bold text-blue-600 mb-4">Perfil do Usuário</h1>

        <p class="text-gray-800"><strong>Usuário logado:</strong> {{ $usuario }}</p>

        <a href="{{ route('dashboard') }}" class="inline-block mt-4 text-blue-600 hover:underline">
            ← Voltar ao Dashboard
        </a>
    </div>
@endsection
