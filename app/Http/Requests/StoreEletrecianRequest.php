<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StoreEletrecianRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => [
                'string',
                'confirmed', // Exige o campo password_confirmation
                Password::required()
                    ->min(8) // Mínimo de 8 caracteres
                    ->letters() // Exige pelo menos uma letra
                    ->mixedCase() // Exige letras maiúsculas e minúsculas
                    ->numbers() // Exige pelo menos um número
                    ->symbols()  // Exige pelo menos um caractere especial (!@#$%...)
                    ->uncompromised(), // Opcional: Garante que a senha não vazou em data breaches conhecidos!
            ],
        ];
    }
}
