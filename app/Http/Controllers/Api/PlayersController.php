<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Player;

class PlayersController extends Controller
{
    //
    public function __construct(Player $player){
        $this->player = $player;
    }

    public function index(){
        //chave data que armazena a collection
        $data = ['data' => $this->player->all()];

        //cria uma resposta e retorna um json;
        return response()->json($data);

        //resposta com paginação
        //return response()->json($this->player->paginate(5));
    }

    public function show(Player $id){
        $data = ['data' => $id];
        return response()->json($data);

    }
}
