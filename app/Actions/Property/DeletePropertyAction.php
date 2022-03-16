<?php

namespace App\Actions\Property;

use App\Models\Property;

class DeletePropertyAction
{
    public function execute($id)
    {
        $property = Property::findOrFail($id);

        $property->delete();

        return $property;
    }
}
