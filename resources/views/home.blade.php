@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="menu">
            <h1>Escolha um Nível:</h1>
            <ul>
                <li class="phase" id="logica">
                    <a href="#">Lógica de Programação</a>
                    <ul class="sub-levels" style="display: none;">
                        <li><a href="">Fácil</a></li>
                        <li><a href="">Intermediário</a></li>
                        <li><a href="">Difícil</a></li>
                    </ul>
                </li>
                <li class="phase" id="css">
                    <a href="#">CSS</a>
                    <ul class="sub-levels" style="display: none;">
                        <li><a href="">Fácil</a></li>
                        <li><a href="">Intermediário</a></li>
                        <li><a href="">Difícil</a></li>
                    </ul>
                </li>
                <li class="phase" id="html">
                    <a href="#">HTML</a>
                    <ul class="sub-levels" style="display: none;">
                        <li><a href="">Fácil</a></li>
                        <li><a href="">Intermediário</a></li>
                        <li><a href="">Difícil</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<script>
    // Função para mostrar/ocultar subníveis ao clicar nas fases principais
    function toggleSubLevels(phaseId) {
        var subLevels = document.getElementById(phaseId).querySelector('.sub-levels');
        if (subLevels.style.display === "none" || subLevels.style.display === "") {
            subLevels.style.display = "block";
        } else {
            subLevels.style.display = "none";
        }
    }

    // Adicione eventos de clique às fases principais
    document.getElementById('logica').addEventListener('click', function() {
        toggleSubLevels('logica');
    });

    document.getElementById('css').addEventListener('click', function() {
        toggleSubLevels('css');
    });

    document.getElementById('html').addEventListener('click', function() {
        toggleSubLevels('html');
    });
</script>
@endsection
