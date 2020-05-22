<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = [
        'rua' , 'numero' , 'cidade', 
    ];

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
