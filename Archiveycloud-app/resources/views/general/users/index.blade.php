@extends('layouts.app')

@section('content')
<div class="container">
    <div class = "row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Registro Usuarios
                    
                    @can('general.users.create')
                        <a href="{{ route('general.users.create') }}" class="btn btn-sm btn-outline-primary float-right" style="margin-left: 20px !important;">
                            Agregar
                        </a>
                    @endcan
                </div>

                <div class="card-body">
                	<table id="tusers" class=" display compact table table-striped table-bordered dt-responsive nowrap">
                		<thead>
                			<tr>
                				<th>Id</th>
                				<th>Nombre</th>
                				<th>Correo</th>
                                <th width="80px">Acción</th>
                			</tr>
                		</thead>
                		<tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Acción</th> 
                            </tr>
                        </tfoot>
                	</table>
                   
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

    <script type="text/javascript">

        $(document).ready(function() {

           $('#tusers').DataTable({
            "serverSide": true,
            "ajax": "{{ route('general.users.index') }}",
            "columns": [
                {data: 'id'},
                {data: 'name'},
                {data: 'email'},
                {data: 'action',orderable: false, searchable: false},
            ],
            language: {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                    "copy": "Copiar",
                    "colvis": "Visibilidad"
                }
            }
            });

        });

    </script>
@endsection