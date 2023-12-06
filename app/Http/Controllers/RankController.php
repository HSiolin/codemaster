<?php

namespace App\Http\Controllers;

use App\Models\rank;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Logica;
use Illuminate\Http\Request;

class RankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = Rank::join('users', 'ranks.user_id', '=', 'users.id')
            ->groupBy('users.user', 'ranks.pontos_id')
            ->selectRaw('users.user as user, SUM(ranks.pontos_id) as total_pontos')
            ->orderByDesc('total_pontos') // Ordena em ordem decrescente pela soma dos pontos
            ->get();

        return view('rank.index', compact('dados'));
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
     * @param  \App\Models\rank  $rank
     * @return \Illuminate\Http\Response
     */
    public function show(rank $rank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rank  $rank
     * @return \Illuminate\Http\Response
     */
    public function edit(rank $rank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rank  $rank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rank $rank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rank  $rank
     * @return \Illuminate\Http\Response
     */
    public function destroy(rank $rank)
    {
        //
    }
}
