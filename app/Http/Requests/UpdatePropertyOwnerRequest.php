<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class UpdatePropertyOwnerRequest extends Request
{
    public function rules(): array
    {
        return [
            'cpf' => 'cpf',
            'email' => 'email',
            'birth_date' => 'date'
        ];
    }

    public function messages(): array
    {
        return [
            'cpf.cpf' => 'É necessário informar um cpf válido.',
            'email.email' => 'O E-mail informado não é válido.',
            'birth_date.date' => 'A Data de Nascimento informada não é válida.'
        ];
    }
}
