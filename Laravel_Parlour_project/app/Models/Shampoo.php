<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shampoo extends Model
{
    use HasFactory;

    protected $table = 'shampoos';

    protected $fillable = ['Name', 'Brand', 'Price', 'Quantity', 'updated_at'];
}
