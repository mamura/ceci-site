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
    <footer class="bg-gradient-to-b from-primary to-emerald-800 text-white pt-12 pb-6">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <img src="{{ asset('images/logo-footer.png') }}" alt="Ceci Moments" class="mb-2">
            </div>

            {{-- Baixe nosso app --}}
            <div>
                <h4 class="text-sm font-semibold mb-2">Baixe nosso app</h4>
                <div class="flex flex-col gap-2">
                    <a href="#" target="_blank">
                        <img src="{{ asset('images/google-play-badge.png') }}" alt="Google Play" class="h-10">
                    </a>
                    <a href="#" target="_blank">
                        <img src="{{ asset('images/app-store-badge.png') }}" alt="App Store" class="h-10">
                    </a>
                </div>
            </div>

            {{-- Acesso rápido --}}
            <div>
                <h4 class="text-sm font-semibold mb-2">Acesso rápido</h4>
                <ul class="space-y-1 text-sm">
                    <li><a href="#" class="hover:underline">Central de Ajuda</a></li>
                    <li><a href="#" class="hover:underline">Contato</a></li>
                    <li><a href="#" class="hover:underline">Sobre nós</a></li>
                    <li><a href="#" class="hover:underline">Política de Privacidade</a></li>
                </ul>
            </div>

            {{-- Redes sociais e contato --}}
            <div>
                <h4 class="text-sm font-semibold mb-2">Siga-nos nas redes</h4>
                <div class="flex items-center space-x-3 mb-4">
                    {{-- Instagram --}}
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M7.75 2C5.67893 2 4 3.67893 4 5.75V18.25C4 20.3211 5.67893 22 7.75 22H16.25C18.3211 22 20 20.3211 20 18.25V5.75C20 3.67893 18.3211 2 16.25 2H7.75ZM2 5.75C2 2.79822 4.54822 0.25 7.5 0.25H16.5C19.4518 0.25 22 2.79822 22 5.75V18.25C22 21.2018 19.4518 23.75 16.5 23.75H7.5C4.54822 23.75 2 21.2018 2 18.25V5.75Z"/>
                        <circle cx="12" cy="12" r="3.25"/>
                        <circle cx="17" cy="7" r="1"/>
                    </svg>

                    {{-- Facebook --}}
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M13.5 12H16L16.5 8.5H13.5V7C13.5 6.17157 14.1716 5.5 15 5.5H16.5V2H15C12.7909 2 11 3.79086 11 6V8.5H9V12H11V22H13.5V12Z"/>
                    </svg>

                    {{-- LinkedIn --}}
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M6.94 4.94A2.25 2.25 0 104.94 6.94 2.25 2.25 0 006.94 4.94zM3 8.25h6v12H3zM14.5 8.25a4.5 4.5 0 00-3.75 2V8.25h-6v12h6v-6c0-1.1.9-2 2-2s2 .9 2 2v6h6v-7.5a4.5 4.5 0 00-4.25-4.5z"/>
                    </svg>
                </div>

                <h4 class="text-sm font-semibold mb-2">Contato</h4>
                <div class="space-y-1 text-sm">
                    <p>
                        <svg class="inline w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M2 4a2 2 0 012-2h16a2 2 0 012 2v2l-10 6L2 6V4z"/>
                            <path d="M2 8l10 6 10-6v10a2 2 0 01-2 2H4a2 2 0 01-2-2V8z"/>
                        </svg>
                        contato@cecimoments.com
                    </p>
                    
                    <p>
                        <svg class="inline w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M2 3a1 1 0 011-1h2a1 1 0 011 1v1a2 2 0 001.85 1.995L8 6v2a2 2 0 002 2h2v2H9a1 1 0 00-.993.883L8 13v2h2.15a2.75 2.75 0 002.6 2H13v2.1a1.9 1.9 0 001.9 1.9h4.2a1.9 1.9 0 001.9-1.9V3a1 1 0 00-1-1H3z"/>
                        </svg>
                        (xx) xxxxx-xxxx
                    </p>
                </div>
            </div>
        </div>

        <div class="text-center text-xs mt-10 text-gray-300">
            Ceci Moments © Todos os direitos reservados
        </div>
    </footer>


</body>
</html>
