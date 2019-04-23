<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    public $primaryKey ="id_chambre";
    public function Patients()
    {
        return $this->belongsToMany(Patient::class);
    }
}
