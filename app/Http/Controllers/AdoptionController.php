<?php

namespace App\Http\Controllers;
use App\Models\Adoption;
use App\Models\Animal;
use App\Models\Adopter;
use App\Http\Requests\AdoptionRequest;

class AdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adoptions = Adoption::all();
        return view('adoptions.index', ['adoptions' => $adoptions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $animals = Animal::all();
        $adopters = Adopter::all();
        return view('adoptions.create', compact('animals', 'adopters'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdoptionRequest $request)
    {
        $created = Adoption::create($request->all());
        if($created) {
            return redirect()->route('adoptions.index')->with('message', 'Criado com sucesso!');
        }
        else {
            return redirect()->back()->with('message', 'Não foi possível criar.');
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
        $animals = Animal::all();
        $adopters = Adopter::all();
        $adoption = Adoption::findOrFail($id);
        return view('adoptions.edit', compact('adoption', 'animals', 'adopters'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdoptionRequest $request, string $id)
    {
        $adoption = Adoption::findOrFail($id);
        $updated = $adoption->update($request->except(['_token', '_method']));
        if($updated) {
            return redirect()->route('adoptions.index')->with('message', 'Editado com sucesso!');
        }
        else {
            return redirect()->back()->with('message', 'Não foi possível editar.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $adoption = Adoption::findOrFail($id);
        $adoption->delete();
        return redirect()->back()->with('message', 'Deletado com sucesso!');
    }
}
