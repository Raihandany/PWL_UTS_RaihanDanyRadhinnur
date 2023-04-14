<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productlist extends Model
{
    use HasFactory;
    protected $fillable = ['code_product', 'name_product', 'category_product', 'price_product', 'stoq_product'];
    protected $table = 'productlist';
    public $timestamps = false;
}
