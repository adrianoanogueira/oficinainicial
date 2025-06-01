<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
<body>
    <div class="sidebar">
        <h3>Menu</h3>
        <ul>
            <li><a href="#">Teste 1</a></li>
            <li><a href="#">Teste 2</a></li>
            <li>Clientes
                <ul style="padding-left: 15px;">
                    <li><a href="{{ route('clientes.create') }}">Cadastro</a></li>
                    <li><a href="{{ route('clientes.index') }}">Consulta</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="topbar">
        <div class="user-menu" onclick="toggleDropdown()" style="position: relative; cursor: pointer;">
            <span class="username">{{ $usuario }}</span>
            <span class="arrow">▼</span>
            <div class="dropdown" id="dropdownMenu" style="display: none; position: absolute; right: 0; top: 100%; background: white; border: 1px solid #ccc; box-shadow: 0 2px 4px rgba(0,0,0,0.1); z-index: 999;">
                <a href="{{ route('perfil') }}" style="display:block; padding:8px 20px;">Meu Perfil</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" style="display:block; padding:8px 20px; background:none; border:none; cursor:pointer;">Sair</button>
                </form>
            </div>
        </div>
    </div>

    <div class="main-content">
        <h1>Bem-vindo, {{ $usuario }}</h1>
        <p>Conteúdo do sistema aqui.</p>
    </div>

    <script>
        function toggleDropdown() {
            const menu = document.getElementById("dropdownMenu");
            menu.style.display = (menu.style.display === "block") ? "none" : "block";
        }

        window.addEventListener("click", function(e) {
            if (!e.target.closest(".user-menu")) {
                document.getElementById("dropdownMenu").style.display = "none";
            }
        });
    </script>
</body>
</html>
