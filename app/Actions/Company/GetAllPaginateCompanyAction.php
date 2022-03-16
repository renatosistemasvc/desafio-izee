<?php

namespace App\Actions\Company;

use App\Models\Company;

class GetAllPaginateCompanyAction
{
    public function execute($filters)
    {

        $companies = Company::when(isset($filters['field']), function ($query) use($filters){

                   foreach($filters['field'] as $field)
                        $query->where($field['name'], $field['value']);

                })->when(isset($filters['sort']), function ($query) use($filters){

                   foreach($filters['sort'] as $sort)
                        $query->orderBy($sort['name'], $sort['value']);

                })->when(isset($filters['text']) && !empty($filters['text']), function ($query) use($filters){

                   $query->where('name', 'like', "%" . $filters['text'] . "%");

                })->paginate(30);

        return $companies;
    }
}
