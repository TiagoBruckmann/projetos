<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjetosController extends Controller
{
    public function index(){
        $registros = Projeto::all();
        return view('admin.projetos.index', compact('registros'));
    }

    public function adicionar(){
        return view('admin.projetos.adicionar');
    }

    public function salvar( Request $req ){
        $dados = $req->all();

        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/cursos/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir, $nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Projeto::create($dados);

        return redirect()->route('admin.projetos');

    }

    public function editar($id){
        $registro = Projeto::find($id);
        return view('admin.projetos.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();

        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/cursos/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir, $nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Projeto::find($id)->update($dados);

        return redirect()->route('admin.projetos');
    }

    public function deletar($id){
        Projeto::find($id)->delete();
        return redirect()->route('admin.projetos');
    }
}
