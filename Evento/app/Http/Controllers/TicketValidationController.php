<?php

namespace App\Http\Controllers;

use App\Models\TicketValidation; 
use Illuminate\Http\Request;

class TicketValidationController extends Controller
{
    public function validateTicket(Request $request)
    {
        $request->validate([
            'id_ticket' => 'required|exists:tickets,id',
            'valid' => 'required|boolean',
        ]);

        TicketValidation::create([
            'id_ticket' => $request->id_ticket,
            'validation' => $request->valid,
        ]);

        return back()->with('success', 'La validation du ticket a été enregistrée avec succès.');
    }
}
