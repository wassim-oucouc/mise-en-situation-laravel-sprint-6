<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    Protected $table = "player";
    Protected $fullable = ["Nom","Prenom","Age","Poids","Taille","Pied","Team_id","created_at","updated_at"];

    public function Team()
    {
        $this->BelongsTo(Team::class);
    }
}
