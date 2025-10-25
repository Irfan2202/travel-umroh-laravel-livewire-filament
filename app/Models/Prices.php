<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prices extends Model
{
    use HasFactory;
    protected $table = 'prices';
    protected $guarded = [];
}
