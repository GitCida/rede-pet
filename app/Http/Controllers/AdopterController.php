<?php

namespace App\Http\Controllers;
use App\Models\Adopter;
use App\Http\Requests\AdopterRequest;

class AdopterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adopters = Adopter::all();
        return view('adopters.index', ['adopters' => $adopters]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adopters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdopterRequest $request)
    {
        $created = Adopter::create($request->all());
        if($created) {
            return redirect()->route('adopters.index')->with('message', 'Criado com sucesso!');
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
        $adopter = Adopter::findOrFail($id);
        return view('adopters.edit', ['adopter' => $adopter]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdopterRequest $request, string $id)
    {
        $adopter = Adopter::findOrFail($id);
        $updated = $adopter->update($request->except(['_token', '_method']));
        if($updated) {
            return redirect()->route('adopters.index')->with('message', 'Editado com sucesso!');
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
        $adopter = Adopter::findOrFail($id);
        $adopter->delete();
        return redirect()->back()->with('message', 'Deletado com sucesso!');
    }
}
