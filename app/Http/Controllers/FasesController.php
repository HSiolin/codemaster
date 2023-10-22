<?php

namespace App\Http\Controllers;

use App\Models\Fases;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('niveis.fases');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fases  $fases
     * @return \Illuminate\Http\Response
     */
    public function show(Fases $fases)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fases  $fases
     * @return \Illuminate\Http\Response
     */
    public function edit(Fases $fases)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fases  $fases
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fases $fases)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fases  $fases
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fases $fases)
    {
        //
    }


}
