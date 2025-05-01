<section id="hero" class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center gap-12">
        {{-- Imagem --}}
        @if (!empty($data['image']))
            <div class="flex-1">
                <img src="{{ asset('storage/' . $data['image']) }}" alt="{{ $data['title'] ?? '' }}" class="w-full h-auto object-cover">
            </div>
        @endif

        {{-- Conteúdo --}}
        <div class="flex-1 text-center md:text-left">
            <h1 class="text-3xl md:text-5xl font-extrabold text-primary leading-tight">
                {!! nl2br(e($data['title'] ?? '')) !!}
            </h1>

            @if (!empty($data['subtitle']))
                <p class="mt-4 text-lg text-slate-600 max-w-xl mx-auto md:mx-0">
                    {{ $data['subtitle'] }}
                </p>
            @endif

            @if (!empty($data['button_text']) && !empty($data['button_link']))
                <div class="mt-6">
                    <a href="{{ $data['button_link'] }}"
                        class="inline-block bg-primary text-white text-sm font-semibold px-6 py-3 rounded-md hover:bg-[#243150] transition">
                        {{ $data['button_text'] }}
                    </a>
                </div>
            @endif
        </div>
    </div>
</section>
