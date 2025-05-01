<section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center gap-12">
        @if (!empty($data['image']))
            <div class="w-full md:w-1/2">
                <img src="{{ asset('storage/' . $data['image']) }}" alt="Benefícios" class="w-full h-auto rounded-lg shadow">
            </div>
        @endif

        <div class="w-full md:w-1/2">
            @if (!empty($data['title']))
                <h2 class="text-3xl font-bold text-primary mb-6">{{ $data['title'] }}</h2>
            @endif

            <ul class="space-y-4 text-gray-700 text-base list-disc pl-5">
                @foreach ($data['benefits'] ?? [] as $benefit)
                <li class="flex items-start gap-3 text-gray-700 text-base">
                    <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>{{ $benefit['text'] }}</span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
