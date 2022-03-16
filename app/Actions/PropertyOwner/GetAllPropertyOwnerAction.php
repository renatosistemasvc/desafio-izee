<?php

namespace App\Actions\PropertyOwner;

use App\Models\PropertyOwner;

class GetAllPropertyOwnerAction
{
    public function execute()
    {
        $propertyOwner = PropertyOwner::get();

        return $propertyOwner;
    }
}
