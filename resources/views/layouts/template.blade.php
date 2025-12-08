<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Dashboard RedePet</title>
@vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-800">

<div class="flex min-h-screen">

    <aside class="w-64 bg-white shadow-xl border-r border-gray-200 hidden md:flex flex-col">
        <div class="px-6 py-6 border-b border-gray-200">
            <h1 class="text-2xl font-bold text-gray-700">
                <span class="text-[#5EC2B7]">Rede</span>Pet
            </h1>
        </div>

        <nav class="flex-1 px-4 py-6 space-y-1">
            <a class="block px-4 py-3 rounded-lg hover:bg-gray-50 font-medium text-gray-600" href="{{ route('dashboard') }}">Dashboard</a>
            <a class="block px-4 py-3 rounded-lg hover:bg-gray-50 font-medium text-gray-600" href="{{ route('animals.index') }}">Animais</a>
            <a class="block px-4 py-3 rounded-lg hover:bg-gray-50 font-medium text-gray-600" href="{{ route('adopters.index') }}">Adotantes</a>
            <a class="block px-4 py-3 rounded-lg hover:bg-gray-50 font-medium text-gray-600" href="{{ route('adoptions.index') }}">Adoções</a>
            <a class="block px-4 py-3 rounded-lg hover:bg-gray-50 font-medium text-gray-600" href="{{ route('vaccines.index') }}">Vacinas</a>
            <a class="block px-4 py-3 rounded-lg hover:bg-gray-50 font-medium text-gray-600" href="{{ route('species.index') }}">Espécies</a>
        </nav>
    </aside>

    <main class="flex-1">

        <header class="w-full bg-white shadow-sm border-b border-gray-200 px-6 py-4 flex justify-between items-center">
            <h2 class="text-xl font-semibold text-gray-800">Dashboard</h2>
        </header>

        <section class="p-6">
            <h3 class="text-lg font-semibold mb-5 text-gray-700">Visão Geral</h3>    
            @yield('content')
        </section>

    </main>

</div>

</body>
</html>
