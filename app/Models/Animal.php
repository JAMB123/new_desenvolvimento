<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'idade', 'especie', 'raca', 'sexo', 'porte', 'sobre', 'arquivo'];

    public function AnimalUser(){
        return $this->hasMany('App/Models/AnimalUser', 'animal_id');
    }

}
