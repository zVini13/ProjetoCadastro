<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class CadastroController extends Controller
{
    //
    public function cadastro(){
        return view ('formcadastro'); 
    }
    public function listusuarios(){
        $usuarios = Usuario::orderBy("id", "asc")->get();

        return view ('lista', compact ('usuarios'));
    }
    public function completo(Request $request){
        $usuario = new Usuario;
        $usuario->nome = $request->nome;
        $usuario->data_nascimento = $request->data_nascimento;
        $usuario->senha = $request->senha;
        $usuario->matricula = $request->matricula; 
        $usuario->save();
        return view('dados', compact('usuario'));
    }
    public function salva(Request $request){

        $usuario = new Usuario;
        $usuario->nome = $request->nome;
        $usuario->data = $request->data;
        $usuario->senha = $request->senha;
        $usuario->matricula = $request->matricula;
        $usuario->save();
    }
    public function editarUsuario($id){
        $usuario = Usuario::where('id', $id)->first();

        return view('edit', compact('usuario'));
    }

    public function excluirUsuario($id){

        Usuario::destroy($id);
        return redirect(route('list'));


    }
    public function salvaedicao(Request $request){

        $usuario = Usuario::where('id', $request->id)->first();
        $usuario->nome = $request->nome;
        $usuario->data_nascimento = $request->data_nascimento;
        $usuario->senha = $request->senha;
        $usuario->matricula = $request->matricula;

        $usuario->update();
        return redirect(route('list'));
    }
}
