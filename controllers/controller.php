<?php

class MvcController {

  // LLAMAR A LA PLANTILLA
  #---------------------------------------
  public function plantilla(){

    include 'views/template.php';
  }

  // INTERACCION DEL USUARIO
  #---------------------------------------

  public function enlacesPaginasController(){


    if (isset($_GET['action'])) {
      $enlacesController = $_GET['action'];
    }
    else{

      $enlacesController = "inicio";
    }

    $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);

    include  $respuesta;
  }


}


 ?>
