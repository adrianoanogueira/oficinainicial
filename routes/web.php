<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Artisan;

// Rota de login (POST)
Route::post('/login', function (Request $request) {
    $username = $request->input('username');
    $password = $request->input('password');

    if ($username === 'adriano' && $password === '123') {
        session(['usuario_logado' => $username]);
        return redirect()->route('dashboard');
    } else {
        return redirect('/login')->with('error', 'Usuário ou senha inválidos');
    }
});

// Rota para logout (POST)
Route::post('/logout', function () {
    session()->forget('usuario_logado');
    return redirect()->route('login');
})->name('logout');

// Rota principal
Route::get('/', function () {
    return view('welcome');
});

// Rota de login (GET)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Rota do dashboard (GET) - corrigida com variável $usuario
Route::get('/dashboard', function () {
    if (!session()->has('usuario_logado')) {
        return redirect('/login');
    }

    $usuario = session('usuario_logado');
    return view('dashboard', compact('usuario'));
})->name('dashboard');

// Rota do perfil (GET)
Route::get('/perfil', function () {
    $usuario = session('usuario_logado');

    if (!$usuario) {
        return redirect()->route('login');
    }

    return view('perfil', compact('usuario'));
})->name('perfil');

// Rotas para clientes
Route::resource('clientes', ClienteController::class);

// Rota para limpar cache (dev)
Route::get('/dev/clear-cache', function () {
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');

    return 'Caches limpos!';
});
