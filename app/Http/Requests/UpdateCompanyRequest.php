<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class UpdateCompanyRequest extends Request
{
    public function rules(): array
    {
        return [
            'cnpj' => 'cnpj'
        ];
    }

    public function messages(): array
    {
        return [
            'cnpj.cnpj' => 'É necessário informar um CNPJ válido.'
        ];
    }
}
