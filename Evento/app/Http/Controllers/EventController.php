<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function store(Request $request)
{
    $event = new Event;
    
    if ($request->hasFile('image')) {
        $filename = $request->image->getClientOriginalName();
        $request->image->storeAs('images', $filename, 'public');
        $event->image = $filename;
    }

    $event->title = $request->title;
    $event->description = $request->description;
    $event->places = $request->places;
    $event->price = $request->price;
    $event->location = $request->location;

    // Vérifier que 'date_finale' est présent dans la requête et n'est pas null
    if ($request->has('date_finale') && !is_null($request->date_finale)) {
        $event->event_date = $request->date_finale;
    } else {
        // Gérer l'absence de date (par exemple, retourner une erreur ou définir une date par défaut)
        return back()->with('error', 'La date de l\'événement est obligatoire.');
    }

    $event->save();

    return back()->with('success', 'Event created successfully.');
}
}