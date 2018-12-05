@extends('layouts.app')

@section('title', 'Treino Triceps')

@section('esq')
    @parent

    @section('conteudo')
    <div class="container-fluid">
        <table class="table table-dark table-bordered" style="text-align:center;">
            <thead>
                <tr>
                    <th scope="col">Barra Paralela</th>
                    <th scope="col">Supino Fechado</th>
                    <th scope="col">Puxada Triceps</th>
                    <th scope="col">Triceps Supinação</th>
                    <th scope="col">Triceps Corda</th>
                    <th scope="col">Extensão Barra Deitado</th>
                    <th scope="col">Extensão Barra Sentado</th>
                    <th scope="col">Extensão Sentado Halter</th>
                    <th scope="col">Coice Halter</th>
                    <th scope="col">Coice Corda</th>
                    <th scope="col">Mergulho no Banco</th>
                    <th scope="col">Triceps Banco</th>
                    <th scope="col">Triceps Frânces</th>
                    <th scope="col">Triceps Maquina</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($db as $triceps)
                <tr>
                    <td>{{ $triceps->barra_paralela }} x</td>
                    <td>{{ $triceps->supino_fechado }} kg</td>
                    <td>{{ $triceps->puxada_triceps }} kg</td>
                    <td>{{ $triceps->puxada_triceps_supe }} kg</td>
                    <td>{{ $triceps->puxada_triceps_corda }} kg</td>
                    <td>{{ $triceps->extensao_barra_deitado }} kg</td>
                    <td>{{ $triceps->extensao_barra_sentado }} kg</td>
                    <td>{{ $triceps->extensao_senta_halter }} kg</td>
                    <td>{{ $triceps->coice_halter }} kg</td>
                    <td>{{ $triceps->coice_corda }} kg</td>
                    <td>{{ $triceps->mergulho_banco }} x</td>
                    <td>{{ $triceps->triceps_banco }} kg</td>
                    <td>{{ $triceps->triceps_frances }} kg</td>
                    <td>{{ $triceps->triceps_maquina }} kg</td>
                    <td><a href="/sisteminha_laravel/public/editartriceps/{{ $triceps->id_triceps }}"> Editar </a></td> 
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
<div class="container-fluid">
    <a href="{{ url('/adicionartriceps') }}"><button type="button" class="btn btn-dark">Adicionar Treino</button></a>
    <a href="{{ url('/') }}"><button type="button" class="btn btn-dark">Voltar</button></a>
</div>
    @endsection
@endsection