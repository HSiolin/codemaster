@extends('layouts.app')

@section('content')
    <div class="infos section" id="infos">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-2 text-center">
                    <a type="button" href="{{ route('subfases_logica') }}" class="start-button mb-3">Lógica</a>

                    <a type="button" href="{{ route('subfases_html') }}" class="start-button mb-3" onclick="startGame('html')">HTML</a>
                    <a type="button" href="{{ route('subfases_css') }}" class="start-button mb-3" onclick="startGame('css')">CSS</a>
                </div>
            </div>
        </div>
    </div>
@endsection




@if (session('erro'))
    <div id="custom-alert" class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('erro') }}

    </div>

    <script>
        // Certifique-se de incluir jQuery e Popper.js antes do Bootstrap
        // Este exemplo assume que você já carregou jQuery e Popper.js

        // Adicione o código para fechar o alerta automaticamente após alguns segundos, se necessário
        setTimeout(function() {
            $("#custom-alert").alert('close');
        }, 5000); // Fecha o alerta após 5 segundos
    </script>
@endif
