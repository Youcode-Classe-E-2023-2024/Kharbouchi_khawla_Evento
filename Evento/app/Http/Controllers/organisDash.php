<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class organisDash extends Controller
{
    public function index()
    {
        return view('organisateur.dashorganis'); 
    }
    public function showForm()
{
    $categories = Category::all(); 
    return view('organisateur.dashorganis', compact('categories')); 
}
}