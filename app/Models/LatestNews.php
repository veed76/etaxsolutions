<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LatestNews extends Model
{
    protected $fillable = ['name', 'descriptions', 'status'];
}
