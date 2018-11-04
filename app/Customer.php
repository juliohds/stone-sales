<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model 
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'age', 'picture', 'cell_phone', 'cpf', 'rg'
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

