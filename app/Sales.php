<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model 
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'customer_id', 'product_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at','customer_id','product_id'
    ];

    public function customer()
    {
        return $this->belongsTo('App\Customer', 'id');
    }
    
    public function product()
    {
        return $this->belongsTo('App\Product', 'id');
    }
   

}