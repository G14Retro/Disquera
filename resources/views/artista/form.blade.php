<div class="row">
    <div class="ml-3 mb-3 mr-4">
    <label for="tipoDocumento">Tipo de documento</label>
        <select class="form-select form-control" name="tipoDocumento" id="tipoDocumento" 
        aria-label="Default select example"
        aria-describedby="tipoDocumentoHelp">
        <option selected>Seleccione una opción</option>
        <option value="cc" {{isset($artista->tipoDocumento) && $artista->tipoDocumento == 'cc' ? 'selected':'true'}} >Cédula de ciudadanía</option>
        <option value="ce" {{isset($artista->tipoDocumento) && $artista->tipoDocumento == 'ce' ? 'selected':'true'}}>Cédula de extrangería</option>
        <option value="ti" {{isset($artista->tipoDocumento) && $artista->tipoDocumento == 'ti' ? 'selected':'true'}}>Tarjeta de identidad</option>
        <option value="pp" {{isset($artista->tipoDocumento) && $artista->tipoDocumento == 'pp' ? 'selected':'true'}}>Pasaporte</option>
        <option value="nit" {{isset($artista->tipoDocumento) && $artista->tipoDocumento == 'nit' ? 'selected':'true'}}>Nit</option>
        </select>
        @error('tipoDocumento')
        <small id="tipoDocumentoHelp" class="form-text text-danger">
            * {{$message}}
        </small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="noDocumento">Número de documento</label>
        <input type="number" name="noDocumento" id="noDocumento" class="form-control"
        placeholder="Ingrese el número de documento"
        value="{{isset($artista->noDocumento)?$artista->noDocumento:old('noDocumento')}}"
        aria-describedby="noDocumentHelp">
        @error('noDocumento')
        <small id="noDocumentHelp" class="form-text text-danger">
            * {{$message}}
        </small>
        @enderror
    </div>
</div>
<div class="row">
    <div class="ml-3 mb-3 mr-4">
        <label for="nombreArtista">Nombre</label>
        <input type="text" name="nombreArtista" id="nombreArtista" class="form-control"
        placeholder="Ingrese el nombre"
        value="{{isset($artista->nombreArtista)?$artista->nombreArtista:old('nombreArtista')}}"
        aria-describedby="nombreHelp">
        @error('nombreArtista')
        <small id="nombreHelp" class="form-text text-danger">
            * {{$message}}
        </small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="apellidoArtista">Apellido</label>
        <input type="text" name="apellidoArtista" id="apellidoArtista" class="form-control"
        placeholder="Ingrese el apellido"
        value="{{isset($artista->apellidoArtista)?$artista->apellidoArtista:old('apellidoArtista')}}"
        aria-describedby="apellidoHelp">
        @error('apellidoArtista')
        <small id="apellidoHelp" class="form-text text-danger">
            * {{$message}}
        </small>
        @enderror
    </div>
</div>

<div class="mb-3">
    <label for="nombreArtistico">Nombre Artístico</label>
    <input type="text" name="nombreArtistico" id="nombreArtistico" class="form-control"
    placeholder="Ingrese el nombre artístico"
    value="{{isset($artista->nombreArtistico)?$artista->nombreArtistico:old('nombreArtistico')}}"
    aria-describedby="artisticoHelp">
    @error('nombreArtistico')
        <small id="artisticoHelp" class="form-text text-danger">
            * {{$message}}
        </small>
    @enderror
</div>

<div class="row">
    <div class="ml-3 mb-3">
        <label for="foto">Foto del artista</label>
        <input type="file" name="foto" id="foto" class="form-control"
        value="{{isset($artista->foto)?$artista->foto:old('foto')}}"
        aria-describedby="fotoHelp">
        @error('foto')
        <small id="fotoHelp" class="form-text text-danger">
            * {{$message}}
        </small>
    @enderror
    </div>
</div>
<div class="row">
    <div class="ml-3 mb-3 mr-4">
        <label for="feNacimAtista">Fecha de nacimiento</label>
        <input type="date" name="feNacimAtista" id="feNacimAtista" class="form-control"
        placeholder="Ingrese la fecha de nacimiento"
        value="{{isset($artista->feNacimAtista)?$artista->feNacimAtista:old('feNacimAtista')}}"
        aria-describedby="nacimientoHelp">
        @error('feNacimAtista')
        <small id="nacimientoHelp" class="form-text text-danger">
            * {{$message}}
        </small>
    @enderror
    </div>
    <div class="mb-3">
        <label for="emailArtista">Correo</label>
        <input type="mail" name="emailArtista" id="emailArtista" class="form-control"
        placeholder="Ingrese un correo electrónico"
        value="{{isset($artista->emailArtista)?$artista->emailArtista:old('emailArtista')}}"
        aria-describedby="correoHelp">
        @error('emailArtista')
        <small id="correoHelp" class="form-text text-danger">
            * {{$message}}
        </small>
    @enderror
    </div>
</div>

<div class="mb-3">
<label for="idDisqueraFK">Disquera</label>
    <select class="form-select form-control" name="idDisqueraFK" id="idDisqueraFK"
     aria-label="Default select example"
     aria-describedby="disqueraHelp">
    <option selected>Seleccione una opción</option>
    @foreach($disqueras as $d)
    <option value="{{$d->id}}" {{isset($artista->idDisqueraFK) && $artista->idDisqueraFK== $d->id? 'selected':true}}>{{$d->nombreDisquera}}</option>
    @endforeach
    </select>
    @error('idDisqueraFK')
        <small id="disqueraHelp" class="form-text text-danger">
            * {{$message}}
        </small>
    @enderror
</div>

<div class="mb-3">
<label for="estadoArtista">Estado</label>
<select class="form-select form-control"  name="estadoArtista" id="estadoArtista"
 aria-label="Default select example"
 aria-describedby="estadoHelp">
    <option selected>Seleccione una opción</option>
    <option value="activo" {{isset($artista->estadoArtista) && $artista->estadoArtista == 'activo' ? 'selected':'true'}}>Activo</option>
    <option value="inactivo" {{isset($artista->estadoArtista) && $artista->estadoArtista == 'inactivo' ? 'selected':'true'}}>Inactivo</option>
    </select>
    @error('estadoArtista')
        <small id="estadoHelp" class="form-text text-danger">
            * {{$message}}
        </small>
    @enderror
</div>

<div class="mb-3 float-right">
    <input type="submit" class="btn btn-primary" value="Guardar">
</div>