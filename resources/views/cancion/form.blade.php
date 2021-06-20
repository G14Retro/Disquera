<div class="row">
    <div class="ml-3 mb-3 col-5">
        <label for="nombreCancion">Nombre canción</label>
        <input type="text" name="nombreCancion" id="nombreCancion" class="form-control"
        placeholder="Ingrese el nombre"
        value="{{isset($cancion->nombreCancion)?$cancion->nombreCancion:old('nombreCancion')}}"
        aria-describedby="nombreHelp">
        @error('nombreCancion')
        <small id="nombreHelp" class="form-text text-danger">
            * {{$message}}
        </small>
        @enderror
    </div>
    <div class="mb-3 col-5">
        <label for="fechaGrabacion">Fecha de grabación</label>
        <input type="date" name="fechaGrabacion" id="fechaGrabacion" class="form-control"
        placeholder="Ingrese el apellido"
        value="{{isset($cancion->fechaGrabacion)?$cancion->fechaGrabacion:old('fechaGrabacion')}}"
        aria-describedby="fechaHelp">
        @error('fechaGrabacion')
        <small id="fechaHelp" class="form-text text-danger">
            * {{$message}}
        </small>
        @enderror
    </div>
</div>
<div class="row">
    <div class="ml-3 mb-3 col-5">
        <label for="duracionCancion">Duración</label>
        <input type="text" name="duracionCancion" id="duracionCancion" class="form-control"
        placeholder="Ingrese la duración"
        value="{{isset($cancion->duracionCancion)?$cancion->duracionCancion:old('duracionCancion')}}"
        aria-describedby="duracionHelp">
        @error('duracionCancion')
        <small id="duracionHelp" class="form-text text-danger">
            * {{$message}}
        </small>
    @enderror
    </div>
    <div class="mb-3 col-5">
        <label for="idAlbumFK">Album</label>
        <select class="form-select form-control" name="idAlbumFK" id="idAlbumFK"
            aria-label="Default select example"
            aria-describedby="albumHelp">
        <option selected>Seleccione una opción</option>
        @foreach($albumes as $a)
        <option value="{{$a->id}}" {{isset($cancion->idAlbumFK) && $cancion->idAlbumFK== $a->id? 'selected':true}}>{{$a->nombreAlbum}}</option>
        @endforeach
        </select>
        @error('idAlbumFK')
            <small id="albumHelp" class="form-text text-danger">
                * {{$message}}
            </small>
        @enderror
    </div>
</div>

<div class="row">
    <div class="mb-3 ml-3 col-10">
        <label for="estadoCancion">Estado</label>
        <select class="form-select form-control"  name="estadoCancion" id="estadoCancion"
         aria-label="Default select example"
         aria-describedby="estadoHelp">
            <option selected>Seleccione una opción</option>
            <option value="activo" {{isset($cancion->estadoCancion) && $cancion->estadoCancion == 'activo' ? 'selected':'true'}}>Activo</option>
            <option value="inactivo" {{isset($cancion->estadoCancion) && $cancion->estadoCancion == 'inactivo' ? 'selected':'true'}}>Inactivo</option>
            </select>
            @error('estadoCancion')
                <small id="estadoHelp" class="form-text text-danger">
                    * {{$message}}
                </small>
            @enderror
    </div>
</div>

<div class="mb-3 float-right">
    <input type="submit" class="btn btn-primary" value="Guardar">
</div>