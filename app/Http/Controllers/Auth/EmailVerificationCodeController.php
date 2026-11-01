<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class EmailVerificationCodeController extends Controller
{
    public function show(): View
    {
        return view('auth.verify-code');
    }

    public function check(Request $request): RedirectResponse
    {
        $request->validate([
            'code' => 'required|numeric',
        ]);

        // Força a recarga do usuário direto do banco de dados para garantir que pegamos os dados frescos
        $user = User::find(Auth::id());

        $codigoDigitado = (string) $request->input('code');
        $codigoDoBanco  = (string) ($user ? $user->verification_code : '');

        if ($user instanceof User && $codigoDigitado === $codigoDoBanco) {

            $user->markEmailAsVerified();

            // Limpa o código do banco para o usuário ficar verificado e o campo voltar a ser null
            $user->update(['verification_code' => null]);

            if ($user->role === 'electrician') {
                return redirect()->route('dashboard.eletricista');
            }

            return redirect()->intended(route('dashboard', absolute: false));
        }

        return back()->withErrors(['code' => 'O código de verificação inserido é inválido.']);
    }
}
