<?php

namespace App\Actions\Company;

use App\Models\Company;

class DeleteCompanyAction
{
    public function execute($id)
    {
        $company = Company::findOrFail($id);

        $company->delete();

        return $company;
    }
}
