<?php

namespace App\Actions\Company;

use App\Models\Company;

class GetAllCompanyAction
{
    public function execute()
    {
        $companies = Company::get();

        return $companies;
    }
}
