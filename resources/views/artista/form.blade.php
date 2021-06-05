<div class="mb-3">
    <label for="noDocumento">Número de documento</label>
    <input type="number" name="noDocumento" id="noDocumento" class="form-control"
    placeholder="Ingrese el número de documento">
</div>
<div class="mb-3">
<label for="tipoDocumento">Tipo de documento</label>
    <select class="form-select form-control" name="tipoDocumento" id="tipoDocumento" 
    aria-label="Default select example">
    <option selected>Seleccione una opción</option>
    <option value="cc">Cédula de ciudadanía</option>
    <option value="ce">Cédula de extrangería</option>
    <option value="ti">Tarjeta de identidad</option>
    <option value="pp">Pasaporte</option>
    </select>
</div>
<div class="mb-3">
    <label for="nombreArtista">Nombre</label>
    <input type="text" name="nombreArtista" id="nombreArtista" class="form-control"
    placeholder="Ingrese el nombre">
</div>
<div class="mb-3">
    <label for="apellidoArtista">Apellido</label>
    <input type="text" name="apellidoArtista" id="apellidoArtista" class="form-control"
    placeholder="Ingrese el apellido">
</div>
<div class="mb-3">
    <label for="nombreArtistico">Nombre Artístico</label>
    <input type="text" name="nombreArtistico" id="nombreArtistico" class="form-control"
    placeholder="Ingrese el nombre artístico">
</div>
<div class="mb-3">
    <label for="feNacimAtista">Fecha de nacimiento</label>
    <input type="date" name="feNacimAtista" id="feNacimAtista" class="form-control"
    placeholder="Ingrese la fecha de nacimiento">
</div>

<div class="mb-3">
    <label for="emailArtista">Correo</label>
    <input type="mail" name="emailArtista" id="emailArtista" class="form-control"
    placeholder="Ingrese un correo electrónico">
</div>

<div class="mb-3">
<label for="idDisqueraFK">Disquera</label>
    <select class="form-select form-control" name="idDisqueraFK" id="idDisqueraFK"
     aria-label="Default select example">
    <option selected>Seleccione una opción</option>
    @foreach($disqueras as $d)
    <option value="{{$d->id}}">{{$d->nombreDisquera}}</option>
    @endforeach
    </select>
</div>

<div class="mb-3">
<label for="estadoArtista">Estado</label>
<select class="form-select form-control"  name="estadoArtista" id="estadoArtista"
 aria-label="Default select example">
    <option selected>Seleccione una opción</option>
    <option value="activo">Activo</option>
    <option value="inactivo">Inactivo</option>
    </select>
</div>

<div class="mb-3 float-right">
    <input type="submit" class="btn btn-primary" value="Guardar">
</div>