<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class UserOrder extends Model
{

    protected $table = 'user_order';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'order_id',
        'product_id'
    ];
}