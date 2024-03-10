<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function store(Request $request)
    {
        \Log::debug('Store method hit.', $request->all());

        $request->validate([
            'card_number' => 'required',
            'expiration_date' => 'required',
            'cvv' => 'required',
            'card_holder' => 'required',
        ]);
    
        $ticket = Ticket::create([
            'card_number' => $request->card_number,
            'expiration_date' => $request->expiration_date,
            'cvv' => $request->cvv,
            'card_holder' => $request->input('card-holder'), // Adjusted based on the form input name
        ]);
    
        \Log::debug('Ticket created.', $ticket->toArray());
    
        return redirect()->back()->with('success', 'Ticket purchased successfully!');
    }
    
}
