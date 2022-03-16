<?php

namespace App\Actions\Property;

use Auth;
use Exception;
use App\Models\Property;
use Illuminate\Support\Facades\DB;

class UpdatePropertyAction
{
    public function execute($data, $id)
    {

        DB::beginTransaction();

        try {

            $property = Property::findOrFail($id);

            $property->update($data);

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
