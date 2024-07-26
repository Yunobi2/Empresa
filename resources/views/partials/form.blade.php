@csrf

<tr>
    <td colspan="2">
        <div class="custom-file">
            <input type="file" name="image" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Seleccione archivos</label>
        </div>
    </td>
</tr>

<tr>
    <th>RND</th>
    <td><input type="text" name="cPerRnd" value="{{ old('cPerRnd', $persona->cPerRnd)}}"></td>
</tr>
<tr>
    <th>Apellido</th>
    <td><input type="text" name="cPerApellido" value="{{ old('cPerApellido', $persona->cPerApellido)}}"></td>
</tr>
<tr>
    <th>Nombre</th>
    <td><input type="text" name="cPerNombre" value="{{ old('cPerNombre', $persona->cPerNombre)}}"></td>
</tr>
<tr>
    <th>Direccion</th>
    <td><input type="text" name="cPerDireccion" value="{{ old('cPerDireccion', $persona->cPerDireccion)}}"></td>
</tr>
<tr>
    <th>Fecha de nacimiento</th>
    <td><input type="date" name="dPerFecNac" value="{{ old('dPerFecNac', $persona->dPerFecNac)}}"></td>
</tr>
<tr>
    <th>Edad</th>
    <td><input type="number" name="nPerEdad" value="{{ old('nPerEdad', $persona->nPerEdad)}}"></td>
</tr>
<tr>
    <th>Sueldo</th>
    <td><input type="number" name="nPerSueldo" value="{{ old('nPerSueldo', $persona->nPerSueldo)}}"></td>
</tr>
<tr>
    <th>Estado</th>
    <td><input type="number" name="cPerEstado" value="{{ old('cPerEstado', $persona->cPerEstado)}}"></td>
</tr>
<tr>
    <td colspan="2" align="center"><button>{{ $btnText }}</button></td>
</tr>