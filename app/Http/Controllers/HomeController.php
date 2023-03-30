<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use App\Models\Lieu;
use App\Models\Reservation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       

        $chauffeurs = Chauffeur::all();

        // Créer un tableau associatif des noms de chauffeurs avec leurs IDs
        $driverNames = [];
        foreach ($chauffeurs as $driver) {
            $driverNames[$driver->id] = $driver->name;
        }

        $lieus = Lieu::all();
        return view('home')->with(compact('chauffeurs','lieus'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Reservation::create($input);
        return redirect('home')->with('message', "Candidat Enregistrer avec sucess");
    }
}
