@extends('layouts.app')

@section('title', 'Adicionar Costas')

@section('esq')
    @parent

    @section('conteudo')

@isset($msg)
    <h3 style="margin:10 0;">{{ $msg }}</h3>
    <br>
    <a href="{{ url('/costas') }}"><button type="button" class="btn btn-dark">Voltar</button></a>
@else
<form method="POST" action="/sisteminha_laravel/public/adicionarcostas">
    {!! csrf_field() !!}
    <div class="container">
        <table class="table table-dark table-bordered" style="text-align:center;">
            <thead>
                <tr>
                    <th scope="col">Remada Serrote Unilateral</th>
                    <th scope="col">Remada Cabo</th>
                    <th scope="col">Remada Smith</th>
                    <th scope="col">Remada Banco Inclinado</th>
                    <th scope="col">Pull Down</th>
                    <th scope="col">Barra Fixa</th>
                    <th scope="col">Puxador Frente</th>
                    <th scope="col">Puxador Atrás</th>
                    <th scope="col">Puxada Triangulo</th>
                    <th scope="col">Remada Curvada</th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <td>
                    <input type="text" name="remada_serrote_uni" class="form-control" value="0"> 
                </td>
                <td>
                    <input type="text" name="remada_cabo" class="form-control" value="0" >
                </td>
                <td> 
                    <input type="text" name="remada_smith" class="form-control" value="0" >
                </td>
                <td>
                    <input type="text" name="remada_banco_incli" class="form-control" value="0" >
                </td>
                <td>
                    <input type="text" name="pull_down" class="form-control" value="0" >
                </td>
                <td> 
                    <input type="text" name="barra_fixa" class="form-control" value="0" >
                </td>
                <td> 
                    <input type="text" name="puxada_frente" class="form-control" value="0" >
                </td>
                <td> 
                    <input type="text" name="puxada_tras" class="form-control" value="0" >
                </td>
                <td> 
                    <input type="text" name="puxada_triangulo" class="form-control" value="0" >
                </td>
                <td> 
                    <input type="text" name="remada_curvada" class="form-control" value="0" >
                </td>
            </tr>
        </tbody>
        </table>
        <input type="submit" name="confirmar" value="confirmar" class="btn btn-dark">
        <a href="{{ url('/costas') }}"><button type="button" class="btn btn-dark">Voltar</button></a>
    </div>
</form>
@endisset
    @endsection
@endsection