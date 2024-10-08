<li class="flex items-start space-x-4 py-6">
    <img
        class="h-20 w-20 flex-none rounded-md object-cover object-center"
        src="{{ $image  }}"
        alt="Imagem do {{ $name }}"
    >
    <div class="flex-auto space-y-1">
        <h3 class="text-white">{{ $name  }}</h3>
        @foreach($features as $feature)
            <p class="text-primary-200">{{ $feature  }}</p>
        @endforeach
    </div>
    <p class="flex-none text-base font-medium text-secondary-300">R$ {{ $price }}</p>
</li>
