<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach ($data['plans'] ?? [] as $plan)
        <div class="flex flex-col justify-between bg-slate-100 p-6 rounded shadow min-h-[400px]">
            <div>
            @if (!empty($plan['is_featured']))
                <div class="text-sm text-white bg-primary px-3 py-1 rounded-full w-fit mb-4">Recomendado</div>
            @endif
                <h3 class="text-xl font-bold mb-4 text-primary">{{ $plan['title'] }}</h3>

                <ul class="mb-6 space-y-2 text-slate-700">
                    @foreach ($plan['features'] ?? [] as $feature)
                        <li class="flex items-start space-x-2">
                            <span class="text-green-600 mt-1">✔</span>
                            <span>{{ $feature['feature'] }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            @if (!empty($plan['button']) && !empty($plan['link']))
                <a href="{{ $plan['link'] }}"
                    class="mt-auto inline-block text-center px-4 py-2 rounded bg-primary text-white font-medium hover:brightness-110 transition">
                    {{ $plan['button'] }}
                </a>
            @endif
        </div>
    @endforeach
    </div>
</section>
