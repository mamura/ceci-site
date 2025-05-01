<section class="py-16 bg-blue-50 text-center">
    <div class="max-w-3xl mx-auto">
        <p class="text-lg mb-4">{{ $data['text'] ?? '' }}</p>
        @if (!empty($data['image']))
            <img src="{{ Storage::url($data['image']) }}" class="mx-auto max-h-80">
        @endif
    </div>
</section>