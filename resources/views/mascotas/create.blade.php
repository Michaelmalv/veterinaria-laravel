@extends('layouts.app')

@section('content')
    <h4 class="mb-3">Registrar Mascota</h4>

    <form action="{{ route('mascotas.store') }}" method="POST">
        @csrf

        @include('mascotas.partials.form')

        <button class="btn btn-primary">Guardar</button>
        <a href="{{ route('mascotas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
