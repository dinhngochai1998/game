<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentDescriptor extends Model
{
    public function parentId()
    {
        return $this->belongsTo(self::class);
    }

    public function countryId()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
