<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 31/12/2017
 * Time: 13:42
 */

class View
{
    protected $layout = 'layout';
    public $variable = array();


    /**
     * Initialize a new view context.
     */
    public function __construct($layout="default") {
        $this->layout = $layout;
    }


    /**
     * @return string
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * @param string $layout
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }
    /**
     * Template being rendered.
     */
    public function setdata($key,$value=null)
    {
        if (is_array($key)){
            $this->variable += $key;
        }else{
            $this->variable[$key] = $value;
        }

    }

    public function render($view,$data = array()) {
        extract($data);
        $view = APP.'view/'.$view.'.php';

        ob_start();
        require($view);
        $content = ob_get_clean();
        require APP.'view/layout/'.$this->layout.'.php';
    }

}