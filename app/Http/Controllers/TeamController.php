<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function GetAllTeams()
    {
        $teams = Team::all();
        dd($Teams);
    }

    public function GetTeamById(Request $request)
    {
        
    }
}
