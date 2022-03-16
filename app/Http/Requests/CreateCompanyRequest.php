<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class CreateCompanyRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => 'required',
            'cnpj' => 'cnpj'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O campo nome é obrigatório.',
            'cnpj.cnpj' => 'É necessário informar um CNPJ válido.'
        ];
    }
}
