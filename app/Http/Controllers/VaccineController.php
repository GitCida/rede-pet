<?php

namespace App\Http\Controllers;
use App\Models\Vaccine;
use App\Http\Requests\VaccineRequest;

class VaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vaccines = Vaccine::all();
        return view('vaccines.index', ['vaccines' => $vaccines]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vaccines.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VaccineRequest $request)
    {
        $created = Vaccine::create($request->all());
        if($created) {
            return redirect()->route('vaccines.index')->with('message', 'Criado com sucesso!');
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
        $vaccine = Vaccine::findOrFail($id);
        return view('vaccines.edit', ['vaccine' => $vaccine]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VaccineRequest $request, string $id)
    {
        $vaccine = Vaccine::findOrFail($id);
        $updated = $vaccine->update($request->except(['_token', '_method']));
        if($updated) {
            return redirect()->route('vaccines.index')->with('message', 'Editado com sucesso!');
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
        $vaccine = Vaccine::findOrFail($id);
        $vaccine->delete();
        return redirect()->back()->with('message', 'Deletado com sucesso!');
    }
}
