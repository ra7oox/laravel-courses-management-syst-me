<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    protected $fillable=["id_E","id_F","points"];

    public function etudiant(){
        return $this->belongsTo(Etudiant::class,'id_E');

    }
    public function formation(){
        return $this->belongsTo(Formation::class,'id_F');
    }
}
