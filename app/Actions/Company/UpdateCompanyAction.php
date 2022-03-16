<?php

namespace App\Actions\Company;

use Auth;
use Exception;
use App\Models\Company;

class UpdateCompanyAction
{
    public function execute($data, $id)
    {
        $company = Company::findOrFail($id);

        $company->update($data);

        return $company;
    }
}
