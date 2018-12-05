@extends('layouts.app')

@section('title', 'Treino Costas')

@section('esq')
    @parent

    @section('conteudo')
    <div class="container-fluid">
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
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($db as $costas)
                <tr>
                    <td>{{ $costas->remada_serrote_uni }} kg</td>
                    <td>{{ $costas->remada_cabo }} kg</td>
                    <td>{{ $costas->remada_smith }} kg</td>
                    <td>{{ $costas->remada_banco_incli }} kg</td>
                    <td>{{ $costas->pull_down }} kg</td>
                    <td>{{ $costas->barra_fixa }} kg</td>
                    <td>{{ $costas->puxada_frente }} kg</td>
                    <td>{{ $costas->puxada_tras }} kg</td>
                    <td>{{ $costas->puxada_triangulo }} kg</td>
                    <td>{{ $costas->remada_curvada }} kg</td>
                    <td><a href="/sisteminha_laravel/public/editarcostas/{{ $costas->id_costas }}"> Editar </a></td> 
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
<div class="container-fluid">
    <a href="{{ url('/adicionarcostas') }}"><button type="button" class="btn btn-dark">Adicionar Treino</button></a>
    <a href="{{ url('/') }}"><button type="button" class="btn btn-dark">Voltar</button></a>
</div>
    @endsection
@endsection