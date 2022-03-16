<?php

namespace App\Actions\Property;

use Auth;
use Exception;
use App\Models\Property;
use Illuminate\Support\Facades\DB;

class CreatePropertyAction
{
    public function execute($data)
    {

        DB::beginTransaction();

        try {

            $property = Property::create($data);

            if(isset($data['properties_owners']) && !empty($data['properties_owners'])){

                $property->propertiesOwners()->sync($data['properties_owners']);
            }

            DB::commit();
            return $property;

		} catch (\Exception $e) {
			DB::rollback();
			throw new Exception($e->getMessage());
		}

    }
}
