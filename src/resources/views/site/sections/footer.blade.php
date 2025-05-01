<footer class="bg-gradient-to-b from-primary to-emerald-800 text-white pt-12 pb-6">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">
        {{-- Logo e nome --}}
        <div>
            <img src="{{ asset('images/logo-footer.png') }}" alt="Ceci Moments" class="h-10 mb-2">
            <p class="text-lg font-semibold">CECIMOMENTS</p>
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
                <x-icon name="instagram" class="w-5 h-5" />
                <x-icon name="facebook" class="w-5 h-5" />
                <x-icon name="linkedin" class="w-5 h-5" />
            </div>

            <h4 class="text-sm font-semibold mb-2">Contato</h4>
            <div class="space-y-1 text-sm">
                <p><x-icon name="mail" class="inline w-4 h-4 mr-1" /> contato@cecimoments.com</p>
                <p><x-icon name="whatsapp" class="inline w-4 h-4 mr-1" /> (xx) xxxxx-xxxx</p>
            </div>
        </div>
    </div>

    <div class="text-center text-xs mt-10 text-gray-300">
        Ceci Moments © Todos os direitos reservados
    </div>
</footer>
