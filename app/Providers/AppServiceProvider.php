<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Compartilha a variável $usuario em todas as views
        View::composer('*', function ($view) {
            $usuario = session('usuario_logado'); // pega o usuário da sessão
            $view->with('usuario', $usuario);
        });
    }
}
