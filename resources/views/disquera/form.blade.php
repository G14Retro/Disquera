<div class="mb-3">
    <label for="nit_disquera">Nit Disquera</label>
    <input type="number" name="nit_disquera" id="nit_disquera" class="form-control"
    placeholder="Ingrese el nit de disquera" 
    value="{{isset($disquera->nit_disquera)?$disquera->nit_disquera:old('nit_disquera')}}"
    aria-describedby="identificacionHelp">
    @error('nit_disquera')
        <small id="identificacionHelp" class="form-text text-danger">
            * {{$message}}
        </small>
    @enderror
</div>
<div class="mb-3">
    <label for="nombreDisquera">Nombre</label>
    <input type="text" name="nombreDisquera" id="nombreDisquera" class="form-control"
    placeholder="Ingrese el nombre de la disquera"
    value="{{isset($disquera->nombreDisquera)?$disquera->nombreDisquera:old('nombreDisquera')}}"
    aria-describedby="nombreDisqueraHelp">
    @error('nombreDisquera')
        <small id="nombreDisqueraHelp" class="form-text text-danger">
            * {{$message}}
        </small>
    @enderror
</div>
<div class="mb-3">
    <label for="telefonoDisquera">Teléfono</label>
    <input type="number" name="telefonoDisquera" id="telefonoDisquera" class="form-control"
    placeholder="Ingrese el número de teléfono"
    value="{{isset($disquera->telefonoDisquera)?$disquera->telefonoDisquera:old('telefonoDisquera')}}"
    aria-describedby="telefonoDisqueraHelp">
    @error('telefonoDisquera')
        <small id="telefonoDisqueraHelp" class="form-text text-danger">
            * {{$message}}
        </small>
    @enderror
</div>
<div class="mb-3">
    <label for="direccionDisquera">Dirección</label>
    <input type="text" name="direccionDisquera" id="direccionDisquera" class="form-control"
    placeholder="Ingrese la dirección de la disquera"
    value="{{isset($disquera->direccionDisquera)?$disquera->direccionDisquera:old('direccionDisquera')}}"
    aria-describedby="direccionDisqueraHelp">
    @error('direccionDisquera')
        <small id="nombreDisqueraHelp" class="form-text text-danger">
            * {{$message}}
        </small>
    @enderror
</div>
<div class="mb-3">
    <label for="estadoDisquera">Estado</label>
    <select class="form-select form-control"  name="estadoDisquera" id="estadoDisquera"
    aria-label="Default select example"   
    aria-describedby="estadoDisqueraHelp">
    <option selected>Seleccione una opción</option>
    <option value="activo" {{isset($disquera->estadoDisquera) && $disquera->estadoDisquera == 'activo' ? 'selected':'true'}}>Activo</option>
    <option value="inactivo" {{isset($disquera->estadoDisquera) && $disquera->estadoDisquera == 'inactivo' ? 'selected':'true'}}>Inactivo</option>
    </select>
    @error('estadoDisquera')
        <small id="estadoDisqueraHelp" class="form-text text-danger">
            * {{$message}}
        </small>
    @enderror
</div>

<div class="mb-3 float-right">
    <input type="submit" class="btn btn-primary" value="Guardar">
</div>