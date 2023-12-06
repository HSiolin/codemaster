<?php

namespace App\Http\Controllers;

use App\Models\Html;
use App\Models\Rank;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HtmlController extends Controller
{

    public function subfases_html()
    {
       
    }
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
        $nivel = request()->input('nivel');

        $pergunta = HTML::where('subfase', $nivel)->get();
        return view('html.create', compact('pergunta'));
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
              return view('html.index', compact('contador', 'respostas_corretas'));
        } else {
            // Retornar a view com os resultados
            return view('html.index', compact('contador', 'respostas_corretas'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Html  $html
     * @return \Illuminate\Http\Response
     */
    public function show(Html $html)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Html  $html
     * @return \Illuminate\Http\Response
     */
    public function edit(Html $html)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Html  $html
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Html $html)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Html  $html
     * @return \Illuminate\Http\Response
     */
    public function destroy(Html $html)
    {
        //
    }
}
