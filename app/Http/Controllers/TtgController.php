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
        $games = ttg::all();
        return view('ttg.index', ['games' => $games]);
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
        $validate = $request->validate([
            'title' => 'required|string|max:200',
            'nop' => 'required|integer',
            'description' => 'required|string|max:200',
        ]);
        ttg::create($validate);
         return redirect(route('ttg.index'));
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

        return view('ttg.edit', ['ttg' => $ttg]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ttg $ttg)
    {
        $validate = $request->validate([
            'title' => 'required|string|max:200',
            'nop' => 'required|integer',
            'description' => 'required|string|max:200',
        ]);
        $ttg->update($validate);
        return redirect(route('ttg.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ttg $ttg)
    {
        $ttg->delete();
        return redirect(route('ttg.index'));
    }
}
