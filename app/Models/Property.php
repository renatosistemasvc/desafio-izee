<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';

    protected $fillable = [
        'name',
        'price_rent',
        'price_sale',
        'type',
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

    public function propertiesOwners()
    {
        return $this->belongsToMany('App\Models\PropertyOwner');
    }

}
