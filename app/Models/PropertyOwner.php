<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyOwner extends Model
{
    protected $table = 'property_owners';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'cpf',
        'birth_date',
        'marital_status',
        'zip_code',
        'uf',
        'address',
        'complement',
        'number',
        'city',
        'district',
        'country',
        'company_id'
    ];

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function properties()
    {
        return $this->belongsToMany('App\Models\Property');
    }

}
