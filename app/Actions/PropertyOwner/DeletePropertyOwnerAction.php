<?php

namespace App\Actions\PropertyOwner;

use App\Models\PropertyOwner;

class DeletePropertyOwnerAction
{
    public function execute($id)
    {
        $propertyOwner = PropertyOwner::findOrFail($id);

        $propertyOwner->delete();

        return $propertyOwner;
    }
}
