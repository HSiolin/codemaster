<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Html extends Model
{
    protected $fillable = [
        'pergunta', 'resposta_correta', 'subfase', 'opcao1', 'opcao2','opcao3','opcao4'
    ];
}
