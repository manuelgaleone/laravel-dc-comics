<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{

    protected $fillable = ['title', 'thumb', 'price', 'series', 'type', 'sale_date', 'description'];

    use HasFactory;
}
