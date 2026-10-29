<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-blue-950">
            Meus agendamentos
        </h2>
    </x-slot>

    <div class="min-h-screen bg-slate-100 py-10">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="mb-8">
                <h1 class="text-3xl font-bold text-blue-950">
                    Acompanhe seus serviços
                </h1>

                <p class="mt-2 text-gray-600">
                    Consulte seus agendamentos e acompanhe o andamento.
                </p>
            </div>

            @forelse ($agendamentos as $agendamento)
                <div class="mb-5 rounded-xl border border-gray-200
                            bg-white p-6 shadow-sm transition
                            hover:shadow-md">

                    <div class="flex flex-col justify-between gap-4 sm:flex-row
                                sm:items-center">

                        <div>
                            <p class="text-sm font-medium uppercase
                                      tracking-wide text-gray-500">
                                Agendamento #{{ $agendamento->id }}
                            </p>

                            <h3 class="mt-1 text-xl font-bold text-blue-950">
                                Serviço solicitado
                            </h3>

                            <p class="mt-2 text-sm text-gray-600">
                                Data:
                                {{ $agendamento->appointment_at }}
                            </p>

                            @if ($agendamento->description_appointment)
                                <p class="mt-2 text-sm text-gray-600">
                                    {{ $agendamento->description_appointment }}
                                </p>
                            @endif
                        </div>

                        <div>
                            @php
                                $statusClasses = [
                                    'pending' => 'bg-yellow-100 text-yellow-800',
                                    'confirmed' => 'bg-green-100 text-green-800',
                                    'in_progress' => 'bg-blue-100 text-blue-800',
                                    'completed' => 'bg-gray-100 text-gray-700',
                                    'canceled' => 'bg-red-100 text-red-800',
                                ];

                                $statusNames = [
                                    'pending' => 'Pendente',
                                    'confirmed' => 'Confirmado',
                                    'in_progress' => 'Em andamento',
                                    'completed' => 'Concluído',
                                    'canceled' => 'Cancelado',
                                ];

                                $status = $agendamento->status;
                            @endphp

                            <span class="inline-flex rounded-full px-4 py-2
                                text-sm font-semibold
                                {{ $statusClasses[$status] ?? 'bg-gray-100 text-gray-700' }}">
                                {{ $statusNames[$status] ?? $status }}
                            </span>
                        </div>

                    </div>

                    <div class="mt-5 border-t border-gray-100 pt-4">
                        <p class="text-sm text-gray-500">
                            Acompanhe aqui as atualizações do seu serviço.
                        </p>
                    </div>
                </div>

            @empty
                <div class="rounded-xl border-2 border-dashed border-gray-300
                            bg-white px-6 py-14 text-center">

                    <div class="mx-auto flex h-16 w-16 items-center
                                justify-center rounded-full bg-yellow-100">
                        <span class="text-3xl text-blue-950">⚡</span>
                    </div>

                    <h3 class="mt-5 text-xl font-bold text-blue-950">
                        Nenhum agendamento ainda
                    </h3>

                    <p class="mx-auto mt-2 max-w-md text-gray-600">
                        Quando você solicitar um serviço, ele aparecerá
                        aqui para que possa acompanhar o andamento.
                    </p>

                    <a href="{{ route('welcome') }}"
                       class="mt-6 inline-block rounded-lg bg-blue-950
                              px-6 py-3 font-semibold text-white
                              transition hover:bg-blue-900">
                        Voltar ao início
                    </a>
                </div>
            @endforelse

        </div>
    </div>
</x-app-layout>

