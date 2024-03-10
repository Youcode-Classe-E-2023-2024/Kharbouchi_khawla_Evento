<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function store(Request $request)
    {
     $ticket = Ticket::create([
    'card_number' => $request->input('card_number'),
    'expiration_date' => $request->input('expiration_date'),
    'cvv' => $request->input('cvv'),
    'card_holder' => $request->input('card-holder'),
    'id_client' => auth()->id(),
    'id_event' => $request->input('id_event'),
]);
dd("wssselt");
        return redirect()->back()->with('success', 'Ticket purchased successfully!');
    }
    public function showTickets()
{
    $tickets = Ticket::all(); 
    return view('organisateur.Ticket', compact('tickets'));
}

}