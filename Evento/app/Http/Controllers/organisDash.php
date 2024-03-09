<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class organisDash extends Controller
{
    public function index()
    {
        return view('organisateur.dashorganis'); 
    }
    public function showDashboard()
    {

        $events = Event::all();
        $categories = Category::all();
        return view('organisateur.dashorganis', compact('events', 'categories'));
    }
    
    
}