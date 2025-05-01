<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto grid grid-cols-1 grid-cols-2 items-center gap-8 px-6">
        <div class="space-y-4">
            <h2 class="text-2xl font-bold text-primary mb-4">
                {{ $data['title'] ?? 'Título do app' }}
            </h2>

            <p class="text-gray-700 mb-6">
                {{ $data['text'] ?? 'Descrição do app para baixar ou usar na web.' }}
            </p>

            @if (!empty($data['button_web']))
                <a href="{{ $data['button_web'] }}"
                   class="inline-block mb-6 px-4 py-2 bg-primary text-white rounded hover:brightness-110 transition">
                    Use na web
                </a>
            @endif

            <p class="text-sm text-gray-600 mb-2">Ou baixe no seu celular:</p>

            <div class="flex gap-4">
                @if (!empty($data['button_google']))
                    <a href="{{ $data['button_google'] }}" target="_blank">
                        <img src="{{ asset('images/google-play-badge.png') }}" alt="Google Play" class="h-10">
                    </a>
                @endif

                @if (!empty($data['button_apple']))
                    <a href="{{ $data['button_apple'] }}" target="_blank">
                        <img src="{{ asset('images/app-store-badge.png') }}" alt="App Store" class="h-10">
                    </a>
                @endif
            </div>
        </div>

        <div class="text-center">
            @if (!empty($data['image']))
                <img src="{{ asset('storage/' . $data['image']) }}" alt="App preview" class="w-full max-w-md mx-auto">
            @endif
        </div>
    </div>
</section>
