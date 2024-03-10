<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketValidation extends Model
{
    use HasFactory;

    protected $table = 'ticket_validations'; 

    protected $fillable = ['id_ticket', 'validation']; 
}
