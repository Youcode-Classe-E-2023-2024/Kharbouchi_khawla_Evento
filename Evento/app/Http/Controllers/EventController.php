<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images', $filename, 'public');
            $image = $filename;
        } else {
            $image = null; 
        }
        if (!$request->has('event_date') || is_null($request->event_date)) {
            return back()->with('error', 'La date de l\'événement est obligatoire.');
        }
        Event::create([
            'image' => $image,
            'title' => $request->title,
            'description' => $request->description,
            'places' => $request->places,
            'price' => $request->price,
            'location' => $request->location,
            'event_date' => $request->event_date, 
            'category' => $request->category,
        ]);
        
        return back()->with('success', 'Event created successfully.');
    }

    public function showEvents() {
        $events = Event::all(); 
        return view('admin.event', ['events' => $events]);
    }
}
