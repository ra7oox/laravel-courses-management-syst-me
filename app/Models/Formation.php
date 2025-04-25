<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $fillable=["titre","NbreHeure"];
    public function avis(){
        return $this->hasMany(Avis::class,"id_F");
    }
    
}
