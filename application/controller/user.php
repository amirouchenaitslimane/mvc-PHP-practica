<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 31/12/2017
 * Time: 13:18
 */

class User extends Controller
{
function __construct()
{
    parent::__construct();

}

    public function index()
    {
        $view = $this->loadView();
        $view->render('user/index');

    }

    public function login()
    {

        if (isset($_POST['submit'])){

            $login = $_POST['login'];
            $password = $_POST['password'];
            $errorrs = array();
            $usuario= $this->loadModel('usuarios');
            if (empty($login) || empty($password)){
                $errorrs[]= 'login & password required';
            }
            if (!$usuario->isExist($login,$password))
            {
                $errorrs[] = 'access denied';
            }
            if (!empty($errorrs))
            {
                $view = $this->loadView();
                $view->render('user/index',array('errors'=>$errorrs));

            }else{
                $_SESSION['user'] = $login;
                $this->redirect('home/index');
            }
        }
    }

    public function logout()
    {
        $_SESSION = array();
        session_destroy();
        $this->redirect('user/index');
    }
}