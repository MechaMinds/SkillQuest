<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders'; // Pastikan nama tabel sesuai
    protected $fillable = ['order_id', 'product_name', 'price', 'customer_name', 'customer_email', 'status', 'customer_id'];
}

