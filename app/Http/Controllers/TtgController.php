<?php

namespace App\Http\Controllers;

use App\Models\ttg;
use Illuminate\Http\Request;

class TtgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response('We are in the ttg controller');
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
    public function show(ttg $ttg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ttg $ttg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ttg $ttg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ttg $ttg)
    {
        //
    }
}
