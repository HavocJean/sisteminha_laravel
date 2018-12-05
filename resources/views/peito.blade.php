@extends('layouts.app')

@section('title', 'Treino Peito')

@section('esq')
    @parent

    @section('conteudo')
    <div class="container-fluid">
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
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($db as $peito)
                <tr>
                    <td>{{ $peito->supino_reto }} kg</td>
                    <td>{{ $peito->supino_declinado }} kg</td>
                    <td>{{ $peito->supino_inclinado }} kg</td>
                    <td>{{ $peito->peck_deck }} kg</td>
                    <td>{{ $peito->crucifixo }} kg</td>
                    <td>{{ $peito->crucifixo_inclinado }} kg</td>
                    <td>{{ $peito->crucifixo_declinado }} kg</td>
                    <td>{{ $peito->pullover }} kg</td>
                    <td>{{ $peito->flexoes }} x</td>
                    <td>{{ $peito->press }} kg</td>
                    <td>{{ $peito->press_cabo }} kg</td>
                    <td><a href="/sisteminha_laravel/public/editarpeito/{{ $peito->id_peito }}"> Editar </a></td> 
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
<div class="container-fluid">
    <a href="{{ url('/adicionarpeito') }}"><button type="button" class="btn btn-dark">Adicionar Treino</button></a>
    <a href="{{ url('/') }}"><button type="button" class="btn btn-dark">Voltar</button></a>
</div>
    @endsection
@endsection