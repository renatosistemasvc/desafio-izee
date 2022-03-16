<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    protected $fillable = [
        'name',
        'cnpj',
        'zip_code',
        'uf',
        'address',
        'complement',
        'number',
        'city',
        'district',
        'country',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
