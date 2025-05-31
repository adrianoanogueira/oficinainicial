<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .menu-lateral {
            width: 200px;
            height: 100vh;
            background-color: #007bff;
            color: white;
            position: fixed;
            left: 0;
            top: 0;
            padding: 20px;
        }

        .menu-lateral ul {
            list-style: none;
            padding-left: 0;
        }

        .menu-lateral ul ul {
            padding-left: 15px;
        }

        .menu-lateral a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 5px 0;
        }

        .menu-lateral a:hover {
            text-decoration: underline;
        }

        .topbar {
            position: fixed;
            top: 0;
            left: 200px;
            height: 60px;
            width: calc(100% - 200px);
            background-color: #f5f5f5;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 0 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            z-index: 1000;
        }

        .user-menu {
            position: relative;
            cursor: pointer;
            color: #333;
            user-select: none;
        }

        .user-menu .arrow {
            margin-left: 5px;
            font-size: 12px;
        }

        .dropdown {
            position: absolute;
            right: 0;
            top: 100%;
            background-color: white;
            border: 1px solid #ccc;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: none;
            flex-direction: column;
            min-width: 150px;
            padding: 10px 0;
            z-index: 999;
        }

        .dropdown a,
        .dropdown form button {
            padding: 8px 20px;
            text-align: left;
            background: none;
            border: none;
            width: 100%;
            cursor: pointer;
            color: #333;
            font-size: 14px;
        }

        .dropdown a:hover,
        .dropdown form button:hover {
            background-color: #f0f0f0;
        }

        .conteudo {
            margin-left: 200px;
            margin-top: 60px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="menu-lateral">
        <h3>Menu</h3>
        <ul>
            <li><a href="#">Teste 1</a></li>
            <li><a href="#">Teste 2</a></li>
            <li>Clientes
                <ul>
                    <li><a href="{{ route('clientes.create') }}">Cadastro</a></li>
                    <li><a href="{{ route('clientes.index') }}">Consulta</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="topbar">
        <div class="user-menu" onclick="toggleDropdown()">
            <span class="username">{{ $usuario }}</span>
            <span class="arrow">▼</span>
            <div class="dropdown" id="dropdownMenu">
                <a href="#">Meu Perfil</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Sair</button>
                </form>
            </div>
        </div>
    </div>

    <div class="conteudo">
        <h1>Bem-vindo, {{ $usuario }}</h1>
        <p>Conteúdo do sistema aqui.</p>
    </div>

    <script>
        function toggleDropdown() {
            const menu = document.getElementById("dropdownMenu");
            if (menu.style.display === "flex") {
                menu.style.display = "none";
            } else {
                menu.style.display = "flex";
            }
        }

        window.addEventListener("click", function(e) {
            if (!e.target.closest(".user-menu")) {
                document.getElementById("dropdownMenu").style.display = "none";
            }
        });
    </script>
</body>
</html>
