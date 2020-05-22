<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = [
        'rua' , 'numero' , 'cidade', 
    ];

    public function novoEndereco(array $endereco){
        $this->rua = $endereco['rua'];
        $this->numero = $endereco['numero'];
        $this->cidade = $endereco['cidade'];
        $this->estado = $endereco['estado'];
        if($this->save()){
            
        }



    }
    public function verificarSeEnderecoExiste($rua, $numero,$cidade){
        $enderecoExiste = $this->where('rua', $rua)
                                ->where('numero' , $numero)
                                ->where('cidade' , $cidade)
                                ->get();
        if($enderecoExiste->count() > 0){
            return $enderecoExiste[0]->id;
        }else{
            return false;
        }
    }
}
