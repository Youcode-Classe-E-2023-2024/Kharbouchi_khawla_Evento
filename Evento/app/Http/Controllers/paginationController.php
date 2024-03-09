<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paginationController extends Controller
{
    public function index()
{
    $events = \App\Models\Event::all()->slice(0, 4);
    return view('events.index', compact('events'));
}

}
