@extends('layouts.app')

@section('title', 'Editar Peito')

@section('esq')
    @parent

    @section('conteudo')

@isset($msg)
    <h3 style="margin:10 0;">{{ $msg }}</h3>
    <br>
    <a href="{{ url('/peito') }}"><button type="button" class="btn btn-dark">Voltar</button></a>
@else
    <form method="POST" action="/sisteminha_laravel/public/editarpeito">
        {!! csrf_field() !!}
        <div class="container">
            <input type="hidden" name="id_peito" value="{{ $db->id_peito }}">
            <table class="table table-dark table-bordered" style="text-align:center;">
                <thead>
                    <tr>
                        <th scope="col">Supino Reto</th>
                        <th scope="col">Supino Declinado</th>
                        <th scope="col">Supino Inclinado</th>
                        <th scope="col">Peck Deck</th>
                        <th scope="col">Crucifixo</th>
                        <th scope="col">Crucifixo Inclinado</th>
                        <th scope="col">Crucifixo Declinado</th>
                        <th scope="col">Pullover</th>
                        <th scope="col">Flexões</th>
                        <th scope="col">Press</th>
                        <th scope="col">Press Cabo</th>
                    </tr>
                </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="text" name="supino_reto" class="form-control" value="{{ $db->supino_reto }}"> 
                    </td>
                    <td>
                        <input type="text" name="supino_declinado" class="form-control" value="{{ $db->supino_declinado }}" >
                    </td>
                    <td> 
                        <input type="text" name="supino_inclinado" class="form-control" value="{{ $db->supino_inclinado }}" >
                    </td>
                    <td>
                        <input type="text" name="peck_deck" class="form-control" value="{{ $db->peck_deck }}" >
                    </td>
                    <td>
                        <input type="text" name="crucifixo" class="form-control" value="{{ $db->crucifixo }}" >
                    </td>
                    <td> 
                        <input type="text" name="crucifixo_inclinado" class="form-control" value="{{ $db->crucifixo_inclinado }}" >
                    </td>
                    <td> 
                        <input type="text" name="crucifixo_declinado" class="form-control" value="{{ $db->crucifixo_declinado }}" >
                    </td>
                    <td> 
                        <input type="text" name="pullover" class="form-control" value="{{ $db->pullover }}" >
                    </td>
                    <td> 
                        <input type="text" name="flexoes" class="form-control" value="{{ $db->flexoes }}" >
                    </td>
                    <td> 
                        <input type="text" name="press" class="form-control" value="{{ $db->press }}" >
                    </td>
                    <td> 
                        <input type="text" name="press_cabo" class="form-control" value="{{ $db->press_cabo }}" >
                    </td>
                </tr>
            </tbody>
            </table>
            <input type="submit" name="editar" value="editar" class="btn btn-dark">
            <a href="{{ url('/peito') }}"><button type="button" class="btn btn-dark">Voltar</button></a>
        </div>
    </form>
@endisset
    @endsection
@endsection