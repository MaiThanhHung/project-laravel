<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'product_name', 'product_slug','category_id', 'product_desc','product_content','product_price','product_image','product_status'
    ];
    protected $table = 'product';
    public $primaryKey = 'product_id';
    public $timestamps = false;
}
