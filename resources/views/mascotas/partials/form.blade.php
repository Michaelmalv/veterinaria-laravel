<div class="row mb-3">
    <div class="col-md-6">
        <label class="form-label">Nombre de la Mascota</label>
        <input type="text" name="nombre_mascota" class="form-control"
               value="{{ old('nombre_mascota', $mascota->nombre_mascota ?? '') }}" required>
    </div>

    <div class="col-md-6">
        <label class="form-label">Especie</label>
        <select name="especie" class="form-select" required>
            <option value="">Seleccione</option>
            <option value="Perro" {{ (old('especie', $mascota->especie ?? '') == 'Perro') ? 'selected' : '' }}>Perro</option>
            <option value="Gato" {{ (old('especie', $mascota->especie ?? '') == 'Gato') ? 'selected' : '' }}>Gato</option>
            <option value="Otro" {{ (old('especie', $mascota->especie ?? '') == 'Otro') ? 'selected' : '' }}>Otro</option>
        </select>
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-4">
        <label class="form-label">Raza</label>
        <input type="text" name="raza" class="form-control"
               value="{{ old('raza', $mascota->raza ?? '') }}">
    </div>

    <div class="col-md-4">
        <label class="form-label">Edad</label>
        <input type="number" name="edad" class="form-control"
               value="{{ old('edad', $mascota->edad ?? '') }}" required>
    </div>

    <div class="col-md-4">
        <label class="form-label">Teléfono</label>
        <input type="text" name="telefono" class="form-control"
               value="{{ old('telefono', $mascota->telefono ?? '') }}" required>
    </div>
</div>

<div class="mb-3">
    <label class="form-label">Nombre del Dueño</label>
    <input type="text" name="nombre_dueno" class="form-control"
           value="{{ old('nombre_dueno', $mascota->nombre_dueno ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label">Observaciones</label>
    <textarea name="observaciones" class="form-control" rows="3">{{ old('observaciones', $mascota->observaciones ?? '') }}</textarea>
</div>
