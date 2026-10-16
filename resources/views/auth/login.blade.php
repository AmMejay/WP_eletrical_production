
<x-guest-layout>
    <div class="min-h-screen w-full bg-slate-950 text-white flex flex-col">

        <!-- Cabeçalho -->
        <header class="border-b border-white/10">
            <div class="mx-auto flex w-full max-w-7xl items-center justify-between px-6 py-5">
                <a href="/" class="text-2xl font-black tracking-tight">
                    <span class="text-yellow-400">VOLT</span> ENGENHARIA<span class="text-yellow-400">.</span>
                </a>

                <a href="/" class="text-sm font-medium text-slate-300 transition hover:text-yellow-400">
                    ← Voltar ao início
                </a>
            </div>
        </header>

        <!-- Conteúdo -->
        <main class="flex flex-1">

            <!-- Apresentação -->
            <section class="relative hidden flex-1 flex-col justify-center overflow-hidden border-r border-white/10 bg-slate-900 px-12 py-16 lg:flex xl:px-20">
                <div class="absolute -right-24 -top-24 h-80 w-80 rounded-full border border-yellow-400/10"></div>
                <div class="absolute -right-12 -top-12 h-56 w-56 rounded-full border border-yellow-400/10"></div>

                <div class="relative z-10 max-w-xl">
                    <span class="inline-block border border-yellow-400/30 bg-yellow-400/5 px-3 py-2 text-xs font-bold uppercase tracking-[0.2em] text-yellow-400">
                        Energia para seus projetos
                    </span>

                    <h1 class="mt-8 text-5xl font-black leading-tight xl:text-6xl">
                        Bem-vindo de volta à
                        <span class="text-yellow-400">VOLT.</span>
                    </h1>

                    <p class="mt-6 max-w-lg leading-7 text-slate-400">
                        Entre na sua conta para conhecer nossos serviços e entrar em contato conosco.
                    </p>

                    <div class="mt-10 h-1 w-20 bg-yellow-400"></div>

                    <p class="mt-5 text-sm text-slate-500">
                        Qualidade, segurança e confiança em cada conexão.
                    </p>
                </div>
            </section>

            <!-- Formulário -->
            <section class="flex w-full flex-1 items-center justify-center px-5 py-10 sm:px-10 lg:max-w-2xl xl:px-16">
                <div class="w-full max-w-xl">

                    <div class="mb-8">
                        <p class="text-sm font-bold uppercase tracking-[0.2em] text-yellow-400">
                            Área do cliente
                        </p>

                        <h2 class="mt-3 text-3xl font-black sm:text-4xl">
                            Entrar na conta<span class="text-yellow-400">.</span>
                        </h2>

                        <p class="mt-3 text-sm leading-6 text-slate-400">
                            Informe seus dados para continuar.
                        </p>
                    </div>

                    <!-- Mensagem de sessão -->
                    <x-auth-session-status
                        class="mb-4 text-sm text-green-400"
                        :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}" class="space-y-5">
                        @csrf

                        <!-- E-mail -->
                        <div>
                            <x-input-label
                                for="email"
                                :value="__('E-mail')"
                                class="mb-2 block text-sm font-semibold text-slate-200" />

                            <x-text-input
                                id="email"
                                class="block w-full border-slate-700 bg-slate-900 px-4 py-3 text-sm text-white placeholder-slate-500 focus:border-yellow-400 focus:ring-yellow-400"
                                type="email"
                                name="email"
                                :value="old('email')"
                                required
                                autofocus
                                autocomplete="username"
                                placeholder="voce@exemplo.com" />

                            <x-input-error
                                :messages="$errors->get('email')"
                                class="mt-2 text-sm text-red-400" />
                        </div>

                        <!-- Senha -->
                        <div>
                            <div class="mb-2 flex items-center justify-between gap-3">
                                <x-input-label
                                    for="password"
                                    :value="__('Senha')"
                                    class="block text-sm font-semibold text-slate-200" />

                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}"
                                        class="text-xs font-semibold text-yellow-400 transition hover:text-yellow-300">
                                        Esqueceu a senha?
                                    </a>
                                @endif
                            </div>

                            <x-text-input
                                id="password"
                                class="block w-full border-slate-700 bg-slate-900 px-4 py-3 text-sm text-white placeholder-slate-500 focus:border-yellow-400 focus:ring-yellow-400"
                                type="password"
                                name="password"
                                required
                                autocomplete="current-password"
                                placeholder="Digite sua senha" />

                            <x-input-error
                                :messages="$errors->get('password')"
                                class="mt-2 text-sm text-red-400" />
                        </div>

                        <!-- Lembrar de mim -->
                        <div>
                            <label for="remember_me" class="inline-flex cursor-pointer items-center gap-2 text-sm text-slate-400">
                                <input
                                    id="remember_me"
                                    type="checkbox"
                                    name="remember"
                                    class="border-slate-700 bg-slate-900 text-yellow-400 shadow-sm focus:ring-yellow-400">

                                <span>Lembrar de mim</span>
                            </label>
                        </div>

                        <!-- Botão -->
                        <button type="submit"
                            class="flex w-full items-center justify-center gap-2 bg-yellow-400 px-5 py-3.5 text-sm font-extrabold text-slate-950 transition hover:bg-yellow-300 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 focus:ring-offset-slate-950">
                            Entrar na minha conta
                            <span aria-hidden="true">→</span>
                        </button>

                        <p class="pt-2 text-center text-sm text-slate-400">
                            Ainda não possui uma conta?

                            <a href="{{ route('register') }}"
                                class="ml-1 font-bold text-yellow-400 transition hover:text-yellow-300">
                                Cadastre-se
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
