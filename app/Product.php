<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model 
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'title', 'description', 'picture', 'category_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at','deleted_at'
    ];

    public function productCategory()
    {
        return $this->hasOne('App\Category', 'id');
    }
}