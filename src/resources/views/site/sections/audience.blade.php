<section id="audiences" class="py-16 bg-gray-100">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach ($data['items'] ?? [] as $item)
            <div class="text-center">
                @if (!empty($item['icon']))
                    <img src="{{ Storage::url($item['icon']) }}"
                    alt="{{ $item['title'] ?? '' }}"
                    class="h-[100px] mx-auto mb-4 rounded-full object-cover border border-gray-200 shadow-sm">
                @endif
                <h3 class="text-xl font-semibold">{{ $item['title'] }}</h3>
                <p class="text-gray-600 mt-2">{{ $item['description'] }}</p>
            </div>
        @endforeach
    </div>
</section>