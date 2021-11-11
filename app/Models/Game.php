<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Genregame;

class Game extends Model
{

    public function genreGame()
    {
        return $this->belongsTo(Genregame::class, 'genregame_id');
    }

    public function contentDescription()
    {
        return $this->belongsTo(ContentDescriptor::class, 'content_descriptors_id');
    }
}
