<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Role;
use App\Models\category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $clients = Client::all(); 
        $roles = Role::all();
        $categories = category::all();
        return view('admin.Dashboard', compact('clients','roles','categories'));
    }
}

