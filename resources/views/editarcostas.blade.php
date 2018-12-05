@extends('layouts.app')

@section('title', 'Editar Costas')

@section('esq')
    @parent

    @section('conteudo')
@isset($msg)
    <h3 style="margin:10 0;">{{ $msg }}</h3>
    <br>
    <a href="{{ url('/costas') }}"><button type="button" class="btn btn-dark">Voltar</button></a>
@else
    <form method="POST" action="/sisteminha_laravel/public/editarcostas">
        {!! csrf_field() !!}
        <div class="container">
            <input type="hidden" name="id_costas" value="{{ $db->id_costas }}">
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
                        <input type="text" name="remada_serrote_uni" class="form-control" value="{{ $db->remada_serrote_uni }}"> 
                    </td>
                    <td>
                        <input type="text" name="remada_cabo" class="form-control" value="{{ $db->remada_cabo }}" >
                    </td>
                    <td> 
                        <input type="text" name="remada_smith" class="form-control" value="{{ $db->remada_smith }}" >
                    </td>
                    <td>
                        <input type="text" name="remada_banco_incli" class="form-control" value="{{ $db->remada_banco_incli }}" >
                    </td>
                    <td>
                        <input type="text" name="pull_down" class="form-control" value="{{ $db->pull_down }}" >
                    </td>
                    <td> 
                        <input type="text" name="barra_fixa" class="form-control" value="{{ $db->barra_fixa }}" >
                    </td>
                    <td> 
                        <input type="text" name="puxada_frente" class="form-control" value="{{ $db->puxada_frente }}" >
                    </td>
                    <td> 
                        <input type="text" name="puxada_tras" class="form-control" value="{{ $db->puxada_tras }}" >
                    </td>
                    <td> 
                        <input type="text" name="puxada_triangulo" class="form-control" value="{{ $db->puxada_triangulo }}" >
                    </td>
                    <td> 
                        <input type="text" name="remada_curvada" class="form-control" value="{{ $db->remada_curvada }}" >
                    </td>
                </tr>
            </tbody>
            </table>
            <input type="submit" name="editar" value="editar" class="btn btn-dark">
            <a href="{{ url('/costas') }}"><button type="button" class="btn btn-dark">Voltar</button></a>
        </div>
    </form>
@endisset
    @endsection
@endsection