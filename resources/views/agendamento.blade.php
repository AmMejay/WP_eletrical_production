<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>VOLT ENGENHARIA</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<x-app-layout>
    <div class="min-h-screen bg-slate-100 px-4 py-12">
        <div class="mx-auto max-w-2xl">

            {{-- Cabeçalho --}}
            <div class="mb-8 text-center">
                <p class="text-sm font-bold uppercase tracking-widest text-yellow-500">
                    VOLT ENGENHARIA
                </p>

                <h1 class="mt-2 text-3xl font-bold text-slate-900">
                    Agendar serviço
                </h1>

                <p class="mt-3 text-slate-600">
                    Preencha os dados abaixo para solicitar seu agendamento.
                </p>
            </div>

            {{-- Formulário --}}
            <div class="rounded-2xl bg-white p-6 shadow-lg sm:p-8">

                <form action="{{ route('agendamento') }}"
                      method="POST"
                      class="space-y-6">

                    @csrf

                    {{-- Data e horário --}}
                    <div>
                        <label for="appointment_at"
                               class="mb-2 block font-semibold text-slate-700">
                            Data e horário
                        </label>

                        <input
                            type="datetime-local"
                            id="appointment_at"
                            name="appointment_at"
                            value="{{ old('appointment_at') }}"
                            required
                            class="w-full rounded-lg border border-slate-300 px-4 py-3
                                   focus:border-yellow-500 focus:ring-yellow-500"
                        >

                        @error('appointment_at')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Descrição --}}
                    <div>
                        <label for="description_appointment"
                               class="mb-2 block font-semibold text-slate-700">
                            Descrição (opcional)
                        </label>

                        <textarea
                            id="description_appointment"
                            name="description_appointment"
                            rows="4"
                            maxlength="100"
                            placeholder="Conte algum detalhe importante sobre o serviço..."
                            class="w-full rounded-lg border border-slate-300 px-4 py-3
                                   focus:border-yellow-500 focus:ring-yellow-500"
                        >{{ old('description_appointment') }}</textarea>

                        @error('description_appointment')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror

                        <p class="mt-1 text-sm text-slate-500">
                            Máximo de 100 caracteres.
                        </p>
                    </div>

                    {{-- Serviço selecionado --}}
                    <div class="rounded-lg border border-slate-200 bg-slate-50 p-4">
                        <p class="text-sm text-slate-500">Opção selecionada</p>

                        <p class="mt-1 font-semibold text-slate-900">
                            {{-- {{ $service_option->name }} --}}
                        </p>

                        {{-- @if ($service_option->pricing_type === 'fixed')
                            <p class="mt-1 font-bold text-yellow-600">
                                {{-- R$ {{ number_format($service_option->price, 2, ',', '.') }} --}}
                            </p>
                        @else
                            <p class="mt-1 font-semibold text-slate-600">
                                Preço sob orçamento
                            </p>
                        {{-- @endif --}}
                    </div>

                    {{-- Botões --}}
                    <div class="flex flex-col gap-3 sm:flex-row">
                        <button
                            type="submit"
                            class="w-full rounded-lg bg-yellow-400 px-6 py-3
                                   font-bold text-slate-900 transition
                                   hover:bg-yellow-300"
                        >
                            Confirmar agendamento
                        </button>

                        <a
                            href="{{ url()->previous() }}"
                            class="w-full rounded-lg border border-slate-300 px-6 py-3
                                   text-center font-semibold text-slate-700
                                   transition hover:bg-slate-100"
                        >
                            Voltar
                        </a>
                    </div>

                </form>
            </div>

            <p class="mt-6 text-center text-sm text-slate-500">
                Sua solicitação ficará pendente até a confirmação da equipe.
            </p>

        </div>
    </div>
</x-app-layout>
