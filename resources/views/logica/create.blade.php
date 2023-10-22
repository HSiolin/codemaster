@extends('layouts.app')

@section('content')
<div class="quiz-container">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <h5><span>Lógica de Programação</span></h5>
                <div class="col-lg-12">
                    <form action="{{ route('logica.store') }}" method="POST">
                        @csrf
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <h3 id="question">{{ $pergunta->pergunta }}</h3>
                                        <hr>
                                        <div class="options">
                                            <div class="option-button" onclick="selectOption(this)" data-value="{{ $pergunta->opcao1 }}">
                                                {{ $pergunta->opcao1 }}
                                            </div>
                                            <br>
                                            <div class="option-button" onclick="selectOption(this)" data-value="{{ $pergunta->opcao2 }}">
                                                {{ $pergunta->opcao2 }}
                                            </div>
                                            <br>
                                            <div class="option-button" onclick="selectOption(this)" data-value="{{ $pergunta->opcao3 }}">
                                                {{ $pergunta->opcao3 }}
                                            </div>
                                            <br>
                                            <div class="option-button" onclick="selectOption(this)" data-value="{{ $pergunta->opcao4 }}">
                                                {{ $pergunta->opcao4 }}
                                            </div>
                                        </div>
                                        <hr>
                                         <input type="hidden" name="selected_option" id="selected_option" value="">
                                         <input type="hidden" name="resposta_correta" id="resposta_correta" value="{{ $pergunta->resposta_correta }}">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="orange-button">Próxima pergunta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function selectOption(button) {
        // Desmarcar todos os botões
        var buttons = document.querySelectorAll('.option-button');
        buttons.forEach(function(btn) {
            btn.classList.remove('selected');
        });

        // Marcar o botão selecionado
        button.classList.add('selected');

        // Atualizar o valor no input hidden
        var selectedValue = button.getAttribute('data-value');
        document.getElementById('selected_option').value = selectedValue;
    }
</script>
@endsection
