<?php

namespace App\Http\Controllers;
use App\Models\Client; 
use App\Models\Role; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

            $clients = Client::with('role')->get();
    
            $roles = Role::all();
    
            return view('admin.Dashboard', ['clients' => $clients, 'roles' => $roles]);
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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients',
            'password' => 'required|string|min:6',
        ]);
        
        $clientRoleId = Role::where('name', 'client')->first()->id;
    
        Client::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role_id' => $clientRoleId, 
        ]);
    
        return redirect()->route('client.store')->with('success', 'Account successfully created!');
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
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete(); 
    
        return redirect()->back()->with('success', 'Client successfully deleted.');
    }
    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        // Après une tentative de connexion réussie, obtenez l'instance de l'utilisateur connecté
        $user = Auth::user();

        // Vérifiez maintenant le rôle de l'utilisateur et redirigez en conséquence
        if ($user->role->name === 'organisateur') {
            return redirect('/organisateur');
        }
        elseif ($user->role->name === 'admin') {
            return redirect('/dashboard');
        } else {
            // Redirection pour les utilisateurs non administrateurs
            return redirect('/home');
        }
    }


}
public function updateRole(Request $request, $clientId)
{
    $request->validate([
        'role_id' => 'required|exists:roles,id', 
    ]);

    $client = Client::findOrFail($clientId);
    $client->role_id = $request->role_id;
    $client->save();

    return redirect()->back()->with('success', 'Le rôle du client a été mis à jour avec succès.');
}
}
