<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freight extends Model 
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'day', 'price', 'sale_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
    ];

    public function newDay(){
        return rand (1,20);
    }
    
    public function newPrice(){
        return rand (0,1000)/10;
    }
}
