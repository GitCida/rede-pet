<?php

namespace App\Http\Controllers;
use App\Models\Animal;
use Illuminate\Http\Request;

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
        return view('animals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = Animal::create($request->all());
        if($created) {
            return redirect()->route('animals.index');
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
        $animal = Animal::findOrFail($id);
        return view('animals.edit', ['animal' => $animal]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $animal = Animal::findOrFail($id);
        $updated = $animal->update($request->except(['_token', '_method']));
        if($updated) {
            return redirect()->route('animals.index');
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
        $animal = Animal::findOrFail($id);
        $animal->delete();
        return redirect()->back();
    }
}
