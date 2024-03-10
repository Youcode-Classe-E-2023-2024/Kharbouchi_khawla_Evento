<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    // Définir le nom de la table si nécessaire
    // protected $table = 'tickets';

    // Protéger contre l'assignation massive
    protected $fillable = [
        'client_id',
        'event_id',
        'email',
        'card_number',
        'expiration_date',
        'cvv',
        'cardholder_name',
    ];

    // Casts pour les types de colonnes spécifiques (facultatif)
    protected $casts = [
        'expiration_date' => 'date',
    ];

    // Relations avec d'autres modèles, si nécessaire
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
