@extends('layouts.app')

@section('title', 'Adicionar Peito')

@section('esq')
    @parent

    @section('conteudo')

@isset($msg)
    <h3 style="margin:10 0;">{{ $msg }}</h3>
    <br>
    <a href="{{ url('/peito') }}"><button type="button" class="btn btn-dark">Voltar</button></a>
@else
<form method="POST" action="/sisteminha_laravel/public/adicionarpeito">
    {!! csrf_field() !!}
    <div class="container">
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
                    <input type="text" name="supino_reto" class="form-control" value="0"> 
                </td>
                <td>
                    <input type="text" name="supino_declinado" class="form-control" value="0" >
                </td>
                <td> 
                    <input type="text" name="supino_inclinado" class="form-control" value="0" >
                </td>
                <td>
                    <input type="text" name="peck_deck" class="form-control" value="0" >
                </td>
                <td>
                    <input type="text" name="crucifixo" class="form-control" value="0" >
                </td>
                <td> 
                    <input type="text" name="crucifixo_inclinado" class="form-control" value="0" >
                </td>
                <td> 
                    <input type="text" name="crucifixo_declinado" class="form-control" value="0" >
                </td>
                <td> 
                    <input type="text" name="pullover" class="form-control" value="0" >
                </td>
                <td> 
                    <input type="text" name="flexoes" class="form-control" value="0" >
                </td>
                <td> 
                    <input type="text" name="press" class="form-control" value="0" >
                </td>
                <td> 
                    <input type="text" name="press_cabo" class="form-control" value="0" >
                </td>
            </tr>
        </tbody>
        </table>
        <input type="submit" name="confirmar" value="confirmar" class="btn btn-dark">
        <a href="{{ url('/peito') }}"><button type="button" class="btn btn-dark">Voltar</button></a>
    </div>
</form>
@endisset
    @endsection
@endsection