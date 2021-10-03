<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $guarded=[];


    public function favorite()
    {
        return $this->hasMany(Favorite::class,'product_id');
    }

}//end class
