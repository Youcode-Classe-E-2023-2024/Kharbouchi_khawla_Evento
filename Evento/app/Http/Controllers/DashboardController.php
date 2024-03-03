<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.Dashboard'); // Assurez-vous que le nom de la vue correspond à votre fichier de vue dans resources/views
    }
}
