<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>VOLT ENGENHARIA</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<div class="min-h-screen bg-slate-100">

    <div class="bg-slate-900 px-6 py-12 text-white sm:px-12">
        <div class="mx-auto max-w-6xl">

            <p class="font-semibold uppercase tracking-widest text-yellow-400">
                Volt Engenharia
            </p>

            <h1 class="mt-4 text-3xl font-bold sm:text-4xl">
                {{ $category->name }}
            </h1>

            <p class="mt-3 text-slate-300">
                Confira nossos serviços e encontre a solução ideal para você.
            </p>

            <p class="mt-6 text-sm text-slate-400">
                {{ $services->count() }} serviços disponíveis
            </p>

        </div>
    </div>

    <main class="mx-auto max-w-6xl px-6 py-12 sm:px-12">

        <h2 class="mb-6 text-2xl font-bold text-slate-800">
            Nossos serviços
        </h2>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">


@forelse ($services as $service)

    <a href="{{ route('service_detail.show', $service->slug) }}"
       class="block rounded-lg border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:border-yellow-400 hover:shadow-md">

        <div class="mb-4 h-1 w-12 rounded bg-yellow-400"></div>

        <h3 class="text-xl font-bold text-slate-900">
            {{ $service->name }}
        </h3>

        <p class="mt-3 text-sm leading-6 text-slate-600">
            {{ $service->description ?? 'Entre em contato para saber mais sobre este serviço.' }}
        </p>

        <div class="mt-6 font-semibold text-slate-900">
            Saiba mais
            <span class="text-yellow-500">→</span>
        </div>

    </a>

@empty

    <div class="col-span-full rounded-lg border border-slate-200 bg-white p-8 text-center">
        <p class="text-lg font-semibold text-slate-800">
            Nenhum serviço disponível
        </p>

        <p class="mt-2 text-slate-500">
            Ainda não há serviços cadastrados nesta categoria.
        </p>
    </div>

@endforelse

