<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($data['functionalities'] ?? [] as $feature)
            <div class="text-center">
                @if (!empty($feature['icon']))
                    <img src="{{ Storage::url($feature['icon']) }}" class="h-10 mx-auto mb-3">
                @endif
                <p class="text-lg font-medium">{{ $feature['title'] }}</p>
            </div>
        @endforeach
    </div>
</section>