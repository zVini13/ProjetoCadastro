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
        $usuarios = Usuario::all();

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
}
