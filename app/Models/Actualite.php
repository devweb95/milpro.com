<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Str;

class Actualite extends Model
{
    //
    protected $fillable = [
        'image',
        'titre',
        'contenu',
        'date_publication',
    ];
    protected $appends = ['image_url']; // Ajoute l'accesseur aux JSON

public function getImageUrlAttribute()
{
    if (!$this->image) return null;
    
    return Str::startsWith($this->image, 'http') 
        ? $this->image 
        : asset('storage/' . $this->image);
}
}
