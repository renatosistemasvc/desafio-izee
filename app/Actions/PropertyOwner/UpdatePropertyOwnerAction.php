<?php

namespace App\Actions\PropertyOwner;

use Auth;
use Exception;
use App\Models\PropertyOwner;

class UpdatePropertyOwnerAction
{
    public function execute($data, $id)
    {
        $propertyOwner = PropertyOwner::findOrFail($id);

        $propertyOwner->update($data);

        return $propertyOwner;
    }
}
