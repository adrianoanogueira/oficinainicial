<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Sistema')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">

  <!-- Sidebar fixa à esquerda -->
  <div class="sidebar bg-blue-800 text-white fixed h-full w-52 p-4">
    <h3 class="text-xl font-bold mb-4">Menu</h3>
    <ul class="space-y-2">
      <li><a href="#" class="block hover:underline">Teste 1</a></li>
      <li><a href="#" class="block hover:underline">Teste 2</a></li>
      <li>
  <span class="block">Veículos</span>
  <ul class="pl-4 text-sm space-y-1">
    <li><a href="{{ route('veiculos.create') }}" class="hover:underline">Cadastro</a></li>
    <li><a href="{{ route('veiculos.index') }}" class="hover:underline">Consulta</a></li>
  </ul>
</li>

      <li>
        <span class="block">Clientes</span>
        <ul class="pl-4 text-sm space-y-1">
          <li><a href="{{ route('clientes.create') }}" class="hover:underline">Cadastro</a></li>
          <li><a href="{{ route('clientes.index') }}" class="hover:underline">Consulta</a></li>
        </ul>
      </li>
    </ul>
  </div>

  <!-- Topbar fixa no topo -->
  <div class="topbar fixed top-0 left-52 right-0 bg-white shadow h-14 flex items-center justify-end px-6 z-50">
    <div class="relative">
      <div onclick="toggleDropdown()" class="cursor-pointer font-medium">
        {{ $usuario ?? 'Visitante' }} ▼
      </div>
      <div id="dropdownMenu" class="absolute right-0 mt-2 w-40 bg-white shadow border rounded hidden z-50">
        <a href="{{ route('perfil') }}" class="block px-4 py-2 hover:bg-gray-100">Meu Perfil</a>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-100">Sair</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Conteúdo principal -->
  <main class="main-content ml-52 mt-14 p-6">
    @yield('content')
  </main>

  <script>
    function toggleDropdown() {
      const menu = document.getElementById("dropdownMenu");
      menu.classList.toggle("hidden");
    }

    window.addEventListener("click", function(e) {
      if (!e.target.closest(".relative")) {
        document.getElementById("dropdownMenu").classList.add("hidden");
      }
    });
  </script>
</body>
</html>
