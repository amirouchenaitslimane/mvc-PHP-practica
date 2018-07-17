<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 26/12/2017
 * Time: 17:16
 */

class Database extends \mysqli{

    /**
     *
     * @var type
     */
    private $host = 'localhost';

    /**
     *
     * @var type
     */
    private $dbuser = 'root';

    /**
     *
     * @var type
     */
    private $password = '';

    /**
     *
     * @var type
     */
    private $dbname = 'baloncesto';

    /**
     *
     * @var type
     */
    private static $instance;
    protected $conn = null;
    public function __construct() {
        parent::__construct($this->host, $this->dbuser, $this->password, $this->dbname);
        $this->conn = new \mysqli($this->host, $this->dbuser, $this->password, $this->dbname);
        if (mysqli_connect_error()) {
            exit('ERROR BASE DE DATOS (' . mysqli_connect_errno() . ')');
        }
    }
    public static function getInstance() {
        if (!self::$instance instanceof Database) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
}