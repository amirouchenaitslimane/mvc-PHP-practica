<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 31/12/2017
 * Time: 14:54
 */

class usuarios extends  Model
{
public function __construct()
{
parent::__construct();
}

    public function isExist($login_user,$password_user)
    {
        $sql = "SELECT id,login,password "
            . "FROM usuarios  "
            . "WHERE login = ? "
            . "AND password = ?";

        $query = $this->db->prepare($sql);
        $query->bind_param("ss",$login_user,$password_user);
        $query->execute();

        $result = $query->get_result();

        if ($result->num_rows === 1) {
            return true;
        }
        return false;
    }

    public function get()
    {
        echo 'usrt ';
    }
}