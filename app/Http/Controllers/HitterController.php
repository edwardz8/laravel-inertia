<?php

namespace App\Http\Controllers;

use App\Models\Hitter;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HitterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Hitters/Index', [
            'hitters' => Hitter::latest()->get()
        ]);
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
    public function show(Hitter $hitter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hitter $hitter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hitter $hitter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hitter $hitter)
    {
        //
    }
}
