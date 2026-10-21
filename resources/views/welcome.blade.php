<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Volt Engenharia | Serviços Elétricos</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-950 text-white antialiased">

    <!-- CABEÇALHO -->
    <header class="border-b border-white/10 bg-slate-950">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5">

            <a href="/" class="text-2xl font-extrabold tracking-wide">
                <span class="text-yellow-400">VOLT</span>
                <span class="text-white">ENGENHARIA</span>
            </a>

            <nav class="hidden items-center gap-8 md:flex">
                <a href="#inicio" class="text-slate-300 transition hover:text-yellow-400">
                    Início
                </a>

                <a href="#servicos" class="text-slate-300 transition hover:text-yellow-400">
                    Serviços
                </a>

                <a href="#sobre" class="text-slate-300 transition hover:text-yellow-400">
                    Sobre
                </a>

                <a href="#contato" class="text-slate-300 transition hover:text-yellow-400">
                    Contato
                </a>
            </nav>

            <div class="flex items-center gap-3">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}"
                           class="rounded-lg bg-yellow-400 px-4 py-2 font-bold text-slate-950 transition hover:bg-yellow-300">
                            Painel
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                           class="hidden text-slate-300 transition hover:text-yellow-400 sm:block">
                            Entrar
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                               class="rounded-lg bg-yellow-400 px-4 py-2 font-bold text-slate-950 transition hover:bg-yellow-300">
                                Cadastrar
                            </a>
                        @endif
                    @endauth
                @endif
            </div>

        </div>
    </header>

    <!-- APRESENTAÇÃO -->
    <main>
        <section id="inicio"
                 class="relative overflow-hidden bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800">

            <div class="mx-auto grid max-w-7xl items-center gap-12 px-6 py-24 md:grid-cols-2 md:py-32">
                <div>
                    <span class="inline-block rounded-full border border-yellow-400/30 bg-yellow-400/10 px-4 py-2 text-sm font-semibold text-yellow-400">
                        Soluções em engenharia elétrica
                    </span>

                    <h1 class="mt-6 text-4xl font-extrabold leading-tight sm:text-5xl lg:text-6xl">
                        Energia e segurança para o seu
                        <span class="text-yellow-400">projeto.</span>
                    </h1>

                    <p class="mt-6 max-w-xl text-lg leading-relaxed text-slate-300">
                        Serviços elétricos e elaboração de projetos com foco
                        em qualidade, segurança e eficiência.
                    </p>

                    <div class="mt-8 flex flex-wrap gap-4">
                        <a href="#servicos"
                           class="rounded-lg bg-yellow-400 px-6 py-3 font-bold text-slate-950 transition hover:-translate-y-1 hover:bg-yellow-300">
                            Conhecer serviços
                        </a>

                        <a href="#contato"
                           class="rounded-lg border border-white/20 px-6 py-3 font-bold transition hover:border-yellow-400 hover:text-yellow-400">
                            Entre em contato
                        </a>
                    </div>
                </div>

                <div class="flex min-h-72 items-center justify-center rounded-3xl border border-white/10 bg-white/5 p-8 shadow-2xl shadow-black/20">
                    <div class="text-center">
                        <div class="text-7xl text-yellow-400">⚡</div>
                        <h2 class="mt-5 text-2xl font-bold">
                            Tecnologia e confiança
                        </h2>
                        <p class="mt-3 text-slate-400">
                            Soluções pensadas para cada necessidade.
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <!-- SERVIÇOS -->
        <section id="servicos" class="bg-slate-100 px-6 py-24 text-slate-900">

            <div class="mx-auto max-w-7xl">

                <div class="mx-auto mb-14 max-w-2xl text-center">
                    <span class="font-bold uppercase tracking-widest text-yellow-600">
                        O que fazemos
                    </span>

                    <h2 class="mt-3 text-3xl font-extrabold sm:text-4xl">
                        Nossos serviços
                    </h2>

                    <p class="mt-4 text-slate-600">
                        Conheça as soluções que oferecemos para seu projeto.
                    </p>
                </div>

                    </section>


            <section class="space-y-12 py-16">
                @foreach ($categories as $category)
                    <div class="grid items-center gap-10 bg-slate-100 p-8 md:grid-cols-2 md:p-14">

                        {{-- Texto da categoria --}}
                        <div class="space-y-6">
                            <span class="text-sm font-bold uppercase tracking-widest text-yellow-700">
                                VOLT ENGENHARIA
                            </span>

                            <h2 class="text-3xl font-bold text-slate-950 md:text-5xl">
                                {{ $category->name }}
                            </h2>

                            <p class="text-lg leading-relaxed text-slate-600">
                                {{ $category->description }}
                            </p>

                            <a
                                href="{{ route('service.show', $category->slug) }}"
                                class="inline-block bg-slate-950 px-7 py-4 font-bold text-white transition hover:bg-yellow-400 hover:text-slate-950"
                            >
                                Contrate aqui →
                            </a>
                        </div>

                        {{-- Imagem da categoria --}}
                        <div>
                            @if ($category->slug === 'eletrica')
                                <img
                                    src="{{ asset('images/eletrica.jpg') }}"
                                    alt="Serviços elétricos"
                                    class="h-72 w-full object-cover md:h-96"
                                >
                            @elseif ($category->slug === 'hidraulica')
                                <img
                                    src="{{ asset('images/hidraulica.jpg') }}"
                                    alt="Serviços hidráulicos"
                                    class="h-72 w-full object-cover md:h-96"
                                >
                            @endif
                        </div>

                    </div>
                @endforeach
            </section>


        <!-- SOBRE -->
        <section id="sobre" class="bg-slate-900 px-6 py-24">
            <div class="mx-auto max-w-4xl text-center">

                <span class="font-bold uppercase tracking-widest text-yellow-400">
                    Sobre a empresa
                </span>

                <h2 class="mt-3 text-3xl font-extrabold sm:text-4xl">
                    Compromisso com cada projeto
                </h2>

                <p class="mt-6 text-lg leading-relaxed text-slate-300">
                    Nosso objetivo é oferecer soluções em serviços e projetos
                    elétricos com atenção às necessidades de cada cliente,
                    priorizando qualidade, planejamento e segurança.
                </p>

            </div>
        </section>

        <!-- CONTATO -->
        <section id="contato" class="bg-yellow-400 px-6 py-20 text-center text-slate-950">

            <div class="mx-auto max-w-3xl">
                <h2 class="text-3xl font-extrabold sm:text-4xl">
                    Vamos conversar sobre seu projeto?
                </h2>

                <p class="mt-4 text-lg text-slate-800">
                    Entre em contato para consultar os serviços e solicitar um orçamento.
                </p>

                <a href="mailto:contato@exemplo.com"
                   class="mt-8 inline-block rounded-lg bg-slate-950 px-7 py-3 font-bold text-white transition hover:bg-slate-800">
                    Entrar em contato
                </a>
            </div>

        </section>
    </main>

    <!-- RODAPÉ -->
    <footer class="bg-slate-950 px-6 py-8 text-center text-sm text-slate-400">
        <p>
            © {{ date('Y') }} Volt Engenharia. Todos os direitos reservados.
        </p>
    </footer>

</body>
</html>
