<?php

namespace App\Http\Controllers;

use App\Models\Logica;
use App\Models\Rank;
use Illuminate\Support\Facades\Auth;
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
        $contador = $request->correct_answers;
        $respostas_corretas = $request->resposta_correta;
        $selected_options = $request->selected_option;
        $pontos = $request->pontos;

        if ($contador >= 4) {
            // Obtém o ID do usuário logado
            $userId = Auth::id();
            $valor = $contador * $pontos;
            $rank = new rank();
            $rank->user_id = $userId;
            $rank->pontos_id = $valor;
            $rank->save();

              // Retornar a view com os resultados
              return view('logica.index', compact('contador', 'respostas_corretas'));
        } else {
            // Retornar a view com os resultados
            return view('logica.index', compact('contador', 'respostas_corretas'));
        }
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
