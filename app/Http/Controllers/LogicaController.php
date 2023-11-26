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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nivel = request()->input('nivel');

        $pergunta = Logica::where('subfase', $nivel)->get();
        return view('logica.create', compact('pergunta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $contador_acertos = 0;
        $respostas_corretas = $request->resposta_correta;
        $selected_options = $request->selected_option;
    
        foreach ($selected_options as $select) {
            // Incrementa o contador para cada opção selecionada
            $contador_acertos++;
        }
    
        // Obtém o total de respostas corretas
        $dados = count($respostas_corretas);
        return view('logica.index', compact('contador_acertos', 'dados', 'respostas_corretas'));
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
