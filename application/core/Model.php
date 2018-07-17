<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 31/12/2017
 * Time: 14:56
 */

class Model
{
    protected $db;
public function __construct()
{
    $this->db = Database::getInstance();
}

}