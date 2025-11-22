<?php

namespace App\Http\Controllers;
use App\Models\Species;
use Illuminate\Http\Request;

class SpeciesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $species = Species::all();
        return view('species.index', ['species' => $species]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('species.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = Species::create($request->all());
        if($created) {
            return redirect()->route('species.index');
        }
        else {
            return redirect()->back();
        }
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
        $specie = Species::findOrFail($id);
        return view('species.edit', ['specie' => $specie]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $specie = Species::findOrFail($id);
        $updated = $specie->update($request->except(['_token', '_method']));
        if($updated) {
            return redirect()->route('species.index');
        }
        else {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $specie = Species::findOrFail($id);
        $specie->delete();
        return redirect()->back();
    }
}
