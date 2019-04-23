<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public $primaryKey="id_patient";
    public function chambres()
    {
        return $this->belongsToMany(Chambre::class);
    }
}
