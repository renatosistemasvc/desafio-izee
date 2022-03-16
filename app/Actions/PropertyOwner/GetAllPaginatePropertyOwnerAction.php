<?php

namespace App\Actions\PropertyOwner;

use App\Models\PropertyOwner;

class GetAllPaginatePropertyOwnerAction
{
    public function execute($filters)
    {

        $propertyOwner = PropertyOwner::when(isset($filters['field']), function ($query) use($filters){

                   foreach($filters['field'] as $field)
                        $query->where($field['name'], $field['value']);

                })->when(isset($filters['sort']), function ($query) use($filters){

                   foreach($filters['sort'] as $sort)
                        $query->orderBy($sort['name'], $sort['value']);

                })->when(isset($filters['text']) && !empty($filters['text']), function ($query) use($filters){

                   $query->where('name', 'like', "%" . $filters['text'] . "%");

                })->paginate(30);

        return $propertyOwner;
    }
}
