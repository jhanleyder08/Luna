<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::label('name', 'Usuario') }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('email', 'Correo') }}
            {{ Form::text('email', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Contraseña') }}
            {{ Form::password('password', ['class' => 'form-control']) }}
        </div>
    </div>
</div>

<div class="row" style="margin-top: 20px;">
    <div class="col-md-12">
        <h3>Listado de Roles</h3>
        <div class="form-group">
            <ul class="list-unstyled">
                @foreach($roles as $role)
                <li>
                    <label>
                        {{ Form::checkbox('roles[]', $role->id, null) }}
                        {{ $role->name }}
                        <em>({{ $role->description ?: 'sin descripción' }})</em>
                    </label>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>    

<div class="form-group" style="margin-top: 20px;">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>