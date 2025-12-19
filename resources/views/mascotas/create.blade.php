@extends('layouts.app')

@section('content')
    <h4 class="mb-3">Registrar Mascota</h4>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('mascotas.store') }}" method="POST">
        @csrf

        @include('mascotas.partials.form')

        <button class="btn btn-primary">Guardar</button>
        <a href="{{ route('mascotas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
