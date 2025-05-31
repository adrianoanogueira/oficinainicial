<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>@yield('title')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
  <div class="sidebar bg-blue-800 text-white">
    <!-- Conteúdo do menu lateral -->
  </div>
  
  <div class="topbar bg-white shadow">
    <!-- Barra superior -->
  </div>
  
  <main class="main-content p-6">
    @yield('content')
  </main>
</body>
</html>