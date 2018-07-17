<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 31/12/2017
 * Time: 17:12
 */

class Jugadores extends Controller
{
    protected $jugador;
    function __construct()
    {
        parent::__construct();
        $this->jugador = $this->loadModel('jugadore');
        if (!isset($_SESSION['user'])){
            $this->redirect('user/index');
        }
    }
    public function update($id="")
    {
        $jugador = $this->jugador->getById($id);
        $jug = $this->jugador->getById($id);

        if (isset($_POST['update'])){
            $nombre = $_POST['nombre'];
            $posicion = $_POST['posicion'];
            $partidos = $_POST['partidos'];
            $puntos = $_POST['puntos'];
            $rebotes = $_POST['rebotes'];
            $asistencias = $_POST['asistencias'];
            $errors = array();
            if (empty($nombre)) {
                $errors[] = "Nombre es obligatorio no se deja vacio";

            }
            if (empty($posicion)) {
                $errors[] = "posicion es obligatoria no se deja vacio";

            }

            if (!empty($errors)){
                $this->view->render('jugadores/update',array('jugador' => $jug,'errors'=>$errors));
            }else{

                $this->jugador->update($id,$nombre,$posicion,$partidos,$puntos,$rebotes,$asistencias);
            }

            $this->view->render('jugadores/ficha', array('jugador' => $jugador));
        }
        $this->view->render('jugadores/update',array('jugador' => $jugador));




    }
    public function mejores()
    {
       $this->view->render('jugadores/mejores',
           array(
           'puntos'=>$this->jugador->get_mejores('puntos',12),
           'rebotes'=>$this->jugador->get_mejores('rebotes',6),
           'asistencias'=>$this->jugador->get_mejores('asistencias',5)
       )
       );
    }

    public function posicion()
    {
        $this->view->render('jugadores/posicion',
            array(
            'base_assist' => $this->jugador->get_position_assist(),
            'escol_puntos' => $this->jugador->get_escol_puntos(),
            'pivots_rebotes' => $this->jugador->get_pivots_rebotes()
            )
        );
    }
    public function ver_jugadores()
    {
        $jugadores = $this->jugador->getAll();
        $this->view->render('jugadores/ver_jugadores',array('jugadores'=>$jugadores));
    }

    public function ficha($id=""){
        if (isset($id) and $id != "" ) {
            $jugador = $this->jugador->getById($id);
            $this->view->render('jugadores/ficha', array('jugador' => $jugador));
        }else{
            $this->redirect('jugadores/ver_jugadores');
        }
    }

    public function delete($id="")
    {
       $this->jugador->delete($id);
       $this->redirect('jugadores/ver_jugadores');
    }
public function ver_estadisticas(){
    $statistics = array();
    if (isset($_POST['submit'])){
       $statistics = $this->jugador->getListDesc(array('nombre','posicion',$_POST['criterio']),$_POST['criterio']);

    }
    $this->view->render('jugadores/ver_estadisticas',array('statistics'=>$statistics));
}

    public function add_jugador()
    {
        $errors = array();
        $message="";
        if (isset($_POST['submit'])){
            $nombre = clear_input($_POST['nombre']);
            $posicion = clear_input($_POST['posicion']);
            $partidos = clear_input($_POST['partidos']);
            $puntos = clear_input($_POST['puntos']);
            $rebotes = clear_input($_POST['rebotes']);
            $asistencias = clear_input($_POST['asistencias']);
            $inserted = false;


            if (empty($nombre)) {
                $errors[] ='Nombre jugador requirido';

            }
            if ($this->jugador->isExiste($nombre)) {
                $errors[] = 'Jugador '.$nombre.'  existe en la base de datos';
            }
            if ($partidos == "") {
                $errors[] ='Introduce numero de partidos';
            }
            if ($puntos =="") {
                $errors[] ='Introduce puntos del jugador';
            }
            if ($rebotes == "") {
                $errors[] ='Introduce numero rebotes del jugador';
            }
            if ($asistencias == "") {
                $errors[] ='Introduce numero de asistencias del jugador';
            }
            if (empty($errors)){
                $this->jugador->insert($nombre,$posicion,$partidos,$puntos,$rebotes,$asistencias);
                $message .="insertado ";

            }

        }
        $this->view->render('jugadores/add',array('errors'=>$errors,'message'=>$message));
    }
}