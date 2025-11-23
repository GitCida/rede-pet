<?php

namespace App\Http\Controllers;
use App\Models\Vaccine;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        $created = Vaccine::create($request->all());
        if($created) {
            return redirect()->route('vaccines.index');
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
        $vaccine = Vaccine::findOrFail($id);
        return view('vaccines.edit', ['vaccine' => $vaccine]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vaccine = Vaccine::findOrFail($id);
        $updated = $vaccine->update($request->except(['_token', '_method']));
        if($updated) {
            return redirect()->route('vaccines.index');
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
        $vaccine = Vaccine::findOrFail($id);
        $vaccine->delete();
        return redirect()->back();
    }
}
