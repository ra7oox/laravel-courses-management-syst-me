<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $fillable=["libelle","id_formation","nombre_max"];
    public function etudiants(){
        return $this->hasMany(Etudiant::class,"id_class");
    }
    public function formation(){
        return $this->belongsTo(Formation::class,"id_formation");
    }
}
