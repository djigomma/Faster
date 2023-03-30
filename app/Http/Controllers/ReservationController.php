<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::all();
        // $chauffeurs = Chauffeur::all();
        // $users = User::where('role_as', 0)->get();
        return view("reservation.index")->with(compact("reservations"));
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
        $input = $request->all();
        Reservation::create($input);
        return redirect('home')->with('success', "Candidat Enregistrer avec sucess");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $clientId = auth()->id();
        $reservations = Reservation::where('client_id', $clientId)->get();
        return view("course")->with(compact("reservations"));
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
    public function destroy(string $id)
    {
        //
    }
}
