@extends('layouts.app')

@section('content')
    <h4 class="mb-3">Editar Mascota</h4>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('mascotas.update', $mascota) }}" method="POST">
        @csrf
        @method('PUT')

        @include('mascotas.partials.form')

        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('mascotas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
