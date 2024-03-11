<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Event;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = Category::all();
    
     
        $eventsQuery = Event::whereHas('validity', function($query) {
            $query->where('valid', true);
        });
    
        if ($request->has('category_id') && $request->category_id != '') {
            $eventsQuery = $eventsQuery->where('category_id', $request->category_id);
        }
        if ($request->has('search') && $request->search != '') {
            $eventsQuery->where('title', 'like', '%' . $request->search . '%');
        }
        $events = $eventsQuery->paginate(4);
       
        return view('home', ['categories' => $categories, 'events' => $events]);
    }
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
}
