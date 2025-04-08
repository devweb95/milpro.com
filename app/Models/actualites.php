<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class actualites extends Model
{
    //
    protected $fillable = [
        'titre',
        'contenu',
        'date_publication',
    ];
}
