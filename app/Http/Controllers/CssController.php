<?php

namespace App\Http\Controllers;

use App\Models\Css;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CssController extends Controller
{
    public function subfases_css()
    {
        // Lógica para armazenar a subfase
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

        $pergunta = CSS::where('subfase', $nivel)->get();
        return view('css.create', compact('pergunta'));
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
     * @param  \App\Models\Css  $css
     * @return \Illuminate\Http\Response
     */
    public function show(Css $css)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Css  $css
     * @return \Illuminate\Http\Response
     */
    public function edit(Css $css)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Css  $css
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Css $css)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Css  $css
     * @return \Illuminate\Http\Response
     */
    public function destroy(Css $css)
    {
        //
    }
}
