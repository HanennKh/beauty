<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['cat_id->$categorys','name','date','price','cost_price','description','product_status','photo'];
    use HasFactory;
}
