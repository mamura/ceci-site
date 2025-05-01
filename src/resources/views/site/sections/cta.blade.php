<section class="py-20 bg-amber-100 text-center">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-3xl font-bold">{{ $data['title'] ?? '' }}</h2>
        @if (!empty($data['image']))
            <img src="{{ Storage::url($data['image']) }}" class="mx-auto my-6 max-h-80">
        @endif
        @if (!empty($data['button_text']) && !empty($data['button_link']))
            <a href="{{ $data['button_link'] }}" class="px-6 py-3 bg-blue-700 text-white rounded">
                {{ $data['button_text'] }}
            </a>
        @endif
    </div>
</section>