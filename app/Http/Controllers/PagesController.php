<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class PagesController extends Controller
{
    //
    public function index() {
        return view('welcome');
    }

    public function cadastro() {
        return view('cadastro');
    }

    public function salva(Request $request) {
        $data = [
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao')
        ];
        
        Produto::create($data);

        return redirect('produto/cadastro');

    }

    public function listar() {
        $produtos = Produto::all();

        $tabela = '';
        foreach($produtos as $produto) {
            $form = '<form action="/produto/delete" method="post"><input type="hidden" value="'.$produto->id.'">{{ csrf_field() }}'.
                '<button type="submit" class="btn btn-danger btn-sm btn-block"><i class="fas fa-eraser"></i> Apagar</button></form>';

            $tabela.='<tr><td>'.$produto->id.'</td><td>'.$produto->nome.'</td><td><i>"'.$produto->descricao.'"</i></td>';
            $tabela.= '<td class="text-right"><a href="/produto/editar/'.$produto->id.'" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i> Editar</a> &nbsp;';
            $tabela.= '<a href="/produto/delete/'.$produto->id.'" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Apagar</a></td></tr>';
        }

        return view('produtosLista', compact('tabela'));
    }

    public function editar($id) {
        $produtos = Produto::where('id',$id)
            ->get();

        foreach($produtos as $produto) {
            $id = $produto->id;
            $nome = $produto->nome;
            $descricao = $produto->descricao;
        }

        return view('editar', compact('id', 'nome', 'descricao'));
    }

    public function update(Request $request, $id) {
        $produto = Produto::find($id);

        $produto->nome = $request->input('nome');
        $produto->descricao = $request->input('descricao');

        $produto->save();

        
        return redirect('produto/listar');
    }

    public function remover($id) {
        $produto = Produto::find($id);
        $nome = $produto->nome;

        return view('remover', compact('id', 'nome'));
    }

    public function delete(Request $request) {
        Produto::where('id', $request->input('id'))->delete();

        return redirect('/produto/listar');
    }

}
