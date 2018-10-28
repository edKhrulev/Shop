<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    protected $table = 'order';
    public $timestamps = false;

    protected $fillable = [
        'added_at',
        'status',
    ];
}