<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'code',
        'name',
        'stock',
        'expiration',
        'sell_price',
        'purchase_price',
        'category_id',
        'provider_id',
    ];
    public function add_stock($quantity)
    {
        $this->increment('stock',$quantity);
    }
    public function substract_stock($quantity)
    {   
        $this->decrement('stock',$quantity);
        
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function provider(){
        return $this->belongsTo(Provider::class);
    }
    
}
