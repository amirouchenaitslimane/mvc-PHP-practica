<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 31/12/2017
 * Time: 17:13
 */

class jugadore extends Model
{

    public function get_mejores($where, $number)
    {
        $sql = "SELECT * "
            . "FROM jugadores "
            . "WHERE {$where} > ? ";
        $query = $this->db->prepare($sql);
        $query->bind_param("i", $number);
        $query->execute();
        $result = $query->get_result();
        $players = array();
        while ($player = $result->fetch_object()) {
            $players[] = $player;
        }

        return $players;
    }

    public function get_position_assist()
    {
        $sql = "SELECT * "
            . "FROM jugadores "
            . "WHERE posicion ='base' "
            . "AND asistencias > 8";
        $query = $this->db->prepare($sql);
        $query->execute();
        $result = $query->get_result();
        $players = array();
        while ($player = $result->fetch_object()) {
            $players[] = $player;
        }

        return $players;
    }

    public function get_escol_puntos()
    {
        $sql = "SELECT * FROM "
            . "jugadores WHERE "
            . "(posicion = 'escolta' OR posicion = 'alero') "
            . "AND puntos > 15";
        $query = $this->db->prepare($sql);
        $query->execute();
        $result = $query->get_result();
        $players = array();
        while ($player = $result->fetch_object()) {
            $players[] = $player;
        }

        return $players;
    }

    public function get_pivots_rebotes()
    {
        $sql = "SELECT * "
            . "FROM jugadores "
            . "WHERE (posicion = 'ala pivot' "
            . "OR posicion = 'pivot') "
            . "AND rebotes > 7";
        $query = $this->db->prepare($sql);
        $query->execute();
        $result = $query->get_result();
        $players = array();
        while ($player = $result->fetch_object()) {
            $players[] = $player;
        }

        return $players;
    }

    public function getAll()
    {
        $sql = "SELECT id,nombre,posicion FROM jugadores ORDER BY posicion ASC";
        $query = $this->db->prepare($sql);
        $query->execute();
        $result = $query->get_result();
        $players = array();
        while ($player = $result->fetch_object()) {
            $players[] = $player;
        }
        return $players;
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM "
            . "jugadores "
            . "WHERE id = ?";
        $query = $this->db->prepare($sql);
        $query->bind_param("i", $id);

        $query->execute();

        $result = $query->get_result();

        return $result->fetch_object();

    }

    public function update($id, $nombre, $position, $partido, $puntos, $rebotes, $asistencias)
    {
        $stmt = $this->db->prepare("UPDATE jugadores SET nombre =?,posicion=?,partidos=?,puntos=?,rebotes=?,asistencias = ? WHERE id =?");
        $stmt->bind_param("ssisssi", $nombre, $position, $partido, $puntos, $rebotes, $asistencias, $id);
        $stmt->execute();
        $stmt->close();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM jugadores WHERE id= ?";
        $query = $this->db->prepare($sql);
        $query->bind_param('i', $id);
        $query->execute();

    }

    public function getListDesc(array $params, $order)
    {
        $s = implode(', ', $params);
        $sql = "SELECT $s FROM jugadores ORDER BY $order DESC";
        $query = $this->db->prepare($sql);
        $query->execute();
        $result = $query->get_result();
        $players = array();
        while ($player = $result->fetch_object()) {
            $players[] = $player;
        }

        return $players;
    }

    function isExiste($nombre)
    {
        $sql = "SELECT nombre FROM jugadores WHERE nombre = ?";
        $query = $this->db->prepare($sql);
        $query->bind_param("s", $nombre);
        $query->execute();
        $result = $query->get_result();
        if ($result->num_rows === 1) {
            return TRUE;
        } else {
            return FALSE;
        }

    }

    function insert($nombre,$position,$partido,$puntos,$rebotes,$asistencias){
        $sql = "INSERT INTO jugadores VALUES (null,?,?,?,?,?,?)";
        $query = $this->db->prepare($sql);
        $query->bind_param("ssisss",$nombre,$position,$partido,$puntos,$rebotes,$asistencias);
        $query->execute();
    }


}