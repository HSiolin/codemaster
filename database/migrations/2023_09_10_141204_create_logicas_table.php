<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logicas', function (Blueprint $table) {
            $table->id();
            $table->string('pergunta');
            $table->string('resposta_correta');
            $table->string('opcao1');
            $table->string('opcao2');
            $table->string('opcao3');
            $table->string('opcao4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logicas');
    }
};
