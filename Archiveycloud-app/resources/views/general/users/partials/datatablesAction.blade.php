<div class="btn-group btn-group-sm">
<span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
  <a href="{{ route('general.users.show', $users->id) }}" class="btn btn-sm btn-secondary">
  <i class="fa fa-folder-open-o" aria-hidden="true"></i>  
  Ver</a>
  <a href="{{ route('general.users.edit', $users->id) }}" class="btn btn-sm btn-success">
  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>  
  Editar</a>
  {{ Form::open(['route'=>['general.users.destroy',$users->id], 'method' => ' DELETE'])}}
  <button class="btn btn-sm btn-danger">
  <i class="fa fa-trash-o" aria-hidden="true"></i>  
  Eliminar</button>
  {{ Form::close()}}

</div>