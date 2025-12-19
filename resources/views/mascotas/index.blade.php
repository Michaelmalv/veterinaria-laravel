@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Listado de Mascotas</h4>
        <a href="{{ route('mascotas.create') }}" class="btn btn-success">
            + Nueva Mascota
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-primary">
            <tr>
                <th>Nombre</th>
                <th>Especie</th>
                <th>Raza</th>
                <th>Edad</th>
                <th>Dueño</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($mascotas as $mascota)
                <tr>
                    <td>{{ $mascota->nombre_mascota }}</td>
                    <td>{{ $mascota->especie }}</td>
                    <td>{{ $mascota->raza }}</td>
                    <td>{{ $mascota->edad }}</td>
                    <td>{{ $mascota->nombre_dueno }}</td>
                    <td>{{ $mascota->telefono }}</td>
                    <td>
                        <a href="{{ route('mascotas.edit', $mascota) }}" class="btn btn-sm btn-warning">
                            Editar
                        </a>

                        <form action="{{ route('mascotas.destroy', $mascota) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('¿Dar de baja esta mascota?')">
                                Baja
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
