@extends('modeloPage')

@section('tituloPagina')
    Minha primeira loja Laravel
@stop

@section('conteudoPrincipal')
    <div class="row">
        <div class="col-12 col-sm-12">
            <h4>Minha loja <small>(em laravel 5.5)</small></h4><hr>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12">
            <ul>
                <li><a href="produto/cadastro">Criar produto novo</a></li>
                <li><a href="produto/listar">Listar produtos</a></li>
                
            </ul>
        </div>
    </div>
@stop
