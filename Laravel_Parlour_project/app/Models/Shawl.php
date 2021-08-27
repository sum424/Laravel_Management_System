<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shawl extends Model
{
    use HasFactory;

    protected $table = 'shawls';

    protected $fillable = ['Name', 'Brand', 'Price', 'Quantity', 'updated_at'];
}
