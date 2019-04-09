@extends('modeloPage')

@section('tituloPagina')
Produto > Cadastro
@stop

@section('conteudoPrincipal')
    <div class="row">
        <div class="col-12 col-sm-12">
            <h4>Editar produto</h4><hr>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="card">
                <div class="card-body bg-light">
                    <form action="/produto/editar/{{ $id }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nome"><h5>Nome do produto</h5></label>
                            <input type="text" id="nome" name="nome" class="form-control" maxlength="40" value="{{ $nome }}">
                        </div>
                        <div class="form-group">
                            <label for="descricao"><h5>Descrição</h5></label>
                            <textarea id="descricao" name="descricao" class="form-control" maxlength="300">{{ $descricao }}</textarea>
                            <input type="hidden" name="pid" value="{{ $id }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Atualizar produto</button>
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