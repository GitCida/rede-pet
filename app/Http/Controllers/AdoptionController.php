<?php

namespace App\Http\Controllers;
use App\Models\Adoption;
use Illuminate\Http\Request;

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
        return view('adoptions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = Adoption::create($request->all());
        if($created) {
            return redirect()->route('adoptions.index');
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
        $adoption = Adoption::findOrFail($id);
        return view('adoptions.edit', ['adoption' => $adoption]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $adoption = Adoption::findOrFail($id);
        $updated = $adoption->update($request->except(['_token', '_method']));
        if($updated) {
            return redirect()->route('adoptions.index');
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
        $adoption = Adoption::findOrFail($id);
        $adoption->delete();
        return redirect()->back();
    }
}
