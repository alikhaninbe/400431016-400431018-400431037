<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Digi extends Model
{
    use HasFactory;
    protected $fillable =['title','CPU','RAM','price','picture'];
}
