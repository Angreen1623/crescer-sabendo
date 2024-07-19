<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script src=" {{ asset('js/script.js') }} "></script>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="relative min-h-screen flex items-center justify-center bg-cover bg-center" >
        <div class="bg-gray-100 p-12 rounded-3xl shadow-md w-auto border border-black relative z-10 mx-3 my-6">
            <div class="flex justify-center mb-6">
                <a href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo Crescer Sabendo" class="h-16">
                </a>
            </div>
            <h2 class="text-center text-4xl font-semibold mb-6">Seja Bem-Vindo!!</h2>
            <div class="flex justify-between mb-4">
                <button class="border border-gray-400 text-gray-600 w-auto p-2 rounded-xl flex items-center text-lg justify-center mr-2 hover:bg-gray-300">
                    <img src="{{ asset('images/google-logo.png') }}" alt="Google" class="h-9 ml-1 mr-2">
                    Faça login com Google
                </button>
                <button class="border border-gray-400 text-gray-600 w-auto p-2 rounded-xl flex items-center text-lg justify-center mr-2 hover:bg-gray-300">
                    <img src="{{ asset('images/apple-logo.png') }}" alt="Apple" class="h-7 mb-1 ml-1 mr-3">
                    Faça login com a Apple
                </button>
            </div>
            <div class="flex items-center mb-4">
                <hr class="flex-grow border-gray-400">
                <span class="mx-2 -translate-y-0.5">ou</span>
                <hr class="flex-grow border-gray-400">
            </div>
            <form action="/login" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full p-2 rounded-full border-customDarkBlue border-2 h-12 focus:outline-none ">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Senha</label>
                    <input type="password" id="password" name="password" class="w-full p-2 border-2 border-customDarkBlue rounded-full h-12 focus:outline-none ">
                </div>
                <div class="flex justify-between items-center mt-6 mb-4">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" class="mr-2"> Lembre-se de mim
                    </label>
                </div>
                <button type="submit" class="w-full bg-customDarkBlue text-white p-2 rounded-xl text-lg font-itim hover:bg-blue-800">Registrar-se</button>
            </form>
            <div class="text-start mt-6">
                Já tem conta? <a href="{{ url('/signin') }}" class="font-bold">Clique aqui</a>
            </div>
        </div>
        <img src="{{ asset('images/signInBack.png') }}" alt="Background" class="absolute inset-0 w-full h-full object-cover z-0">
    </div>
</body>
</html>
