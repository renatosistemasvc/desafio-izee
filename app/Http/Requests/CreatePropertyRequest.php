<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class CreatePropertyRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O campo nome é obrigatório.'
        ];
    }
}
