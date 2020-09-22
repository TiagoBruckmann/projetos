<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Projetos;

class ProjetosController extends Controller
{
    public function index(){
        $registros = Projetos::all();
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
            $dir = "img/projetos/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir, $nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Projetos::create($dados);

        return redirect()->route('admin.projetos');

    }

    public function editar($id){
        $registro = Projetos::find($id);
        return view('admin.projetos.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();

        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/projetos/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir, $nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Projetos::find($id)->update($dados);

        return redirect()->route('admin.projetos');
    }

    public function deletar($id){
        Projetos::find($id)->delete();
        return redirect()->route('admin.projetos');
    }
}
