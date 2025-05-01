@props(['data'])

<section
    class="max-w-7xl mx-auto min-h-[400px] bg-cover bg-center bg-opacity-50 flex items-center justify-center text-center relative"
    style="background-image: url('{{ asset('storage/' . ($data['image'] ?? '')) }}');"
>
    <div class="absolute inset-0 bg-white/50"></div>

    <div class="relative z-10 p-8 rounded">
        @if (!empty($data['title']))
            <h2 class="text-primary text-3xl font-bold mb-4">
                {{ $data['title'] }}
            </h2>
        @endif

        @if (!empty($data['button_text']) && !empty($data['button_link']))
            <a href="{{ $data['button_link'] }}"
               target="_blank"
               class="inline-block bg-primary px-6 py-2 border border-white text-white font-medium rounded hover:bg-white hover:text-primary transition"
            >
                {{ $data['button_text'] }}
            </a>
        @endif
    </div>
</section>
