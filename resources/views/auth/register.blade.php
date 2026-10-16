
<x-guest-layout>
    <div class="min-h-screen w-full bg-slate-950 text-white flex flex-col">

        <!-- Cabeçalho -->
        <header class="border-b border-white/10 bg-slate-950">
            <div class="mx-auto flex w-full max-w-7xl items-center justify-between px-6 py-5">
                <a href="/" class="text-2xl font-black tracking-tight">
                    <span class="text-yellow-400">VOLT</span>
                    <span class="text-white"> ENGENHARIA</span>
                    <span class="text-yellow-400">.</span>
                </a>

                <a href="/"
                    class="text-sm font-medium text-slate-300 transition hover:text-yellow-400">
                    <span class="text-yellow-400">←</span> Voltar ao início
                </a>
            </div>
        </header>

        <!-- Conteúdo -->
        <main class="flex flex-1 items-stretch">

            <!-- Lateral de apresentação -->
            <section class="relative hidden flex-1 flex-col justify-center overflow-hidden border-r border-white/10 bg-slate-900 px-12 py-16 lg:flex xl:px-20">

                <div class="absolute -right-24 -top-24 h-80 w-80 rounded-full border border-yellow-400/10"></div>
                <div class="absolute -right-12 -top-12 h-56 w-56 rounded-full border border-yellow-400/10"></div>

                <div class="relative z-10 max-w-xl">
                    <span class="inline-flex items-center gap-2 border border-yellow-400/30 bg-yellow-400/5 px-3 py-2 text-xs font-bold uppercase tracking-[0.2em] text-yellow-400">
                        <span class="h-2 w-2 bg-yellow-400"></span>
                        Energia para seus projetos
                    </span>

                    <h1 class="mt-8 text-5xl font-black leading-tight xl:text-6xl">
                        Soluções elétricas com
                        <span class="text-yellow-400">qualidade e confiança.</span>
                    </h1>

                    <p class="mt-6 max-w-lg text-base leading-7 text-slate-400">
                        Crie sua conta para conhecer nossos serviços e facilitar seu contato com nossa equipe.
                    </p>

                    <div class="mt-10 h-1 w-20 bg-yellow-400"></div>

                    <p class="mt-5 text-sm font-medium tracking-wide text-slate-500">
                        VOLT ENGENHARIA — Segurança em cada conexão.
                    </p>
                </div>
            </section>

            <!-- Formulário -->
            <section class="flex w-full flex-1 items-center justify-center px-5 py-10 sm:px-10 lg:max-w-2xl xl:px-16">

                <div class="w-full max-w-xl">

                    <div class="mb-8">
                        <p class="text-sm font-bold uppercase tracking-[0.2em] text-yellow-400">
                            Cadastro de cliente
                        </p>

                        <h2 class="mt-3 text-3xl font-black sm:text-4xl">
                            Crie sua conta<span class="text-yellow-400">.</span>
                        </h2>

                        <p class="mt-3 text-sm leading-6 text-slate-400">
                            Preencha seus dados para começar.
                        </p>
                    </div>

                    <form method="POST" action="{{ route('register') }}" class="space-y-5">
                        @csrf

                        <div>
                            <label for="name" class="mb-2 block text-sm font-semibold text-slate-200">
                                Nome completo
                            </label>

                            <input id="name" type="text" name="name"
                                value="{{ old('name') }}" required autofocus
                                autocomplete="name" placeholder="Digite seu nome completo"
                                class="w-full border border-slate-700 bg-slate-900 px-4 py-3 text-sm text-white placeholder-slate-500 outline-none transition focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400">

                            @error('name')
                                <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">

                            <div>
                                <label for="email" class="mb-2 block text-sm font-semibold text-slate-200">
                                    E-mail
                                </label>

                                <input id="email" type="email" name="email"
                                    value="{{ old('email') }}" required
                                    autocomplete="username" placeholder="voce@exemplo.com"
                                    class="w-full border border-slate-700 bg-slate-900 px-4 py-3 text-sm text-white placeholder-slate-500 outline-none transition focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400">

                                @error('email')
                                    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="phone" class="mb-2 block text-sm font-semibold text-slate-200">
                                    Telefone
                                </label>

                                <input id="phone" type="tel" name="phone"
                                    value="{{ old('phone') }}" required
                                    autocomplete="tel" placeholder="(00) 00000-0000"
                                    class="w-full border border-slate-700 bg-slate-900 px-4 py-3 text-sm text-white placeholder-slate-500 outline-none transition focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400">

                                @error('phone')
                                    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="password" class="mb-2 block text-sm font-semibold text-slate-200">
                                    Senha
                                </label>

                                <input id="password" type="password" name="password"
                                    required autocomplete="new-password"
                                    placeholder="Crie uma senha"
                                    class="w-full border border-slate-700 bg-slate-900 px-4 py-3 text-sm text-white placeholder-slate-500 outline-none transition focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400">

                                @error('password')
                                    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="password_confirmation" class="mb-2 block text-sm font-semibold text-slate-200">
                                    Confirmar senha
                                </label>

                                <input id="password_confirmation" type="password"
                                    name="password_confirmation" required
                                    autocomplete="new-password" placeholder="Repita sua senha"
                                    class="w-full border border-slate-700 bg-slate-900 px-4 py-3 text-sm text-white placeholder-slate-500 outline-none transition focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400">

                                @error('password_confirmation')
                                    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>

                        <button type="submit"
                            class="flex w-full items-center justify-center gap-2 bg-yellow-400 px-5 py-3.5 text-sm font-extrabold text-slate-950 transition hover:bg-yellow-300 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 focus:ring-offset-slate-950">
                            Criar minha conta
                            <span aria-hidden="true">→</span>
                        </button>

                        <p class="pt-2 text-center text-sm text-slate-400">
                            Já possui uma conta?
                            <a href="{{ route('login') }}"
                                class="ml-1 font-bold text-yellow-400 transition hover:text-yellow-300">
                                Entrar
                            </a>
                        </p>
                    </form>

                </div>
            </section>

        </main>

        <!-- Rodapé -->
        <footer class="border-t border-white/10 px-6 py-5">
            <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-2 text-xs text-slate-500 sm:flex-row">
                <p>© {{ date('Y') }} VOLT Engenharia. Todos os direitos reservados.</p>
                <p>Qualidade, segurança e confiança.</p>
            </div>
        </footer>

    </div>
</x-guest-layout>
