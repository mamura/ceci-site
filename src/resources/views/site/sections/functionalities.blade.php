<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-2xl font-bold text-center text-primary mb-12">
            {{ $data['title'] ?? 'Funcionalidades' }}
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 text-center">
            @foreach ($data['functionalities'] ?? [] as $item)
                <div>
                    @if (!empty($item['icon']))
                        <img 
                            src="{{ asset('storage/' . $item['icon']) }}" 
                            alt="{{ $item['title'] ?? '' }}" 
                            class="mx-auto w-[100px] h-[100px] rounded-full object-cover mb-4"
                        >
                    @endif
                    <p class="text-lg text-gray-800">{{ $item['title'] ?? '' }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
