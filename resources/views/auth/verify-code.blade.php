<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Conta | Volt Engenharia</title>

    <!-- Usa o Vite do próprio projeto para carregar o Tailwind estruturado -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#020617] text-white antialiased flex min-h-screen items-center justify-center p-6">

    <div class="w-full max-w-md rounded-2xl border border-white/10 bg-slate-900 p-8 shadow-2xl text-center">

        <div class="text-2xl font-extrabold tracking-wide block mb-6">
            <span class="text-yellow-400">VOLT</span>
            <span class="text-white">ENGENHARIA</span>
        </div>

        <h2 class="text-2xl font-bold">Verifique seu e-mail</h2>
        <p class="mt-2 text-sm text-slate-400">
            Enviamos um código de verificação de 6 dígitos para o seu e-mail através do Mailtrap. Insira-o abaixo para ativar sua conta.
        </p>

        <!-- Mensagens de Erro -->
        @if ($errors->has('code'))
            <div class="mt-4 rounded-lg bg-red-500/10 border border-red-500/25 p-3 text-sm text-red-400">
                {{ $errors->first('code') }}
            </div>
        @endif

        <!-- O action DEVE chamar explicitamente a rota POST de checagem -->
        <form action="{{ route('verification.check') }}" method="POST" class="mt-8 space-y-6">
            @csrf

            <div>
                <label for="code" class="block text-left text-sm font-semibold text-slate-300 mb-2">Código de Verificação</label>
                <input type="text"
                       name="code"
                       id="code"
                       maxlength="6"
                       required
                       placeholder="Ex: 123456"
                       class="w-full rounded-lg border border-white/10 bg-slate-950 px-4 py-3 text-center text-xl font-bold tracking-widest text-yellow-400 placeholder:text-slate-600 focus:border-yellow-400 focus:outline-none"
                       oninput="this.value = this.value.replace(/[^0-9]/g, '')">
            </div>

            <button type="submit"
                    class="w-full rounded-lg bg-yellow-400 py-3 font-bold text-slate-950 transition hover:bg-yellow-300 cursor-pointer">
                Confirmar Código
            </button>
        </form>

    </div>

</body>
</html>
