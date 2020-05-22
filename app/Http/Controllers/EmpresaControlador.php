<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
class EmpresaControlador extends Controller
{
    public function empresas(){
        $allEmpresas  = Empresa::all();
        
        return view('empresas' , compact('allEmpresas'));
    }

    public function cadastroEmpresa(){
        return view('cadastro-empresa');
    }

    public function novaEmpresa(Request $request){
        $empresa = new Empresa();

        $empresa->nome = $request->nome;

        if($empresa->save()){
            flash('Empresa registrada com sucesso');
            return redirect()->back();
        }else{
            flash('Erro: alguma informacao esta faltando');
            return redirect()->back();

        }
    }

}
