<section class="py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-2xl font-bold mb-10">{{ $section->data['title'] ?? 'Funcionalidades' }}</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($section->data['items'] ?? [] as $item)
                <div>
                    <img src="{{ $item['image'] ?? '/placeholder.jpg' }}" class="mx-auto mb-4 h-16">
                    <p class="font-medium">{{ $item['title'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>