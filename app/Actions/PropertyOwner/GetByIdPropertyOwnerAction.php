<?php

namespace App\Actions\PropertyOwner;

use App\Models\PropertyOwner;

class GetByIdPropertyOwnerAction
{
    public function execute($id)
    {
        $propertyOwner = PropertyOwner::findOrFail($id);

        return $propertyOwner;
    }
}
