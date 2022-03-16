<?php

namespace App\Actions\Property;

use App\Models\Property;

class GetByIdPropertyAction
{
    public function execute($id)
    {
        $property = Property::findOrFail($id);

        return $property;
    }
}
