@extends('layouts.app')

@section('content')
    <!-- ***** Top 3 start ***** -->

    <div class="question section" id="question">

        <div class="row">
            <div class="col-lg-15">
                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-heading">
                                <h3 class="text-center">Rank de classificação dos jogadores do jogo</h3>
                                <div class="line-dec"></div>
                            </div>

                            <div class="text-center"> {{-- Corrected indentation --}}
                                <div class="section-body">

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Jogadores</th>
                                                <th scope="col">Pontos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($dados as $value)
                                                <tr>
                                                    <td>{{ $value->user }}</td>
                                                    <td>{{ $value->total_pontos }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>


                                    <br>
                                    <div class="line-dec"></div>

                                    <a type="button" class="btn btn-outline-secondary"
                                        href="javascript:history.go(-1)">Voltar</a>
                                    <br>
                                    <br>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
