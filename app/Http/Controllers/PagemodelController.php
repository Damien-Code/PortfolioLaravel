<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorepagemodelRequest;
use App\Http\Requests\UpdatepagemodelRequest;
use App\Models\pagemodel;

class PagemodelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        require view('index');
    }

    public function contact()
    {
        require view('contact');

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
    public function store(StorepagemodelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(pagemodel $pagemodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pagemodel $pagemodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepagemodelRequest $request, pagemodel $pagemodel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pagemodel $pagemodel)
    {
        //
    }
}
