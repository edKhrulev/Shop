<?php
/**
 * Created by PhpStorm.
 * User: edkos
 * Date: 10/23/2018
 * Time: 12:19 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{

    protected $table = 'product';
    public $timestamps = false;

    protected $fillable = [
        'title',
        'description',
        'price',
        'category',
        'image'
    ];
}