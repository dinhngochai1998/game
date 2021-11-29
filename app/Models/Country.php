<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Country extends Model
{
    public function games() {
        return $this->hasMany(Genregame::class, 'country_id', 'id');
    }
}
