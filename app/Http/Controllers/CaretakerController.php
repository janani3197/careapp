<?php

namespace App\Http\Controllers;

use App\Models\Caretaker;
use Illuminate\Http\Request;

class CaretakerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $caretakers = User::where('role', 'caretaker')->get();
        $caretakers = User::where('role', 'patient')->get();

        return view('index', compact('things'));

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
    public function show(Caretaker $caretaker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Caretaker $caretaker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Caretaker $caretaker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Caretaker $caretaker)
    {
        //
    }

    public function janani()
    {
        return view();
    }
}
