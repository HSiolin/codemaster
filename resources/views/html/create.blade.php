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
                                <h5 class="text-center">HTML</h5>
                                <form action="{{ route('html.store') }}" method="POST">
                                    @csrf
                                    @foreach ($pergunta as $value)
                                        <div class="skills">
                                            <div class="line-dec"></div>
                                            <h2><span>{{ $value->pergunta }} </span></h2>
                                            <div class="line-dec"></div>
                                        </div>

                                        <div class="options">
                                            <div class="skills">
                                                <div class="skill-slide media">
                                                    <div class="option-button" onclick="selectOption(this)">
                                                        <input type="radio" name="selected_option[{{ $value->id }}]"
                                                            value="{{ $value->opcao1 }}">
                                                        {{ $value->opcao1 }}
                                                    </div>
                                                </div>

                                                <div class="skill-slide media">
                                                    <div class="option-button" onclick="selectOption(this)">
                                                        <input type="radio" name="selected_option[{{ $value->id }}]"
                                                            value="{{ $value->opcao2 }}">
                                                        {{ $value->opcao2 }}
                                                    </div>
                                                </div>

                                                <div class="skill-slide media">
                                                    <div class="option-button" onclick="selectOption(this)">
                                                        <input type="radio" name="selected_option[{{ $value->id }}]"
                                                            value="{{ $value->opcao3 }}">
                                                        {{ $value->opcao3 }}
                                                    </div>
                                                </div>

                                                <div class="skill-slide media">
                                                    <div class="option-button" onclick="selectOption(this)">
                                                        <input type="radio" name="selected_option[{{ $value->id }}]"
                                                            value="{{ $value->opcao4 }}">
                                                        {{ $value->opcao4 }}
                                                    </div>
                                                </div>

                                                
                                                <input type="hidden" name="resposta_correta[]" id="resposta_correta"
                                                    value="{{ $value->resposta_correta }}">
                                            </div>
                                        </div>
                                    @endforeach

                                    <button type="submit" class="btn-grey">Finalizar</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** top 3 end ***** -->
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
            document.getElementBy
            Id('resposta_correta').value = selectedValue;
        }
    </script>
@endsection
