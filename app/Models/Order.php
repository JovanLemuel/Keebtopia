<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        "product_id",
        "order_amount",
        "order_email",
        "order_phone",
        "order_status",
        "order_address"
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
