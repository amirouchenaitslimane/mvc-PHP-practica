<?php

class Controller
{
    /**
     * @var null Database Connection
     */
    public $db = null;

    /**
     * @var null Model
     */
    public $model = null;
    protected $view;
    /**
     * Whenever controller is created, open a database connection too and load "the model".
     */
    function __construct()
    {

        $this->view = $this->loadView();
    }

    /**
     * Open the database connection with the credentials from application/config/config.php
     */

    public function loadModel($model)
    {
        require_once APP . 'model/'.$model.'_model.php';
        return new $model;
    }

    public function redirect($page){
        header('location: ' . URL . $page);
    }

    public function loadView()
    {
        require_once APP . 'core/View.php';
        return new View();
    }
    public function loadHelper($helper_name){
        require_once APP . 'libs/helper/'.$helper_name.'.php';
        return new $helper_name;
    }
}
