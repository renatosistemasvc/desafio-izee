<?php

namespace App\Actions\PropertyOwner;

use Auth;
use Exception;
use App\Models\PropertyOwner;

class CreatePropertyOwnerAction
{
    public function execute($data)
    {
        $propertyOwner = PropertyOwner::create($data);

        return $propertyOwner;
    }
}
