<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Mail\ConfirmRegistrationClient;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;


class ClientController extends Controller
{
    public function accueil(){
        return view('accueil');
    }

    public function formulaireClient()
    {
        return view('client/formulaireClient');
    }
    public function connexion()
    {
        return view('connexion'); 
    }
    public function status()
    {
        return view('status');
    }
    public function addClient(Request $request)
    {
        $client = new Client([
                'nom' => $request->input('nom'),
                'prenom' => $request->input('prenom'),
                'telephone' => $request->input('telephone'),
        ]);

        $userExists = User::where('email',$request->input('email'))->exists();

        if ($userExists) {
            // L'utilisateur existe déjà, renvoyer une erreur
            return response()->json(['message' => 'Cet utilisateur existe déjà'], 409);
        } else {

            // L'utilisateur n'existe pas, ajouter les autres champs de l'utilisateur
            $client = Client::create([
                'nom' => $client['nom'],
                'prenom' =>$client['prenom'],
                'telephone' => $client['telephone'],
            ]);
            $identifiant = Client::where('id', $client->id)->first();
            $user = new User([
                'email' => $request->input('email'),
                'role_id' => $request->input('role_id'),
                'identifiant' => $identifiant['id'],
                'password' =>Hash::make($request->input('password'))]
            );
            // Créer un nouvel utilisateur
            $user = User::create([
                'email' => $user['email'],
                'role_id' =>$user['role_id'],
                'identifiant' => $user['identifiant'],
                'password' => $user['password'],
            ]);
            // Envoyer un e-mail de confirmation à l'utilisateur
            Mail::to($user->email)->send(new ConfirmRegistrationClient($user));
            return redirect()->route('connexion');
            // Renvoyer une réponse avec les données de l'utilisateur
            //return response()->json($user, 201);
        }
    }
    public function login(Request $request)
    {
    // Valider les données de la requête
    $donnees = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Tenter de connecter l'utilisateur
    if (Auth::attempt($donnees)) {
        $user = Auth::user();
        session(['nom' => $user->nom,
                'prenom' => $user->prenom,
        ]);
        // Rediriger l'utilisateur vers la page de bienvenue
        return redirect('/');
    } else {
        // Rediriger l'utilisateur vers la page de connexion avec une erreur
        return back()->withErrors([
            'email' => 'Les informations de connexion sont incorrectes.',
        ]);
    }
    }

}
