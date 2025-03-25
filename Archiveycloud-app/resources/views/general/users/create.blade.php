extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Crear nuevos Usuarios

                    @can('general.users.index')
                        <a href="{{ route('general.users.index') }}" class="btn btn-sm btn-outline-primary float-right" style="margin-left: 20px !important;">
                            Regresar
                        </a>
                    @endcan
                </div>

                <div class="card-body">
                    {{ Form::open(['route' => 'general.users.store', 'method' => 'POST', 'files' => true]) }}
                    @include('general.users.partials.forme')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection