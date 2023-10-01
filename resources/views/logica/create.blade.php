@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <h4><span>Lógica de Programação</span></h4>
                <div class="col-lg-12">
                    <form action="{{ route('logica.store') }}" method="POST">
                        @csrf
                        <table>
                            <tbody>
                                @foreach ($perguntas as $value)
                                <tr>
                                    <td>
                                        <h5 id="question">{{ $value->pergunta }}</h5>
                                        <hr>
                                        <ul id="options">
                                            <li>
                                                <input type="radio" name="select" value="{{ $value->opcao1 }}">
                                                {{ $value->opcao1 }}
                                            </li>
                                            <li>
                                                <input type="radio" name="select" value="{{ $value->opcao2 }}">
                                                {{ $value->opcao2 }}
                                            </li>
                                            <li>
                                                <input type="radio" name="select" value="{{ $value->opcao3 }}">
                                                {{ $value->opcao3 }}
                                            </li>
                                            <li>
                                                <input type="radio" name="select" value="{{ $value->opcao4 }}">
                                                {{ $value->opcao4 }}
                                            </li>
                                        </ul>
                                        <hr>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button type="submit" class="orange-button">Próxima pergunta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
