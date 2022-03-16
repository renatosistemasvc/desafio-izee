<?php

namespace App\Actions\Company;

use App\Models\Company;

class GetByIdCompanyAction
{
    public function execute($id)
    {
        $company = Company::findOrFail($id);

        return $company;
    }
}
