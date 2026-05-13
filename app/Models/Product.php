<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_code',
        'price',
        'description',
        'img',
        'username_account',
        'password_account',
        'status',
    ];

    protected $table = 'products';

}
