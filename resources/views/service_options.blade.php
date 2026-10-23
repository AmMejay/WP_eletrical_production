<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>VOLT ENGENHARIA</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<div class="min-h-screen bg-slate-950 px-6 py-12 text-white">
    <div class="mx-auto max-w-6xl">

        <div class="mb-10">
            <h1 class="text-3xl font-bold text-yellow-400">
                {{ $services->name }}
            </h1>

            <p class="mt-3 text-slate-400">
                Escolha a opção de serviço que melhor atende às suas necessidades.
            </p>
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">

            @foreach ($services_options as $service_option)
                <div class="rounded-2xl border border-slate-700 bg-slate-900 p-6 shadow-lg transition duration-300 hover:-translate-y-1 hover:border-yellow-400">

                    <h2 class="text-xl font-bold text-yellow-400">
                        {{ $service_option->name }}
                    </h2>

                    <p class="mt-3 leading-relaxed text-slate-300">
                        {{ $service_option->description }}
                    </p>

                    <div class="mt-6 space-y-3 border-t border-slate-700 pt-5">

                        <p class="text-slate-300">
                            <span class="font-semibold text-white">Preço:</span>
                            @if ($service_option->price !== null)
                                R$ {{ number_format($service_option->price, 2, ',', '.') }}
                            @else
                                Negociar
                            @endif
                        </p>

                        <p class="text-slate-300">
                            <span class="font-semibold text-white">Duração:</span>
                            {{ $service_option->duration_minutes ?
                                $service_option->duration_minutes . ' minutos'
                                : 'A definir' }}
                        </p>

                        @if ($service_option->active)
                            <span class="inline-block rounded-full bg-green-500/10 px-3 py-1 text-sm font-medium text-green-400">
                                Disponível
                            </span>
                        @else
                            <span class="inline-block rounded-full bg-red-500/10 px-3 py-1 text-sm font-medium text-red-400">
                                Indisponível
                            </span>
                        @endif

                    </div>

                    @if ($service_option->active)
                        <a href="{{ route() }}"
                           class="mt-6 block rounded-lg bg-yellow-400 px-4 py-3 text-center font-bold text-slate-950 transition hover:bg-yellow-300">
                            Escolher opção
                        </a>
                    @else
                        <button disabled
                                class="mt-6 w-full cursor-not-allowed rounded-lg bg-slate-700 px-4 py-3 font-bold text-slate-400">
                            Indisponível
                        </button>
                    @endif

                </div>
            @endforeach

        </div>
    </div>
</div>
