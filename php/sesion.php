<?php 
session_start();
class sesion
{
    function _construct()
    {
        session_start ();
    }
    public function set($valor, $valor2)
    {
        $_SESSION ['tx_username'] = $valor;
        $_SESSION ['tx_password'] = $valor2;
    }

    public function get($tx_username, $tx_password)
    {
        if (isset ($_SESSION ['tx_username'], $_SESSION ['tx_password']))
        {
            return $_SESSION ['tx_username'];
            return $_SESSION ['tx_password'];
        }

        else
        {
            return false;
        }
    }
    public function elimina_variable($tx_username, $tx_password)
    {
        unset ($_SESSION ['tx_username'] );
        unset ($_SESSION ['tx_password'] );
    }

    public function termina_sesion()
    {
        $_SESSION = array();
        session_destroy ();
    }
}
?>