<?php

namespace App\Http\Controllers;

use App\Models\Logica;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogicaController extends Controller
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
        $perguntas = Logica::All();
        return view('logica/create', compact('perguntas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pergunta = Logica::where('resposta_correta')->first();
       
       dd($pergunta);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logica  $logica
     * @return \Illuminate\Http\Response
     */
    public function show(Logica $logica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logica  $logica
     * @return \Illuminate\Http\Response
     */
    public function edit(Logica $logica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logica  $logica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logica $logica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logica  $logica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logica $logica)
    {
        //
    }
}
