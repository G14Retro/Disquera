<div class="mb-3">
    <label for="nombreAlbum">Nombre</label>
    <input type="text" name="nombreAlbum" id="nombreAlbum" class="form-control"
    placeholder="Ingrese el nombre del album">
</div>
<div class="mb-3">
    <label for="anioPublicacion">Año de publicación</label>
    <select class="form-select form-control" name="anioPublicacion" id="anioPublicacion" 
    aria-label="Default select example">
    <option selected>Seleccione una opción</option>
    @for($anio=1990;$anio <=2021;$anio++)
    <option value="{{$anio}}">{{$anio}}</option>
    @endfor
    </select>

</div>
<div class="mb-3">
<label for="idArtistaFK">Artista</label>
    <select class="form-select form-control" name="idArtistaFK" id="idArtistaFK" 
    aria-label="Default select example">
    <option selected>Seleccione una opción</option>
    @foreach($artistas as $a)
    <option value="{{$a->id}}">{{$a->nombreArtistico}}</option>
    @endforeach
    </select>
</div>
<div class="mb-3">
<label for="idGeneroFK">Genéro</label>
    <select class="form-select form-control" name="idGeneroFK" id="idGeneroFK" 
    aria-label="Default select example">
    <option selected>Seleccione una opción</option>
    @foreach($generos as $g)
    <option value="{{$g->id}}">{{$g->nombreGenero}}</option>
    @endforeach
    </select>
</div>

<div class="mb-3 float-right">
    <input type="submit" class="btn btn-primary" value="Guardar">
</div>