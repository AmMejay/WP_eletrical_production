<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>VOLT ENGENHARIA</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<div class="min-h-screen bg-slate-100 px-4 py-12">
    <div class="mx-auto max-w-2xl">

        <div class="mb-8">
            <p class="text-sm font-bold uppercase tracking-widest text-yellow-600">
                VOLT ENGENHARIA
            </p>

            <h1 class="mt-3 text-3xl font-bold text-slate-900">
                Cadastrar endereço
            </h1>

        <div class="mb-6 rounded-lg border border-yellow-300 bg-yellow-50 p-4">
            <p class="text-sm font-medium text-slate-600">
                Serviço selecionado
            </p>

                <h2 class="mt-1 text-lg font-bold text-slate-900">
                    {{ $services->name }}
                </h2>
        </div>

            <p class="mt-2 text-slate-600">
                Informe o endereço onde o serviço será realizado.
            </p>
        </div>

        <form action="{{ route('address.store') }}" method="POST"
              class="space-y-6 rounded-xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">

            @csrf

            <div>
                <label for="cep" class="mb-2 block text-sm font-semibold text-slate-700">
                    CEP
                </label>

                <input type="text" id="cep" name="cep"
                       value="{{ old('cep') }}"
                       placeholder="00000-000"
                       maxlength="9"
                       required
                       class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none transition focus:border-yellow-400 focus:ring-2 focus:ring-yellow-400/30">

                @error('cep')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="street" class="mb-2 block text-sm font-semibold text-slate-700">
                    Rua / Logradouro
                </label>

                <input type="text" id="street" name="street"
                       value="{{ old('street') }}"
                       placeholder="Nome da rua"
                       required
                       class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none transition focus:border-yellow-400 focus:ring-2 focus:ring-yellow-400/30">

                @error('street')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <div>
                    <label for="city" class="mb-2 block text-sm font-semibold text-slate-700">
                        Cidade
                    </label>

                    <input type="text" id="city" name="city"
                           value="{{ old('city') }}"
                           placeholder="Sua cidade"
                           required
                           class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none transition focus:border-yellow-400 focus:ring-2 focus:ring-yellow-400/30">

                    @error('city')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="number" class="mb-2 block text-sm font-semibold text-slate-700">
                        Número
                    </label>

                    <input type="text" id="number" name="number"
                           value="{{ old('number') }}"
                           placeholder="Ex.: 120 ou S/N"
                           required
                           class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none transition focus:border-yellow-400 focus:ring-2 focus:ring-yellow-400/30">

                    @error('number')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="reference" class="mb-2 block text-sm font-semibold text-slate-700">
                    Ponto de referência
                    <span class="font-normal text-slate-400">(opcional)</span>
                </label>

                <textarea id="reference" name="reference" rows="3"
                          placeholder="Ex.: casa ao lado do mercado"
                          class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none transition focus:border-yellow-400 focus:ring-2 focus:ring-yellow-400/30">{{ old('reference') }}</textarea>

                @error('reference')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col gap-3 border-t border-slate-200 pt-6 sm:flex-row sm:justify-end">
                <button type="reset"
                        class="rounded-lg border border-slate-300 px-6 py-3 font-semibold text-slate-700 transition hover:bg-slate-100">
                    Limpar
                </button>

                <button type="submit"
                        class="rounded-lg bg-yellow-400 px-6 py-3 font-bold text-slate-950 transition hover:bg-yellow-300">
                    Salvar endereço
                </button>
            </div>

        </form>
    </div>
</div>

