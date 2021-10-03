<?php

namespace App\Models;

use App\Modles\CartProducts;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $guarded=[];

    public function details()
    {
        return $this->hasMany(CartProducts::class,'cart_id');
    }//end fun
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(Client::class,'client_id');
    }//end fun

    protected $appends = ['store_date'] ;

    public function getStoreDateAttribute()
    {
        return strtotime($this->created_at);
    }

}//end class
