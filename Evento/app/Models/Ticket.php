<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
        protected $fillable = ['id_event', 'id_client', 'card_number', 'cvv', 'card_holder'];
}

