<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\Validity;

class EventController extends Controller
{
    public function index()
    {
        // Retrieve all events with their 'validity' relationship
        $events = Event::with('validity')->get();
        
        // Pass the events to the view
        return view('admin.event', compact('events'));
    }
    
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
            'category_name' => $request->category_name,
        ]);
        
        return back()->with('success', 'Event created successfully.');
    }

    public function showEvents() {
        $events = Event::all(); 
        return view('admin.event', ['events' => $events]);
    }
    public function validateEvent(Request $request, Event $event)
{
    $validatedData = $request->validate([
        'event_id' => 'required|exists:events,id',
        'valid' => 'required|boolean',
    ]);

    Validity::updateOrCreate(
        ['event_id' => $validatedData['event_id']],
        ['valid' => $validatedData['valid']]
    );

    return redirect()->back()->with('success', 'Event validation status updated successfully.');
}
}
