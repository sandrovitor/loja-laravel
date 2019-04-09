@extends('modeloPage')

@section('tituloPagina')
Produto > Cadastro
@stop

@section('conteudoPrincipal')
    <div class="row">
        <div class="col-12 col-sm-12">
            <h4>Cadastro de produto</h4><hr>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="card">
                <div class="card-body bg-light">
                    <form action="/produto/cadastro" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nome"><h5>Nome do produto</h5></label>
                            <input type="text" id="nome" name="nome" class="form-control" maxlength="40">
                        </div>
                        <div class="form-group">
                            <label for="descricao"><h5>Descrição</h5></label>
                            <textarea id="descricao" name="descricao" class="form-control" maxlength="300"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12 text-right">
            <a href="/">< Voltar</a>
        </div>
    </div>
@stop