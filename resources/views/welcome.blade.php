<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>旅行の思い出</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: url('https://source.unsplash.com/1600x900/?travel,nature') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
        }
        .backdrop {
            background: rgba(0, 0, 0, 0.6);
            padding: 2rem;
            border-radius: 0.5rem;
            text-align: center;
        }
        .btn {
            transition: all 0.3s ease;
            padding: 0.75rem 1.5rem;
            border-radius: 0.375rem;
            font-weight: 600;
            margin: 0.5rem;
            display: inline-block;
        }
        .btn:hover {
            transform: translateY(-5px);
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        }
        .btn-login {
            background-color: #38bdf8;
            color: white;
        }
        .btn-register {
            background-color: #a3e635;
            color: white;
        }
        .btn-dashboard {
            background-color: #38bdf8;
            color: white;
        }
    </style>
</head>
<body class="antialiased">
    <div class="backdrop">
        <h1 class="text-5xl font-bold mb-8">Travelアプリへようこそ</h1>
        <p class="text-xl mb-8">旅行の思い出を記録して共有しましょう。</p>
        <div>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-dashboard">ダッシュボード</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-login">ログイン</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-register">新規登録</a>
                    @endif
                @endauth
            @endif
        </div>
    </div>
</body>
</html>
