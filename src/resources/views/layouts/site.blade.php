<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Ceci Moments' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900 antialiased">
    @include('partials.header')

    {{-- Page Content --}}
    <main class="min-h-screen">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-gradient-to-t from-slate-800 to-emerald-900 text-white text-sm py-10 mt-16">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p class="text-xs">&copy; Ceci Moments - Todos os direitos reservados</p>
        </div>
    </footer>

</body>
</html>
