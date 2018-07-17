<?php
class subir_acta
{
    protected $db;
    public function __construct()
    {
        $this->db = Database::getInstance();
    }
    function getByName($path, $nombre) {
        $jugador = array();
        $jugadores = $this->leerActa($path);

        foreach ($jugadores as $value) {
            if(trim($value[0]) ===$nombre ){
                $jugador = $value;
            }
        }
        return $jugador;
    }

    function leerActa($path){
        if (file_exists($path)) {
            $file = file_get_contents($path);
            $jugadores = array();

            $jug = explode(';', $file);
            foreach ($jug as $key=>  $value) {
                $k = explode(', ', $value);
                $jugadores[$k[0]] = $k;
            }
            return $jugadores;

        }
    }
    public function getJugadorByName($nombre){
        $sql = "SELECT * FROM "
            . "jugadores "
            . "WHERE nombre = ?";
        $query = $this->db->prepare($sql);
        $query->bind_param("s",$nombre);

        $query->execute();

        $result = $query->get_result();

        return $result->fetch_assoc();
    }


    function jugadoresDbFile($array_file) {
        $jugadores_file = array_keys($array_file); //array file es multidemenciones ej:$array_file= array('nombre_jugador'=>array(sus datos));

        $jugadores = array();

        //recorrer los indices que son nombres de jugadores
        foreach ($jugadores_file as $value) {
            $jugadores[] = $this->getJugadorByName(trim($value));
        }
        $jugadores = array_filter($jugadores);
        return $jugadores;
    }

    public function actualizar_acta(array $partidos_ahora,array $puntos_ahora)
    {
        $this->db->autocommit(false);
        foreach ($partidos_ahora as $key => $value) {
            $sql1 = $this->db->query("UPDATE jugadores SET partidos ='" . trim($value) . "' WHERE nombre='" . trim($key) . "'");
        }
        foreach ($puntos_ahora as $nombre => $punto) {
            $punto = number_format(trim($value), 2);
            $sql2 = $this->db->query("UPDATE jugadores SET puntos ='" . trim($punto) . "' WHERE nombre='" . trim($nombre) . "'");

        }
        $updated = false;
        if ($sql1 == $sql2){
            $updated = true;
            $this->db->autocommit(true);
        }else{
            $this->db->rollback();
            $updated = false;
        }
        return $updated;
    }
}
