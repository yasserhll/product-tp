<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupère 15 pays par page avec pagination
        $countries = Country::paginate(15); // Paginer les résultats, 15 éléments par page

        // Retourne la vue index avec les pays paginés
        return view('countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('countries.create'); // Retourne la vue pour créer un nouveau pays
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valide les données
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'position' => 'nullable|integer',
        ]);

        // Crée un nouveau pays
        Country::create($validatedData);

        return redirect()->route('countries.index')->with('success', 'Country created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        return view('countries.show', compact('country')); // Retourne la vue pour afficher un pays
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country)
    {
        return view('countries.edit', compact('country')); // Retourne la vue pour éditer un pays
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Country $country)
    {
        // Valide les données
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'position' => 'nullable|integer',
        ]);

        // Met à jour le pays
        $country->update($validatedData);

        return redirect()->route('countries.index')->with('success', 'Country updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        $country->delete(); // Supprime le pays
        return redirect()->route('countries.index')->with('success', 'Country deleted successfully.');
    }
}
