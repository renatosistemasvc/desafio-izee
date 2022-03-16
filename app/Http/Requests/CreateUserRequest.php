<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class CreateUserRequest extends Request
{
    public function rules(): array
    {
        return [
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'O campo E-mail é obrigatório.',
            'email.unique' => 'Já existe um usuário com o e-mail cadastrado no sistema.',
            'password.required' => 'O campo Senha é obrigatório.',
            'password.min' => 'O campo Senha deve ter no mínimo 6 dígitos.',
            'password_confirmation.required' => 'O campo Confirmação de Senha é obrigatório.',
            'password_confirmation.same' => 'O campo Confirmação de Senha é diferente do campo Senha.',
        ];
    }
}
