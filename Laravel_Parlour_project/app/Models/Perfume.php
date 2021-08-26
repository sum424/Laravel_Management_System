<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfume extends Model
{
    use HasFactory;

    protected $table = 'perfumes';

    protected $fillable = ['Name', 'Brand', 'Price', 'Quantity', 'updated_at'];
}
