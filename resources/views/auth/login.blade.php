<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <style>
        body, html {
            margin: 0;
            height: 100vh;
            overflow: hidden;
            font-family: Arial, sans-serif;
            position: relative;
        }

        /* Fundo degradê com cores escuras e azul e movimento circular centrado */
        .bg-animation {
            position: fixed;
            top: 0; left: 0;
            width: 150vw;
            height: 150vh;
            background: linear-gradient(45deg,
                #001219,
                #002f4b,
                #0a3d62,
                #121212,
                #001219
            );
            background-size: 350% 350%;
            animation: circularMove 45s linear infinite;
            z-index: -2;
        }

        /* Camada de blur */
        .bg-blur {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            z-index: -1;
        }

        /* Caixa de login */
        .login-box {
            position: relative;
            z-index: 1;
            width: 350px;
            margin: auto;
            top: 50%;
            transform: translateY(-50%);
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.25);
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px;
            margin: 8px 0 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #0066cc;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #005bb5;
        }

        .error {
            color: red;
            margin-bottom: 12px;
            font-weight: bold;
        }

        /* Animação circular mais realista */
        @keyframes circularMove {
            0% {
                background-position: 50% 45%;
            }
            12.5% {
                background-position: 65% 50%;
            }
            25% {
                background-position: 50% 55%;
            }
            37.5% {
                background-position: 35% 50%;
            }
            50% {
                background-position: 50% 45%;
            }
            62.5% {
                background-position: 65% 50%;
            }
            75% {
                background-position: 50% 55%;
            }
            87.5% {
                background-position: 35% 50%;
            }
            100% {
                background-position: 50% 45%;
            }
        }
    </style>
</head>
<body>

    <div class="bg-animation"></div>
    <div class="bg-blur"></div>

    <div class="login-box">
        <h2>Login</h2>

        @if(session('error'))
            <div class="error">{{ session('error') }}</div>
        @endif

        <form method="POST" action="/login">
            @csrf
            <label for="username">Usuário</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Senha</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Entrar</button>
        </form>
    </div>

</body>
</html>
