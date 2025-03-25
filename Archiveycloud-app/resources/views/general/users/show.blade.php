@extends('layouts.app')

@section('content')
<div class="container">
    <div class = "row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Ver Usuarios
                    
                    @can('general.users.index')
                        <a href="{{ route('general.users.index') }}" class="btn btn-sm btn-outline-primary float-right" style="margin-left: 20px !important;">
                            Regresar
                        </a>
                    @endcan
                </div>

                <div class="card-body">
                	<p><strong>Nombre</Strong> {{ $user->name }}</p>
                    <p><strong>Correo Electronico</Strong> {{ $user->email }}</p>
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection