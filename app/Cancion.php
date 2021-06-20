<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancion extends Model
{
    protected $table = 'canciones';
    protected $fillable = ['nombreCancion','fechaGrabacion','duracionCancion','idAlbumFK','estadoCancion'];
    public $timestamps = false;
}
