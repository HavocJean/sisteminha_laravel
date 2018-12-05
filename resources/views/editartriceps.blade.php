@extends('layouts.app')

@section('title', 'Editar Triceps')

@section('esq')
    @parent

    @section('conteudo')

@isset($msg)
    <h3 style="margin:10 0;">{{ $msg }}</h3>
    <br>
    <a href="{{ url('/triceps') }}"><button type="button" class="btn btn-dark">Voltar</button></a>
@else
    <form method="POST" action="/sisteminha_laravel/public/editartriceps">
        {!! csrf_field() !!}
        <div class="container">
            <input type="hidden" name="id_triceps" value="{{ $db->id_triceps }}">
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
                    </tr>
                </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="text" name="barra_paralela" class="form-control" value="{{ $db->barra_paralela }}"> 
                    </td>
                    <td>
                        <input type="text" name="supino_fechado" class="form-control" value="{{ $db->supino_fechado }}" >
                    </td>
                    <td> 
                        <input type="text" name="puxada_triceps" class="form-control" value="{{ $db->puxada_triceps }}" >
                    </td>
                    <td>
                        <input type="text" name="puxada_triceps_supe" class="form-control" value="{{ $db->puxada_triceps_supe }}" >
                    </td>
                    <td>
                        <input type="text" name="puxada_triceps_corda" class="form-control" value="{{ $db->puxada_triceps_corda }}" >
                    </td>
                    <td> 
                        <input type="text" name="extensao_barra_deitado" class="form-control" value="{{ $db->extensao_barra_deitado }}" >
                    </td>
                    <td> 
                        <input type="text" name="extensao_barra_sentado" class="form-control" value="{{ $db->extensao_barra_sentado }}" >
                    </td>
                    <td> 
                        <input type="text" name="extensao_senta_halter" class="form-control" value="{{ $db->extensao_senta_halter }}" >
                    </td>
                    <td> 
                        <input type="text" name="coice_halter" class="form-control" value="{{ $db->coice_halter }}" >
                    </td>
                    <td> 
                        <input type="text" name="coice_corda" class="form-control" value="{{ $db->coice_corda }}" >
                    </td>
                    <td> 
                        <input type="text" name="mergulho_banco" class="form-control" value="{{ $db->mergulho_banco }}" >
                    </td>
                    <td> 
                        <input type="text" name="triceps_banco" class="form-control" value="{{ $db->triceps_banco }}" >
                    </td>
                    <td> 
                        <input type="text" name="triceps_frances" class="form-control" value="{{ $db->triceps_frances }}" >
                    </td>
                    <td> 
                        <input type="text" name="triceps_maquina" class="form-control" value="{{ $db->triceps_maquina }}" >
                    </td>
                </tr>
            </tbody>
            </table>
            <input type="submit" name="editar" value="editar" class="btn btn-dark">
            <a href="{{ url('/triceps') }}"><button type="button" class="btn btn-dark">Voltar</button></a>
        </div>
    </form>
@endisset
    @endsection
@endsection