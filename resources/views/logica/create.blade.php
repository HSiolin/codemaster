@extends('layouts.app')

@section('content')
    <!-- ***** Top 3 start ***** -->
    <div class="question section" id="question">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-heading">
                                <h5 class="text-center">Lógica de Programação</h5>
                                <form action="{{ route('logica.store') }}" method="POST" id="quizForm">
                                    @csrf
                                    @foreach ($pergunta as $value)
                                        <div class="skills">
                                            <div class="line-dec"></div>
                                            <h2><span>{{ $value->pergunta }} </span></h2>
                                            <div class="line-dec"></div>
                                        </div>

                                        <div class="options">
                                            <div class="skills">
                                                @for ($i = 1; $i <= 4; $i++)
                                                    <div class="skill-slide media">
                                                        <div class="option-button"
                                                            onclick="selectOption(this, {{ $value->id }})">
                                                            <input type="radio"
                                                                name="selected_option[{{ $value->id }}]"
                                                                value="{{ $value->{'opcao' . $i} }}">
                                                            {{ $value->{'opcao' . $i} }}
                                                        </div>
                                                    </div>
                                                @endfor

                                                <input type="hidden" name="resposta_correta[{{ $value->id }}]"
                                                    id="resposta_correta_{{ $value->id }}"
                                                    value="{{ $value->resposta_correta }}">

                                                <input type="hidden" name="pontos"
                                                    id="pontos_{{ $value->id }}" value="{{ $value->pontos }}">
                                            </div>
                                        </div>
                                    @endforeach

                                    <input type="hidden" name="correct_answers" value="" id="correctAnswersInput">

                                    <button type="button" onclick="submitForm()" class="btn-grey">Finalizar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function selectOption(button, questionId) {
            // Desmarcar todos os botões da mesma pergunta
            var buttons = document.querySelectorAll('.option-button');
            buttons.forEach(function(btn) {
                if (btn.querySelector('input').name === 'selected_option[' + questionId + ']') {
                    btn.classList.remove('selected');
                }
            });

            // Marcar o botão selecionado
            button.classList.add('selected');

            // Atualizar o valor no input hidden
            var selectedValue = button.querySelector('input').value;
            document.getElementById('resposta_correta_' + questionId).value = selectedValue;
        }

        function submitForm() {
            var form = document.getElementById('quizForm');
            var formData = new FormData(form);

            var userAnswers = {};
            formData.forEach(function(value, key) {
                if (key.startsWith('selected_option')) {
                    var questionId = key.replace('selected_option[', '').replace(']', '');
                    userAnswers[questionId] = value;
                }
            });

            var correctAnswers = 0;
            @foreach ($pergunta as $value)
                var questionId = '{{ $value->id }}';
                var correctAnswer = '{{ $value->resposta_correta }}';
                if (userAnswers[questionId] === correctAnswer) {
                    correctAnswers++;
                }
            @endforeach

            // Definir o valor do input hidden com o número de respostas corretas
            document.getElementById('correctAnswersInput').value = correctAnswers;

            // Submeter o formulário
            form.submit();
        }
    </script>
@endsection
