
<x-guest-layout>
    <div class="min-h-screen bg-slate-950 text-white">

        <!-- Cabeçalho -->
        <header class="border-b border-white/10">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5">

                <a href="/" class="text-xl font-extrabold tracking-wide">
                    <span class="text-yellow-400">VOLT</span>
                    <span> ENGENHARIA</span>
                </a>

                <a href="/"
                   class="text-sm text-slate-400 transition hover:text-yellow-400">
                    Voltar ao início
                </a>

            </div>
        </header>

        <!-- Cadastro -->
        <main class="flex items-center justify-center px-6 py-12">

            <div class="w-full max-w-lg">

                <div class="mb-8">
                    <span class="text-sm font-bold uppercase tracking-widest text-yellow-400">
                        Crie sua conta
                    </span>

                    <h1 class="mt-3 text-3xl font-extrabold sm:text-4xl">
                        Faça parte da <span class="text-yellow-400">VOLT.</span>
                    </h1>

                    <p class="mt-3 text-slate-400">
                        Cadastre-se para conhecer nossos serviços e entrar em contato conosco.
                    </p>
                </div>

                <form method="POST"
                      action="{{ route('register') }}"
                      class="space-y-5">

                    @csrf

                    <!-- Nome -->
                    <div>
                        <label for="name"
                               class="mb-2 block text-sm font-medium text-slate-200">
                            Nome completo
                        </label>

                        <input id="name"
                               type="text"
                               name="name"
                               value="{{ old('name') }}"
                               required
                               autofocus
                               autocomplete="name"
                               placeholder="Digite seu nome completo"
                               class="w-full rounded-lg border border-slate-700 bg-slate-900 px-4 py-3 text-white placeholder-slate-500 outline-none transition focus:border-yellow-400 focus:ring-2 focus:ring-yellow-400/20">

                        @error('name')
                            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- E-mail -->
                    <div>
                        <label for="email"
                               class="mb-2 block text-sm font-medium text-slate-200">
                            E-mail
                        </label>

                        <input id="email"
                               type="email"
                               name="email"
                               value="{{ old('email') }}"
                               required
                               autocomplete="username"
                               placeholder="voce@exemplo.com"
                               class="w-full rounded-lg border border-slate-700 bg-slate-900 px-4 py-3 text-white placeholder-slate-500 outline-none transition focus:border-yellow-400 focus:ring-2 focus:ring-yellow-400/20">

                        @error('email')
                            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Telefone -->
                    <div>
                        <label for="phone"
                               class="mb-2 block text-sm font-medium text-slate-200">
                            Telefone
                        </label>

                        <input id="phone"
                               type="tel"
                               name="phone"
                               value="{{ old('phone') }}"
                               required
                               autocomplete="tel"
                               placeholder="(00) 00000-0000"
                               class="w-full rounded-lg border border-slate-700 bg-slate-900 px-4 py-3 text-white placeholder-slate-500 outline-none transition focus:border-yellow-400 focus:ring-2 focus:ring-yellow-400/20">

                        @error('phone')
                            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Senha -->
                    <div>
                        <label for="password"
                               class="mb-2 block text-sm font-medium text-slate-200">
                            Senha
                        </label>

                        <input id="password"
                               type="password"
                               name="password"
                               required
                               autocomplete="new-password"
                               placeholder="Crie uma senha"
                               class="w-full rounded-lg border border-slate-700 bg-slate-900 px-4 py-3 text-white placeholder-slate-500 outline-none transition focus:border-yellow-400 focus:ring-2 focus:ring-yellow-400/20">

                        @error('password')
                            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirmar senha -->
                    <div>
                        <label for="password_confirmation"
                               class="mb-2 block text-sm font-medium text-slate-200">
                            Confirmar senha
                        </label>

                        <input id="password_confirmation"
                               type="password"
                               name="password_confirmation"
                               required
                               autocomplete="new-password"
                               placeholder="Digite a senha novamente"
                               class="w-full rounded-lg border border-slate-700 bg-slate-900 px-4 py-3 text-white placeholder-slate-500 outline-none transition focus:border-yellow-400 focus:ring-2 focus:ring-yellow-400/20">

                        @error('password_confirmation')
                            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Botão -->
                    <button type="submit"
                            class="w-full rounded-lg bg-yellow-400 px-5 py-3 font-bold text-slate-950 transition hover:bg-yellow-300 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 focus:ring-offset-slate-950">
                        Criar minha conta
                    </button>

                    <p class="text-center text-sm text-slate-400">
                        Já possui uma conta?

                        <a href="{{ route('login') }}"
                           class="font-semibold text-yellow-400 transition hover:text-yellow-300">
                            Entrar
                        </a>
                    </p>

                </form>

            </div>
        </main>

        <!-- Rodapé -->
        <footer class="border-t border-white/10 px-6 py-5 text-center text-sm text-slate-500">
            © {{ date('Y') }} VOLT Engenharia. Todos os direitos reservados.
        </footer>

    </div>
</x-guest-layout>

