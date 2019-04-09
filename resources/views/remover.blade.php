@extends('modeloPage')

@section('tituloPagina')
Produto > Cadastro
@stop

@section('conteudoPrincipal')
    <div class="row">
        <div class="col-12 col-sm-12">
            <h4>Remover produto</h4><hr>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="card">
                <div class="card-body bg-light">
                    <h5>Realmente deseja remover o produto <i>"{{ $nome }}"</i>?</h5>
                    <form action="/produto/delete" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="hidden" name="id" value="{{ $id }}">
                            <button type="submit" class="btn btn-danger"><i class="fas fa-eraser"></i>&nbsp; Sim, remover</button> &nbsp;
                            <a href="/produto/listar" class="btn btn-secondary"><i class="fas fa-times"></i>&nbsp; Não, cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
@stop