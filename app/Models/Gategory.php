<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gategory extends Model
{
    protected $fillable=['name','photo'];
    use HasFactory;
}
