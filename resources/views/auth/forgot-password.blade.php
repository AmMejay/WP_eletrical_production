
<x-guest-layout>
    <div class="min-h-screen w-full bg-slate-950 text-white flex flex-col">

        <!-- Cabeçalho -->
        <header class="border-b border-white/10">
            <div class="mx-auto flex w-full max-w-7xl items-center justify-between px-6 py-5">
                <a href="/" class="text-2xl font-black tracking-tight">
                    <span class="text-yellow-400">VOLT</span> ENGENHARIA<span class="text-yellow-400">.</span>
                </a>

                <a href="{{ route('login') }}"
                    class="text-sm font-medium text-slate-300 transition hover:text-yellow-400">
                    ← Voltar ao login
                </a>
            </div>
        </header>

        <!-- Conteúdo principal -->
        <main class="flex flex-1 items-center justify-center px-5 py-12 sm:px-8">

            <section class="w-full max-w-xl">

                <!-- Título -->
                <div class="mb-8">
                    <p class="text-sm font-bold uppercase tracking-[0.2em] text-yellow-400">
                        Recuperação de acesso
                    </p>

                    <h1 class="mt-3 text-3xl font-black sm:text-4xl">
                        Esqueceu a senha<span class="text-yellow-400">?</span>
                    </h1>

                    <p class="mt-4 text-sm leading-7 text-slate-400">
                        Sem problemas! Informe o e-mail utilizado no cadastro.
                        Enviaremos um link para você criar uma nova senha.
                    </p>
                </div>

                <!-- Formulário -->
                <form method="POST" action="{{ route('password.email') }}"
                    class="border border-slate-800 bg-slate-900/70 p-6 sm:p-8">
                    @csrf

                    <!-- Status da sessão -->
                    <x-auth-session-status
                        class="mb-5 text-sm text-green-400"
                        :status="session('status')" />

                    <!-- E-mail -->
                    <div>
                        <x-input-label
                            for="email"
                            :value="__('E-mail')"
                            class="mb-2 block text-sm font-semibold text-slate-200" />

                        <x-text-input
                            id="email"
                            class="block w-full border-slate-700 bg-slate-950 px-4 py-3 text-sm text-white placeholder-slate-500 focus:border-yellow-400 focus:ring-yellow-400"
                            type="email"
                            name="email"
                            :value="old('email')"
                            required
                            autofocus
                            autocomplete="email"
                            placeholder="voce@exemplo.com" />

                        <x-input-error
                            :messages="$errors->get('email')"
                            class="mt-2 text-sm text-red-400" />
                    </div>

                    <!-- Botão -->
                    <button type="submit"
                        class="mt-6 flex w-full items-center justify-center gap-2 bg-yellow-400 px-5 py-3.5 text-sm font-extrabold text-slate-950 transition hover:bg-yellow-300 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 focus:ring-offset-slate-900">
                        Enviar link de recuperação
                        <span aria-hidden="true">→</span>
                    </button>

                    <p class="mt-5 text-center text-sm text-slate-400">
                        Lembrou sua senha?
                        <a href="{{ route('login') }}"
                            class="ml-1 font-bold text-yellow-400 transition hover:text-yellow-300">
                            Entrar na conta
                        </a>
                    </p>
                </form>

            </section>
        </main>

        <!-- Rodapé -->
        <footer class="border-t border-white/10 px-6 py-5 text-center text-xs text-slate-500">
            © {{ date('Y') }} VOLT Engenharia. Todos os direitos reservados.
        </footer>

    </div>
</x-guest-layout>

