<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function order()
    {
        return $this->belongsToMany('App\User', 'orders', 'product_id', 'user_id');
    }
}
