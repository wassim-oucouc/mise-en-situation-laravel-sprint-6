<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Player;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlayerController extends Controller
{
    public function GetAllplayers()
    {
       $players =  Player::all();
       dd($players);
    }

    public function GetPlyerById(Request $request)
    {
      $PlayerById =   DB::table('player')->where('id',$request['id'])->get();

      dd($PlayerById);
      echo "h";
    }

    public function GetPlayerByidTeam(Request $request)
    {
        $team = Team::find($request['team']);
        $players = $team->Player();
        dd($players);
    }
}
