<?php

namespace App\Actions\Property;

use App\Models\Property;

class GetAllPropertyAction
{
    public function execute()
    {
        $property = Property::get();

        return $property;
    }
}
