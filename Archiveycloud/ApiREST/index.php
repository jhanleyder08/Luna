<?php
    /**
     * Cargamos todos los controladores...
     */
    require_once 'Controladores/UsuariosCtrl.php';
    require_once 'Controladores/BarriosCtrl.php';
    require_once 'Controladores/CiudadesCtrl.php';
    require_once 'Controladores/MedicamentosCtrl.php';
    require_once 'Controladores/PacientesCtrl.php';
    require_once 'Controladores/Cum_ProgramasCtrl.php';
    

	/*
	* Definimos que sera una aplicación de tipo JSON
	* Permitimos el acceso a todos los clientes
	* Permitimos que los clientes usen POTS
	*/
	header ( 'content-type: application/json; charset=utf-8' );
	header ( 'Access-Control-Allow-Origin: *' );
	header ( 'Access-Control-Allow-Methods: POST' );

    $respuesta;
    $instancia;

    if (isset($_GET['PATH_INFO'])){
        $peticion = explode('/', $_GET['PATH_INFO']);
        $recurso  = array_shift($peticion);                 // Obtenemos el recurso a solicitar

        $recursos_existentes = array(                       // Definimos los recursos existentes y validamos que la solicitud exista
            'UsuariosCtrl',
            'BarriosCtrl',
            'CiudadesCtrl',
            'MedicamentosCtrl',
            'PacientesCtrl',
            'Cum_ProgramasCtrl'
            
        );

        if (in_array( $recurso, $recursos_existentes)){
            // Por seguridad validamos el método para que sea post
            $metodo = strtolower( $_SERVER['REQUEST_METHOD']);
            if($metodo === 'post'){
                // Enrutamos a la petición que deseamos
                switch($recurso){
                    case 'UsuariosCtrl':
                        $instancia = new UsuariosCtrl($peticion);
                        break;
                    case 'BarriosCtrl':
                        $instancia = new BarriosCtrl($peticion);
                        break;
                    case 'CiudadesCtrl':
                        $instancia = new CiudadesCtrl($peticion);
                        break;
                    case 'MedicamentosCtrl':
                        $instancia = new MedicamentosCtrl($peticion);
                        break;
                    case 'PacientesCtrl':
                        $instancia = new PacientesCtrl($peticion);
                        break;
                    case 'Cum_ProgramasCtrl':
                        $instancia = new Cum_ProgramasCtrl($peticion);
                        break;
                       
                }

                $respuesta = $instancia->respuesta;
            } else {
                $respuesta = array(
                    'estado' => 2,
                    'mensaje'=>'No se reconoce el metodo'
                );
            } 
        } else {
            $respuesta = array(
                'estado' => 2,
                'mensaje'=>'No se reconoce el recurso'
            );
        }

    }  else {
        $respuesta = array(
            'estado' => 2,
            'mensaje'=>'No se reconoce el petición'
        );
    }

    echo json_encode($respuesta);
?>