<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = ['order_id', 'product_name', 'price', 'customer_name', 'customer_email', 'status', 'customer_id', 'payment_method'];
    
    public function discount()
    {
        return $this->belongsTo(Discount::class);
    }
}

