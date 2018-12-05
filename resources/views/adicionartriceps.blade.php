@extends('layouts.app')

@section('title', 'Adicionar Triceps')

@section('esq')
    @parent

    @section('conteudo')

@isset($msg)
    <h3 style="margin:10 0;">{{ $msg }}</h3>
    <br>
    <a href="{{ url('/triceps') }}"><button type="button" class="btn btn-dark">Voltar</button></a>
@else
<form method="POST" action="/sisteminha_laravel/public/adicionartriceps">
    {!! csrf_field() !!}
    <div class="container">
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
                    <input type="text" name="barra_paralela" class="form-control" value="0"> 
                </td>
                <td>
                    <input type="text" name="supino_fechado" class="form-control" value="0" >
                </td>
                <td> 
                    <input type="text" name="puxada_triceps" class="form-control" value="0" >
                </td>
                <td>
                    <input type="text" name="puxada_triceps_supe" class="form-control" value="0" >
                </td>
                <td>
                    <input type="text" name="puxada_triceps_corda" class="form-control" value="0" >
                </td>
                <td> 
                    <input type="text" name="extensao_barra_deitado" class="form-control" value="0" >
                </td>
                <td> 
                    <input type="text" name="extensao_barra_sentado" class="form-control" value="0" >
                </td>
                <td> 
                    <input type="text" name="extensao_senta_halter" class="form-control" value="0" >
                </td>
                <td> 
                    <input type="text" name="coice_halter" class="form-control" value="0" >
                </td>
                <td> 
                    <input type="text" name="coice_corda" class="form-control" value="0" >
                </td>
                <td> 
                    <input type="text" name="mergulho_banco" class="form-control" value="0" >
                </td>
                <td> 
                    <input type="text" name="triceps_banco" class="form-control" value="0" >
                </td>
                <td> 
                    <input type="text" name="triceps_frances" class="form-control" value="0" >
                </td>
                <td> 
                    <input type="text" name="triceps_maquina" class="form-control" value="0" >
                </td>
            </tr>
        </tbody>
        </table>
        <input type="submit" name="confirmar" value="confirmar" class="btn btn-dark">
        <a href="{{ url('/triceps') }}"><button type="button" class="btn btn-dark">Voltar</button></a>
    </div>
</form>
@endisset
    @endsection
@endsection