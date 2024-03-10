<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_event' => 'required|integer',
            'id_client' => 'required|integer',
            'card_number' => 'required|string|max:19|min:19',
            'cvv' => 'required|string|max:4|min:3',
            'card_holder' => 'required|string',
        ]);

        Ticket::create($validated);

        return back()->with('success', 'Ticket purchased successfully!');
    }
}
