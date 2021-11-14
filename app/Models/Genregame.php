<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Genregame extends Model
{
    public function countryId()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
