<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model 
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'street', 'number', 'neighborhood', 'complement', 'city', 'state', 'country', 'zip_code', 'customer_id' 
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
    ];
}
