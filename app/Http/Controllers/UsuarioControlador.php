<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Endereco;

class UsuarioControlador extends Controller
{
    public function getUsuarios(Request $request){
        $usuario = new Usuario();
        $allUsuarios = $usuario->get();
        return view('usuarios' , compact('allUsuarios'));
    }
    public function novoUsuario(Request $request){
        $usuario = new Usuario();
        $usuario->nome = $request['nome'];
        $usuario->idade = $request['idade'];
        $usuario->endereco_id = 1;
        $usuario->empresa_id = 1;

        if($usuario->save()){
            flash('Usuario registrado com sucesso');
            return redirect()->back();
        }else{
            flash('Erro: alguma informacao esta faltando');
            return redirect()->back();

        }
    }
}
