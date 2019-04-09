@extends('modeloPage')

@section('tituloPagina')
Produto > Listar
@stop

@section('conteudoPrincipal')
    <div class="row">
        <div class="col-12 col-sm-12">
            <h4>Lista de produtos</h4><hr>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12">
            <table class="table table-hover table-sm">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {!! $tabela !!}
                </tbody>
            </table>
            
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12 text-right">
            <a href="/">< Voltar</a>
        </div>
    </div>
@stop