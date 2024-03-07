<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Validity extends Model
{
    use HasFactory;

    
    protected $table = 'validities';

   
    protected $fillable = ['event_id', 'valid'];

    
    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
