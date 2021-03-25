<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    //
    public function cadastro(){
        return view ('formcadastro'); 
    }
    public function listusuarios(){
        return view ('lista');
    }
    public function completo(Request $request){
        $nome = $request->nome; 
        $data = $request->data; 
        $senha = $request->senha; 
        $matricula = $request->matricula; 
        return view('dados', compact('nome', 'data', 'senha', 'matricula'));
    }
}
