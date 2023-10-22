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
         // Recupera uma pergunta aleatória
       $pergunta = Logica::inRandomOrder()->first();
        return view('logica/create', compact('pergunta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $respostaSelecionada = $request->input('selected_option');
            $respostaCorreta = $request->input('resposta_correta');
        
            if ($respostaSelecionada == $respostaCorreta) {
                // A resposta está correta, redirecionar para a próxima pergunta
                // Você pode implementar a lógica para obter a próxima pergunta e redirecionar
                // Vou usar uma rota fictícia 'proxima-pergunta' como exemplo
                return redirect()->route('logica/create');
            } else {
                // A resposta está incorreta, exibir uma mensagem de erro e redirecionar para a página de fases
                // Adicionando uma mensagem de erro à sessão
                return redirect()->route('fases')->with('erro', 'Resposta incorreta! Tente novamente.');
            }
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

      //------------Subfases-------------
         
        public function subfases_logica($nivel)
        {
            // Defina a condição de dificuldade com base no parâmetro $nivel
            $condicaoDificuldade = '';
        
            switch ($nivel) {
                case 'facil':
                    $condicaoDificuldade = 'facil';
                    break;
                case 'medio':
                    $condicaoDificuldade = 'medio';
                    break;
                case 'dificil':
                    $condicaoDificuldade = 'dificil';
                    break;
                default:
                    // Se nenhum nível válido for fornecido, redirecione ou trate de outra forma
                    return redirect()->route('fases')->with('erro', 'Nível inválido.');
            }
        
            // Recupere uma pergunta aleatória com base na condição de dificuldade
            $pergunta = Logica::where('dificuldade', $condicaoDificuldade)->inRandomOrder()->first();
        
            return view('niveis.subfases', compact('pergunta', 'nivel'));
        }
      
}
