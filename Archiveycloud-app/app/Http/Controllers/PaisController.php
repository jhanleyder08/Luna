<?php

namespace App\Http\Controllers;

use App\Models\pais;
use App\Http\Requests\StorepaisRequest;
use App\Http\Requests\UpdatepaisRequest;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepaisRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepaisRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function show(pais $pais)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function edit(pais $pais)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepaisRequest  $request
     * @param  \App\Models\pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepaisRequest $request, pais $pais)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function destroy(pais $pais)
    {
        //
    }
}
