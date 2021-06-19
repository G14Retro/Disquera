<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albumes';
    protected $fillable = [
        'nombreAlbum','anioPublicacion','foto' , 'idArtistaFK', 'idGeneroFK',
    ];
    public $timestamps = false;
}
