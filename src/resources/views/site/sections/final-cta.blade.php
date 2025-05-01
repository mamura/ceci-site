<section class="py-20 bg-gray-200 text-center">
    <h2 class="text-2xl font-bold mb-6">{{ $section->data['title'] ?? 'Experimente grátis por 7 dias' }}</h2>
    <a href="{{ $section->data['button_link'] ?? '#' }}" class="bg-black text-white py-3 px-6 rounded">{{ $section->data['button_text'] ?? 'Comece agora' }}</a>
</section>