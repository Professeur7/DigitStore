<?php

namespace App\Http\Controllers;

use App\Models\Adresses;
use Illuminate\Http\Request;

class AdressesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adresses = Adresses::all();
        return view('backend.adresses.index', compact('adresses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Adresses $adresses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Adresses $adresses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Adresses $adresses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Adresses $adresses): void
    {
        //
    }
}
