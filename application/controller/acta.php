<?php
/**
 * Created by PhpStorm.
 * User: Jorge Costa Macia
 * Date: 12/01/2018
 * Time: 11:00
 */

class acta extends Controller
{



    public function index()
    {

        $errors = array();

        if (isset($_POST['submit'])){

            if($_FILES['file']['type'] != 'text/plain'){
                $errors[] = 'se aceptan solo los ficheros de texto con extensión (.txt)';
            }
            if($_FILES['file']['size'] > 50000){
                $errors[] = 'el fichero demasiado grande';
            }
            if(file_exists(APP.'actas/' . $_FILES['file']['name'])){
                $errors[] = 'el fichero ya existe en la base de datos';
            }
            if (empty($errors)){
                move_uploaded_file($_FILES['file']['tmp_name'], APP.'actas/' . $_FILES['file']['name']);


             $this->redirect('acta/recoger');
            }


        }
        $this->view->render('acta/index',array('errors'=>$errors));
    }

    public function recoger()
    {
        $coger_acta = $this->loadHelper('subir_acta');

        $file_moved = "El fichero ha subido con existo !";
        $path = APP.'actas/acta.txt';
        if (file_exists($path)) {
            $acta = $coger_acta->leerActa($path);
            $puntos_por_partido_ahora = array();
            $puntos_antes = array();
            $partidos_ahora = array();
            $puntos_ahora = array();
          $jugadores_db = $coger_acta->jugadoresDbFile($acta);
            foreach ($jugadores_db as $key => $value) {
                foreach ($value as $k) {
                    if ($value['nombre'] == (trim($coger_acta->getByName($path, $value['nombre'])[0]))) {
                        $partidos_ahora[$value['nombre']] = $value['partidos'] + 1;
                        $puntos_antes[$value['nombre']] = $value['partidos'] * $value['puntos'] + $coger_acta->getByName($path, $value['nombre'])[1];
                        foreach ($puntos_antes as $pa) {
                            $puntos_ahora[$value['nombre']] = $pa / $coger_acta->getByName($path, $value['nombre'])[1];
                        }
                        foreach ($partidos_ahora as $p) {
                            $puntos_por_partido_ahora[$value['nombre']] = $p / $coger_acta->getByName($path, $value['nombre'])[1];
                        }
                    }
                }
            }

            $message = "";
           if ($coger_acta->actualizar_acta($partidos_ahora,$puntos_ahora)){
               $message .= "Base de datos actualizada";
           }else{
               $message .= 'La base de datos no esta actualizada';
           }
        }else{
            echo 'no existe';
        }
        $this->view->render('acta/recoger',array('file_moved'=>$file_moved,'message'=>$message));
    }
}