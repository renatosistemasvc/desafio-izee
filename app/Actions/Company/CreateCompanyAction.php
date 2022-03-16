<?php

namespace App\Actions\Company;

use Auth;
use Exception;
use App\Models\Company;

class CreateCompanyAction
{
    public function execute($data)
    {
        $company = Company::create($data);

        return $company;
    }
}
