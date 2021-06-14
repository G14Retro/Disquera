<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    protected $fillable = ['tipoDocumento','noDocumento','nombreArtista','apellidoArtista',
    'nombreArtistico','foto','feNacimAtista','emailArtista','idDisqueraFK','estadoArtista'];
    public $timestamps = false;
}
