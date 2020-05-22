<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Endereco;
use App\Empresa;

class UsuarioControlador extends Controller
{
    public function getUsuarios(Request $request){
        $allUsuarios = Usuario::all();
        return view('usuarios' , compact('allUsuarios'));
    }
    public function cadastroUsuario(Request $request){
        $empresas  = Empresa::all();
        return view('cadastro-usuario', compact('empresas'));
    }
    public function novoUsuario(Request $request){

        $usuario = new Usuario();
        $usuario->nome = $request['nome'];
        $usuario->idade = $request['idade'];
        $usuario->empresa_id = $request['empresa'];

        $enderecoCompleto = [];
        $enderecoCompleto['rua'] = $request['rua'];
        $enderecoCompleto['numero'] = $request['numero'];
        $enderecoCompleto['cidade'] = $request['cidade'];
        $enderecoCompleto['estado'] = $request['estado'];

        $enderecoModel = new Endereco();
    
        $enderecoId = $enderecoModel->verificarSeEnderecoExiste($enderecoCompleto['rua'],$enderecoCompleto['numero'],$enderecoCompleto['cidade']);
        
        if($enderecoId){
            $usuario->endereco_id = $enderecoId;
        }else{
            $enderecoModel->rua = $enderecoCompleto['rua'];
            $enderecoModel->numero = $enderecoCompleto['numero'];
            $enderecoModel->cidade = $enderecoCompleto['cidade'];
            $enderecoModel->estado = $enderecoCompleto['estado'];
            if($enderecoModel->save()){
                $enderecoId = $enderecoModel->verificarSeEnderecoExiste($enderecoModel->rua,$enderecoModel->numero,$enderecoModel->cidade);
                $usuario->endereco_id = $enderecoId;

            }else{
                dd('erro improvavel de acontecer');

            }

        }
        if($usuario->save()){
            flash('Usuario registrado com sucesso');
            return redirect()->back();
        }else{
            flash('Erro: alguma informacao esta faltando');
            return redirect()->back();

        }
    }
    public function editorUsuario(Request $request){
        $id = $request->id;
        $usuario = Usuario::find($id);
        $empresas = Empresa::all();
        return view('editor-usuario' , compact('usuario' , 'empresas'));
    }
    public function editarUsuario(Request $request){
        $id = $request->id;
        $usuario = Usuario::find($id);
        dd($usuario);
    }
    public function deletarUsuario(Request $request){
        $id = $request->id;
        $usuario = Usuario::find($id);
        if($usuario->delete()){
            flash('Usuario deletado com sucesso');
            return redirect()->back();
        }
    }
}
