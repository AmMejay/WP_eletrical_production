<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Illuminate\Validation\Rule;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function store(StoreUserRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $code = random_int(100000, 999999);

        $user = User::create([
            'name'              => $validated['name'],
            'email'             => $validated['email'],
            'password'          => Hash::make($validated['password']),
            //salva o telefone no banco de dados que pegamos com o formulário
            'phone'             => $validated['phone'],
            'role'              => $validated['role'],
            'verification_code' => $code,
        ]);

        $user->notify(new \App\Notifications\SendVerificationCode($code));

        event(new Registered($user));

        Auth::login($user);

        if ($user->role === 'electrician') {
            return redirect()->route('verification.notice');
        }

        return redirect()->route('verification.notice');
    }
}
