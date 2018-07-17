<?php
/**
 *function para depurar variables
 */
function debug($var)
{
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}
/**
 * mantener valores del los inputs
 * @param $value el valor del post
 * @return string si es !empty | vacio si es empty
 */
function is_set($value)
{
    return (isset($_POST[$value])) ? $_POST[$value] : "";
}

/**
 * mostrar el valor de campo (aqui se us solo para la opciones del formulario)
 * @param $value el key del post
 * @param $flag valor del resultado
 * @return string imprime selected en las opciones
 */
function get_selected($value,$flag){
    if (isset($_POST[$value]) && $_POST[$value]== $flag){
        return "selected='selected' ";
    }
}
/**
 * Función para limpiar las cadenas entrantes desde formularios
 * @param $var cadena
 * @return string cadena limpia
 */
function  clear_input($var){
    $txt = trim($var);
    $txt = htmlspecialchars($var);
    return $txt;
}