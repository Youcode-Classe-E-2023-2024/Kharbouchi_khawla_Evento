<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth; // Ajoutez cette ligne

class TicketController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'card_number' => 'required',
            'expiration_date' => 'required|date_format:m/Y',
            'cvv' => 'required',
            'card-holder' => 'required',
            'event_id' => 'required|exists:events,id', // Assurez-vous que l'event_id est fourni et valide
        ]);

        $expirationDate = \DateTime::createFromFormat('m/Y', $request->input('expiration_date'))->format('Y-m-d');

        // Obtenir client_id de l'utilisateur connecté
        $clientId = Auth::user()->id; // Assurez-vous que votre table d'utilisateurs a un champ id

        $ticket = new Ticket([
            'client_id' => $clientId,
            'event_id' => $validatedData['event_id'], // Utilisez event_id validé du formulaire
            'email' => $validatedData['email'],
            'card_number' => $validatedData['card_number'],
            'expiration_date' => $expirationDate,
            'cvv' => $validatedData['cvv'],
            'cardholder_name' => $validatedData['card-holder'],
        ]);

        $ticket->save();

        return redirect()->back()->with('success', 'Ticket submitted successfully!');
    }
}
