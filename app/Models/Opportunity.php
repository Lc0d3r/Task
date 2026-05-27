<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    protected $fillable = [
        'title', 
        'type', 
        'description', 
        'country_region', 
        'deadline', 
        'link', 
        'status'
    ];
}