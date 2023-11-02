<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function faqs()
    {
        return view('site.faqs');
    }
    
    public function ias()
    {
        return view('site.ias');
    }

    public function jogos()
    {
        return view('site.jogos');
    }

    public function linguagens()
    {
        return view('site.linguagens');
    }

    public function tendencias()
    {
        return view('site.tendencias');
    }
}
