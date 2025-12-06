<?php

namespace App\Http\Controllers;
use App\Models\Animal;
use App\Models\Species;
use App\Http\Requests\AnimalRequest;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals = Animal::all();
        return view('animals.index', ['animals' => $animals]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $species = Species::all();
        return view('animals.create', compact('species'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AnimalRequest $request)
    {
        $created = Animal::create($request->all());
        if($created) {
            return redirect()->route('animals.index')->with('message', 'Criado com sucesso!');
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
        $species = Species::all();

        $animal = Animal::findOrFail($id);
        return view('animals.edit', compact('animal', 'species'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AnimalRequest $request, string $id)
    {
        $animal = Animal::findOrFail($id);
        $updated = $animal->update($request->except(['_token', '_method']));
        if($updated) {
            return redirect()->route('animals.index')->with('message', 'Editado com sucesso!');
        }
        else {
            return redirect()->back()->with('message', 'Não foi possível editar');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();
        return redirect()->back()->with('message', 'Deletado com sucesso!');
    }
}
