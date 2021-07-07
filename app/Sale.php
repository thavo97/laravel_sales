<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'client_id',
        'user_id',
        'sale_date',
        'gain',
        'total',
        'status',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function saleDetails(){
        return $this->hasMany(saleDetail::class);
    }
    public function update_stock($id,$quantity)
    {
        $product = Product::find($id);
        $product->substract_stock($quantity);
    }
}