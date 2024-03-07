<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'description', 'places', 'price', 'location', 'event_date', 'image', 'category_name'
    ];

}
