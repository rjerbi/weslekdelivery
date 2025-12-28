<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validation des données
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required|date_format:H:i',
            'guests' => 'required|integer|min:1',
            'message' => 'nullable|string|max:1000',
        ]);

        // 2. Création de la réservation
        Reservation::create($validatedData);

        // 3. Redirection avec un message de succès
        return redirect()->back()->with('success', 'Votre réservation a été envoyée avec succès !');
    }
}
