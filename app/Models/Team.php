<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    Protected $table = "team";
    Protected $fillable = ["Nom","Ville","Pays","created_at","updated_at"];


    public function Player()
    {
        $this->hasMany(Player::class);
    }
}
