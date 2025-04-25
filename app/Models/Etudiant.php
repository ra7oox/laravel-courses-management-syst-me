<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable=["nom","prenom","adress","date_naissance","id_class"];
    public function classe(){
        return $this->belongsTo(Classe::class,"id_class");
    }
}
